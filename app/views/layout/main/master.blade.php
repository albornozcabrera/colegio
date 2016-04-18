<!DOCTYPE html>
<html lang="es">
	<head>
        <meta charset="utf-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Colegio</title>
		@include('layout.main.libraries.style')
	</head>
	<body>
		<div class="page">
			@yield('content')
		</div>	
		@include('layout.main.libraries.script')
	</body>
</html>