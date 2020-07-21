@extends('layouts.global')

@section('meta')<title>Tickets Travel – поиск выгодных билетов и идей для путешествий</title>
  <meta name="description" content="Рекомендации выгодных путешествий на TicketsTravel помогут купить дешевые авиабилеты, забронировать отель или тур онлайн, арендовать авто, найти билеты на транспорт."/>
  <link rel="canonical" href="https://tickets-travel.com" />
@endsection

@section('startpage')
  <script>
      fbq('track', 'ViewContent', {
          content_type: 'home page',
      });
  </script>

  <section id="home" class="home_parallax" style="background-image: url(/public/img/content/bg/mainbg.jpg);  background-size:cover; background-position: center center;" tabindex="-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="hero-text">
            <div class="block-title" style="font-size: 26px; color: white;">
              <h1>Купить авиабилеты и забронировать отель по лучшим ценам</h1>
            </div>
              <div class="block-subtitle">
              Выгодные предложения для путешествий и отдыха
            </div>
          </div>
          <!-- TMD -->
          <script>document.tmdwdgt1 = {"hide_logo": undefined,"widget_type": "search","widget_tab": "flights","theme": "light_gray","lang": "RU","aff": "ticktravel"};</script>
          <script type="text/javascript" src="https://cdn.tripmydream.com/wind/widgets/wdgt.js"></script>
          <div class="tmd-wdgt" data-config="tmdwdgt1"></div><!-- END TMD -->
        </div><!--- END COL -->
      </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
  </section>

  <div class="container pb-24">
    <section id="feature1" class="section feature feature-left bg-none mt-48">
      <div class="container">
        <div class="row">
          <!-- Panel #1 -->
          <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="feature-panel wow fadeInUp animated" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
              <div class="feature--icon">
                <i class="lnr lnr-cog"></i>
              </div>
              <div class="feature--content">
                <h2>Удобный поиск</h2>
                <p>Не нужно просматривать несколько сайтов. На сервисе собраны предложения сотен авиакомпаний и более миллиона мест для проживания в отеле, хостеле, вилле и апартаментах.</p>
              </div>
            </div>
            <!-- .feature-panel end -->
          </div>
          <!-- .col-md-4 end -->

          <!-- Panel #2 -->
          <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="feature-panel wow fadeInUp animated" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
              <div class="feature--icon">
                <i class="lnr lnr-gift"></i>
              </div>
              <div class="feature--content">
                <h2>Выгодные предложения</h2>
                <p>Вы найдете множество популярных вариантов авиаперелета, проживания и отдыха. Сможете купить билеты на рейсы лоукостеров и забронировать хостел.</p>
              </div>
            </div>
            <!-- .feature-panel end -->
          </div>
          <!-- .col-md-4 end -->

          <!-- Panel #3 -->
          <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="feature-panel wow fadeInUp animated" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
              <div class="feature--icon">
                <i class="lnr lnr-heart"></i>
              </div>
              <div class="feature--content">
                <h2>Без комиссий</h2>
                <p>Предоставим вам отличный сервис, для поиска лучшей цены на билеты и размещение, и не берем за это комиссий или скрытых платежей.</p>
              </div>
            </div>
            <!-- .feature-panel end -->
          </div>
          <!-- .col-md-4 end -->
        </div>
        <!-- .row end -->
      </div>
      <!-- .container end -->
    </section>
  </div>

  <div class="main-container container pt-24" id="main-container">
    <!-- Content -->
      <div class="row">
		 <!-- Post -->
        <div class="col-lg-8 blog__content mb-72">

          <!-- Worldwide News -->
          <section class="section">
            <div class="title-wrap title-wrap--line">
              <h2 class="section-title">Новости авиа и туризма, акции и скидки на билеты</h2>
              <a href="/media" class="all-posts-url">больше</a>
            </div>
			<div class="row card-row">

              <!-- Large post -->
                <div class="featured-posts-grid__item featured-posts-grid__item--lg">
                  <div class="col-md-12">
                  <article class="entry card featured-posts-grid__entry">
                    <div class="entry__img-holder card__img-holder">
                      <a href="{{ route('postShow', ['slug'=>$lastpost->slug]) }}">
                        <img src="storage/{{ $lastpost->image }}" alt="{{ $lastpost->title }}" class="entry__img">
                      </a>
                      <a href="media/{{ $lastpost->category->slug }}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">{{ $lastpost->category->name }}</a>
                    </div>

                    <div class="entry__body card__body">
                      <h2 class="entry__title">
                        <a href="{{ route('postShow', ['slug'=>$lastpost->slug]) }}">{{ $lastpost->title }}</a>
                      </h2>
                      <ul class="entry__meta">
                        <li class="entry__meta-author">
                          <span>by</span>
                          <a>{{ $lastpost->user->name }}</a>
                        </li>
                        <li class="entry__meta-date">
                          {{ Date::parse($lastpost->created_at)->format('j F Y') }}
                        </li>
                      </ul>
                    </div>
                  </article>
                  </div>
                </div> <!-- end large post -->

			  @foreach($posts as $post)
			  
                  <div class="col-md-6">
                    <article class="entry card">
                      <div class="entry__img-holder thumb__img-holder" style="background-image: url('/storage/{{ $post->thumbnail('medium') }}'); height:200px;">
                        <a href="{{ route('postShow', ['slug'=>$post->slug]) }}" class="thumb-url">
                          <div class="thumb-container thumb-70" style="display:none;">
                            <img data-src="/storage/{{ $post->thumbnail('small') }}" src="/storage/{{ $post->image }}" class="entry__img lazyload" alt="{{ $post->title }}" />
                          </div>
                        </a>
                        <a href="media/{{ $post->category->slug }}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner {{ $post->category->style }}">{{ $post->category->name }}</a>
                      </div>

                      <div class="entry__body card__body">
                        <div class="entry__header">
                          
                          <h2 class="entry__title">
                            <a href="{{ route('postShow', ['slug'=>$post->slug]) }}">{{ $post->title }}</a>
                          </h2>
                          <ul class="entry__meta">
                            <li class="entry__meta-date">
                              {{ Date::parse($post->created_at)->format('j F Y') }}
                            </li>
                            <li class="entry__meta-author">
                              <span>by</span>
                              <a>{{ $post->user->name }}</a>
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
		  
		@include('include.newsletter')
		
        </div> <!-- end posts -->

        <!-- Sidebar -->
        <div class="col-lg-4 sidebar blog__content sidebar--right">
        
		@include('include.socialside')
		
		<!-- Ad Banner 728 -->
            <div class="text-center pb-48">
                <a href="https://tickets-travel.com/hotels" target="_blank">
                    <img src="img/content/hreserve.png" alt="забронировать отель">
                </a>
            </div>

        <!-- Widget Ad 300 -->
          <aside class="widget widget_media_image">
            <a href="https://misto.travel/?aid=IPII7G&lang=ua" target="_blank">
              <img src="img/content/tourbanner.png" alt="tour_booking">
            </a>
          </aside> <!-- end widget ad 300 -->
			
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

        </div> <!-- end sidebar -->
      </div> <!-- end content -->

    </div> <!-- end main container -->

     <div id="about_c">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="entry__article">
            <p>Туристический онлайн ресурс <b>Tickets Travel</b> делится с вами проверенными туристическими сервисами и полезной информацией для путешественников.</p>
            <p>Здесь найдете <b><a href="https://tickets-travel.com/media">актуальные новости</a></b> авиации и туризма, одним из первых узнаете про <b>акции, скидки и распродажи</b>.</p>
            <p>С помощью формы поиска билетов, вы найдете <b>выгодные варианты перелета</b> не только традиционными авиалиниями, но и предложения лоукостеров (бюджетных авиалиний).</p>
            <p>Рекомендуемые нами сервисы, позволяют <b><a href="https://tickets-travel.com/avia">купить авиабилеты</a></b> по низким ценам без скрытых комиссий, не посещая
              другие сайты, тут же <b><a href="https://tickets-travel.com/hotels">забронировать отель</a></b> на время поездки, арендовать <b>авто</b> или приобрести <b><a href="https://booking.bussystem.eu/ua?partner=2112">билеты на транспорт</a></b>.</p>
            <p>Нет необходимости идти в агентство чтобы купить путевку в теплые страны - на нашем сайте возможно забронировать и оплатить <b><a href="https://misto.travel/?aid=IPII7G&lang=ua" target="_blank">туры онлайн</a></b>.
            </p>
          </div>
        </div>
      </div>
    </div>
@endsection