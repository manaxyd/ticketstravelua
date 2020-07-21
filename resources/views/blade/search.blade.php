@extends('layouts.global')

@section('meta')<title>Поиск на Tickets Travel</title>
  <meta name="description" content="Поиск на Tickets Travel"/>
  <meta name="keywords" content="авиабилеты, билеты, отели, туры, прокат авто, Tickets Travel, забронировать авиабилеты, купить авиабилеты, забронировать билеты, купить билеты, билеты на самолет, забронировать отель, хостел, дешевые билеты, билеты недорого, путешествия"/>
  <meta name="robots" content="noindex, nofollow">
@endsection

@section('startpage')
    <div class="main-container container pt-24" id="main-container">
        <div class="title-wrap title-wrap--line">
            <h2 class="section-title">{{ $cat_name }}</h2>
        </div>
        <!-- Content Secondary -->
        <div class="row">
                    <div class="col-lg-12 blog__content mb-72">
                        <div class="sort__tags" id="sort_cats">
                            <i class="ui-th-list"></i>
                            <span class="sort__tags-label">публикации:</span>
                            <a href="{{ url('/media') }}" rel="tag">Все</a>
                            <a href="{{ url('/media/aviabilety') }}" rel="tag">Авиабилеты</a>
                            <a href="{{ url('/media/novosti') }}" rel="tag">Новости</a>
                            <a href="{{ url('/media/podborki') }}" rel="tag">Подборки</a>
                            <a href="{{ url('/media/sobytiya') }}" rel="tag">События</a>
                        </div>

                <!-- Worldwide News -->
                <section class="section">

                    <div class="row card-row">

                        @foreach($publics as $public)

                            <div class="col-md-4">
                                <article class="entry card">
                                    <div class="entry__img-holder thumb__img-holder" style="background-image: url(/storage/{{ $public->image }}); height:200px;">
                                        <a href="{{ route('postShow', ['slug'=>$public->slug]) }}" class="thumb-url">
                                            <div class="thumb-container thumb-70" style="display:none;">
                                                <img data-src="/storage/{{ $public->image }}" src="/storage/{{ $public->image }}" class="entry__img lazyload" alt="" />
                                            </div>
                                        </a>
                                        <a href="/media/{{ $public->category->slug }}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">{{ $public->category->name }}</a>
                                    </div>

                                    <div class="entry__body card__body">
                                        <div class="entry__header">

                                            <h2 class="entry__title">
                                                <a href="{{ route('postShow', ['slug'=>$public->slug]) }}">{{ $public->title }}</a>
                                            </h2>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>by</span>
                                                    <a>{{ $public->user->name }}</a>
                                                </li>
                                                <li class="entry__meta-date">
                                                    {{ Date::parse($public->created_at)->format('j M Y') }}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry__excerpt">
                                            <p>{{ $public->excerpt }}</p>
                                        </div>
                                    </div>
                                </article>
                            </div>

                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <nav class="pagination">
                        {{ $publics->links() }}
                    </nav>


                </section> <!-- end worldwide news -->

                <!-- Post -->
                <div class="col-lg-8 blog__content mb-72">
                </div> <!-- end posts -->

            </div>
        </div> <!-- content secondary -->
    </div> <!-- end main container -->
    <div id="about_c">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="entry__article">
                    <p>
                        Наш туристический ресурс <b>Tickets-Travel.com</b> следит за всем происходящим в области авиации и туризма. Руководствуясь проверенными источниками, мы публикуем актуальную информацию, которая помогает выгодно и интересно путешествовать.
                    </p>
                    <p>
                        На <b>Tickets-Travel.com</b> найдете актуальные новости авиакомпаний, акции и скидки на авиабилеты, выгодные предложения авиакомпаний и агентств, отелей, хостелов, апартаментов, подборки маршрутов и идей для путешествий, интересные события и мероприятия. Сможете воспользоваться сервисами для самостоятельных путешественников, <b>забронировать перелет и проживание</b>, <a href="https://tickets-travel.com/avia">купить билеты на самолет</a> по лучшим ценам, <a href="https://tickets-travel.com/hotels">забронировать отель</a>, приобрести билеты на поезд и автобус, купить тур online без посещения офиса, арендовать автомобиль в любой стране мира и многое другое.
                    </p>
                    <p>
                        Мы выбираем и делимся с вами самым интересным, ценными и полезным контентом.
                    </p>
                    <p>
                        Присоединяйся к нам в <b>социальных сетях</b> и подписывайся на обновления, чтобы быть в курсе новостей авиа и туризма и первым узнавать о выходе новых публикаций.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection