@extends('layouts.global')

@section('meta')<title>Купить авиабилеты по низким ценам. Найти дешевые билеты на самолет и забронировать перелет.</title>
  <meta name="description" content="Сервис TicketsTravel поможет купить авиабилеты по низким ценам, забронировать перелет без скрытых комиссий и найти билеты на самолет среди выгодных предложений авиакомпаний и агентств."/>
  <meta name="keywords" content="Авиабилеты, билеты, забронировать авиабилет, купить авибилеты, забронировать перелет, найти авиабилеты, дешевые авиабилеты, авиабилеты недорого, бюджетные авиакомпании, билеты на лоукостер, tickets, airline tickets, buy tickets, book tickets, book flight, cheep airline tickets"/>
  <link rel="canonical" href="https://tickets-travel.com/aviabilety" />
@endsection

@section('startpage')
  <section id="home" class="home_parallax" style="background-image: url(/public/img/content/bg/mainbg.jpg);  background-size:cover; background-position: center center;" tabindex="-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="hero-text">
            <div class="block-title" style="font-size: 26px; color: white;">
              <h1>Купить авиабилеты по лучшим ценам!</h1>
            </div>

            <div class="block-subtitle" style="font-family: RobotoCondensed-Regular, sans-serif; font-size: 24px; color: #fcdf18;">
              Выгодные предложения авиакомпаний и агентств
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
              <h2 class="section-title">Новости авиакомпаний, акции и скидки на билеты</h2>
              <a href="/media/aviabilety" class="all-posts-url">больше</a>
            </div>
			<div class="row card-row">
			  
			  @foreach($posts as $post)
			  
                  <div class="col-md-6">
                    <article class="entry card">
                      <div class="entry__img-holder thumb__img-holder" style="background-image: url('/storage/{{ $post->thumbnail('medium') }}'); height:200px;">
                        <a href="{{ route('postShow', ['slug'=>$post->slug]) }}" class="thumb-url">
                          <div class="thumb-container thumb-70" style="display:none;">
                            <img data-src="/storage/{{ $post->thumbnail('small') }}" src="/storage/{{ $post->thumbnail('small') }}" class="entry__img lazyload" alt="{{ $post->title }}" />
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


          <div class="center-block">

            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
          </div>

        </div> <!-- end posts -->
		
		<!-- Sidebar -->
        <div class="col-lg-4 sidebar blog__content sidebar--right">

          @include('include.newsletter')
          @include('include.socialside')

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

        </div> <!-- end sidebar 1 -->
      </div> <!-- content secondary -->      
    </div> <!-- end main container -->
@endsection