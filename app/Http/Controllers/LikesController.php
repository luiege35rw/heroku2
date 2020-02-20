<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
use Auth;
use App\News;

class LikesController extends Controller
{
    public function store(Request $request, $newsId)
    {
        Like::create(
          array(
            'user_id' => Auth::user()->id,
            'news_id' => $newsId
          )
        );

        $news = News::findOrFail($newsId);

        return redirect()
             ->action('NewsController', $news->id);
    }

    public function destroy($newsId, $likeId) {
      $news = News::findOrFail($newsId);
      $news->like_by()->findOrFail($likeId)->delete();

      return redirect()
             ->action('NewsController', $news->id);
    }
}
