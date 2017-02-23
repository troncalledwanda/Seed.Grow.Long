</!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Seed.Grow.Long.</title>
			

			<link rel="stylesheet" href="/css/style.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="{{ URL::asset('css/vuestyle.css') }}">
			@yield('page-specific-styles')

			<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
			@yield('page-specific-fonts')

			<script type="text/javascript" src="{{ URL::asset('js/vue.js') }}"></script>
			@yield('page-specific-frameworks')



		
		</head>



		<body>

		<!-- header -->
	<header class="site-header">
	  	<div class="logolocation"><img src="/images/4f083953b53e8.png" width="55px" height="55px" /></div>
	  	 <ul class="linkicons linkicons--colorwhite">
	    		<li><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></li>
	    		<li><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></li>
	    		<li><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></li>
	    		<li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></li>
	    		<li><i class="fa fa-circle-o-notch" aria-hidden="true"></i></li>
	    		<li><i class="fa fa-circle-o" aria-hidden="true"></i></li>
	  	 </ul>
	 </header>

			@yield('content')

			<!-- footer -->

			<footer class="site-footer">
			   	<ul class="linkicons linkicons--colorwhite">
			  		<li><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
			  		<li><i class="fa fa-twitter-square" aria-hidden="true"></i></li>
			  		<li><i class="fa fa-envelope" aria-hidden="true"></i></li>
			  	</ul>
			</footer>
			@yield('page-specific-scripts')

		</body>

</html>