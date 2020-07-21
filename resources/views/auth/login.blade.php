@extends('layouts.global')
@section('title')
    Login | Tickets and Travel
@endsection
@section('robots')
    <meta name="robots" content="noindex, nofollow">
@endsection
@section('loginform')
<div class="row justify-content-center">
<form class="form-signin" id="contact-form" method="post">
    {!! csrf_field() !!}
    <label for="inputEmail" class="sr-only">Email</label>
    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required autofocus>
    <label for="inputPassword" class="sr-only">Пароль</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Пароль" required>
    {!! NoCaptcha::display() !!}
    <ul class="checkbox">
                  <li>
                    <input type="checkbox" class="checkbox-input" name="remember" id="checkbox1" value="1">
                    <label for="checkbox1">Запомнить меня</label>
                  </li>
	</ul>
	<br>
    <button class="btn btn-lg btn-color btn-button" type="submit">войти</button>
	<a href="/register" class="btn btn-lg btn-light"><span>Регистрация</span></a>
	<div id="msg" class="message"></div>
	
</form>
</div>
@endsection
