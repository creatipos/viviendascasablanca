<?php
$this->load->view('admin/cabecera');

?>
 
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Añadir nuevo Diario
            
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
             <form role="form" action="" method="POST" enctype="multipart/form-data">
            <section class="col-lg-9 connectedSortable">

                          <div class="box box-primary">
     
                <!-- form start -->
               
                  <div class="box-body">


                    <div class="form-group">
                      <label for="exampleInputEmail1">Nombre</label>
                      <input type="text" required name="nombre" class="form-control" id="exampleInputEmail1" placeholder="Titulo">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Sitio Web</label>
                      <input type="text" required name="website" class="form-control" id="exampleInputEmail1" placeholder="URL">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Facebook id</label>
                      <input type="text" required name="facebook" class="form-control" id="exampleInputEmail1" placeholder="URL FAN PAGE">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Twitter</label>
                      <input type="text" required name="twitter" class="form-control" id="exampleInputEmail1" placeholder="URL Twitter">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">GOOGLE +</label>
                      <input type="text" required name="google" class="form-control" id="exampleInputEmail1" placeholder="URL GOOGLE +">
                    </div>

                    <h4>SEO - SOCIAL MEDIA</h4>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Descripción</label>
                      <input type="text" required name="descripcion" class="form-control" id="exampleInputEmail1" placeholder="Titulo">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">keyword</label>
                      <input type="text" required name="keyword" class="form-control" id="exampleInputEmail1" placeholder="Titulo">
                    </div>

                     
                    
               


                     <div class="form-group">
                      <ul id="fotos" class="todo-list ui-sortable"></ul>
                    </div>
                   <div align="center">
  
      <br style="clear:both;"/>
      
        <input type="hidden" name="x1" value="" id="x1" />
        <input type="hidden" name="y1" value="" id="y1" />
        <input type="hidden" name="x2" value="" id="x2" />
        <input type="hidden" name="y2" value="" id="y2" />
        <input type="hidden" name="w" value="" id="w" />
        <input type="hidden" name="h" value="" id="h" />
       
     
    </div>
             
                  
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                   
                  </div>
                
              </div><!-- /.box -->


              

            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-3 connectedSortable">


                 <div class='box '>
       
                <div class='box box-info'>
                <div class='box-header'>
                  <h3 class='box-title'>Pais</small></h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button class="btn btn-info btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                   
                  </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class='box-body pad'>
            <!-- Select multiple-->
                    <div class="form-group">
                      
                      <select name="pais" class="form-control" id="valor1">
                      <option value="0" selected >Seleccione un Pais</option>
<?php  foreach ($paises as $key => $value) { 

    echo '<option value="'.$value['Codigo'].'">'.utf8_decode($value['Pais']).'</option>'; 



    } ; 

    ?>
                        
                      
                      </select>
<br>
             <div class='box-header'>
                  <h3 class='box-title'>Ciudad</small></h3>
             
                </div><!-- /.box-header -->
                      <select style=" text-transform: uppercase;" class="form-control" name="ciudad" id="valor2">
                      </select>
                      <br>
             <div class='box-header'>
                  <h3 class='box-title'>Provincia</small></h3>
             
                </div><!-- /.box-header -->
                      <select style=" text-transform: uppercase;" class="form-control" name="subcategoria" id="valor3">
                      </select>

                    </div>
                </div>
              </div><!-- /.box -->
                <div class='box-body pad'>
            <!-- Select multiple-->
                    <div class="form-group">
                     
                     <button type="submit" class="btn btn-primary">Publicar</button>

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
     function agregar(imgName) 
        { 
            var o = document.createElement('input'); 
            o.type = "hidden"; 
            o.name = "fotos[]"; 
            o.value = imgName; 

            var imgli='<li style="  margin-left: 5px;max-width: 223px;float: left;"><span class="handle ui-sortable-handle"><i class="fa fa-ellipsis-v"></i><i class="fa fa-ellipsis-v"></i></span><input type="hidden" value="'+imgName+'" name="fotos[]"><span class="text"><img style="width: 100%;" src="<?php echo baseurlname ?>/uploads/imagenes/'+imgName+'"></span><div class=""><i class="fa fa-trash-o"></i></div></li>';


            //document.getElementById('fotos').appendChild(imgli); 
            $( "#fotos" ).append( imgli );
        } 

var settings = {
    url: "<?php echo baseurlname ?>uploads/upload.php",
    dragDrop:true,
    fileName: "myfile",
    allowedTypes:"jpg,png,gif,doc,pdf,zip", 
    returnType:"json",
    multiple:false,
    onSubmit:function(files)
{

  $("#status").html('<img style="width: 130px;" src="http://static.texascommunitymedia.com/static/img/icons/loading.gif">');


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
<script type="text/javascript">


$( "#valor1" ).change(function() {



 var parametros = {
                "buscar" : $( this ).val()
        };
        $.ajax({
                data:  parametros,
                url:   '<?php echo baseurlname ?>admin/diarios/ciudades/'+ $( this ).val(),
                type:  'post',
                beforeSend: function () {
                        $("#valor2").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#valor2").html(response);
                }
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
