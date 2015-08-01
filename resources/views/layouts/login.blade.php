<!doctype html>
<html>
<head>
	<title>Sistem Akreditasi - @yield('title')</title>
    @include('includes.head')
</head>
<body class="orange darken-1">
    <div class="container">
    	<div class="row center">
    	<!-- main content here -->
    	@yield('content')
    	</div>
    </div>

    <footer>
    	<!-- footer here -->
    	@include('includes.footer')
    </footer>
</body>
</html>