@extends('layouts.global')

@section('meta')<title>Забронировать отель, хостел, виллу, аппартаменты. Бронирование проживания | Tickets Travel</title>
  <meta name="description" content="Найти и забронировать проживание по всему миру. Сервис бронирования отелей, хостелов, апартаментов, вил, бунгало, домов. Бронирование отелей по самым лучшим ценам."/>
  <meta name="keywords" content="Отели, туры, забронировать отель, забронировать хостел, найти отель, найти хостел, дешевые отели, забронировать проживание недорого, путешествие"/>
  <link rel="canonical" href="https://tickets-travel.com/hotels" />
@endsection

@section('startpage')
  <section id="home" class="home_parallax" style="background-image: url('/public/img/content/bg/hotels.jpg');  background-size:cover; background-position: center center;" tabindex="-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="hero-text">
            <div class="block-title" style="font-size: 26px; color: white;">
              <h1>Забронировать отель по лучшей цене</h1>
            </div>

            <div class="block-subtitle" style="font-family: RobotoCondensed-Regular, sans-serif; font-size: 24px; color: #fcdf18;">
              Найти проживание со скидкой до 60%
            </div>
          </div>

          <!-- TMD -->
          <div class="tmd-wdgt" data-config="tmdwdgt0"></div>
          <script>document.tmdwdgt0 = {"hide_tabs": undefined,"hide_logo": undefined,"widget_type": "search","widget_tab": "hotels","theme": "light_gray","lang": "RU","aff": "ticktravel"};</script><script type="text/javascript" src="https://cdn.tripmydream.com/wind/widgets/wdgt.js"></script>
          <!-- END TMD -->
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
            <div class="title-wrap title-wrap--line">
              <h2 class="section-title">Идеи для путешествий и отдыха, отели, туры</h2>
              <a href="/media" class="all-posts-url">больше</a>
            </div>
			<div class="row card-row">

			  @foreach($posts as $post)

                  <div class="col-md-6">
                    <article class="entry card">
                      <div class="entry__img-holder thumb__img-holder" style="background-image: url('/storage/{{ $post->thumbnail('medium') }}'); height:200px;">
                        <a href="{{ route('postShow', ['slug'=>$post->slug]) }}" class="thumb-url">
                          <div class="thumb-container thumb-70" style="display:none;">
                            <img data-src="/storage/{{ $post->thumbnail('small') }}" src="/storage/{{ $post->thumbnail('medium') }}" class="entry__img lazyload" alt="{{ $post->title }}" />
                          </div>
                        </a>
                        <a href="media/{{ $post->category->slug }}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">{{ $post->category->name }}</a>
                      </div>

                      <div class="entry__body card__body">
                        <div class="entry__header">

                          <h2 class="entry__title">
                            <a href="{{ route('postShow', ['slug'=>$post->slug]) }}">{{ $post->title }}</a>
                          </h2>
                          <ul class="entry__meta">
                            <li class="entry__meta-author">
                              <span>by</span>
                              <a>{{ $post->user->name }}</a>
                            </li>
                            <li class="entry__meta-date">
                              {{ Date::parse($post->created_at)->format('j F Y') }}
                            </li>
                          </ul>
                        </div>
                        <div class="entry__excerpt">
                          <p>{{ $post->excerpt }}</p>
                        </div>
                      </div>
                    </article>
                  </div>

                  @endforeach
                </div>
          </section> <!-- end worldwide news -->

          <!-- SPO -->
		  @if(count($spohotels) > 0)
		  <section class="section">
            <div class="title-wrap title-wrap--line">
              <h2 class="section-title">Предложения для отдыха, СПО, горящие туры</h2>
              @if(count($spohotels) > 6)
				<a href="/promo" class="all-posts-url">больше</a>
			  @endif
            </div>
			
			<div class="row card-row">

			  @foreach($spohotels as $spohotel)
			  
                  <div class="col-md-6">
                    <article class="entry card">
                      <div class="entry__img-holder thumb__img-holder" style="background-image: url('/storage/{{ $spohotel->thumbnail('medium') }}'); height:200px;">
                        <a href="/promo/{{ $spohotel->slug }}" class="thumb-url">
                          <div class="thumb-container thumb-70" style="display:none;">
                            <img data-src="/storage/{{ $spohotel->thumbnail('small') }}" src="/storage/{{ $spohotel->thumbnail('medium') }}" class="entry__img lazyload" alt="{{ $spohotel->title }}" />
                          </div>
                        </a>
                        <a href="/promo" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">спецпредложение</a>
                      </div>

                      <div class="entry__body card__body">
                        <div class="entry__header">
                          
                          <h2 class="entry__title">
                            <a href="/promo/{{ $spohotel->slug }}">{{ $spohotel->title }}</a>
                          </h2>
                          <ul class="entry__meta">
                            <li class="entry__meta-author">
                              <span>by</span>
                              <a>{{ $spohotel->author_id }}</a>
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
				
          </section> <!-- end SPO -->
		  @endif
		  
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

          </section> <!-- end Other News -->

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
          <!-- TMD end -->
		  
		  <!-- Widget Ad 300 -->
          <aside class="widget widget_media_image">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
          </aside> <!-- end widget ad 300 -->

          <!-- Widget Ad 300 -->

          @include('include.newsletter')
          @include('include.socialside')


        </div> <!-- end sidebar 1 -->
      </div> <!-- content secondary -->      
    </div> <!-- end main container -->
@endsection