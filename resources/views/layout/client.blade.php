<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;0,600;0,700;1,200;1,700&display=swap" rel="stylesheet">
	<link href="{{ asset('asset/csss/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('asset/csss/bootstrap-icons.css') }}" rel="stylesheet">
	<link href="{{ asset('asset/csss/vegas.min.css') }}" rel="stylesheet">
	<link href="{{ asset('asset/csss/tooplate-barista.css') }}" rel="stylesheet">

	<style>
		:root{
			--mainColor: #339989;
		}

		::-webkit-scrollbar {
			width: 8px;
		}

		::-webkit-scrollbar-track {
			background: transparent;
		}

		::-webkit-scrollbar-thumb {
			background: #7DE2D1;
			/* border-radius: 10px; */
		}

		::-webkit-scrollbar-thumb:hover {
			background: #5ddfc9;
		}

		.navbar-brand-image{
			border-radius: 50%;
		}

		.btn-inout{
			background-color: #339989;
			border-radius: 25px;
			padding: 5px 20px;
			margin: 15px;
			font-size: 16px;
			text-transform: uppercase;
			font-weight: bold;
			color: white;
		}

		.btn-inout:hover{
			color: white;
		}
	</style>

  @stack('css')

</head>

<body>

	<main>
	
		@include('partials.client-navbar')

		@yield('content')

    @include('partials.client-footer')
		
	</main>

	<!-- Include Bootstrap JavaScript (JQuery and Popper.js) -->
  @stack('js')
	<script src="{{ asset('asset/jss/jquery.min.js') }}"></script>
	<script src="{{ asset('asset/jss/bootstrap.min.js') }}"></script>
	<script src="{{ asset('asset/jss/jquery.sticky.js') }}"></script>
	<script src="{{ asset('asset/jss/click-scroll.js') }}"></script>
	<script src="{{ asset('asset/jss/vegas.min.js') }}"></script>
	<script src="{{ asset('asset/jss/custom.js') }}"></script>
</body>

</html>
