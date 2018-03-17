<!doctype html>
<html lang="en">
    <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>My blog</title>

	    <!-- Bootstrap core CSS -->
	    <link href="css/app.css" rel="stylesheet">

	    <!-- Custom styles for this template -->
	    <link href="/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>


	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	    <script>window.jQuery || document.write('<script src="./js/jquery-slim.min.js"><\/script>')</script>
	    <script src="/js/popper.min.js"></script>
	    <script src="/js/bootstrap.min.js"></script>
	    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
	    <script src="/js/holder.min.js"></script>
			
		@include ('layouts.nav')
			
			@yield('content')
		

		@include ('layouts.footer')

    </body>
</html>