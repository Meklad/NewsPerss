@extends('admin')

@section('title')
	تعديل الموضوع
@stop

@section('content')
	<h1>تعديل: <small>{!! $article->title !!}</small> </h1>

	{!! Form::model($article, ['method'	=> 'post', 'action' => ['ArticleController@update', $article->id]]) !!}
		{!! Form::label('title', 'العنوان', ['class' => 'form-group']) !!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}

		<br>
		
		{!! Form::label('body', 'الموضوع', ['class' => 'form-group']) !!}
		{!! Form::textarea('body', null, ['class' => 'form-control']) !!}

		<br>

		{!! Form::label('published_at', 'تاريخ النشر', ['class' => 'form-group']) !!}
		{!! Form::input ('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}

		<br>

		{!! Form::submit('نشر الموضوع', ['class' => 'btn btn-primary form-control']) !!}

		<br>
		<hr>
	{!! Form::close() !!}
@stop