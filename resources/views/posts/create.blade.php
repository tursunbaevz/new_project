@extends ('layouts.master')


@section('content')
	<div class="container" style="margin-top: 5em;">
		<h1>Create page</h1>
		<hr >
		<form method="POST" action="/posts">

			{{ csrf_field() }}	
	 
		    <div class="form-group">

			    <label for="title">Title</label>
			    <input name="title" type="text" class="form-control" id="title" placeholder="title" style="width: 50%;">

		 	</div>

		    <div class="form-group">

			    <label for="title">Header</label>
			    <input name="header" type="text" class="form-control" id="header" placeholder="header" style="width: 50%;">

		 	</div>

		    <div class="form-group">

		    	<label for="body">Body</label>
		    	<textarea name="body" id="body" placeholder="type..." class="form-control" rows="3" style="width: 50%;"></textarea>

		  	</div>

			
			@include('layouts.errors')
			

			<div class="form-group">

			  <button type="submit" class="btn btn-success">Publish</button>

			</div>

		</form>
	</div>
@endsection



