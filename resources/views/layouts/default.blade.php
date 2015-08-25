<!doctype html>
<html>
<head>
	<title>Sistem Akreditasi - @yield('title')</title>
    @include('includes.head')
</head>
<body>
	<header>
		<!-- header here -->
    	@include('includes.header')
    </header>

    <div class="container body-content">
    	<div class="row">
    	<!-- main content here -->
    	@yield('content')
    	</div>
    </div>

    <footer>
    	<!-- footer here -->
    	@include('includes.footer')
        @yield('js')
    </footer>
</body>
</html>