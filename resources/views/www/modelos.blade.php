@extends('www.layouts.app')

@section('title', 'Viviendas Casablanca - Modelos de Casas' )
@section('description', 'Cotizacion del dolar historico, el precio del dolar hoy en Argentina / dolar blue e informal euro, merval argentino' )
@section('img', 'https://www.infobae.com/new-resizer/iJY75A6S0DUQSlfmpG96oLfN17A=/600x400/filters:quality(100)/s3.amazonaws.com/arc-wordpress-client-uploads/infobae-wp/wp-content/uploads/2017/07/19145415/Monedas-y-Billetes-peso-pesos-plata-dinero-1920-23.jpg' )

@section('header_page')
<header class="page-header">
  <div class="container">
    <h1>Modelos</h1>
	  <h6>Contamos con una amplia gama de modelos. La casa que soñaste en cuotas fijas y en pesos.</h6>
	  <ul>
	  	<li><a href="#">INICIO</a></li>
	  	<li>MODELOS</li>
	  </ul>
  </div>
  <!-- end container --> 
</header>
<!-- end page-header -->
@endsection

@section('content')

<section class="content-section ">
  <div class="container">
    <div class="row">
		<div class="col-12">
<!-- 			<ul class="isotope-filter">
   			<li data-filter="*" class="current">ALL</li>
          	<li data-filter=".one">BUILDING</li>
          	<li data-filter=".two">COMMERCIAL</li>
          	<li data-filter=".three">VILLAS</li>
   		</ul> -->
		</div>
		<!-- end col-12 -->
	  	<div class="col-12">
			<ul class="projects">
			@foreach($modelos as $modelo)
				<li class="one">
				 <figure class="project-box"> <a href="{{ Request::root() }}/modelo/{{$modelo->id}}"><img src="{{ Request::root() }}/images/modelos/{{ $modelo->imgs[0]->file}}" alt="Image"></a>
          <figcaption>
            <h5>{{$modelo->titulo}}</h5>
          </figcaption>
        </figure>
					<!-- end project-box -->
				</li>
				<!-- end li -->

				@endforeach



		
			</ul>
		</div>
		<!-- end col-12 -->
	  </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>



@endsection

