
<!doctype html>
<html>
<head>
  <meta charset="utf-8">

  <title>DolarPlus</title>  
    <script src="https://dolar-plus.com/deus/js/jquery.min.js"></script>
  
  <style type="text/css">
      @font-face {
                font-family: roboto;
                font-weight: normal;
                src: url("fonts/Roboto-Regular.ttf") format("opentype");
                }

                @font-face {
                font-family: robotobold;
                font-weight: normal;
                src: url("fonts/Roboto-Bold.ttf") format("opentype");
                }

                @font-face {
                font-family: robotothin;
                font-weight: normal;
                src: url("fonts/Roboto-Thin.ttf") format("opentype");
                }  


          body{
            font-family: roboto;
            height: auto;
            background-color: #e4e8d1;
            margin:0;
          }

          #header{
               padding-top: 3.5%;
               padding-bottom: 3.5%;
                background-color: #2a3485;
                    font-size: 1.009em;
          }

     
          /* Colores verde: #0F8C46  violeta: rgb(74, 41, 55) cremita: #D9CDB8  cremita oscuro: #C4B18E cremas mas osucro #A09B87; verde claro #27985A; 
           */

          #headTa , #tableData{
            font-family: roboto;
            color:#5d5d5d;
            width: 100%;
            border-spacing: 0;

          } 

          .la{
font-family: roboto;
    background-color: #00aba4 !important;
    color: #fff;
    font-size: .95em !important;
    border: none !important;
    padding-top: 10px;
    padding-bottom: 10px;
    /* font-family: robotobold; */
          }

          #tableData td{
            background-color: #e4e8d1;
            border-bottom: 2px solid #00aba4 ;
            font-size: .9em;
      
          }

          td img{
            margin-left: 16px;
            float: left;
            width: 21px;
          }

          #act{
            width: 100%;
             border-bottom: 2px solid #85bb65;
           color:#5d5d5d;
             font-family: roboto;
             font-size: .9em;
                 margin-bottom: 15px;
                 padding-top: 13px;
                 padding-bottom: 13px;
          }
      
        .text-im{
          margin-top: 13px;
    margin-left: 42px;
    margin-bottom: 13px;
        }

        .text-inf{
    width: 90%;
    color: rgb(128, 128, 128);
    margin-top: 10px;
    margin-bottom: 10px;
    text-align: justify;
    font-family: robotothin;
    font-size: .9em;
    /* font-weight: lighter; */
        }

        .but{
    background-color: #2a3485;
    padding: 6px;
    margin-bottom: 10px;
    width: 88%;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #fff;
    cursor: pointer;
        }

        .logo{
          margin-top: 10px;
        }
  </style>

  </head>

<body>   
  <center>
      <div id="header"><span style="color: #fff;">Valores Promedios Casas de Cambio</span></div>
      
      <table id="tableData" cellspacing="5">
        <tr> <td width="60%" class="la"><div style="margin-left:1px;"><div style="margin-left:16px;">Moneda</div></div></td> <td width="20%" class="la">Compra</td> <td width="20%" class="la">Venta</td></tr>
        <tr> 
          <td width="60%"> <img src="https://www.favicon.cc/logo3d/13114.png" style="margin-bottom: -5px; margin-top: 8px;"> 
            <div class="text-im">Dólar Oficial</div>
          </td> 
          <td width="20%"><div id="ventaDolar">$ {{$dolar->venta}}</div></td> <td width="20%"><div id="compraDolar">$ {{$dolar->compra}}</div>
          </td> 
        </tr>
        <tr> 
          <td width="60%"> <img src="https://www.favicon.cc/logo3d/13114.png" style="margin-bottom: -5px; margin-top: 8px;"> <div class="text-im">Dólar Blue </div>
          </td> 
          <td width="20%"><div id="ventablue">$ {{$dolar_b->venta}}</div></td>
          <td width="20%"><div id="comprablue">$ {{$dolar_b->compra}}</div></td> 
        </tr>
        <tr> 
          <td width="60%"> <img src="https://www.favicon.cc/logo3d/13114.png" style="margin-bottom: -5px; margin-top: 8px;">
            <div class="text-im"> Dólar Turista</div>
          </td> 
          <td width="20%%"><div id="ventaReal">$ {{$dolar_t->venta}}</div></td> 
          <td width="20%"><div id="compraReal">$ {{$dolar_t->compra}}</div></td> 
        </tr>

        <tr> <td width="60%"> <img src="https://www.favicon.cc/logo3d/13114.png" style="margin-bottom: -5px; margin-top: 8px;">
          <div class="text-im">Dólar MEP</div>
        </td> 
        <td width="20%"><div id="ventaUruguayo">$ {{$dolar_cl->venta}}</div></td> 
        <td width="20%"><div id="compraUruguayo">$ {{$dolar_cl->compra}}</div></td> 
       </tr>



        


      </table>

     
   <a target="_blank" href="https://dolar-plus.com/widgets-del-dolar-en-tu-web"><div class="but"> <b>&lt;/&gt;</b> Insertar promedios en tu sitio</div></a>
      <div class="logo"><img style="    height: 50px;" src="https://dolar-plus.com/img/logo.png"></div>
  </center>
</body>  