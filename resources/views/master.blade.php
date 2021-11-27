<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images\Favicons/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images\Favicons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images\Favicons/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('images\Favicons/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('images\Favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
        <link rel="shortcut icon" href="{{ asset('images\Favicons/favicon.ico') }}">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="{{ asset('images\Favicons/browserconfig.xml') }}">
        <meta name="theme-color" content="#ffffff">

        <title>{{ env('APP_NAME') }}</title>
        <meta name="description" content="The Space Where Sharing Your enriching Colouring Pages To Help youngsters to increase bits of knowledge.">
        <meta name="keywords" content="willie mock colouring pages,colouring books,cute colouring pages,colouring sheets">
        <meta name="author" content="Wille Mock">
       

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style type="text/css">
            body{
                font-family: 'poppins', 'sans-serif';
                background: #fbfbfb;
            }
            a.logo{
                height: 108px;
            }
            a.logo > img{
                height: 100%;
                width: auto;
            }
            section.cpb{
                background-image:url("http://via.placeholder.com/1280x600");
                background-repeat: no-repeat;
            }
            .card {
                background: #fff;
                border: 2px solid #eee;
                transition: all 0.35s ease;
            }
            .card:hover {
                border-color: #ddd;
                box-shadow: rgba(10, 145, 145, 0.1) 0 0 5em;
            }
            .cta {
                -moz-border-radius: 2px;
                -moz-transition: 0.2s ease-out;
                -ms-transition: 0.2s ease-out;
                -o-transition: 0.2s ease-out;
                -webkit-border-radius: 2px;
                -webkit-transition: 0.2s ease-out;
                background-clip: padding-box;
                border: 2px solid #c3cdd3;
                color: #000000;
                letter-spacing: 0.5px;
                line-height: 36px;
                text-transform: uppercase;
                transition: 0.2s ease-out;
            }
            .cta:hover {
                background-color: #c3cdd3;
                box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                color: rgb(0, 0, 0);
                -moz-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                -webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
        </style>
    </head>
    <body>

        {{-- NAVBAR --}}
        
        @include('partials._navbar')

        {{-- MAIN CONTENT --}}
        
        @yield('content')

        {{-- FOOTER --}}
        
        @include('partials._footer')

    

        <!-- JS -->
        <script type="text/javascript" src="{{ asset('js/app.js') }}" defer async></script>
    </body>
</html>
