@extends('template.app')

@section('content')
<!-- <img src="{{ asset('imagenes/barber.jpg') }}" class="img-fluid mx-auto d-block" width="100%" style="margin-top: -100px"> -->

<div id="carouselExampleIndicators" class="carousel slide mx-auto d-block" data-ride="carousel" style="margin-top: -10px">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="{{ asset('imagenes/barber.jpg') }}" alt="First slide">
			<div class="carousel-caption d-none d-md-block">
			    <h5>Aquí va un título</h5>
			    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, optio vitae repellat suscipit aperiam hic ut, nam aspernatur qui voluptas dolorem magnam natus omnis nulla earum illum unde, aut dignissimos?</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="{{ asset('imagenes/barberia2.png') }}" alt="Second slide">
			<div class="carousel-caption d-none d-md-block">
			    <h5>Aquí va un título</h5>
			    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, optio vitae repellat suscipit aperiam hic ut, nam aspernatur qui voluptas dolorem magnam natus omnis nulla earum illum unde, aut dignissimos?</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="{{ asset('imagenes/barberia3.jpg') }}" alt="Third slide">
			<div class="carousel-caption d-none d-md-block">
			    <h5>Aquí va un título</h5>
			    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, optio vitae repellat suscipit aperiam hic ut, nam aspernatur qui voluptas dolorem magnam natus omnis nulla earum illum unde, aut dignissimos?</p>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
  	</a>
</div>

<div class="" style="background: #fff; width: 100%; padding: 1rem">
    <div class="row justify-content-center" >
        <div class="col-md-12"><br>
        	<h2 style="text-align:center; font-weight: bolder">El sitio especializado en imagen masculina</h2>
            <p style="font-size: 1.2rem; text-align: justify">
            	Servicios y productos de peluquería de alta calidad, diseñados específicamente para hombres. Con nuestro modelo de membresía, por una tarifa anual obtienes servicios de aseo tradicionales, desde cortes de cabello y servicios de barba hasta relajantes M Extras. Servicios siempre sin cita previa! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, perferendis quidem deserunt nemo officia explicabo vitae doloremque tempore fuga, eaque. Sapiente harum cum accusamus quibusdam quidem hic maiores dolore sed! ipsum dolor sit amet, consectetur adipisicing elit. Nulla laboriosam recusandae quia nemo, quas facilis beatae vel officiis cumque quos iusto veniam commodi numquam accusamus, optio modi quisquam, dolorem laborum. ipsum dolor sit amet, consectetur adipisicing elit.
            
        </div>
    </div>
</div>

<div class="row" style=" background: #fff;">
	<div class="col-xl" >
		<img src="{{ asset('imagenes/insta.jpg') }}" class="img-fluid mx-auto d-block" width="100%">
	</div>
	<div class="col-xl">
		<img src="{{ asset('imagenes/face.jpg') }}" class="img-fluid mx-auto d-block" width="100%">
	</div>
</div>

<div class="row" style="padding:5rem; margin-bottom: 5rem; background: #231F20;">
	<div class="col-xl" >
		<h2 style="text-align:center; font-weight: bolder; color: #fff">Lista de precios</h2><br>
	
		<table class="table" style="color: #fff">
		  <thead>
		    <tr>
		      <th scope="col">SERVICIO</th>
		      <th scope="col">NORMAL</th>
		      <th scope="col">SILVER</th>
		      <th scope="col">GOLD</th>
		      <th scope="col">PLATINUM</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th>Corte básico</th>
		      <td>$100</td>
		      <td>$95</td>
		      <td>$90</td>
		      <td>$85</td>
		    </tr>
		    <tr>
		      <th>Corte de pelo incluye lavado de cabello, masaje especial,toalla caliente, arreglando el cabello con una navaja de afeitar recta</th>
		      <td>$200</td>
		      <td>$195</td>
		      <td>$190</td>
		      <td>$185</td>
		    </tr>
		    <tr>
		      <th>Afeitado estilo americano incluye masaje facial y toallas calientes</th>
		      <td>$150</td>
		      <td>$145</td>
		      <td>$140</td>
		      <td>$130</td>
		    </tr>
		  </tbody>
		</table>
	</div>
</div>


@endsection