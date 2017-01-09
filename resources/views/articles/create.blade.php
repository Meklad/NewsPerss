@extends('admin')

@section('title')
	إنشاء موضوع جديد
@stop

@section('stylesheet')

	<link rel="stylesheet" href="{{asset('css/editor.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Font-Awesome-master/css/font-awesome.min.css') }}">

@stop

@section('editor')
	<script src="{{ asset('js/editor.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#txtEditor").Editor();
        });
    </script>
@stop

@section('content')

	{!! Form::open(['url' => 'articles', 'enctype' => 'multipart/form-data']) !!}

		{!! Form::label('title', 'العنوان', ['class' => 'form-group']) !!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}

		<br>
		
		{!! Form::label('body', 'العنوان', ['class' => 'form-group']) !!}
		{!! Form::textarea('body', null, ['class' => 'form-control']) !!}

		<br>

        {!! Form::label('published_at', 'تاريخ النشر', ['class' => 'form-group']) !!}
        {!! Form::input ('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}

        <br>

		{!! Form::submit('نشر الموضوع', ['class' => 'btn btn-primary form-control']) !!}

		<br>
		<hr>
	{!! Form::close() !!}

	@if ($errors->any())
		<ul class="alert alert-danger">
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
@stop