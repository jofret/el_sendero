<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Callie HTML Template</title>

	<!-- Google font -->
	@include('includes.links')

</head>

<body>
	<!-- HEADER -->
	@include('includes.header')
	<!-- /HEADER -->

	<!-- SECTION -->
	@yield('content')
	<!-- /SECTION -->

	<!-- FOOTER -->
	@include('includes.footer')
	<!-- /FOOTER -->

	@include('includes.scripts')
</body>

</html>
