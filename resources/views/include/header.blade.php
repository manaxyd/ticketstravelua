<!-- Preloader
  <div class="loader-mask">
    <div class="loader">
      <div></div>
    </div>
  </div>  -->

  <!-- Bg Overlay -->
  <div class="content-overlay"></div>

  <!-- Sidenav -->    
  <header class="sidenav" id="sidenav">

    <!-- close -->
    <div class="sidenav__close">
      <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
        <i class="ui-close sidenav__close-icon"></i>
      </button>
    </div>
    
    <!-- Nav -->
    <nav class="sidenav__menu-container">
      <ul class="sidenav__menu" role="menubar">
        <li>
          <a href="https://tickets-travel.com/" class="sidenav__menu-url">Главная</a>
          
        </li>
        <li><a href="/aviabilety" class="sidenav__menu-url">Авиабилеты</a></li>
        <li><a href="/hotels" class="sidenav__menu-url">Отели</a></li>
		<!--<li><a href="/promo" class="sidenav__menu-url">Промо</a></li>-->
		<li><a href="/media" class="sidenav__menu-url">Паблик</a></li>
        <li><a href="https://misto.travel/?aid=IPII7G&lang=ua" rel="nofollow" target="_blank" class="sidenav__menu-url">Туры</a></li>
        <li><a href="https://booking.bussystem.eu/ua?partner=2112" rel="nofollow" target="_blank" class="sidenav__menu-url">Автобусные билеты</a></li>
      </ul>
    </nav>

    <div class="socials sidenav__socials">
      <a class="social social-facebook" href="https://www.facebook.com/TICKETSTRAVELcom/" target="_blank" aria-label="facebook">
        <i class="ui-facebook"></i>
      </a>
      <a class="social social-telegram" href="https://t.me/ticketstravel" title="telegram" target="_blank" aria-label="telegram">
        <i class="tt-paper-plane"></i>
      </a>
      <a class="social social-instagram" href="https://www.instagram.com/tickets_travel_ua/" title="instagram" target="_blank" aria-label="instagram">
        <i class="ui-instagram"></i>
      </a>
      <a class="social social-skype" href="skype:live:ticketstravelua?call" rel="nofollow" title="skype" target="_blank" aria-label="skype">
        <i class="ui-skype"></i>
      </a>
    </div>

    <nav class="sidenav__menu-container">
      <ul class="sidenav__menu" role="menubar">
        <li><a class="sidenav__menu-url" style="color: #ff7e00">Контакты</a></li>
        <li><a class="sidenav__menu-url">+38 (095) 127-36-07</a></li>
        <li><a class="sidenav__menu-url">+38 (096) 112-60-03</a></li>
		<li><a class="sidenav__menu-url">e-mail: <span style="color: #3E3EDD">ticketstravelua@gmail.com</span></a></li>
      </ul>
    </nav>
  </header> <!-- end sidenav -->

  <main class="main oh" id="main">

    <!-- Navigation -->
    <header class="nav">

      <div class="nav__holder nav--sticky">
        <div class="container relative">
          <div class="flex-parent">

            <!-- Side Menu Button -->
            <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
              <span class="nav-icon-toggle__box">
                <span class="nav-icon-toggle__inner"></span>
              </span>
            </button> 

            <!-- Logo -->
            <a href="https://tickets-travel.com/" class="logo">
              <img class="logo__img" src="/img/logo.png" srcset="/img/logo.png 1x, /img/logo@2x.png 2x" alt="TicketsTravel">
            </a>

            <!-- Nav-wrap -->
            <nav class="flex-child nav__wrap d-none d-lg-block">              
              <ul class="nav__menu">
                <li class="nav__dropdown">
                  <a href="/media">Паблик</a>
                  <ul class="nav__dropdown-menu">
                    @foreach($cats as $cat)
                      <li><a href="{{ url('/media/'.$cat->category->slug.'') }}" rel="tag">{{ $cat->category->name }}</a></li>
                    @endforeach
                  </ul>
                </li>
				<li class="nav__dropdown">
                  <a href="/aviabilety">Авиабилеты</a>
                  <ul class="nav__dropdown-menu">
                    <li><a href="/avia">Купить авиабилеты</a></li>
                    <li><a href="/media/aviabilety">Новости авиакомпаний</a></li>
                  </ul>
                </li>
				<li>
                  <a href="/hotels">Отели</a>
                </li>
				<!--
				<li>
                  <a href="/promo">Промо</a>
                </li>
				-->
                <li>
                  <a href="https://misto.travel/?aid=IPII7G&lang=ua" rel="nofollow" target="_blank">Туры</a>
                </li>
                <li>
                  <a href="https://booking.bussystem.eu/ua?partner=2112" rel="nofollow" target="_blank">Автобусные билеты</a>
                </li>
              </ul> <!-- end menu -->
            </nav> <!-- end nav-wrap -->

            <!-- Nav Right -->
            <div class="nav__right">

              <!-- Search -->
              <div class="nav__right-item nav__search">
                <a href="" class="nav__search-trigger" id="nav__search-trigger">
                  <i class="ui-search nav__search-trigger-icon"></i>
                </a>
                <div class="nav__search-box" id="nav__search-box">
                  <form class="nav__search-form" action="{{ url('media') }}" method="post">
                    {!! csrf_field() !!}
                    <input type="text" placeholder="поиск публикации" class="nav__search-input" name="forsearch" value="{{ isset($forsearch) ? $forsearch : '' }}">
                    <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                      <i class="ui-search nav__search-icon"></i>
                    </button>
                  </form>
                </div>                
              </div>             

            </div> <!-- end nav right -->            
        
          </div> <!-- end flex-parent -->
        </div> <!-- end container -->

      </div>
    </header> <!-- end navigation -->

    @if(session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
    @endif

    @if(session('error'))
      <div class="alert alert-danger">
        {{ session('error') }}
      </div>
    @endif

    @if(count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif

    @if (\Session::has('success'))
      <div class="alert alert-success">
        {{ \Session::get('success') }}
      </div><br />
    @endif
    @if (\Session::has('failure'))
      <div class="alert alert-danger">
        {{ \Session::get('failure') }}
      </div><br />
    @endif
