@extends('www.layouts.app')

@section('title', 'Viviendas Casablanca - Modelos de Casas' )
@section('description', 'Cotizacion del dolar historico, el precio del dolar hoy en Argentina / dolar blue e informal euro, merval argentino' )
@section('img', 'https://www.infobae.com/new-resizer/iJY75A6S0DUQSlfmpG96oLfN17A=/600x400/filters:quality(100)/s3.amazonaws.com/arc-wordpress-client-uploads/infobae-wp/wp-content/uploads/2017/07/19145415/Monedas-y-Billetes-peso-pesos-plata-dinero-1920-23.jpg' )

@section('header_page')
<header class="page-header">
  <div class="container">
    <h1>{{$modelo[0]->titulo}} </h1>
	  <h6>Contamos con una amplia gama de modelos. La casa que soñaste en cuotas fijas y en pesos.</h6>
	  <ul>
	  	<li><a href="#">INICIO</a></li>
	  	<li>MODELOS</li>
	  	<li>{{$modelo[0]->titulo}}</li>
	  </ul>
  </div>
  <!-- end container --> 
</header>
<!-- end page-header -->
@endsection

@section('content')
<section class="content-section no-bottom-spacing">
	 <div class="swiper-container project-slider">
	
    <div class="swiper-wrapper">
	@foreach($modelo[0]->imgs as $img)
      <div class="swiper-slide" style="max-width: 440px;">
        <figure class="project-box"> <a href="#"><img  src="{{ Request::root() }}/images/modelos/{{$img->file}} " alt="Image"></a>
          
        </figure>
	  </div>
	  @endforeach

      <!-- end swiper-slide --> 
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
  <!-- end project-slider --> 
</section>




@endsection

