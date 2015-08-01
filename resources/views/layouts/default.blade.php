<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
	<header>
		<!-- header here -->
    	@include('includes.header')
    </header>

    <div class="container">
    	<div class="row">
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