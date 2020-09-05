<?php
$this->load->view('admin/cabecera');
?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Lista de Galerias
            
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
          
            <section class="col-lg-12 connectedSortable">

                         <div class="box">
                <div class="box-header with-border">
               

                
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">»</a></li>
                  </ul>
           
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tbody>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th style="width: 123px" >Imagen</th>
                      <th>Titulo</th>
                      <th style="width: 75px">Tools</th>
                    </tr>
             <?php

              foreach ($news as $key => $value) { 


                echo ' <tr>
                      <td>'.$value['id'].'</td>
                      <td><img style="width: 100%;  max-width: 122px;" src="'.baseurlname.'uploads/imagenes/'.$value['nombre'].'"></td>
                      <td>
                       '.$value['titulo'].'
                      </td>
                      <td><a style="  font-size: 20px;" href="'.baseurlname.'admin/galerias/eliminar/'.$value['id'].'"><i  class="fa  fa-close"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a style="  font-size: 20px;" href="'.baseurlname.'admin/galerias/editar/'.$value['id'].'"><i  class="fa  fa-edit"></i></a></td>
                    </tr>';




                                                       } ; 

              ?>
               
                  </tbody></table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">»</a></li>
                  </ul>
                </div>
              </div>


              

            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
          


          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <?php
$this->load->view('admin/pie');
?>
