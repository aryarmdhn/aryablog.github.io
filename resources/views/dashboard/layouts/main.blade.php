<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="/css/dashboard.css">
{{-- Trix --}}
	<link rel="stylesheet" type="text/css" href="/css/trix.css">
 	 <script type="text/javascript" src="/js/trix.js"></script>

	  <style>
		  trix-toolbar [data-trix-button-group="file-tools"]{
			  display: none
		  }
	  </style>

	<title>AryaBlog | Dashboard </title>
</head>
<body>


	<!-- SIDEBAR -->
	@include('dashboard.layouts.sidebar')
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
	@include('dashboard.layouts.header')
		<!-- NAVBAR -->
		
		<!-- MAIN -->
		@yield('container2')
		
		<!-- MAIN -->
		@yield('container3')
		
	</section>
	<!-- CONTENT -->
	

	<script src="/js/dashboard.js"></script>
</body>
</html>