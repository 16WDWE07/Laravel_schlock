@extends('master')
@section('title', ' - Contact')
@section('content')
	<div class="row">
		<div class="col-xs-12">
		  <h1>Schlocktoberfest <small>The Best Worst Movie Festival Ever !</small></h1>
		  <p>Contact {{ $data['username'] }} at {{ $data['email']}}</p>		  
		</div>
	</div>
@endsection