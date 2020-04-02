<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use Illuminate\Support\Facades\Auth;

// 追記
use App\News;
use App\Profile;
use Storage;
use App\Like;


class NewsController extends Controller
{
    public function index(Request $request)
    {
        $news = News::all()->sortByDesc('updated_at');

        if (count($news) > 0) {
            $headline = $news->shift();
        } else {
            $headline = null;
        }
        
        
         // いいね機能のための追加
        
        $like_counts = \DB::table('likes')
            ->select(\DB::raw('count(*) as like_count, news_id'))
            ->where('user_id', Auth::id())    
            ->groupBy('news_id')
            ->get();
           
        $like_count_arr = [];
        foreach ($like_counts as $like_count) {
            $like_count_arr[$like_count->news_id] = $like_count->like_count;
        }
        
       
        // \Log::debug(__LINE__.' '.__FILE__.' [like] '.print_r($like,true));
        // news/index.blade.php ファイルを渡している　
        //また View テンプレートに headline、 posts、という変数を渡している
        
        return view('news.index', [
            'headline' => $headline,
            'news' => $news,
            'pagename' => 'news',
            'like' => $like_count_arr,
        ]);
    }
 
}
