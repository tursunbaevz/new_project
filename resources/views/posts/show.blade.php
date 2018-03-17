@extends ('layouts.master')

@section('content')
	<div class="container" style="margin-top: 5em;">
		<h1> {{ $post->title }} </h1>


		<p> {{ $post->body }} </p>

	</div>

@endsection