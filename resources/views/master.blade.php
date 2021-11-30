<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ mix('images\Favicons/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ mix('images\Favicons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ mix('images\Favicons/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ mix('images\Favicons/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ mix('images\Favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
        <link rel="shortcut icon" href="{{ mix('images\Favicons/favicon.ico') }}">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="{{ mix('images\Favicons/browserconfig.xml') }}">
        <meta name="theme-color" content="#ffffff">
        <link rel="canonical" href="https://williemockcolouringpages.herokuapp.com/" />
        <title>{{ env('APP_NAME') }}</title>
        <meta name="description" content="Hi, Welcome to my Space Where Sharing Your Enriching Bestselling Colouring Pages for Youngsters, Ideal for Children Preschoolers, Kindergarten, Kids to Help Increase Bits of Knowledge, and All Available on Amazon.">
        <meta name="keywords" content="coloring book pages the cover store kids coloring books coloring book chance amazon on fire sheets christmas snowman present kids toddlers preschoolers uk edition">
        <meta name="author" content="Wille Mock">
        <meta name="google-site-verification" content="GUfGxf0C2HbZ_S2qA8_xqxHdxd3VxN83cB6dmhz_MMI" />
       
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8570142002005993"
                crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
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
            section.cpb, section.cpb-release{
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
            section.cpb{
                background-image: url(../images/banner-for-cool-stuff.png);
            }
            section.cpb-release{
                background-image: url(../images/banner-for-releases-stuff.png);
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
        <script type="text/javascript" src="{{ mix('js/app.js') }}" defer async></script>
    </body>
</html>
