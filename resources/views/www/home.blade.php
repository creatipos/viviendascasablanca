@extends('www.layouts.app')

@section('title', 'Viviendas Casablanca' )
@section('description', 'Viviendas Casablanca, viviendas americanas, contruimos tu sueño de casa propia,casas prefabricadas de la mejor calidad en el mercado' )
@section('img', 'https://www.infobae.com/new-resizer/iJY75A6S0DUQSlfmpG96oLfN17A=/600x400/filters:quality(100)/s3.amazonaws.com/arc-wordpress-client-uploads/infobae-wp/wp-content/uploads/2017/07/19145415/Monedas-y-Billetes-peso-pesos-plata-dinero-1920-23.jpg' )

@section('header_page')

<header class="slider white-space-bottom">
  <div class="container">
    <div class="swiper-container slider-content">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="inner">
            <h1>Vivienda <b>Industriales</b></h1>
            
            <a href="#">VER MAS  <i class="lni lni-arrow-right"></i></a> </div>
          <!-- end inner --> 
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <div class="inner">
            <h2>VIVIENDA <b>1038</b></h2>
           
            <a href="#">VER MAS <i class="lni lni-arrow-right"></i></a> </div>
          <!-- end inner --> 
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <div class="inner">
            <h2>VIVIENDA <b>1055</b></h2>
           
            <a href="#">VER MAS <i class="lni lni-arrow-right"></i></a> </div>
          <!-- end inner --> 
        </div>
        <!-- end swiper-slide --> 
      </div>
      <!-- end swiper-wrapper -->
      <div class="controls">
        <div class="swiper-pagination"></div>
        <!-- end swiper-pagination -->
        <div class="button-prev"><i class="lni lni-arrow-left"></i></div>
        <!-- end button-prev -->
        <div class="button-next"><i class="lni lni-arrow-right"></i></div>
        <!-- end button-next --> 
      </div>
      <!-- end controls --> 
      
    </div>
    <!-- end slider-content -->
    <div class="swiper-container slider-main">
      <div class="swiper-wrapper">

      @foreach ($modelos as $modelo)
        <div class="swiper-slide">
          <div class="slide-image" data-background="{{ Request::root() }}/images/modelos/{{ $modelo->imgs[0]->file }}"></div>
          
        </div>
        @endforeach
        <!-- end swiper-slide -->

    
      </div>
      <!-- end swiper-wrapper -->
      <div class="header-box"> <b>15</b> <small>AÑOS DE EXPERIENCIA</small> </div>
      <!-- end header-box --> 
    </div>
    <!-- end slider-main --> 
  </div>
  <!-- end container --> 
</header>
@endsection

@section('content')

<!-- end slider -->
<div class="section-note">Conozca todos los modelos que tenemos para su elección.</div>
<!-- end section-note -->
<section class="content-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="icon-content">
          <figure><img src="{!! asset('consto/') !!}/images/icon01.png" alt="Image"></figure>
          <h3>Casas industrializadas.</h3>
          <small>Se trata de una moderna solución, de probada eficiencia en países desarrollados</small> <a href="#">+</a> </div>
        <!-- end icon-content --> 
      </div>
      <!-- end col-4 -->
      <div class="col-lg-4">
        <div class="icon-content">
          <figure><img src="{!! asset('consto/') !!}/images/icon02.png" alt="Image"></figure>
          <h3>Diseños arquitectónicos</h3>
          <small>Disponemos de diferentes diseños para su futura casa o bien es posible trabajar a partir de un plano de su propiedad.</small> <a href="#">+</a> </div>
        <!-- end icon-content --> 
      </div>
      <!-- end col-4 -->
      <div class="col-lg-4">
        <div class="icon-content">
          <figure><img src="{!! asset('consto/') !!}/images/icon03.png" alt="Image"></figure>
          <h3>Trabajo en equipo</h3>
          <small>El trabajo en conjunto con los nuevos dueños es fundamental en nuestra filosofía de trabajo.</small> <a href="#">+</a> </div>
        <!-- end icon-content --> 
      </div>
      <!-- end col-4 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->


<!-- end content-section -->
<section class="content-section no-spacing">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12">
        <div class="section-title">
          <h6>QUIENES SOMOS</h6>
          <h2>Nosotros</h2>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-12 -->
      <div class="col-lg-6">
        <figure class="side-image"><img src="{!! asset('consto/') !!}/images/familia-min.jpg" alt="Image"></figure>
        <!-- end side-image --> 
      </div>
      <!-- end col-6 -->
      <div class="col-lg-6">
        <div class="side-content">
          <h5>Construimos Sueños</h5>
          <p>Somos una empresa correntina dedicada a brindar soluciones habitacionales a nuestros clientes. Conscientes que una casa es el sueño toda una vida, orientamos allí todo nuestro profesionalismo para satisfacer sus expectativas.
Nuestra experiencia de más de 5 años en el rubro nos permite conocer a fondo el mercado de la construcción y ofrecer un producto de calidad, flexible a cada requerimiento, con un costo muy conveniente.</p>
          <p>In astonished apartments resolution so an it. Unsatiable on by contrasted to <b>reasonable</b> companions an. Amounted repeated as believed in confined juvenile. </p>
          </div>
        <!-- end side-content --> 
      </div>
      <!-- end col-6 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->


<!-- end content-section -->
<section class="content-section white-space-bottom" data-background="#f7f6f1">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="section-title text-left">
          <h6>VICIENDAS CASABLANCA</h6>
          <h2>Obras Completadas</h2>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-7 -->
      <div class="col-lg-5">
        <p>Tenga la casa de sus sueños al mejor precio del mercado. Entre y descubra su futura vivienda.</p>
      </div>
      <!-- end col-5 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container -->
  <div class="swiper-container ">
    <div class="swiper-wrapper">


      <!-- end swiper-slide -->
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
  <!-- end project-slider --> 
</section>
<!-- end content-section -->

<!-- end content-section -->







<section class="content-section no-spacing white-space-top" data-background="#f7f6f1">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="video-box"> <a href="{!! asset('consto/') !!}/videos/video2.mp4" data-fancybox data-width="640" data-height="360" class="play-btn"><i class="lni lni-play"></i></a>
          <video src="{!! asset('consto/') !!}/videos/video2.mp4" autoplay muted loop playsinline></video>
        </div>
        <!-- end video-box --> 
      </div>
      <!-- end col-12 -->
      <div class="col-12">
        <div class="testimonials-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial">
                <p>Muy buen trabajo, hoy mi casa está más bella que antes, incluso luego de soportar la inundación</p>
                <i class="lni lni-quotation"></i>
                
                <h6>Toto Semhan</h6>
                <small>VIVIENDA</small> </div>
              <!-- end testimonial --> 
            </div>
            <!-- end swiper-slide -->
            <div class="swiper-slide">
              <div class="testimonial">
                <p>Les recomiendo, son responsables, trabajadores y cumplidores</p>
                <i class="lni lni-quotation"></i>
                <h6>Ramón Sosa</h6>
                <small>Hogar</small> </div>
              <!-- end testimonial --> 
            </div>
            <!-- end swiper-slide -->

     
          </div>
          <!-- end swiper-wrapper -->
          <div class="controls">
            <div class="button-prev"><i class="lni lni-arrow-left"></i></div>
            <!-- end button-prev -->
            <div class="button-next"><i class="lni lni-arrow-right"></i></div>
            <!-- end button-next --> 
          </div>
          <!-- end controls --> 
        </div>
        <!-- end testimonials-slider --> 
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->




<section class="content-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <h6>REACH UPDATES</h6>
          <h2>Novedades</h2>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-12 -->

      @foreach ($noticias_col1 as $noticia)
      <div class="col-lg-5">
        <div class="recent-news">
          <figure> <img src="{!! asset('images/') !!}/news/{{ $noticia->img }}" alt="Image"> </figure>
          <div class="content"> <small>29 February, 2020</small>
            <h3><a href="{{ Request::root() }}/{{ $noticia->slug }}">{{ $noticia->titulo }}</a></h3>
            <div class="author"> <img src="{!! asset('consto/') !!}/images/author01.jpg" alt="Image"> <span>by <b>Admin</b></span> </div>
            <!-- end author --> 
          </div>
          <!-- end content --> 
        </div>
        <!-- end recent-news --> 
      </div>
      <!-- end col-5 -->
      @endforeach

      
      <div class="col-lg-7">
        <div class="row inner">
        @foreach ($noticias_col2 as $noticia)
          <div class="col-md-6">
            <div class="recent-news">
              <figure> <img src="{!! asset('images/') !!}/news/{{ $noticia->img }}" alt="Image"> </figure>
              <div class="content"> <small>29 February, 2020</small>
                <h3><a href="{{ Request::root() }}/{{ $noticia->slug }}">Challenge I participated in as a guest on all font</a></h3>
                <div class="author"> <img src="{!! asset('consto/') !!}/images/author01.jpg" alt="Image"> <span>by <b>Admin</b></span> </div>
                <!-- end author --> 
              </div>
              <!-- end content --> 
            </div>
            <!-- end recent-news --> 
          </div>
          <!-- end col-4 -->
          @endforeach

        </div>
        <!-- end row inner --> 
      </div>
      <!-- end col-7 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->


<!-- end content-section -->




@endsection
