@extends('master')
@section('title',' - CreateMovie')
@section('content')
<div class="row">
<div class="col-xs-12">
<h1>{{ $state }} Movie</h1>
<form method="post" action="{{ $action }}" enctype="multipart/form-data">
	{{ csrf_field() }}
	@if($state === "Edit")
		<input type="hidden" name="_method" value="PUT">
	@endif
	<div class="form-group">
		<label for="title" class="col-sm-2 control-label">Title</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="title" id="title" placeholder="Troll" value="{{ $state ==='Edit' ? $movie->title : old('title') }}">
			<span class="text-danger">{{ $errors->first('title') }}</span>
		</div>
	</div>

	<div class="form-group">
		<label for="year" class="col-sm-2 control-label">Year</label>
		<div class="col-sm-10">
			<input type="number" class="form-control" name="year" id="year" placeholder="1990" value="{{ $state ==='Edit' ? $movie->year : old('year') }}">
			<span class="text-danger">{{ $errors->first('year') }}</span>
		</div>
	</div>

	<div class="form-group">
		<label for="description" class="col-sm-2 control-label">Description</label>
		<div class="col-sm-10">
			<textarea placeholder="A paragraph about the movie" class="form-control" name="description">{{ $state ==='Edit' ? $movie->description : old('description') }}</textarea>
			<span class="text-danger">{{ $errors->first('description') }}</span>
		</div>
	</div>

	<div class="form-group">
		<label for="poster" class="col-sm-2 control-label">Poster</label>
		<div class="col-sm-10">
			<input type="file" class="form-control" name="poster" id="poster">
			<span class="text-danger">{{ $errors->first('poster') }}</span>
		</div>
	</div>

	<button type="submit" class="btn btn-primary"> {{ $state }} Movie </button>
		
</form>
</div>
</div>

@endsection