<aside class="widget widget_mc4wp_form_widget">
    <h4 class="widget-title">Получать новости и обновления</h4>
    <p class="newsletter__text">

        Подпишитесь на рассылку
    </p>
    <form class="mc4wp-form" method="post" action="{{ url('newsletter') }}">
        {!! csrf_field() !!}
        <div class="mc4wp-form-fields">
            <div class="form-group">
                <input type="email" name="email" placeholder="Введите свой email" required="">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-lg btn-color" value="получать">
            </div>
        </div>
    </form>
</aside>