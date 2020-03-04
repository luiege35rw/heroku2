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
        
        // $like = $likemodel->where('user_id', Auth::id())->first();
        $like = \DB::table('likes')->where('user_id', Auth::id())->get();
        $likes = [];
        foreach ($like as $value) {
            $news_id = $value->news_id;
           
            $like[$news_id] = true;
            // json_decode(json_encode($value), true);
        }
        
        if (!isset($like[$headline->id])) {
            $like[ $headline->id ] = false;
        }
        foreach ($news as $value) {
	        if (!isset($like[$value->id])) {
	            $like[$value->id] = false;
	        }
        }
        
        // \Log::debug(__LINE__.' '.__FILE__.' [like] '.print_r($like,true));
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
