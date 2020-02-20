<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

// 追記
use App\News;
use App\Profile;
use Storage;


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
        $like = $news->likes()->where('user_id', Auth::user()->id)->first();
        dd($like);
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
