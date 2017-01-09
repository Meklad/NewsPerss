@extends('admin')

@section('title')
	عرض الموضوعات
@stop

@section('content')
	<table class="table">
		<thead class="thead-inverse">
		<tr>
		  <th>م</th>
		  <th>عنوان الموضوع</th>
		  <th>نص الموضوع</th>
		  <th>تاريخ النشر</th>
		  <th>التعديل</th>
		  <th>الحذف</th>
		</tr>
		</thead>
		<tbody>
			@foreach($articles as $article)
				<tr>
				  <th scope="row">{{ $article->id }}</th>
				  <td><a href="{{url('allArticles', $article->id)}}" target="_blank">{{ substr($article->title, 0, 100) }}</a></td>
				  <td>{{ substr($article->body, 0, 100) }}</td>
				  <td>{{ $article->published_at }}</td>
				  <td><a href="{{ action('ArticleController@edit', $article->id) }}">التعديل</a></td>
				  <td><a href="{{ action('ArticleController@destroy', $article->id) }}">حذف</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>


@stop