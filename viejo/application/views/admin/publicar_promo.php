<?php
$this->load->view('admin/cabecera');
?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Añadir nueva Promo
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
             <li><a href="#"> Diarios</a></li>
            <li class="active">Publicar</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
             <form role="form" action="<?php echo base_admin ?>musica/publicar" method="POST" enctype="multipart/form-data">
            <section class="col-lg-9 connectedSortable">

                          <div class="box box-primary">
     
                <!-- form start -->
               
                  <div class="box-body">


                    <div class="form-group">
                      <label for="exampleInputEmail1">Titulo</label>
                      <input type="text" required name="titulo" class="form-control" id="exampleInputEmail1" placeholder="Titulo">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Descripcion</label>
                       <textarea class="textarea" name="desc" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
               


                     <div class="form-group">
                      <ul id="fotos" class="todo-list ui-sortable"></ul>
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
                     
                     <button type="submit" class="btn btn-primary">Publicar</button>

                    </div>
                </div>
              </div><!-- /.box -->
  

               <div class='box box-info'>
                <div class='box-header'>
                  <h3 class='box-title'>Archivo Comprimido</small></h3>
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
     function agregar(imgName) 
        { 
            var o = document.createElement('input'); 
            o.type = "hidden"; 
            o.name = "fotos[]"; 
            o.value = imgName; 

            var imgli='<li style="  margin-left: 5px;max-width: 223px;float: left;"><span class="handle ui-sortable-handle"><i class="fa fa-ellipsis-v"></i><i class="fa fa-ellipsis-v"></i></span><input type="hidden" value="'+imgName+'" name="fotos[]"><span class="text"><img style="width: 100%;" src="<?php echo baseurlname ?>/uploads/imagenes/'+imgName+'"></span><div class=""><i class="fa fa-trash-o">'+imgName+'</i></div></li>';


            //document.getElementById('fotos').appendChild(imgli); 
            $( "#fotos" ).append( imgli );
        } 

var settings = {
    url: "<?php echo baseurlname ?>uploads/upload2.php",
    dragDrop:true,
    fileName: "myfile",
    allowedTypes:"zip,rar", 
    returnType:"json",
    multiple:false,
    onSubmit:function(files)
{

  $("#status").html('<img src="http://static.texascommunitymedia.com/static/img/icons/loading.gif">');


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
