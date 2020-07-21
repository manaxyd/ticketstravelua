<?
if ($cat_name != ''){
    $pub_name = "$cat_name. ";
} else {
    $pub_name = '';
}

if ($cat_slug != ''){
    $cat_slug = "/$cat_slug";
} else {
    $cat_slug = '';
}
 ?>
@extends('layouts.global')

@section('meta')<title>{{ $pub_name }}Актуальные новости, скидки, полезная информация, советы туристам на Tickets Travel.</title>
  <meta name="description" content="{{ $pub_name }}Новости туризма. Публикации актуальных акций и скидок авиакомпаний на Tickets Travel. Подборка маршрутов и идей для путешествий. Советы туристам."/>
  <link rel="canonical" href="https://tickets-travel.com/media{{ $cat_slug }}" />
@endsection

@section('startpage')


    <div class="main-container container pt-24" id="main-container">
        <div class="title-wrap title-wrap--line">
            <h1 class="section-title">{{ $cat_name }}</h1>
        </div>
        <!-- Content Secondary -->
        <div class="row">
            <div class="col-lg-12 blog__content mb-2">
                <div class="sort__tags" id="sort_cats">
                    <a href="{{ url('/media') }}" rel="tag">Все</a>
                    @foreach($cats as $cat)
                        <a href="{{ url('/media/'.$cat->category->slug.'') }}" rel="tag">{{ $cat->category->name }}</a>
                        @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 blog__content mb-72">
                <!-- Worldwide News -->
                <section class="section">

                    <div class="row card-row">

                        @foreach($publics as $public)
                            <div class="col-md-4">
                                <article class="entry card">
                                    <div class="entry__img-holder thumb__img-holder" style="background-image: url('/storage/{{ $public->thumbnail('medium') }}'); height:200px;">
                                        <a href="{{ route('postShow', ['slug'=>$public->slug]) }}" class="thumb-url">
                                            <div class="thumb-container thumb-70" style="display:none;">
                                                <img data-src="/storage/{{ $public->thumbnail('small') }}" src="/storage/{{ $public->thumbnail('small') }}" class="entry__img lazyload" alt="{{ $public->title }}" />
                                            </div>
                                        </a>
                                        <a href="/media/{{ $public->category->slug }}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner {{ $public->category->style }}">{{ $public->category->name }}</a>
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
                                                    {{ Date::parse($public->created_at)->format('j F Y') }}
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