<?php
$this->load->view('cabecera');
?>

<style type="text/css">

.jcarousel li {
   
    border: 0px solid #fff!important;
  
}

</style>

  
<!--   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Promoción</h4>
      </div>
      <div class="modal-body">
       <img style="    width: 100%;" src="<?php echo HTTP_assets ?>img/nuevo2018.jpg">
      </div>
    </div>
  </div>
</div>  -->


    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">HOGAR, DULCE HOGAR</div>
                <div style="font-style: italic;font-size: 18px;">Conozca todos los modelos que tenemos para su elección.</div>
             
            </div>

            


        </div>
    </header>

    <!-- Services Section -->
    <section  style="margin-top: -130px;padding: 0px;" id="services">
        <div class="container">
                <!-- Carousel
    ================================================== -->

    <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                    <?php
$i=0;
foreach ($modelos as $key => $modelos_i) {

$ci = &get_instance();



$imagenes = $ci->general->imgModelos($modelos_i['id_modelos']);

//print_r($imagenes);


if ($i==0) {
  
  $class="";
}else{

  $class="iten";
}
?>
                <li>
        <div class="item <?=$class?> active">
               <div class="col-sm-12 col-md-12"> 
  <a class="anchor" href="" data-url="'.$noticia['url'].'" data-toggle="modal" data-target="#leer"> 
    <span id="imagen" style="background-image: url(<?php echo baseurlname.'uploads/imagenes/' ?><?=$imagenes[0]['nombre']?>);"></span>
   <!--  <img style="  width: 100%;" src="<?php echo baseurlname.'uploads/imagenes/' ?><?=$modelos_i['nombre']?>" alt=""> -->

  </a>

    <div class="caption">
      <p style="font-size: 18px;text-align: justify;"><?=$modelos_i['nombre_m']?></p>
      <p style="    font-size: 13px;text-align: justify;"><?=strip_tags(substr($modelos_i['descripcion'],0,120))?>...</p>
     <div style="width: 60px;"><HR></div>
       <p style="font-size: 13px;text-align: -webkit-left;"><a href="<?php echo baseurlname;?>modelo/<?=$modelos_i['id_modelos']?>.html">VER MÁS</a></p>
     </div>
                </div>
 
        </div>
</li>
<?php
$i++;
}
?>
                      
                
                    </ul>
                </div>

                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>

                <p class="jcarousel-pagination"></p>
            </div>


 <!--   <div id="myCarousel" class="carousel slide" data-ride="carousel">
 
      <div class="carousel-inner" role="listbox">

<?php
$i=0;
foreach ($modelos as $key => $modelos_i) {

if ($i==0) {
  
  $class="";
}else{

  $class="iten";
}
?>
                
        <div class="item <?=$class?> active">
               <div class="col-sm-12 col-md-4"> 
  <a class="anchor" href="" data-url="'.$noticia['url'].'" data-toggle="modal" data-target="#leer"> 
    <span id="imagen" style="background-image: url(<?php echo baseurlname.'uploads/imagenes/' ?><?=$modelos_i['nombre']?>);"></span>
  <img style="  width: 100%;" src="<?php echo baseurlname.'uploads/imagenes/' ?><?=$modelos_i['nombre']?>" alt="">

  </a>

    <div class="caption">
      <p style="font-size: 18px;text-align: justify;"><?=$modelos_i['nombre_m']?></p>
      <p style="    font-size: 13px;text-align: justify;"><?=substr($modelos_i['descripcion'],0,120)?>...</p>
     <div style="width: 60px;"><HR></div>
       <p style="font-size: 13px;text-align: -webkit-left;"><a href="<?php echo baseurlname;?>modelo/<?=$modelos_i['id_modelos']?>.html">VER MÁS</a></p>
     </div>
                </div>
 
        </div>

<?php
$i++;
}
?>
  
    
      </div>

      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">‹</a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">›</a>
    </div> /.carousel -->
            <div class="row">
        

<div class="col-lg-12 text-center">
                                <div id="success"></div>
                                   
                                   <a href="modelos.html" class="btn btn-lg" >Ver Más Modelos</a>
                                 
                                <br><br><br><br><br>
                            </div>


          
                <div class="col-lg-8 ">
                    <h2 class="section-heading">Nosotros</h2>
                   <div style="width: 82px;"><hr></div>
                    <h3 style="line-height: 25px;" class="section-subheading text-muted">Somos una empresa correntina dedicada a brindar soluciones habitacionales a nuestros clientes. Conscientes que una casa es el sueño toda una vida, orientamos allí todo nuestro profesionalismo para satisfacer sus expectativas.
<br>Nuestra experiencia de más de 5 años en el rubro nos permite conocer a fondo el mercado de la construcción y ofrecer un producto de calidad, flexible a cada requerimiento, con un costo muy conveniente. 
 </h3>

                </div>

                 <div class="col-lg-4 text-center">
                  <img style="    padding-bottom: 10px;" src="<?php echo HTTP_assets ?>img/casco_home.png">
                </div>
            </div>
         
        </div>
    </section>



    <!-- Galeria Section -->
    <section id="contact" class="gal">
        <div class=""> </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 style="margin-top:25px" class="section-heading">Galerías</h2>
                   <div style="width: 100px;"><hr></div>
                </div>
            </div>
            <div class="row">
 <!-- Carousel
    ================================================== -->
    <div id="myCarousel2" class="carousel slide" data-ride="carousel">
 
      <div class="carousel-inner" role="listbox">

<?php
$i=0;
foreach ($galerias as $key => $galeriasa) {
if ($i==0) {
  
  $class="";
}else{

  $class="iten";
}
?>
            <div class="item <?=$class?> active">
     <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="<?php echo baseurlname;?>galeria/<?=$galeriasa['id']?>.html" class="portfolio-link" data-toggle="modal">
                      <span id="imagen" style="background-image: url(<?php echo baseurlname.'uploads/imagenes/'?><?=$galeriasa['nombre']?>);"></span>
                       <!--  <img src="<?php echo baseurlname.'uploads/imagenes/'?><?=$galeriasa['nombre']?>" class="img-responsive" alt=""> -->
                    </a>
                  
                </div>
        </div>
<?php
$i++;
}
?>
      

    



    
      </div>

      <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">‹</a>
      <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">›</a>
    </div><!-- /.carousel -->


          
               
                
             
            </div>
        
        </div>
    </section>

    <!-- Historias Section -->
    <section id="about" style="    padding-bottom: 50px;" >
        <div class="container">
             <div class="row">
                <div class="col-lg-12">
                    <h2 style="margin-top:25px" class="section-heading">Historias</h2>
                   <div style="width: 80px;"><hr></div>
                </div>
            </div>
            <div class="row">
                <div style="    margin-top: 40px;" class="col-lg-9 col-centered">
                       <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


  <!-- Wrapper for slides -->
  <div class="carousel-inner text-center" role="listbox">
    <div class="item active text-center">
        <p style="    font-style: Italic;" class="text-center">Muy buen trabajo, hoy mi casa está más bella que antes, incluso luego de soportar la inundación</p>
     
      <img style="    width: 100px;
    height: 100px;display: initial;" class="img-circle img-responsive" src="<?php echo HTTP_assets ?>TotoSemhan.png" alt="...">
   <p style="font-weight: bold;font-size: 15px;">Toto Semhan</p>
    </div>

   <div class="item  text-center">
        <p style="    font-style: Italic;" class="text-center">Les recomiendo, son responsables, trabajadores y cumplidores</p>
     
      <img style="    width: 100px;
    height: 100px;display: initial;" class="img-circle img-responsive" src="http://www.public-domain-photos.com/free-stock-photos-4/people/face-12.jpg" alt="...">
   <p style="font-weight: bold;font-size: 15px;">Ramón Sosa</p>
    </div>


   
  </div>

  <!-- Controls -->
  <a class="left carousel-control" style="color: #000;display: block;background: none;" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" style="color: #000;display: block;background: none;"  href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 
                </div>
            </div>
        </div>
    </section>



        <section id="contac" class="text-center cont">
        <div class="container">
       <div class="intro-text pading">
                <div class="intro-lead-in">NO ESPERE MÁS</div>
                <div class="intro-heading">Esperamos saber de Ud. y asi comenzar a construir su sueño...</div>
                <a href="<?php echo baseurlname;?>contacto" class="page-scroll btn btn-xl">CONTÁCTENOS</a>
            </div>
           
        </div>
    </section>




<?php
echo $this->load->view('pie');
?>