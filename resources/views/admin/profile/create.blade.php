@extends('layouts.admin')
@section('title', '愛車自慢プロフィールの新規作成')

@section('content')
    <div class="container">
        <div class="row">
          <div class="form-group">
            
   <p>アバター画像変更</p>
        <input type="file" name="image" id="user_avatar">
      </div>
            <div class="col-md-8 mx-auto">
                <h2>愛車自慢プロフィール新規作成</h2>
                <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

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
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    
                     <div class="form-group row">
                        <label class="col-md-2">愛車遍歴</label>
                    <div class="col-md-10">
                            <input type="text" class="form-control" name="modelhistory" value="{{ old('modelhistory') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">好きなドライブスポット</label>
                    <div class="col-md-10">
                            <input type="text" class="form-control" name="spot" value="{{ old('spot') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                       <label class="col-md-2">自己紹介</label>
                    <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="20">{{ old('introduction') }}</textarea>
                    </div>
                    <div class="form-group row">
            　           <label class="col-md-2">画像1</label>
                    <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image1">
                    </div>
                    </div>
                    <div class="form-group row">      
                        <label class="col-md-2">画像2</label>
                    <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image2">
                    </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像3</label>
                    <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image3">
                    </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像4</label>
                    <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image4">
                    </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像5</label>
                    <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image5">
                    </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像6</label>
                    <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image6">
                    </div>
                    </div>
        {{ csrf_field() }}
        　　　　　　　　　　　　　　<div class="form-group row">
                            <input type="submit" class="btn btn-primary" value="更新">
                    　　
                </form>
            </div>
        </div>
    </div>
@endsection