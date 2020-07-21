@extends('layouts.global')
@section('title')
    Билеты и Путешествия | Tickets and Travel
@endsection
@section('startpage')
    <h1>Send, Form</h1>
    {!! Form::open(['url' => 'send-mail']) !!}
        {{ Form::text('name') }}
        {{ Form::text('email') }}
        {{ Form::textarea('msg') }}
        {{ Form::submit('Send') }}
    {!! Form::close() !!}
@endsection