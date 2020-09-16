
<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
     

    <meta name="robots" content="index,follow" />
    <meta name="description" content="@yield('description')">
    <meta name="author" content="">

    <!-- OpenGraph metadata-->

  <meta property="og:type" content="website" />
  <meta property="og:title" content="@yield('title')" />
  <meta property="og:description" content="@yield('description')" />
  <meta property="og:url" content="{{url()->current()}}" />
  <meta property="og:site_name" content="Dolar hoy" />
  <meta property="og:image" content="@yield('img')" />
  <meta property='fb:admins' content='FB-AppID'/>

<!-- CSS FILES -->
<link rel="stylesheet" href="{!! asset('consto/') !!}/css/lineicons.css">
<link rel="stylesheet" href="{!! asset('consto/') !!}/css/odometer.min.css">
<link rel="stylesheet" href="{!! asset('consto/') !!}/css/fancybox.min.css">
<link rel="stylesheet" href="{!! asset('consto/') !!}/css/swiper.min.css">
<link rel="stylesheet" href="{!! asset('consto/') !!}/css/bootstrap.min.css">
<link rel="stylesheet" href="{!! asset('consto/') !!}/css/style.css">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177344840-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-177344840-1');
</script>

</head>

<body>
        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success" style="z-index: 99;position: fixed;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{Session::get('success')}}
            </div>
        @endif
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v8.0&appId=3068789229840012&autoLogAppEvents=1" nonce="cO5ZNZUH"></script>
<div class="first-transition"></div>
<!-- end first-transition -->
<div class="page-transition"></div>
<!-- end page-transition -->

<div class="search-box">
  <div class="inner">
    <form>
      <input type="search" placeholder="Tyhe here to search">
      <input type="submit" value="SEARCH">
    </form>
  </div>
</div>

<aside class="side-widget">
  <div class="inner">
    <div class="logo"> <a href="/"><img src="{!! asset('consto/') !!}/images/logo_vivi.png" alt="Image"></a> </div>
    <!-- end logo -->
    <div class="hide-mobile">
      <p>"Somos una empresa correntina, ofrecemos servicio de construcción, trabajamos en todo el norte del país, con financiación propia."</p>
      <h6 class="widget-title">Dirección</h6>
      <address class="address">
      <p>Fray Cayetano Rodríguez 1573<br>
      Corrientes, Capital</p>
      <p>+54 0379 502-1355</p>
      </address>
      <h6 class="widget-title">FOLLOW US</h6>
      <ul class="social-media">
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Instagram</a></li>
      </ul>
    </div>
    <!-- end hide-mobile -->
    <div class="show-mobile">


      <div class="site-menu">
        <ul>
          <li><a href="#">Consto</a><i class="lni lni-chevron-down-circle"></i>
            <ul>
              <li><a href="about-company.html">About Company</a></li>
              <li><a href="core-values.html">Core Values</a></li>
              <li><a href="leadership.html">Leadership</a></li>
              <li><a href="our-history.html">Our History</a></li>
              <li><a href="offices.html">Offices</a></li>
              <li><a href="certificates.html">Certificates</a></li>
            </ul>
          </li>
          <li><a href="services.html">Services</a></li>
          <li><a href="projects.html">Projects</a></li>
          <li><a href="news.html">News</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>
      <!-- end site-menu --> 
    </div>
    <!-- end show-mobile --> 
    <small>© 2020 Consto | Industrial Construction Company</small> </div>
  <!-- end inner --> 
</aside>

<nav class="navbar">
  <div class="container">
    <div class="logo"> <a href="/"><img src="{!! asset('consto/') !!}/images/logo_vivi.png" alt="Image"></a> </div>
    <!-- end logo -->

  
    <div class="site-menu">
      <ul>
        <li><a href="#">Quienes Somos</a>
          <ul>
            <li><a href="#">Que hacemos</a></li>
          </ul>
        </li>
        <li><a href="../modelos">Modelos</a></li>
        <li><a href="#">Galeria</a></li>
        <li><a href="#">Novedades</a></li>
        <li><a href="#">Contactanos</a></li>
      </ul>
    </div>

    
    <div class="hamburger">
      <div id="hamburger"> <span></span> <span></span> <span></span> </div>
      <div id="cross"> <span></span> <span></span> </div>
    </div>
    <!-- end hamburger --> 
    <!-- end hamburher --> 
    <a href="#sales-specialist-form" class="navbar-button" data-fancybox><i class="lni lni-mobile"></i> <span>CONTACTANOS</span></a> </div>
  <!-- end container --> 
</nav>



     @yield('header_page')

 

      @yield('content')



<section class="footer-bar">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <figure class="logo"> <img src="{!! asset('consto/') !!}/images/logo_vivi.png" alt="Image"> </figure>
        <h2>COMENCEMOS A CONSTRUIR SU <b>HOGAR</b> </h2>
        <a href="#" class="button">Contactanos<i class="lni lni-arrow-right"></i></a>
        <div class="sales-representive">
          <figure> <img src="https://scontent.fsfn4-1.fna.fbcdn.net/v/t1.0-9/20375678_441993706180958_6416265136045340686_n.jpg?_nc_cat=111&_nc_sid=09cbfe&_nc_eui2=AeEOy2Nb237GQhB937mWf1nD8vOd4tDyJ1ny853i0PInWVnoqDFHYixJuMMTCRUTLjF8NaKyg4vy6oGpyM6bwTgl&_nc_ohc=PZMBougE4IoAX9e0Q9z&_nc_ht=scontent.fsfn4-1.fna&oh=70d13f2f8d3552c3bf19ccbcb022cd7d&oe=5F639385" alt="Image"> </figure>
          Representante de Venta <b>+54 0379 502-1355</b></div>
        <!-- end sales-representive --> 
      </div>
      <!-- end col-12  --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end footer-bar -->


<!-- end footer-bar -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <h6 class="widget-title">Oficinas</h6>
        <address>
        <p>Fray Cayetano Rodríguez 1573<br>
        Corrientes, Capital </p>
        <p>+54 0379 502-1355</p>
        <a href="https://www.google.com/maps/search/?api=1&amp;query=centurylink+field" data-fancybox data-width="640" data-height="360">ENCUÉNTRANOS EN EL MAPA</a>
        </address>
      </div>
      
      <!-- end col-4 -->
      <div class="col-lg-4 col-md-6">
      <h6 class="widget-title">Ubicacion</h6>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d442.45073914898927!2d-58.79636749196552!3d-27.48152568464293!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456b08f16e47a7%3A0xbc04f49c6b85ad2f!2sViviendas%20Casablanca!5e0!3m2!1ses!2sar!4v1600293898198!5m2!1ses!2sar" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <!-- end col-4 -->
      <div class="col-lg-4">
        <h6 class="widget-title">Seguinos en Facebook</h6>
        <div class="fb-page" data-href="https://www.facebook.com/viviendascasablanca/" data-tabs="timeline" data-width="" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/viviendascasablanca/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/viviendascasablanca/">Viviendas Casablanca</a></blockquote></div>
      </div>
      <!-- end col-4 -->
      <div class="col-12">
        <div class="footer-bottom"> <span>© 2020  <a style="color: #fff;" href="https://creatipos.com.ar/" >Diseño web corrientes</a></span>
          <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Twitter</a></li>
          </ul>
        </div>
        <!-- end footer-bottom --> 
      </div>
      <!-- end col-12  --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
  <a href="#" class="scroll-top"><i class="lni lni-arrow-up"></i> <small>Scroll Up</small> </a> 
  <!-- end scroll-top --> 
</footer>
<!-- end footer -->


<div id="sales-specialist-form">
  <form  method="post" action="{{ route('contacto') }}">
    <div class="form-group"> <span>NOMBRE COMPLETO</span>
      <input type="text" name="name">
    </div>
    <!-- end form-group -->
    <div class="form-group"> <span>CELULAR</span>
      <input type="text" name="cel">
    </div>
    <!-- end form-group -->
    <div class="form-group"> <span>E-MAIL</span>
      <input type="email" name="email">
    </div>
    <!-- end form-group -->
    <div class="form-group">
      <input type="submit" value="ENVIAR">
    </div>
    {{ csrf_field() }}
    <!-- end form-group -->
  </form>
</div>

<!-- JS FILES --> 
<script src="{!! asset('consto/') !!}/js/jquery.min.js"></script> 
<script src="{!! asset('consto/') !!}/js/bootstrap.min.js"></script> 
<script src="{!! asset('consto/') !!}/js/swiper.min.js"></script> 
<script src="{!! asset('consto/') !!}/js/fancybox.min.js"></script> 
<script src="{!! asset('consto/') !!}/js/odometer.min.js"></script> 
<script src="{!! asset('consto/') !!}/js/isotope.min.js"></script> 
<script src="{!! asset('consto/') !!}/js/scripts.js"></script>

    @yield('footer')
<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "259320330845276", // Facebook page ID
            whatsapp: "+5403795021355", // WhatsApp number
            call_to_action: "Contactanos", // Call to action
            button_color: "#E74339", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp", // Order of buttons
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
</body>
</html>