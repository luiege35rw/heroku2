<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
use Auth;
use App\News;

class LikesController extends Controller
{
    public function newsStore(Request $request)
    {
        // dd($request->newsId);
        $newsId = $request->newsId;
        // \Log::debug(__LINE__.' '.__FILE__.' newsId '.$newsId);
        
          Like::create(
          array(
            'user_id' => Auth::user()->id,
            'news_id' => $newsId
          )
        );
        

        $news = News::findOrFail($newsId);

        return redirect()
             ->action('NewsController@index', $news->id);
    }

    public function newsDestroy(Request $request) {
        $newsId = $request->newsId;
        \DB::table('likes')
          ->where('user_id', Auth::user()->id)
          ->where('news_id', $newsId)->delete();
    
  \Log::debug(__LINE__.' '.__FILE__.'====================');
  
      return redirect()
             ->action('NewsController@index');
    }
}
