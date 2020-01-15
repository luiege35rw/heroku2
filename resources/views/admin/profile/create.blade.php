@extends('layouts.admin')
@section('title', '愛車自慢プロフィールの新規作成')

@section('content')
<form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
          <div class="form-group">
            
   <p>アバター画像</p>
        <input type="file" name="image" id="user_avatar">
        　   <div class="form-text text-info">
        　    </div>
        　
            <div class="col-md-8 mx-auto">
                <h2>愛車自慢プロフィール新規作成</h2>
                

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
                    　　      @for ($i = 1;$i <= 6; $i ++)
                            <div class="form-group row">
                                <label class="col-md-2">画像{{$i}}</label>
                            <div class="col-md-10">
                                <input type="file" class="form-control-file" name="image{{$i}}">
                            </div>
                            </div>
                           @endfor
                    
        {{ csrf_field() }}
        　　　　　　　　　　　　　　<div class="form-group row">
                            <input type="submit" class="btn btn-primary" value="更新">
            </div>
        </div>
    </div>
    </form>
@endsection