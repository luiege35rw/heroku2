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
         
        // $like = $headline->likes->where('user_id', Auth::id());
        $likemodel = new Like;
        $like = $likemodel->where('user_id', Auth::id())->first();
        // \Log::debug(__LINE__.' '.__FILE__.' [like] '.count($like));
        // news/index.blade.php ファイルを渡している　
        //また View テンプレートに headline、 posts、という変数を渡している
        
        return view('news.index', [
            'headline' => $headline,
            'news' => $news,
            'pagename' => 'news',
            'like' => $like
        ]);
    }
 
}
