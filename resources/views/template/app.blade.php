<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Barbería Vikingo</title>
    <link rel="icon" href="{{ asset('imagenes/tijeras.png') }}">
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('plugins/Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/Toastr/css/toastr.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/Sweetalert/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/DataTables/datatables.min.css') }}" rel="stylesheet">
    <style>
        body{
           overflow-x: hidden;
        }
        .navbar{
        	position: fixed;
  			top: 0; 
  			width: 100%;
  			background: #231F20;
            padding: 20px
        }
        .nav-link{
        	color: #fff;
        	font-size: 1.1rem;
        	font-weight: bold;
        }

        .nav-link:hover{
        	color: #bcbcbc;
        }

        main {
            margin-top:100px;
        }
    </style>
    @yield('css')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg">
  			<!-- <a class="navbar-brand" href="#">Navbar</a> -->
  			<img src="{{ asset('imagenes/tijeras.png') }}" alt="" width="50px" style="background: #fff">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Membresías</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Servicios</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Productos</a>
					</li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Quienes somos</a>
                    </li>
				</ul>
			</div>
		</nav>
        

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>

<script src="{{ asset('plugins/jQuery/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('plugins/Bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('plugins/Bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/Font_awesome/js/all.js') }}"></script>
<script src="{{ asset('plugins/Toastr/js/toastr.min.js') }}"></script>
<script src="{{ asset('plugins/Sweetalert/sweetalert.min.js') }}"></script>
<script src="{{asset('plugins/DataTables/datatables.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();

        $("body").on('focusout', '.mayuscula', function(field){
            $(this).val($(this).val().toUpperCase());
        });
    });  
</script>

@yield('script')