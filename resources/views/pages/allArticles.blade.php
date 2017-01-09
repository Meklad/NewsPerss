@extends('main')

@section('title')
    المقالات
@stop

@section('content')
    <div class="container">
        <h1>جميع المقالات</h1>
        <hr>

        @foreach($articles as $article)
            <h2><a href="{{url('allArticles', $article->id)}}">{{$article->title}}</a></h2><br>
            <div class="body">
                {{$article->body}}<br><br>
            </div>
            {{$article->published_at}}<br><br>
        @endforeach
    </div>
@stop
