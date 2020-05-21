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
        $newsId = (Integer)$request->newsId;
        
        \Log::info(__METHOD__.' [start][newsId: '.$newsId.'] [user_id: '.Auth::user()->id);
        
        // \Log::debug(__LINE__.' '.__FILE__.' newsId '.$newsId);
        
        $arr = ['user_id' => Auth::user()->id,'news_id' => $newsId];
        
        $count = Like::where($arr)->count();
        
        \Log::info('count =' .$count);
        
        if ($count > 0) {
           return redirect()->action('NewsController@index', $newsId);
        }
        
        Like::updateOrCreate(
            array(
                'user_id' => Auth::user()->id,
                'news_id' => $newsId->withDefault()
            )
        );
        
            return redirect()->action('NewsController@index');
    }

    public function newsDestroy(Request $request) 
    {
        $newsId = $request->newsId;
        
        \Log::info(__METHOD__.' [start][newsId: '.$newsId.'] [user_id: '.Auth::user()->id);
        
        \DB::table('likes')
          ->where('user_id', Auth::user()->id)
          ->where('news_id', $newsId)->delete();
    
  \Log::debug(__LINE__.' '.__FILE__.'====================');
  
      return redirect()
             ->action('NewsController@index');
    }
}
