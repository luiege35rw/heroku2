@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        <div class="row2">
            <div class="posts col-md-8 mx-auto ">
                @foreach($posts as $post)
            <div class="post">
            <div class="row2">
                            
                        <!--プロフィールアバター写真投稿-->
             <div class="image image2-top  text-center mt-4">
                 @if ($post->image_path)
                 　　<a href="{{ $post->image_path }}" data-lightbox="car">
                         <img src="{{ $post->image_path }}" style="max-width:300px;max-hight:200px">
                     </a>
                      <p class="cg"><p><p>{{ str_limit($post->name, 150) }}</p></p>
                 @endif
             </div>
            </div>
                            
                            
                            
                          <!--プロフィール写真投稿ループ-->
            <div class=" mx-auto mt-4">
                @for ($i =1; $i <= 6; $i++)
                @if ($post->{'image_path' . $i})
                <a href="{{ $post->{'image_path' . $i} }}" data-lightbox="car">
                    <img src="{{ $post->{'image_path' . $i} }}" style="max-width:300px;max-hight:200px">
                </a>
                @endif
                @endfor
            </div>
            
                            <!--プロフィール情報を表示する-->
             <div class="text-center mt-4">
                    {{ str_limit($post->modelhistory, 150) }}
             </div>
             <div class="text-center mt-4">
                    {{ str_limit($post->spot, 150) }}
             </div>
             <div class="text-center mt-4">
                    {{ str_limit($post->introduction, 1500) }}
             </div>
                        
                        
                        
          
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection