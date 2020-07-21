<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <title>{{ $post->seo_title }}</title>
  <meta name="robots" content="all">
  <meta name="description" content="{{ $post->meta_description }}">
  <link rel="canonical" href="https://tickets-travel.com/post/{{ $post->slug }}" />
  <meta name="csrf-token" content="{{ csrf_token() }}"/>
  <meta name="google-site-verification" content="9mhJN_DnJ81W-p77KHNocS-PcTK_G2wDCBgNfRdLAjg" />

  <meta property="og:image" content="https://tickets-travel.com/storage/{{ $post->image }}"/>
  <meta property="og:image:secure_url" content="https://tickets-travel.com/storage/{{ $post->image }}" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:image:alt" content="{{ $post->title }}" />


  <meta property="og:locale" content="uk-UA" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="{{ $post->seo_title }}" />
  <meta property="og:description" content="{{ $post->meta_description }}" />
  <meta property="og:url" content="https://tickets-travel.com/post/{{ $post->slug }}" />
  <meta property="og:site_name" content="Tickets-Travel.com" />
  <meta property="og:see_also" content="https://tickets-travel.com">
  <meta property="article:publisher" content="https://www.facebook.com/TICKETSTRAVELcom">
  @foreach($tags as $tag)
    <meta property="article:tag" content="{{ $tag }}" />
  @endforeach
  <meta property="article:section" content="{{ $post->category->name }}" />
  <meta property="article:published_time" content="{{ $post->created_at }}" />
  <meta property="article:modified_time" content="{{ $post->updated_at }}" />
  <meta property="og:updated_time" content="{{ $post->updated_at }}" />


  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700%7CSource+Sans+Pro:400,600,700' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Exo+2:400,400i,700,700i|Noto+Sans:400,400i,700,700i|Roboto:400,400i,500,500i,700,700i|Source+Sans+Pro:400,400i,600,600i&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">

  <!-- Css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ URL::asset('css/font-icons.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('css/iconic.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="https://tickets-travel.com/img/ticketstravel.ico">

  <!-- Lazyload (must be placed in head in order to work)  -->
  <script src="{{ URL::asset('js/lazysizes.min.js') }}"></script>

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

    <div class="main-container container pt-16" id="main-container">
      <div class="col-lg-12 blog__content">
            <div class="single-post__entry-header entry__header">
              <a href="/media/{{ $post->category->slug }}" class="entry__meta-category entry__meta-category--label entry__meta-category--green">{{ $post->category->name }}</a>

              <div class="page-header p-0">
                <h1 class="single-post__entry-title text-center">
                  {{ $post->title }}
                </h1>
              </div>

              <div class="entry__meta-holder">
                <ul class="entry__meta">
                  <li class="entry__meta-date">
                    <i class="ui-clock"></i>
                    {{ Date::parse($post->created_at)->format('j F Y') }}
                  </li>
                </ul>

                <ul class="entry__meta">
                  <li class="entry__meta-views">
                    <i class="ui-eye"></i>
                    <span></span>
                  </li>
                  <li class="entry__meta-comments">
                    <a>
                      <i class="ui-chat-empty"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div> <!-- end entry header -->
      </div>
      <!-- Content -->
      <div class="row">
            
        <!-- post content -->
        <div class="col-lg-8 blog__content mb-72">
          <div class="content-box px-2">

            <!-- standard post -->
            <article class="entry mb-0">
              <div class="entry__img-holder">
                <img src="/storage/{{ $post->image }}" alt="{{ $post->title }}" class="entry__img">
              </div>
              <div class="entry__article-wrap">
                <div class="entry__article">
                  {!! $post->body !!}
                  
                  <!-- tags -->
                  <div class="entry__tags">
                    <i class="ui-tags"></i>
                    <span class="entry__tags-label">Tags:</span>
                    @foreach($tags as $tag)
                    <a href="/tag/{{ trim($tag) }}" rel="tag">{{ $tag }}</a>
                    @endforeach

                  </div> <!-- end tags -->
				  
				  

                </div> <!-- end entry article -->
              </div> <!-- end entry article wrap -->
            </article> <!-- end standard post -->
          </div> <!-- end content box -->

          <!-- prev next nav -->
          <nav class="entry-navigation">
            <div class="clearfix">
              @if (isset($previous))
                <div class="entry-navigation--left">
                  <a href="/post/{{ $previous->slug }}" rel="next">
                    <i class="ui-arrow-left"></i>
                    <span class="entry-navigation__label">Предыдущий пост</span>
                    <div class="entry-navigation__link">
                      {{ $previous->title }}
                    </div>
                  </a>
                </div>
              @endif
              @if (isset($next))
                <div class="entry-navigation--right">
                  <a href="/post/{{ $next->slug }}" rel="prev">
                    <span class="entry-navigation__label">Следующий пост</span>
                    <i class="ui-arrow-right"></i>
                    <div class="entry-navigation__link">
                      {{ $next->title }}
                    </div>
                  </a>
                </div>
              @endif
            </div>
          </nav> <!-- end prev next nav -->
		  
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
          </div>
            
            <!-- Comments -->
            <!-- Comment Form -->
            <div id="disqus_thread"></div>
			<script>

			/**
			*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
			*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
			
			var disqus_config = function () {
			this.page.url = '{{ Request::url() }}';  // Replace PAGE_URL with your page's canonical URL variable
			this.page.identifier = '{{ $post->id }}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
			};
			
			(function() { // DON'T EDIT BELOW THIS LINE
			var d = document, s = d.createElement('script');
			s.src = 'https://ticketstravel.disqus.com/embed.js';
			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
			})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			<!-- end comment form -->
			<!-- end comments -->


        </div> <!-- end post content -->

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

          <!-- TMD -->
          <script>document.tmdwdgt1 = {"hide_logo": undefined,"widget_type": "search","widget_tab": "flights","theme": "light_gray","lang": "RU","aff": "ticktravel"};</script>
          <script type="text/javascript" src="https://cdn.tripmydream.com/wind/widgets/wdgt.js"></script>
          <div class="tmd-wdgt" data-config="tmdwdgt1"></div>
          <!-- END TMD -->
		  
		  <!-- Widget Ad 300 -->
          <aside class="widget widget_media_image">
            <a href="//misto.travel/?aid=IPII7G&lang=ua" target="_blank">
              <img src="/img/content/tourbanner.png" alt="tour_booking">
            </a>
          </aside> <!-- end widget ad 300 -->
		  
		  <!-- Widget Ad 300 -->
          <aside class="widget widget_media_image">
            
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



      <!-- Carousel posts -->
      <section class="section mb-0">
        <div class="title-wrap title-wrap--line title-wrap--pr">
          <h3 class="section-title">еще новости</h3>
        </div>

        <!-- Slider -->
        <div id="owl-posts" class="owl-carousel owl-theme owl-carousel--arrows-outside">
          @foreach($posts as $post)
            <article class="entry thumb thumb--size-1">
              <div class="entry__img-holder thumb__img-holder" style="background-image: url('/storage/{{ $post->image }}');">
                <div class="bottom-gradient"></div>
                <div class="thumb-text-holder">
                  <h2 class="thumb-entry-title">
                    <a href="{{ route('postShow', ['slug'=>$post->slug]) }}">{{ $post->title }}</a>
                  </h2>
                </div>
                <a href="{{ route('postShow', ['slug'=>$post->slug]) }}" class="thumb-url"></a>
              </div>
            </article>
          @endforeach

        </div> <!-- end slider -->
      </section> <!-- end carousel posts -->
    </div> <!-- end main container -->
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
<script src="{{ URL::asset('js/jquery.sticky-kit.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.newsTicker.min.js') }}"></script>
<script src="{{ URL::asset('js/modernizr.min.js') }}"></script>
<script src="{{ URL::asset('js/mainscripts.js') }}"></script>

</body>
</html>