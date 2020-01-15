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
         {{-- Laravel標準で用意されているJavascriptを読み込み --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込み --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
       
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
         <!--FontAwesome5を使う-->
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            {{-- 画面上部に表示するナビゲーションバー。 --}}
            <nav class="navbar navbar-expand-md navbar-dark navbar-HOME">
                <div class="container">
                   
                  <div class="menu1"> <a class="navbar-brand " href="http://4b7389b1dfd948b7ae1b36b24dd49835.vfs.cloud9.us-east-2.amazonaws.com/"><i class="fas fa-home fa-lg"></i></a></div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                        </ul>
                    </div>
                </div>
            </nav>
            {{-- ここまでナビゲーションバー --}}

            <main class="py-4">
               
                @yield('content')
            </main>
        </div>
    </body>
</html>