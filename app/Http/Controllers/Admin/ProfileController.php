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
    // dd($request);
      $this->validate($request, Profile::$rules);

      $profile = new  Profile;
      $form = $request->all();

      // フォームから画像が送信されてきたら、保存して、$profile->image_path に画像のパスを保存する
      
      if (isset($form['image'])) {
         $path = Storage::disk('s3')->putFile('/',$form['image'],'public');
         $profile->image_path = Storage::disk('s3')->url($path);
      } else {
          $profile->image_path = null;
      }
      
      //写真添付画面ループ処理
     
      for ($i = 1;$i <= 6; $i ++) {
          if (isset($form['image' . $i])) {
              $path = Storage::disk('s3')->putFile('/',$request->file('image' . $i),'public');
              $profile->{'image_path' . $i} = Storage::disk('s3')->url($path);
          } else {
              $profile->{'image_path' . $i} = null;
          }
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
      unset($form['image6']);
      // データベースに保存する
      
      
      // $profile->title = null;
      $profile->fill($form);
      $profile->save();
   
      return redirect('admin/profile/create');
  }
public function index(Request $request)
{
  $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Profile::where('name',$cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Profile::all();
      }
      return view('admin.profile.index', ['posts' => $posts, 'cond_title' => $cond_title]);
      }
 public function edit(Request $request)
  {
      // Profile Modelからデータを取得する
     //dd($request->id);
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
      // Profile Modelからデータを取得する
      // ここでnullになってる。
       
      $profile = Profile::find($request->id);
      // 送信されてきたフォームデータを格納する
      $profile_form = $request->all();
      
   if (isset($profile_form['image'])) {
        $path = Storage::disk('s3')->putFile('/',$form['image'],'public');
        $profile->image_path = Storage::disk('s3')->url($path);
    
        unset($profile_form['image']);
      } elseif (isset($request->remove)) {
        $profile->image_path = null;
        unset($profile_form['remove']);
      }
      // ループ処理
      for ($i = 1;$i <= 6; $i++) {
          if (isset($profile_form['image' . $i])) {
              $path = $request->file('image' . $i)->store('public/image');
              $profile->{'image_path' . $i} = basename($path);
              unset($profile_form['image' . $i]);
          } elseif (isset($request->{'remove' . $i})) {
              $profile->{'image_path' . $i} = null;
              unset($profile_form['remove' . $i]);
          }
      }
        
      unset($profile_form['_token']);
      // 該当するデータを上書きして保存する
      $profile->fill($profile_form)->save();

      return redirect('admin/profile');
  }
     public function delete(Request $request)
  {
      // 該当するProfile Modelを取得
 $profile = Profile::find($request->id);
      // 削除する
      $profile->delete();
      return redirect('admin/profile/');
  }  

}

