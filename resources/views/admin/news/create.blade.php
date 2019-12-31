@extends('layouts.admin')
@section('title', '愛車自慢ニュース新規作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>愛車自慢ニュース新規作成</h2>
                <form action="{{ action('Admin\NewsController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                       <!--プロフィールのデータをプルダウンメニューに所得-->
                      <div class="form-group row">
                        <label class="col-md-2" for="profile_id">プロフィール</label>
                        <div class="col-md-10">
                            {{Form::select('profile_id', $profiles, old('profile_id'),['class' => 'form-control'])}}
                         </div>   
                        </div>
                     <div class="form-group row">
                        <label class="col-md-2">車種</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="model" value="{{ old('model') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
                <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection