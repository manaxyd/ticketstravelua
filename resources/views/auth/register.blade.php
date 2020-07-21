@extends('layouts.global')
@section('title')
    Регистрация | Tickets and Travel
@endsection
@section('robots')
    <meta name="robots" content="noindex, nofollow">
@endsection
@section('loginform')
<div class="row justify-content-center">
<form class="form-signin" method="post">
    {!! csrf_field() !!}
    <label for="inputName" class="sr-only">Name</label>
    <input type="text" id="inputName" name="name" class="form-control" placeholder="Name" required autofocus>
    <label for="inputEmail" class="sr-only">Email</label>
    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required autofocus>
    <label for="inputPassword" class="sr-only">Пароль</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Пароль" required>
    <label for="inputPassword" class="sr-only">Повторить пароль</label>
    <input type="password" id="inputPassword" name="password_confirmation" class="form-control" placeholder="Повторить пароль" required>
    {!! NoCaptcha::display() !!}
    <br>
    <button class="btn btn-lg btn-color btn-button" type="submit">зарегистрироваться</button>
</form>
</div>
@endsection

