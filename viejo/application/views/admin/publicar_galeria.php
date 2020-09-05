<?php
$this->load->view('admin/cabecera');

?>
 
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Añadir nueva galeria
            
          </h1>
    
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
             <form role="form" action="" method="POST" enctype="multipart/form-data">
            <section class="col-lg-9 connectedSortable">

                          <div class="box box-primary">
     
                <!-- form start -->
               
                  <div class="box-body">


                    <div class="form-group">
                      <label for="exampleInputEmail1">Titulo</label>
                      <input type="text" value="<?php if(!empty($cms[0]['titulo'])){ echo $cms[0]['titulo']; } ?>" required name="titulo" class="form-control" id="exampleInputEmail1" placeholder="Titulo">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Descripcion</label>
                     <textarea class="textareaa" name="desc" placeholder="Place some text here" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php if(!empty($cms[0]['descripcion'])){ echo $cms[0]['descripcion']; } ?></textarea>
                    </div>
               


                     <div class="form-group">
                      <ul id="fotos" class="todo-list ui-sortable">
<?php if(!empty($img)){ 


foreach ($img as $key => $img_n) {

echo '<li style="  min-height: 223px;margin-left: 5px;max-width: 223px;float: left;"><span class="handle ui-sortable-handle"><i class="fa fa-ellipsis-v"></i><i class="fa fa-ellipsis-v"></i></span><input type="hidden" value="'.$img_n['nombre'].'" name="fotos[]"><span class="text"><img style="width: 100%;    max-height: 150px;" src="'.baseurlname.'uploads/imagenes/'.$img_n['nombre'].'"></span><div class=""><a href="../eliminar_img/'.$img_n['id_galid'].'"><i class="fa fa-trash-o"></i></a></div></li>';

}


} 



?>

                      </ul>
                    </div>
                
                  
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                   
                  </div>
                
              </div><!-- /.box -->


              

            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-3 connectedSortable">


                 <div class='box box-info'>
                <div class='box-header'>
              
        
                </div><!-- /.box-header -->
                <div class='box-body pad'>
            <!-- Select multiple-->
                    <div class="form-group">
                     
                     <button type="submit" class="btn btn-primary"><?php if(!empty($cms[0]['nombre_m'])){ echo 'Actualizar'; }else{ echo 'Publicar';} ?></button>

                    </div>
                     <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input name="destacar" value="1" type="checkbox">
                      Destacar
                    </label>
                  </div>
       
                </div>
                </div>
              </div><!-- /.box -->
  

               <div class='box box-info'>
                <div class='box-header'>
                  <h3 class='box-title'>Imagen</small></h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button class="btn btn-info btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                   
                  </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class='box-body pad'>
            <!-- Select multiple-->
                    <div style="  text-align: -webkit-center;" class="form-group">
                     
                 
                <!--  <i style="  font-size: 120px;" data-toggle="modal" data-target="#myModal" class="fa fa-cloud-upload"></i>-->

                 <div id="mulitplefileuploader"><i style="  font-size: 120px;" class="fa fa-cloud-upload"></i></div>
<img src="">
<div id="status"></div>
<!-- <div id="fotos"></div> -->
                   
                  
<script>
$(document).ready(function()
{


var d=1;
     function agregar(imgName) 
        { 
            var o = document.createElement('input'); 
            o.type = "hidden"; 
            o.name = "fotos[]"; 
            o.value = imgName; 

            var imgli='<li class="emi'+d+'" style="min-height: 223px;margin-left: 5px;max-width: 223px;float: left;"><span class="handle ui-sortable-handle"><i class="fa fa-ellipsis-v"></i><i class="fa fa-ellipsis-v"></i></span><input type="hidden" value="'+imgName+'" name="fotos[]"><span class="text"><img style="width: 100%;    max-height: 150px;" src="<?php echo baseurlname ?>/uploads/imagenes/'+imgName+'"></span><div class=""><i  class="elim fa fa-trash-o"></i></div></li>';


            //document.getElementById('fotos').appendChild(imgli); 
            $( "#fotos" ).append( imgli );

            d=d+1;
        } 

var settings = {
    url: "<?=baseurlname?>uploads/upload.php",
    dragDrop:true,
    fileName: "myfile",
    allowedTypes:"jpg,png,gif,doc,pdf,zip", 
    returnType:"json",
    multiple:true,
    onSubmit:function(files)
{

  $("#status").html('<img style="    width: 50px;" src="http://static.texascommunitymedia.com/static/img/icons/loading.gif">');


},

   onSuccess:function(files,data,xhr)
    {
       var imgName = data;
          
        //alert(imgName);
       agregar(imgName); 
  

       
       $("#status").html('');
    },
    showDelete:true,
    deleteCallback: function(data,pd)
  {
    for(var i=0;i<data.length;i++)
    {
        $.post("delete.php",{op:"delete",name:data[i]},
        function(resp, textStatus, jqXHR)
        {
            //Show Message  
            //$("#status").append("<div>File Deleted</div>");      
        });
     }      
    pd.statusbar.hide(); //You choice to hide/not.

}
}
var uploadObj = $("#mulitplefileuploader").uploadFile(settings);




$(".elim").on(function () {
      $(this).remove();
    });


});



</script>

                 </div>
                </div>
              </div><!-- /.box -->



              

            </section><!-- right col -->

            </form>

          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <?php
$this->load->view('admin/pie');
?>
