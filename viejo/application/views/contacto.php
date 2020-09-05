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

            <div class="col-md-12">


<div class="intro-heading contacto">Por favor complete el formulario y nos comunicaremos a la brevedad...</div>
              <form action="" method="post" class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nombre y Apellido</label>
    <div class="col-sm-10">
      <input required type="text" class="form-control" id="inputEmail3" name="nya" placeholder="Nombre y Apellido">
    </div>
  </div>

 <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Telefono</label>
    <div class="col-sm-10">
      <input required   type="text" class="form-control" name="telefono" id="inputEmail3" placeholder="Telefono">
    </div>
  </div>

   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email" id="inputEmail3" placeholder="E-mail">
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Localidad</label>
    <div class="col-sm-10">
      <input required type="text" class="form-control" id="inputEmail3" name="loc" placeholder="Localidad">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Provincia</label>
    <div class="col-sm-10">
      <input required type="text" class="form-control" id="inputEmail3" name="prov" placeholder="Provincia">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Modelo</label>
    <div class="col-sm-10">
      <input required type="text" class="form-control" id="inputEmail3" name="modelo" placeholder="Modelo">
    </div>
  </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Tipo</label>
    <div class="col-sm-10">
      <select name="tipo">
<option value="Prefabricada">Prefabricada</option>
<option value="Ladrillo" >Ladrillo</option>
      </select>
 
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Mensaje</label>
    <div class="col-sm-10">
     <textarea class="form-control" name="mensaje" rows="9"></textarea>
    </div>
  </div>


  <div class="form-group">
    <div class=" col-sm-10">
      <button type="submit" name="submit" class="btn btn-default">ENVIAR</button>
    </div>
  </div>
  <br>
</form>
            </div>


            </div>
        </div>

<!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-15by9">


  <iframe height="360" frameborder="0" class="embed-responsive-item" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.6113650861544!2d-58.79864088523279!3d-27.481356023777625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456b08f16e47a7%3A0x894bdcfb46206a12!2sCalle+Fray+C+Rodr%C3%ADguez+1573%2C+3400+Corrientes%2C+Argentina!5e0!3m2!1ses-419!2sar!4v1465188446608"></iframe>

</div>

    </section>



 
<?php
echo $this->load->view('pie');
?>