<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        
        <title>@yield('title')</title>

        <!-- Scripts -->
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <!--<link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">-->
        <link href="{{ secure_asset('css/front.css') }}" rel="stylesheet">
        <!--FontAwesome5を使う-->
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <!--ライトボックスを使う-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
　　　  <script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
　　　  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
        
    </head>
  
    <body>
        
    <header>
           <div id="app">
           <h1>愛車時MAN</h1>
           <p>～あの時こんな車に乗ってました～</p>
            {{-- 画面上部に表示するナビゲーションバーです。 --}}
        　 <div class="header-text-area">
        　 <div class="menu1"> <a class="navbar-brand" href="/"><i class="fas fa-home fa-lg"></i></a></div>
           <div class="menu1"> <a class="nav-link"href="admin/news"><button class="pink "><i class="fas fa-comment-dots"></i>NEWS投稿</button></a></div>
           <div class="menu1"> <a class="nav-link"href="profile"><button class="pink "><i class="fas fa-comment-dots"></i>PRトップ</button></a></div>
           <div class="menu1"> <a class="nav-link"href="admin/profile"><button class="pink "><i class="fa fa-car"></i>PRベース</button></a></div>
           <div class="menu2"> <form method="GET" action="{{ route('register') }}"><button class="pink "><i class="fas fa-registered"></i>ログINOUT</div>
           <div class="menu2"> <a class="nav-link"href="info"></a><button class="pink "><i class="fas fa-key"></i>INFO一覧</button></a></div>
        　 
           </div>     
           </div>
    </header>

    
<input type="search" value=""style="width:1900px" placeholder="メモ" />
     </div>
     
     <!--ライトボックス写真一覧-->
 <a href="https://techboost55.s3.us-east-2.amazonaws.com/image/bigimages1.jpg" data-lightbox="CAR" data-title="アリスト"><img src="https://techboost55.s3.us-east-2.amazonaws.com/image/bigimages1.jpg" alt="アリスト"></a>
<a href="https://techboost55.s3.us-east-2.amazonaws.com/image/bigimages2.jpg" data-lightbox="CAR" data-title="クラウン210系"><img src="https://techboost55.s3.us-east-2.amazonaws.com/image/images2_thumb.jpg" alt="クラウン210系"></a>
<a href="https://techboost55.s3.us-east-2.amazonaws.com/image/bigimages3.jpg" data-lightbox="CAR" data-title="スカイラインR34"><img src="https://techboost55.s3.us-east-2.amazonaws.com/image/images3_thumb.jpg" alt="スカイラインR34"></a>
<a href="https://techboost55.s3.us-east-2.amazonaws.com/image/bigimages4.jpg" data-lightbox="CAR" data-title="チェイサー"><img src="https://techboost55.s3.us-east-2.amazonaws.com/image/images4_thumb.jpg" alt="チェイサー"></a>
<a href="https://techboost55.s3.us-east-2.amazonaws.com/image/bigimages5.jpg" data-lightbox="CAR" data-title="ノート"><img src="https://techboost55.s3.us-east-2.amazonaws.com/image/images5_thumb.jpg" alt="ノート"></a>
<a href="https://techboost55.s3.us-east-2.amazonaws.com/image/bigimages6.jpg" data-lightbox="CAR" data-title="ポルシェ911"><img src="https://techboost55.s3.us-east-2.amazonaws.com/image/images6_thumb.jpg" alt="ポルシェ911"></a>
<a href="https://techboost55.s3.us-east-2.amazonaws.com/image/bigimages7.jpg" data-lightbox="CAR" data-title="マツダロードスター"><img src="https://techboost55.s3.us-east-2.amazonaws.com/image/images7_thumb.jpg" alt="マツダロードスター"></a>
<a href="https://techboost55.s3.us-east-2.amazonaws.com/image/bigimages8.jpg" data-lightbox="CAR" data-title="ランドクルーザー"><img src="https://techboost55.s3.us-east-2.amazonaws.com/image/images8_thumb.jpg" alt="ランドクルーザー"></a>
<a href="https://techboost55.s3.us-east-2.amazonaws.com/image/bigimages9.jpg" data-lightbox="CAR" data-title="ワゴンR"><img src="https://techboost55.s3.us-east-2.amazonaws.com/image/images9_thumb.jpg" alt="ワゴンR"></a>
<a href="https://techboost55.s3.us-east-2.amazonaws.com/image/bigimages10.jpg" data-lightbox="CAR" data-title="EKワゴン"><img src="https://techboost55.s3.us-east-2.amazonaws.com/image/images10_thumb.jpg" alt="EKワゴン"></a>
<a href="https://techboost55.s3.us-east-2.amazonaws.com/image/bigimages11.jpg" data-lightbox="CAR" data-title="プリウス"><img src="https://techboost55.s3.us-east-2.amazonaws.com/image/images11_thumb.jpg" alt="プリウス"></a>
<a href="https://techboost55.s3.us-east-2.amazonaws.com/image/bigimages12.jpg" data-lightbox="CAR" data-title="ピンククラウン"><img src="https://techboost55.s3.us-east-2.amazonaws.com/image/images12_thumb.jpg" alt="ピンククラウン"></a>
<a href="https://techboost55.s3.us-east-2.amazonaws.com/image/bigimages13.jpg" data-lightbox="CAR" data-title="マセラティギブリ"><img src="https://techboost55.s3.us-east-2.amazonaws.com/image/images13_thumb.jpg" alt="マセラティギブリ"></a>
<a href="https://techboost55.s3.us-east-2.amazonaws.com/image/bigimages14.jpg" data-lightbox="CAR" data-title="ベンツAMG-GT"><img src="https://techboost55.s3.us-east-2.amazonaws.com/image/images14_thumb.jpg" alt="ベンツAMG-GT"></a>
<a href="https://techboost55.s3.us-east-2.amazonaws.com/image/bigimages15.jpg" data-lightbox="CAR" data-title="フェラーリスパイダー"><img src="https://techboost55.s3.us-east-2.amazonaws.com/image/images15_thumb.jpg" alt="フェラーリスパイダー"></a>
<a href="https://techboost55.s3.us-east-2.amazonaws.com/image/bigimages16.jpg" data-lightbox="CAR" data-title="大黒ふ頭"><img src="https://techboost55.s3.us-east-2.amazonaws.com/image/images16_thumb.jpg" alt="大黒ふ頭"></a>
<a href="https://techboost55.s3.us-east-2.amazonaws.com/image/bigimages17.jpg" data-lightbox="CAR" data-title="ピンククラウン納車"><img src="https://techboost55.s3.us-east-2.amazonaws.com/image/images17_thumb.jpg" alt="ピンククラウン納車"></a>
<a href="https://techboost55.s3.us-east-2.amazonaws.com/image/bigimages18.jpg" data-lightbox="CAR" data-title="マセラティギブリ白"><img src="https://techboost55.s3.us-east-2.amazonaws.com/image/images18.jpg" alt="マセラティギブリ白"></a>
           {{-- ここまでナビゲーションバー --}}
           
           

            <main class="py-4">
                
                @yield('content')
            </main>
        </div>
    </body>
</html>