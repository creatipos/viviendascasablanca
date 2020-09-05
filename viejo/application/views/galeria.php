<?php
$this->load->view('cabecera');
?>


<?php

if ($galerias[0]['id_ga']=="3") { ?>


  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Promoción</h4>
      </div>
      <div class="modal-body">
       <img style="    width: 100%;" src="<?php echo HTTP_assets ?>img/MOD_1030.png">
      </div>
    </div>
  </div>
</div> 

   
<?php }


?>




<style type="text/css">

.thumbnail{

    //display: grid !important;
    padding: 0px;
    margin-bottom: 0px;
    line-height: 1.42857143;
    background-color: #fff;
border: 0px solid #ddd!important;
    /* border-radius: 4px; */
    -webkit-transition: border .2s ease-in-out;
    -o-transition: border .2s ease-in-out;
    transition: border .2s ease-in-out;

}
</style>
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
$i=1;
foreach ($galerias as $key => $galeriasa) {

?><a class="thumbnail" href="#" data-image-id="<?=$i?>" data-toggle="modal" data-title="" data-caption="If you sponsor me, I can drive this car" data-image="<?php echo baseurlname.'uploads/imagenes/' ?><?=$galeriasa['nombre']?>" data-target="#image-gallery">
            <div class="col-lg-4 col-md-4 col-xs-12 thumb mas">

          <div class="image">
            <span id="imagen" style="background-image: url(<?php echo baseurlname.'uploads/imagenes/' ?><?=$galeriasa['nombre']?>);"></span>
             <!--  <img src="<?php echo baseurlname.'uploads/imagenes/'?><?=$galeriasa['nombre']?>" alt="" /> -->
         
         <div class="galver" style="position: absolute;bottom: 0;">
     
                    
        </div>


          </div>
        

           </div></a> 
<?php
$i++;
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