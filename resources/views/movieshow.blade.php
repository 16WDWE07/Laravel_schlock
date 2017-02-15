@extends('master')
@section('title', ' - New Movie')
@section('content')
	
	<div class="row">
		<h1>{{ $movie->title }}</h1>
		<p>Released Year {{ $movie->year }}</p>
		<p>{{ $movie->description }}</p>
	</div>
@endsection