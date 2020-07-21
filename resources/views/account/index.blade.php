@extends('layouts.global')

@section('title')User Account | Tickets and Travel
@endsection

@section('startpage')
<div class="main-container container pt-24" id="main-container">
  <!-- post content -->
  <div class="blog__content mb-72">

    <img src="/public/img/content/about/about_bg.jpg" class="page-featured-img">

      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="entry__article">
            <h2>Добро пожаловать, {{ \Auth::user()->name }}</h2>
			<a href="{{ route('logout') }}">Выйти</a>
          </div>
        </div>
      </div>


  </div> <!-- end post content -->
</div>
@endsection