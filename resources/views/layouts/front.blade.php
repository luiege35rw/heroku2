<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
         {{-- 後の章で説明します --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <!--<link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">-->
        <link href="{{ secure_asset('css/front.css') }}" rel="stylesheet">
        <!--FontAwesome5を使う-->
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <!--ライトボックスを使う-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
　　　  <script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
　　　  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
        <!--ハイライト検索を使う-->
        <script type="text/javascript" src="jquery.js"></script>
　　　　<script type="text/javascript" src="jquery-highlight-5s.js"></script>
    </head>
  
    <body>
        
    <header>
           <div id="app">
           <h1>愛車時MAN</h1>
           <p>～あの時こんな車に乗ってました～</p>
            {{-- 画面上部に表示するナビゲーションバーです。 --}}
        　 <div class="header-text-area">
           <div class="menu1"> <a class="navbar-brand " href="http://4b7389b1dfd948b7ae1b36b24dd49835.vfs.cloud9.us-east-2.amazonaws.com/"><i class="fas fa-home fa-lg"></i></a></div>
           <div class="menu1"> <a class="nav-link"href="https://4b7389b1dfd948b7ae1b36b24dd49835.vfs.cloud9.us-east-2.amazonaws.com/_static/index.html/Aishajiman.html/index.html" ><button class="pink "><i class="fas fa-camera"></i>写真BOX</button></a></div>
           <div class="menu1"> <a class="nav-link"href="http://4b7389b1dfd948b7ae1b36b24dd49835.vfs.cloud9.us-east-2.amazonaws.com/admin/profile"><button class="pink "><i class="fa fa-car"></i>PRベース</button></a></div>
           <div class="menu1"> <a class="nav-link"href="http://4b7389b1dfd948b7ae1b36b24dd49835.vfs.cloud9.us-east-2.amazonaws.com/admin/news"><button class="pink "><i class="fas fa-comment-dots"></i>NEWS投稿</button></a></div>
           <div class="menu2"> <a class="nav-link"href="https://4b7389b1dfd948b7ae1b36b24dd49835.vfs.cloud9.us-east-2.amazonaws.com/_static/index.html/Aishajiman.html/information.html"><button class="pink "><i class="fas fa-key"></i>INFO一覧</button></a></div>
               <div class="menu2"> <form method="GET" action="{{ route('register') }}"><button class="pink "><i class="fas fa-registered"></i>ログINOUT</div>
           </div>     
           </div>
    </header>
<form name="search_form" style="margin:10px" method="POST" action=".">
<input type="text" name="search_string" style="width:2000px"><input type="submit" value="検索">
</form>
     </div>
     
     <!--ライトボックス写真一覧-->
 <a href="storage/image/bigimages1.jpg" data-lightbox="CAR" data-title="アリスト"><img src="storage/image/images1_thumb.jpg" alt="アリスト"></a>
<a href="storage/image/bigimages2.jpg" data-lightbox="CAR" data-title="クラウン210系"><img src="storage/image/images2_thumb.jpg" alt="クラウン210系"></a>
<a href="storage/image/bigimages3.jpg" data-lightbox="CAR" data-title="スカイラインR34"><img src="storage/image/images3_thumb.jpg" alt="スカイラインR34"></a>
<a href="storage/image/bigimages4.jpg" data-lightbox="CAR" data-title="チェイサー"><img src="storage/image/images4_thumb.jpg" alt="チェイサー"></a>
<a href="storage/image/bigimages5.jpg" data-lightbox="CAR" data-title="ノート"><img src="storage/image/images5_thumb.jpg" alt="ノート"></a>
<a href="storage/image/bigimages6.jpg" data-lightbox="CAR" data-title="ポルシェ911"><img src="storage/image/images6_thumb.jpg" alt="ポルシェ911"></a>
<a href="storage/image/bigimages7.jpg" data-lightbox="CAR" data-title="マツダロードスター"><img src="storage/image/images7_thumb.jpg" alt="マツダロードスター"></a>
<a href="storage/image/bigimages8.jpg" data-lightbox="CAR" data-title="ランドクルーザー"><img src="storage/image/images8_thumb.jpg" alt="ランドクルーザー"></a>
<a href="storage/image/bigimages9.jpg" data-lightbox="CAR" data-title="ワゴンR"><img src="storage/image/images9_thumb.jpg" alt="ワゴンR"></a>
<a href="storage/image/bigimages10.jpg" data-lightbox="CAR" data-title="EKワゴン"><img src="storage/image/images10_thumb.jpg" alt="EKワゴン"></a>
<a href="storage/image/bigimages11.jpg" data-lightbox="CAR" data-title="プリウス"><img src="storage/image/images11_thumb.jpg" alt="プリウス"></a>
<a href="storage/image/bigimages12.jpg" data-lightbox="CAR" data-title="ピンククラウン"><img src="storage/image/images12_thumb.jpg" alt="ピンククラウン"></a>
<a href="storage/image/bigimages13.jpg" data-lightbox="CAR" data-title="マセラティギブリ"><img src="storage/image/images13_thumb.jpg" alt="マセラティギブリ"></a>
<a href="storage/image/bigimages14.jpg" data-lightbox="CAR" data-title="ベンツAMG-GT"><img src="storage/image/images14_thumb.jpg" alt="ベンツAMG-GT"></a>
<a href="storage/image/bigimages15.jpg" data-lightbox="CAR" data-title="フェラーリスパイダー"><img src="storage/image/images15_thumb.jpg" alt="フェラーリスパイダー"></a>
<a href="storage/image/bigimages16.jpg" data-lightbox="CAR" data-title="大黒ふ頭"><img src="storage/image/images16_thumb.jpg" alt="大黒ふ頭"></a>
<a href="storage/image/bigimages17.jpg" data-lightbox="CAR" data-title="ピンククラウン納車"><img src="storage/image/images17_thumb.jpg" alt="ピンククラウン納車"></a>
<a href="storage/image/bigimages18.jpg" data-lightbox="CAR" data-title="千葉フォルニア"><img src="storage/image/images18_thumb.jpg" alt="千葉フォルニア"></a>


            {{-- ここまでナビゲーションバー --}}

            <main class="py-4">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                @yield('content')
            </main>
        </div>
    </body>
</html>