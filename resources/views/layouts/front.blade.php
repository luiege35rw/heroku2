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
        <link href="{{ asset('css/front.css') }}" rel="stylesheet">
        <!--FontAwesome5を使う-->
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    </head>
    <body>
        
    <header>
           <div id="app">
           <h1>愛車時MAN</h1>
           <p>～あの時こんな車に乗ってました～</p>
            {{-- 画面上部に表示するナビゲーションバーです。 --}}
        　 <div class="header-text-area">
           <div class="menu1"> <a class="navbar-brand " href="http://4b7389b1dfd948b7ae1b36b24dd49835.vfs.cloud9.us-east-2.amazonaws.com/"><i class="fas fa-home fa-lg"></i></a></div>
           <div class="menu1"> <a class="nav-link"href="" ><button class="pink "><i class="fas fa-camera"></i>写真BOX</button></a></div>
           <div class="menu1"> <a class="nav-link"href="http://4b7389b1dfd948b7ae1b36b24dd49835.vfs.cloud9.us-east-2.amazonaws.com/admin/profile"><button class="pink "><i class="fa fa-car"></i>PRベース</button></a></div>
           <div class="menu1"> <a class="nav-link"href="http://4b7389b1dfd948b7ae1b36b24dd49835.vfs.cloud9.us-east-2.amazonaws.com/admin/news"><button class="pink "><i class="fas fa-comment-dots"></i>NEWS投稿</button></a></div>
           <div class="menu2"> <form method="GET" action="{{ route('register') }}"><button class="pink "><i class="fas fa-registered"></i>新規登録</div>
           <div class="menu2"> <form method="GET" action="{{ route('login') }}"><button class="pink "><i class="fas fa-key"></i>ログイン</div>
     </div>     
     </div>
     </header>
　　<div class="col-md-2">車種検索
　　</div>
　　
　　<div class="col-md-２">
        <input type="text" class="form-control" name="cond_title">
    </div>

　　　<div class="col-md-2">
        <input type="submit" class="btn btn-primary" value="検索">
    </div>
    
            {{-- ここまでナビゲーションバー --}}

            <main class="py-4">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                @yield('content')
            </main>
        </div>
    </body>
</html>