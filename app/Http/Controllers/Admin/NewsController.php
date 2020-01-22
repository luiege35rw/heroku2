<?php

namespace App\Http\Controllers\Admin;
use App\News;
use App\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
class NewsController extends Controller
{
    
  public function add()
  {
     $profile = Profile::select('id','name')->get();
      $profile_list = $profile->pluck('name','id');
      return view('admin.news.create', ['profiles' => $profile_list]);
  }
  
   public function create(Request $request)
  {
     \Debugbar::info($request);
      $this->validate($request, News::$rules);

      $news = new News;
      $form = $request->all();

      // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
      if (isset($form['image'])) {
          $path = Storage::disk('s3')->putFile('/',$form['image'],'public');
          $news->image_path = Storage::disk('s3')->url($path);
      } else {
          $news->image_path = null;
      }

            // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);
      // データベースに保存する
      $news->title = null;
      $news->fill($form);
      $news->save();

      return redirect('admin/news/create');
  }  
  public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = News::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = News::all();
      }
      return view('admin.news.index', ['posts' => $posts, 'cond_title' => $cond_title]);
     
  }
  public function edit(Request $request)
  {
      // News Modelからデータを取得する
      $news = News::find($request->id);
      if (empty($news)) {
        abort(404);    
      }
      // プロフィールのデータをNEWSの編集ページ内に渡す
        $profile = Profile::select('id','name')->get();
        $profile_list = $profile->pluck('name','id');
      return view('admin.news.edit', ['news_form' => $news,'profiles' => $profile_list]);
  }
  



  public function update(Request $request)
  {
      // Validationをかける
      $this->validate($request, News::$rules);
      // News Modelからデータを取得する
      $news = News::find($request->id);
      // 送信されてきたフォームデータを格納する
      $news_form = $request->all();
      
      if (isset($news_form['image'])) {
        $path = Storage::disk('s3')->putFile('/',$news_form['image'],'public');
        $news->image_path = Storage::disk('s3')->url($path);
        unset($news_form['image']);
      } elseif (isset($request->remove)) {
        $news->image_path = null;
        unset($news_form['remove']);
        
         // プロフィールのデータをNEWSの新規ページ内に渡す
        $profile = Profile::select('id','name')->get();
        $profile_list = $profile->pluck('name','id');
      return view('admin.news.create', ['news_form' => $news,'profiles' => $profile_list]);
      }
      unset($news_form['_token']);
      // 該当するデータを上書きして保存する
      $news->fill($news_form)->save();

      return redirect('admin/news');
  }
       public function delete(Request $request)
  {
      // 該当するNews Modelを取得
 $news = News::find($request->id);
      // 削除する
      $news->delete();
      return redirect('admin/news/');
  }  

}


