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
              
            <div class="col-sm-12 col-md-12"> 
       
    <div class="row">
<?php
foreach ($galerias as $key => $galeriasa) {

?>
            <div class="col-lg-4 col-md-4 col-xs-12 thumb mas">

          <div class="image">
             <span id="imagen" style="background-image: url(<?php echo baseurlname.'uploads/imagenes/' ?><?=$galeriasa['nombre']?>);"></span>
             <!--  <img src="<?php echo baseurlname.'uploads/imagenes/'?><?=$galeriasa['nombre']?>" alt="" /> -->
         
         <div class="galver" style="position: absolute;bottom: 0;">
        <div class="ddd">
              
              <h2 style="margin-top:25px;color:#fff;" class="section-heading"><?=$galeriasa['titulo']?></h2>
              <div style="width: 100px;"><hr style="border-top: 2px solid #fff;"></div>

              <p style="color: #C10000;font-weight: 600;font-size: 12px;text-align: -webkit-left;"><a href="<?php echo baseurlname;?>galeria/<?=$galeriasa['id']?>.html">VER MÁS</a></p>


        </div>
                    
        </div>


          </div>
        

           </div>
<?php

}
?>

        
            </div>
            </div>








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