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
              
<?php
foreach ($modelos as $key => $modelos_i) {

$ci = &get_instance();



$imagenes = $ci->general->imgModelos($modelos_i['id_modelos']);
?>
                <div class="item active">
               <div style="    margin-bottom: 40px;min-height: 370px;" class="col-sm-12 col-md-4"> 
<!--  <img style="  width: 100%;" src="<?php echo baseurlname.'uploads/imagenes/' ?><?=$modelos_i['nombre']?>" alt=""> -->
 <span id="imagen" style="background-image: url(<?php echo baseurlname.'uploads/imagenes/' ?><?=$imagenes[0]['nombre']?>);"></span>
    <div class="caption">
      <p style="color:#474747;text-align: justify;font-size: 18px;"><?=$modelos_i['nombre_m']?></p>
      <p style="    font-size: 14px;text-align: justify;"><?=strip_tags(substr($modelos_i['descripcion'],0,120))?>...</p>
     <div style="bottom: 32px;position: absolute;width: 60px;"><HR style="border-top: 1px solid #e8e8e8;"></div>
       <p style="position: absolute;bottom: 0;color: #C10000;font-weight: 600;font-size: 12px;text-align: -webkit-left;"><a href="<?php echo baseurlname;?>modelo/<?=$modelos_i['id_modelos']?>.html">VER MÁS</a></p>
     </div>
                </div>
 
        </div>

<?php

}
?>



         






            </div>
        </div>
    </section>




   

<?php
echo $this->load->view('pie');
?>