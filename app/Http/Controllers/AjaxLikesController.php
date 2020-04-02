<?php
// //共通変数・関数ファイルを読込み
// require('Like.php');

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
use Auth;

class AjaxLikesController extends Controller
{
    public function newsStore(Request $request)
    {
        $user_id = Auth::user()->id;
        
        $news_id = $request->newsId;
        
        $arr = ['user_id' => $user_id,'news_id' => $news_id];
        
        $count = Like::where($arr)->count();
        
        // ユーザーID以外のいいねの件数を取得
        $count_other = Like::where('news_id', '=', $news_id)->where('user_id', '<>', $user_id)->count();
        
        \Log::debug(__LINE__.' '.__FILE__.' news_Id '.$news_id.' user_id '.$user_id);
        $response = ['count' => $count, 'count_other' => $count_other];

        if ($count > 0) {
            return response()->json($response);
        } else {
            
            $like = new Like;
            $like->fill($arr);
            $like->save();
        \Log::debug(__LINE__.' '.__FILE__. ' ================== ');
            return response()->json($response);
        }
    }
}