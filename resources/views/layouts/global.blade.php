<!DOCTYPE html>
<html lang="ru">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="shortcut icon" href="https://tickets-travel.com/img/ticketstravel.ico" type="image/x-icon">
  @yield('meta')
  <meta itemprop="image" content="https://tickets-travel.com/img/logo.png">
  <meta property="og:image" content="https://tickets-travel.com/img/logo.png">
  <meta name="twitter:image" content="https://tickets-travel.com/img/logo.png">
  <meta name="author" content="Tickets-Travel.com" />
  <meta property="article:publisher" content="https://www.facebook.com/TICKETSTRAVELcom">
  <meta name="csrf-token" content="{{ csrf_token() }}"/>
  <meta name="google-site-verification" content="9mhJN_DnJ81W-p77KHNocS-PcTK_G2wDCBgNfRdLAjg" />


  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700%7CSource+Sans+Pro:400,600,700' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Exo+2:400,400i,700,700i|Noto+Sans:400,400i,700,700i|Roboto:400,400i,500,500i,700,700i|Source+Sans+Pro:400,400i,600,600i&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">

  <!-- Css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ URL::asset('css/font-icons.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('css/iconic.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />



  <!-- Lazyload (must be placed in head in order to work)  -->
  <script async src="{{ URL::asset('js/lazysizes.min.js') }}"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140726482-1"></script>
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-140726482-1');
  </script>

  <!-- AdSence -->
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
      (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-9099937081378380",
          enable_page_level_ads: true
      });
  </script>
  <!-- End AdSence -->

</head>

<body class="bg-light style-default style-rounded">

    @include('/include.header')
	@yield('loginform')
    @yield('startpage')
    @yield('postpage')
    @include('/include.footer')

    <div id="back-to-top">
      <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

  </main> <!-- end main-wrapper -->
  
  <!-- jQuery Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="{{ URL::asset('js/easing.min.js') }}"></script>
  <script src="{{ URL::asset('js/owl-carousel.min.js') }}"></script>
  <script src="{{ URL::asset('js/flickity.pkgd.min.js') }}"></script>
  <!-- <script src="{{ URL::asset('js/jquery.sticky-kit.min.js') }}"></script> -->
  <!-- <script src="{{ URL::asset('js/jquery.newsTicker.min.js') }}"></script> -->
  <script src="{{ URL::asset('js/modernizr.min.js') }}"></script>
  <script src="{{ URL::asset('js/mainscripts.js') }}"></script>
</body>
</html>