<!-- Footer -->
    <footer class="footer footer--dark">
      <div class="container">
        <div class="footer__widgets">
          <div class="row">

            <div class="col-lg-3 col-md-6">

              <aside class="widget widget-logo">
                <a href="https://tickets-travel.com/">
                  <img src="/img/logo.png" srcset="/img/logo.png 1x, /img/logo@2x.png 2x" class="logo__img" alt="TicketsTravel">
                </a>
                <p class="copyright">© 2018 Tickets&Travel</p>
                <p>
                  Абсолютное копирование материалов сайта tickets-travel.com запрещено.
                   Допускается частичное копирование материалов tickets-travel.com, при наличии активной ссылки на источник публикации и кликабельной ссылки на tickets-travel.com, в том числе и в социальных сетях.
                  Ссылка должна быть заметной и выделена цветом.
                  В некоторых случаях, контент tickets-travel.com по моральным и этическим нормам может не подходить для просмотра лицами, не достигшими 16 лет.
                </p>
              </aside>
            </div>

            <div class="col-lg-2 col-md-6">
              <aside class="widget widget_nav_menu">
                <h4 class="widget-title">Ссылки</h4>
                <ul>
                  <li><a href="/media">Новости</a></li>
                  <li><a href="/aviabilety">Авиабилеты</a></li>
                  <li><a href="/hotels">Отели</a></li>
                  <li><a href="https://misto.travel/?aid=IPII7G&lang=ua" rel="nofollow" target="_blank">Туры</a></li>
                  <li><a href="https://booking.bussystem.eu/ua?partner=2112" rel="nofollow" target="_blank">Автобусные билеты</a></li>
                  <li><a href="/sitemap">Карта сайта</a></li>
                </ul>
              </aside>
            </div>  

            <div class="col-lg-3 col-md-6">
              <aside class="widget widget_nav_menu">
                <h4 class="widget-title">Связаться с нами</h4>
                <ul>
                  <li><i class="ui-email newsletter__icon"></i>ticketstravelua@gmail.com</li>
                  <li><i class="ui-flash newsletter__icon"></i>+38 (095) 127-36-07</li>
                  <li><i class="ui-flash newsletter__icon"></i>+38 (096) 112-60-03</li>
                </ul>
              </aside>
              @include('include.newsletter')

            </div>

            <div class="col-lg-4 col-md-6">
              <aside class="widget widget_nav_menu">
                <h4 class="widget-title">Напишите нам</h4>
                {!! NoCaptcha::renderJs() !!}
                {!! Form::open(['url' => 'send-mail']) !!}

                    {{ Form::text('name', 'Имя') }}
                    {{ Form::text('email', 'E-Mail') }}
                    {{ Form::textarea('msg', 'Сообщение') }}
                    {{ Form::submit('Отправить') }}
                    {!! NoCaptcha::display() !!}
                    {{ csrf_field() }}

                {!! Form::close() !!}

              </aside>
            </div>

          </div>
        </div>    
      </div> <!-- end container -->
    </footer> <!-- end footer -->