@extends('layouts.global')

@section('meta')<title>Спецпредложения для отдыха, горящие туры, выгодные авиабилеты и отели. | TicketsTravel</title>
  <meta name="description" content="Находите варианты путешествий по всему миру из подборок TicketsTravel, спецпредложения отелей, туристических операторов, авиакомпаний. Акции на билеты, горящие туры, эксклюзивный отдых, выгодные авиабилеты."/>
  <meta name="keywords" content="Горящие туры, спецпредложения, варианты путешествий, акции авиакомпаний, забронировать отель, забронировать хостел, забронировать проживание недорого, путешествие"/>
  <link rel="canonical" href="https://tickets-travel.com/spos" />
@endsection

@section('startpage')
  <section id="home" style="background-image: url('/public/img/content/bg/sea.jpg');  background-size:cover; background-position: center center;" tabindex="-1">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-8 text-center">
          <div class="hero-text" style="background: #00000040; border-radius: 10px; padding: 10px 0px;">
            <div class="block-title" style="font-size: 26px; color: white;">
              <h1>Спецпредложения, горящие туры, идеи путешествий</h1>
            </div>

            <div class="block-subtitle" style="font-family: RobotoCondensed-Regular, sans-serif; font-size: 24px; color: #fcdf18;">
              Находите варианты путешествий по всему миру
            </div>
          </div>

          
        </div><!--- END COL -->
      </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
  </section>

    <div class="main-container container pt-24" id="main-container">         
		<div class="row">
		
		</div>
      <!-- Content Secondary -->
      <div class="row">

        <!-- Post -->
        <div class="col-lg-8 blog__content mb-72">


		<!-- Worldwide News -->
          <section class="section">
			<div class="row card-row">

			  @foreach($spohotels as $spohotel)
			  
                  <div class="col-md-6">
                    <article class="entry card">
                      <div class="entry__img-holder thumb__img-holder" style="background-image: url('/storage/{{ $spohotel->thumbnail('medium') }}'); height:200px;">
                        <a href="promo/{{ $spohotel->slug }}" class="thumb-url">
                          <div class="thumb-container thumb-70" style="display:none;">
                            <img data-src="/storage/{{ $spohotel->thumbnail('small') }}" src="/storage/{{ $spohotel->thumbnail('medium') }}" class="entry__img lazyload" alt="{{ $spohotel->title }}" />
                          </div>
                        </a>
                        <a href="promo/{{ $spohotel->slug }}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet"></a>
                      </div>

                      <div class="entry__body card__body">
                        <div class="entry__header">
                          
                          <h2 class="entry__title">
                            <a href="promo/{{ $spohotel->slug }}">{{ $spohotel->title }}</a>
                          </h2>
                          <ul class="entry__meta">
                            <li class="entry__meta-author">
                              <span>by</span>
                              <a>{{ $spohotel->authorId->name }}</a>
                            </li>
                            <li class="entry__meta-date">
                              {{ Date::parse($spohotel->created_at)->format('j F Y') }}
                            </li>
                          </ul>
                        </div>

                      </div>
                    </article>
                  </div>
                  
                  @endforeach
                </div>
          </section> <!-- end worldwide news -->


          

          <!-- Other News -->
          <section class="section">
            <div class="title-wrap title-wrap--line">
              <h2 class="section-title">Другие рубрики</h2>
              <a href="/media" class="all-posts-url">больше</a>
            </div>
            <div class="row card-row">

              @foreach($otherposts as $otherpost)

                <div class="col-md-6">
                  <article class="entry card">
                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('/storage/{{ $otherpost->thumbnail('medium') }}'); height:200px;">
                      <a href="{{ route('postShow', ['slug'=>$otherpost->slug]) }}" class="thumb-url">
                        <div class="thumb-container thumb-70" style="display:none;">
                          <img data-src="/storage/{{ $otherpost->thumbnail('small') }}" src="/storage/{{ $otherpost->thumbnail('medium') }}" class="entry__img lazyload" alt="{{ $otherpost->title }}" />
                        </div>
                      </a>
                      <a href="media/{{ $otherpost->category->slug }}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner {{ $otherpost->category->style }}">{{ $otherpost->category->name }}</a>
                    </div>

                    <div class="entry__body card__body">
                      <div class="entry__header">

                        <h2 class="entry__title">
                          <a href="{{ route('postShow', ['slug'=>$otherpost->slug]) }}">{{ $otherpost->title }}</a>
                        </h2>
                        <ul class="entry__meta">
                          <li class="entry__meta-author">
                            <span>by</span>
                            <a>{{ $otherpost->user->name }}</a>
                          </li>
                          <li class="entry__meta-date">
                            {{ Date::parse($otherpost->created_at)->format('j F Y') }}
                          </li>
                        </ul>
                      </div>
                      <div class="entry__excerpt">
                        <p>{{ $otherpost->excerpt }}</p>
                      </div>
                    </div>
                  </article>
                </div>

              @endforeach

            </div>

          </section>

          <div class="center-block">

            <!-- gorizont adw -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-9099937081378380"
                 data-ad-slot="6110867888"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <!-- gorizont adw -->
          </div>

        </div> <!-- end posts -->
		
		<!-- Sidebar -->
        <div class="col-lg-4 sidebar blog__content sidebar--right">


          <!-- TMD -->
          <div class="tmd-wdgt" data-config="tmdwdgt1">
            <div class="title-wrap title-wrap--line">
              <h2 class="section-title">Поиск авиабилетов</h2>
            </div>
          </div>
          <script>document.tmdwdgt1 = {"hide_logo": undefined,"widget_type": "search","widget_tab": "flights","theme": "light_gray","lang": "RU","aff": "ticktravel"};</script>
          <script type="text/javascript" src="https://cdn.tripmydream.com/wind/widgets/wdgt.js"></script>
		  <!-- TMD end -->

          <!-- Widget Ad 300 -->

          @include('include.newsletter')
          @include('include.socialside')

          <aside class="widget widget_media_image">
            <!-- Adsense -->

            <!-- боковой квадрат -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-9099937081378380"
                 data-ad-slot="7574981035"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <!-- Adsense -->

          </aside>


        </div> <!-- end sidebar 1 -->
      </div> <!-- content secondary -->      
    </div> <!-- end main container -->
@endsection