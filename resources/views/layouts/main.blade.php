<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="/css/style.css">

	<title>AryaBlog</title>
</head>
<body>


	<!-- SIDEBAR -->
	@include('partials.sidebar')
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">

    {{-- navbar --}}
    @include('partials.bar')
    {{-- navbar --}}

		<!-- MAIN -->
		

		
      @yield('container')
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="/js/app.js"></script>
</body>
</html>