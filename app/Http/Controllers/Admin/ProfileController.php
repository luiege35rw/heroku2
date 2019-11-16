<?php

namespace App\Http\Controllers\Admin;
use App\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
     public function add()
    {
        return view('admin.profile.create');
    }
 public function create(Request $request)
  {
      $this->validate($request, Profile::$rules);

      $profile = new  Profile;
      $form = $request->all();

      // フォームから画像が送信されてきたら、保存して、$profile->image_path に画像のパスを保存する
      if (isset($form['image'])) {
      $path = $request->file('image')->store('public/image');
      $profile->image_path = basename($path);
      } else {
          $profile->image_path = null;
      }
      if (isset($form['image'])) {
          $path = $request->file('image')->store('public/image');
          $profile->image_path = basename($path);
      } else {
          $profile->image_path = null;
      }
      if (isset($form['image1'])) {
          $path = $request->file('image1')->store('public/image');
          $profile->image_path1 =stdClass;
          $profile->image_path1 = basename($path);
      } else {
          $profile->image_path1 = null;
      }
      if (isset($form['image2'])) {
          $path = $request->file('image2')->store('public/image');
          $profile->image_path2 = basename($path);
      } else {
          $profile->image_path2 = null;
      }
      if (isset($form['image3'])) {
          $path = $request->file('image3')->store('public/image');
          $profile->image_path3 = basename($path);
      } else {
          $profile->image_path3 = null;
      }
      if (isset($form['image4'])) {
          $path = $request->file('image4')->store('public/image');
          $profile->image_path4 = basename($path);
      } else {
          $profile->image_path4 = null;
      }
      
      if (isset($form['image5'])) {
        $path = $request->file('image5')->store('public/image');
        $profile->image_path5 = basename($path);
      } else {
          $profile->image_path5 = null;
      }

            // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);
      unset($form['image1']);
      unset($form['image2']);
      unset($form['image3']);
      unset($form['image4']);
      unset($form['image5']);
      // データベースに保存する
      //$profile->title = null;
      $profile->fill($form);
      $profile->save();

      return redirect('admin/profile/create');
  }
public function index(Request $request)
{
  $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Profile::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Profile::all();
      }
      return view('admin.profile.index', ['posts' => $posts, 'cond_title' => $cond_title]);
      }
 public function edit(Request $request)
  {
      // News Modelからデータを取得する
      $profile = Profile::find($request->id);
      if (empty($profile)) {
        abort(404);    
      }
      return view('admin.profile.edit', ['profile_form' => $profile]);
  }
 public function update(Request $request)
  {
      // Validationをかける
      $this->validate($request, Profile::$rules);
      // News Modelからデータを取得する
      $profile = Profile::find($request->id);
      // 送信されてきたフォームデータを格納する
      $profile_form = $request->all();
      if (isset($profile_form['image'])) {
        $path = $request->file('image')->store('public/image');
        $profile->image_path = basename($path);
    
        unset($profile_form['image']);
      } elseif (isset($request->remove)) {
        $profile->image_path = null;
        unset($profile_form['remove']);
      }
      unset($profile_form['_token']);
      // 該当するデータを上書きして保存する
      $profile->fill($profile_form)->save();

      return redirect('admin/profile');
  }
}

