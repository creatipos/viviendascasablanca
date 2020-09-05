<?php
$this->load->view('cabecera');

?>

    <!-- Header -->
    <header class="dos">
        <div class="container">
            <div class="intro-text2">
            
             
            </div>

            


        </div>
    </header>

  

    <!-- Historias Section -->
    <section id="about" >
        <div class="container">
    
            <div class="row">

              <br>
              <br>
            
            <div class="col-sm-12 col-md-6"> 
       
    <div class="row">
<?php if(!empty($modelo['img'])){ 

$i=1;
foreach ($modelo['img'] as $key => $img_n) {


if ($i==1) {

echo ' <div class="col-lg-12 col-md-12 col-xs-12 thumb">
            <a class="thumbnail" href="#" data-image-id="'.$i.'" data-toggle="modal" data-title="" data-caption="Some lovely red flowers" data-image="'.baseurlname.'uploads/imagenes/'.$img_n['nombre'].'" data-target="#image-gallery">
                <img class="img-responsive" src="'.baseurlname.'uploads/imagenes/'.$img_n['nombre'].'" alt="Short alt text">
            </a>
           </div>';

}else{


echo ' <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="'.$i.'" data-toggle="modal" data-title="" data-caption="If you sponsor me, I can drive this car" data-image="'.baseurlname.'uploads/imagenes/'.$img_n['nombre'].'" data-target="#image-gallery">
                <img class="img-responsive" src="'.baseurlname.'uploads/imagenes/'.$img_n['nombre'].'" alt="A alt text">
            </a>
        </div>';



}


$i++;
}


} 



?>
  
           
         


        
            </div>
            </div>


            <div class="col-sm-12 col-md-6"> 
          
                    <h2 style="margin-top:25px" class="section-heading">  <?php echo $modelo['cms'][0]['nombre_m']; ?></h2>
                  <p style="color: #C10000;font-weight: 600;font-size: 14px;text-align: -webkit-left;">Descripcion General</p>
                   
                   <p>  <?php echo $modelo['cms'][0]['descripcion']; ?></p>

                   <a href="<?php echo baseurlname;?>contacto" class="page-scroll btn btn-xl">CONTÁCTENOS</a>
         
            </div>






            </div>
        </div>
    </section>
<section id="about" >
        <div class="container">
    
            <div class="row">

             <div style="  padding-top: 120px;  text-align: -webkit-center;" class="col-lg-12">
                    <h2 class="section-heading">Características</h2>
                   <div style="width: 100px;"><hr ></div>
                <p>La fabricación de nuestras viviendas se realiza según las siguientes características técnicas:</p>
                <br>
<br><br>
<br>
                </div>

                <div class="col-lg-6">
 <div style="padding-bottom: 10px;" class="caption">
      <p style="color:#000;font-weight: 400;text-align: justify;font-size: 15px;    margin-bottom: 0;">Contrapiso (PLATEA): A cargo del solicitante</p>
      <p style="color: #999!important;font-size: 14px;text-align: justify;">En nuestro sistema de constructivo, necesitamos del contrapiso, base, o platea de la vivienda como elemento indispensable para la instalación. Dejamos la vivienda nivelada, la misma lista para que el comprador pueda luego realizarle, una carpeta y luego revestirlo con los cerámicos, alfombra, etc</p>
    
   
 </div>

  <div style="padding-bottom: 10px;"class="caption">
      <p style="color:#000;font-weight: 400;text-align: justify;font-size: 15px;    margin-bottom: 0;">PAREDES EXTERIORES:</p>
      <p style="color: #999!important;font-size: 14px;text-align: justify;">Los paneles son del tipo portante y los fabricamos con tirantería de madera de 28 Mm x 70 Mm, (esto para viviendas de planta baja solamente), con una separación de 40 cm entre sí. Su parte exterior se reviste con ladrillos comunes de 15 cm. O con placa de fibrocemento (SUpERBOARD) de 8 mm.</p>
    
   
 </div>


  <div style="padding-bottom: 10px;"class="caption">
      <p style="color:#000;font-weight: 400;text-align: justify;font-size: 15px;    margin-bottom: 0;">PAREDES INTERIORES:</p>
      <p style="    color: #999!important;font-size: 14px;text-align: justify;">Interiormente se reviste con placas de yeso del tipo Durlock. Las paredes divisorias de ambientes son construidos en el mismo tipo de tirantería que los exteriores y revestidos en ambas caras con placas de yeso compactado del tipo Durlock.</p>
    
   
 </div>


  <div style="padding-bottom: 10px;"class="caption">
      <p style="color:#000;font-weight: 400;text-align: justify;font-size: 15px;    margin-bottom: 0;">CIELO RAZO:</p>
      <p style="   color: #999!important; font-size: 14px;text-align: justify;">Construido con estructura interna en madera dura de 1” x 2 “y forrados con madera machihembrada de ½ x 4 “ todos en madera de pino de 1º calidad.</p>
    
   
 </div>

  <div style="padding-bottom: 10px;"class="caption">
      <p style="color:#000;font-weight: 400;text-align: justify;font-size: 15px;    margin-bottom: 0;">CABREADAS DE TECHOS:</p>
      <p style="   color: #999!important; font-size: 14px;text-align: justify;">Las fabricamos con tirantes de madera de 3 x 2 pulgadas.. Las cabreadas interiores se instalan a 1,00 m de distancia entre sí y son la sustentación para el cielorraso y techo.</p>
    
   
 </div>


  <div style="padding-bottom: 10px;"class="caption">
      <p style="color:#000;font-weight: 400;text-align: justify;font-size: 15px;    margin-bottom: 0;">TECHOS:</p>
      <p style="  color: #999!important;  font-size: 14px;text-align: justify;">Su estructura es de madera de 2" X 2 " pulgadas, a dos aguas, la cubierta es de chapa, LA MISMA ES DE CALIBRE 25 (antigranizo), chapa acanalada.</p>
    
   
 </div>










                </div>
                <div class="col-lg-6">


 <div style="padding-bottom: 10px;"class="caption">
      <p style="color:#000;font-weight: 400;text-align: justify;font-size: 15px;    margin-bottom: 0;">PUERTAS:</p>
      <p style="  color: #999!important;  font-size: 14px;text-align: justify;">La exterior al frente de madera algarrobo con cerradura de seguridad. La puerta de acceso a la parte trasera de la casa (si corresponde que la lleve) es de madera algarrobo también. Las puertas interiores son de tipo placas forradas en madera de pino, con marcos de madera.</p>
    
   
 </div>


  <div style="padding-bottom: 10px;"class="caption">
      <p style="color:#000;font-weight: 400;text-align: justify;font-size: 15px;    margin-bottom: 0;">VENTANAS:</p>
      <p style="  color: #999!important;  font-size: 14px;text-align: justify;">Las mismas son de madera de algarrobo cómo estándar llevan de 1,20 x 1,20 para el frente de la casa (y de 1.00 x1.00 m para la parte trasera. En baño se colocara ventiluz tipo balancín de algarrobo de 0.60 x 0.40 mts.</p>
    
   
 </div>


   <div style="padding-bottom: 10px;"class="caption">
      <p style="color:#000;font-weight: 400;text-align: justify;font-size: 15px;    margin-bottom: 0;">INSTALACIONES:</p>
      <p style="  color: #999!important;  font-size: 14px;text-align: justify;">•AGUA: Las instalaciones para agua fría y caliente en baño y cocina. 
<br>•INSTALACIÓN DE LUZ: Se entregan todas las cañerías instaladas y con las bocas en pared y techo, sin cableado ni artefactos.</p>
    
   
 </div>


   <div style="padding-bottom: 10px;"class="caption">
      <p style="color:#000;font-weight: 400;text-align: justify;font-size: 15px;    margin-bottom: 0;">BAÑO:</p>
      <p style="    color: #999!important;font-size: 14px;text-align: justify;">Se fabrica igual que las otras dependencias, solo que aquí se forraran las paredes interiores en placas de fibrocemento, especial para lugares con humedad o traslado de aguas.</p>
    
   
 </div>



 <div style="padding-bottom: 10px;"class="caption">
      <p style="color:#000;font-weight: 400;text-align: justify;font-size: 15px;    margin-bottom: 0;">AISLACION:</p>
      <p style="  color: #999!important;  font-size: 14px;text-align: justify;">Todos los paneles y el cielorraso llevan un aislamiento con rouberoid Nro. 15 .</p>
    
   
 </div>



  <div style="padding-bottom: 10px;"class="caption">
      <p style="color:#000;font-weight: 400;text-align: justify;font-size: 15px;    margin-bottom: 0;">TERMINACIONES: (DE REGALO POR PROMOCION)</p>
      <p style="  color: #999!important;  font-size: 14px;text-align: justify;">Se entrega con todos los contramarcos en aberturas y con terminación de masillado, enduido,y junta tomada en todas la uniones, todo le queda listo para pintar. </p>
    
   
 </div>

  <div style="padding-bottom: 10px;"class="caption">
      <p style="color:#000;font-weight: 400;text-align: justify;font-size: 15px;    margin-bottom: 0;">TERMINACIONES: (DE REGALO POR PROMOCION)</p>
      <p style="  color: #999!important;  font-size: 14px;text-align: justify;">Se entrega con todos los contramarcos en aberturas y con terminación de masillado, enduido,y junta tomada en todas la uniones, todo le queda listo para pintar. </p>
    
   
 </div>

<!--    <div style="padding-bottom: 10px;"class="caption">
      <p style="color:#000;font-weight: 400;text-align: justify;font-size: 15px;    margin-bottom: 0;">CERAMICOS Y SANITARIOS:</p>
      <p style="  color: #999!important;  font-size: 14px;text-align: justify;">Provisión de cerámicos para pisos, paredes de baño y cocina.<BR>
Provisión de juego de sanitarios. Inodoro, bidet, pileta pie de pileta y mochila.</p>
    
   
 </div> -->




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

<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Cerrar</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
            </div>
            <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive" src="">
            </div>
            <div class="modal-footer">

                <div class="col-md-12">
                    <button type="button" class="btn btn-primary" id="show-previous-image">Anterior</button>
                     <button type="button" id="show-next-image" class="btn btn-default">Siguiente</button>
                </div>

           

            
            </div>
        </div>
    </div>
    </div>



   

<?php
echo $this->load->view('pie');
?>