@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="name mt-3">
                                    {{ str_limit($post->name, 1500) }}
                                </div>
                                <div class="body mt-3">
                                    {{ str_limit($post->modelhistory, 1500) }}
                                </div>
                                <div class="body mt-3">
                                    {{ str_limit($post->spot, 1500) }}
                                </div>
                                 <div class="introduction mt-3">
                                    {{ str_limit($post->introduction, 1500) }}
                                </div>
                            </div>
                            <div class="image col-md-6 text-right mt-4">
                                @if ($post->image_path1)
                                    <img src="{{ asset('storage/image/' . $post->image_path) }}">
                                    <img src="{{ asset('storage/image/' . $post->image_path1) }}">
                                    <img src="{{ asset('storage/image/' . $post->image_path2) }}">
                                    <img src="{{ asset('storage/image/' . $post->image_path3) }}">
                                    <img src="{{ asset('storage/image/' . $post->image_path4) }}">
                                    <img src="{{ asset('storage/image/' . $post->image_path5) }}">
                                    <img src="{{ asset('storage/image/' . $post->image_path6) }}">
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection