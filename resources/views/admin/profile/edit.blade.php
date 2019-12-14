@extends('layouts.admin')
@section('title', '愛車自慢プロフィールの編集')

@section('content')
<form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">  
    <div class="container">
        <div class="row">
          <div class="form-group">
           
   <p>アバター画像</p>
        <input type="file" name="image" id="user_avatar">
        　　　　<div class="form-text text-info">
  　　　　設定中: {{ $profile_form->image_path }}
              </div>
              <div class="form-check">
                    <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                    </label>
              </div>
              </div>
            <div class="col-md-8 mx-auto">
                <h2>愛車自慢プロフィール編集</h2>
               

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">ニックネーム</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}">
                        </div>
                    </div>
                    
                     <div class="form-group row">
                        <label class="col-md-2">愛車遍歴</label>
                    <div class="col-md-10">
                            <input type="text" class="form-control" name="modelhistory" value="{{ $profile_form->modelhistory }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">好きなドライブスポット</label>
                    <div class="col-md-10">
                            <input type="text" class="form-control" name="spot" value="{{ $profile_form->spot }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                       <label class="col-md-2">自己紹介</label>
                    <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="20">{{ $profile_form->introduction }}</textarea>
                            @for ($i = 1;$i <= 6; $i ++)
                            <div class="form-group row">
                                <label class="col-md-2">画像{{$i}}</label>
                            <div class="col-md-10">
                                <input type="file" class="form-control-file" name="image{{$i}}">
                            </div>
                            </div>
                            <div class="form-text text-info">
                                設定中: {{ $profile_form->{'image_path' . $i} }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="remove{{$i}}" value="true">画像を削除
                            </div>
                            @endfor
                            
        {{ csrf_field() }}
        　 　                     <input type="hidden" name="id" value="{{ $profile_form->id }}">
                                <input type="submit" class="btn btn-primary" value="更新">
                
            </div>
        </div>
    </div>
    </form>
@endsection