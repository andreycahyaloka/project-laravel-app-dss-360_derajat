<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	@include('layouts._head')
	@include('layouts._stylesheets')
</head>

<body>
	@include('layouts._nav')
	@include('layouts._aside')

		<!-- content -->
		@yield('content')

	@include('layouts._scripts')
</body>
</html>