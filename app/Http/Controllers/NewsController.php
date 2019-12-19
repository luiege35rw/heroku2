<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

// 追記
use App\News;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $posts = News::all()->sortByDesc('updated_at');

        if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }

        // news/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、という変数を渡している
        return view('news.index', ['headline' => $headline, 'posts' => $posts]);
    }
    // ハイライト検索
    
   public function sublinhamos($text, $words) {
    $wordsArray = array();
    $markedWords = array();
    // explode the phrase in words
    $wordsArray = explode(' ', $words); 

    foreach ($wordsArray as $k => $word) {
      $markedWords[$post]='<mark>'.$word.'</mark>';
    }

    $text = str_ireplace($wordsArray, $markedWords, $text);

    //right trows results
    return $text;
}
}
