@extends('master')
@section('title', ' - New Movie')
@section('content')
	
	<div class="row">
		<h1>{{ $movie->title }}</h1>
		<p>Released Year {{ $movie->year }}</p>
		<p>{{ $movie->description }}</p>
	</div>
	<div class="row"><a href="/movies/{{ $movie->id }}/edit" class="btn btn-default">Edit</a></div>

	<div class="row">
	<form method="post" action="/movies/{{ $movie->id }}">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="DELETE">
		<button class="btn btn-default">Delete</button>
	</form>
	</div>
@endsection