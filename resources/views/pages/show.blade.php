@extends('main')

@section('title')
    {{$article->title}}
@stop

@section('content')
    <div class="container">
        <h1>{{$article->title}}</h1><br>
        <h5>{{$article->published_at}}</h5><br>
        <p>{{$article->body}}</p><br>
    </div>
@stop
