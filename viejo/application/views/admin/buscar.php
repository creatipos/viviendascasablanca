<?php
$this->load->view('admin/cabecera');
?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Lista de Noticias
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
             <li><a href="#"> Diarios</a></li>
            <li class="active">Lista</li>
          </ol>
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
               
<div style="float: left !important;width: 230px;" class="input-group input-group-sm ">
  <form method="post" action="http://localhost/picker-news/admin/buscar/q/">
                    <input style="width: 156px;" name="q" type="text" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-info btn-flat" type="submit">Buscar</button>
                    </span>
                  </form>
                  </div>
                
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
                      <th>Nombre</th>
                      <th>Likes</th>
                      <th style="width: 75px">Tools</th>
                    </tr>
             <?php

              foreach ($news as $key => $value) { 


                echo ' <tr>
                      <td>'.$value['id'].'</td>
                      <td><img  src="'.$value['picture']['data']['url'].'"></td>
                      <td>
                       '.$value['name'].'
                      </td>
                       <td>
                       '.$value['likes'].'
                      </td>
                      <td><a style="  font-size: 20px;" href="./editar/'.$value['id'].'"><i  class="fa  fa-edit"></i></a></td>
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
