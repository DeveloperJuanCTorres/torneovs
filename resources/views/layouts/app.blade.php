<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Torneo VS') }}</title>
        <!-- META -->
        <meta name="author" content="Ing. Juan Carlos Torres del Castillo">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta property="og:title" itemprop="headline" content="Torneo VS" />
        <meta property="og:description" itemprop="description" content="torneos vs" />
        <meta property="og:keywords" itemprop="keywords" content="torneo eventos vs play station">
        <meta name="googlebot" content="noindex">
        <meta name="googlebot-news" content="nosnippet">
        <meta property="og:image" itemprop="image" content="/assets/images/logo.png" />
        <meta property="og:url" itemprop="url" content="https://www.torneosversus.com" />
        <!-- FB -->
        <meta property="fb:app_id" content="" />
        <meta property="fb:admins" content="" />
        <meta property="fb:pages" content="" /> 
        <meta name="lang" content="es" itemprop="inLanguage" />
        <base href="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="torneos vs">
        <meta name="keywords" content="torneo eventos vs play station">
        <meta name="news_keywords" content="torneo eventos vs play station">        
        <!-- APPLE -->
        <link rel="apple-touch-icon" sizes="57x57" href="/icon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/icon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/icon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/icon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/icon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/icon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/icon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/icon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-icon-180x180.png">
        <!-- Google -->
        <link rel="icon" type="image/png" sizes="192x192" href="/assets/images/logo.png">
        <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/icon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png">

        <link href="/images/logo2.png" rel="icon" type="image/x-icon"> 

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <?php $version='1993.1.55';?>
        <!-- Additional CSS Files -->

        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/footer.css')}}?v=<?php echo $version;?>">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/mystyles.css')}}?v=<?php echo $version;?>">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css')}}?v=<?php echo $version;?>">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/templatemo-cyborg-gaming.css')}}?v=<?php echo $version;?>">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.css')}}?v=<?php echo $version;?>">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css')}}?v=<?php echo $version;?>">
        <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

        

        <!-- Scripts -->
        <!-- vite(['resources/css/app.css', 'resources/js/app.js']) -->

        <!-- Styles -->
        @livewireStyles
        @stack('izipay')
    </head>
    <body class="font-sans antialiased">
        <!-- Messenger Plugin de chat Code -->
    <div id="fb-root"></div>

<!-- Your Plugin de chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "523333574510674");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v16.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
        <x-jet-banner />

        <div class="min-h-screen">
        <!-- livewire('navigation-menu')  -->

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        
        <!-- Scripts -->
        <!-- Bootstrap core JavaScript -->
        <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

        <script src="{{ asset('assets/js/mystyles.js')}}"></script>
        <script src="{{ asset('assets/js/isotope.min.js')}}"></script>
        <script src="{{ asset('assets/js/owl-carousel.js')}}"></script>
        <script src="{{ asset('assets/js/tabs.js')}}"></script>
        <script src="{{ asset('assets/js/popup.js')}}"></script>
        <script src="{{ asset('assets/js/custom.js')}}"></script>
        <script src="{{ asset('assets/js/ubigeo.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        @stack('scripts')
    </body>
</html>
