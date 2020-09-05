@extends('www.layouts.app')

@section('title', 'Cotizaciones del dolar oficial historico' )
@section('description', 'Cotizacion del dolar minuto a minuto, el precio del dolar hoy en Argentina / dolar blue e informal euro, merval argentino' )
@section('img', 'https://www.infobae.com/new-resizer/iJY75A6S0DUQSlfmpG96oLfN17A=/600x400/filters:quality(100)/s3.amazonaws.com/arc-wordpress-client-uploads/infobae-wp/wp-content/uploads/2017/07/19145415/Monedas-y-Billetes-peso-pesos-plata-dinero-1920-23.jpg' )
 

@section('content')

<script data-ad-client="ca-pub-9763763422449766" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />

<style type="text/css">

.variacion-max-min {
    border-radius: 6px;
}

.title_dolar{
  font-size: 26px;
    text-align: center;
    color: white;
}
  .banner {
  position: absolute;
  width: 120px;
  height: 300px;
  background: url(ads.gif);
  top: 100px;
}

#banner_l { left: 5px; }

#banner_r { right: 5px; }

.zindex { z-index: -999; }

@media only screen and (max-width: 1797px) {
  .banner {
    display: none;
  }
}

</style>

<h1>Dólar {{$tipo}} histórico</h1>

<div class="row">

            <!-- Small post -->
            <div class="featured-posts-grid__item featured-posts-grid__item--sm col-lg-8" style="    height: auto;padding-bottom: 0px;">
               
              <div class="variacion-max-min indicador dos" data-indice="/dolar/oficial" data-ep="/variacion" data-url="https://mercados.ambito.com/">
              <h2 class="title_dolar">Dolar {{$tipo}}</h2>
                <div class="percent-content"><span class="description">variación</span><span class="percent data-class-variacion data-variacion down">{{ $dolar->variacion }}</span></div>
                <div class="first"><span class="description">compra</span><span class="value data-compra">{{ $dolar->compra }}</span></div>
                <div class="second"><span class="description">venta</span><span class="value data-venta">{{ $dolar->venta }}</span></div>

              </div>
              <canvas id="myChart" width="200" height="100"></canvas>
            </div> <!-- end post -->

            <div class="col-lg-4">
         
         <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- dolar plus -->
<ins class="adsbygoogle"
    style="display:block"
    data-ad-client="ca-pub-9763763422449766"
    data-ad-slot="7010945269"
    data-ad-format="auto"
    data-full-width-responsive="true"></ins>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script> 


     

         </div>  

            

</div>



    <!-- Featured Posts Grid -->      
    <section class="featured-posts-grid">
      <div class="container">
         
        <div class="row row-8">

          <div class="col-lg-6">
          <!-- Latest News -->
       
            <div class="title-wrap title-wrap--line">
              <h3 class="section-title">Valores de cotizacion del dolar {{$tipo}} hoy historicos</h3>
            </div>

        

         <table class="table">
  <thead class="thead">
    <tr>
      <th scope="col" style="background: #002040;color:#fff">Fecha</th>
      <th scope="col" style="background: #00aba4;color: #fff;border-left: 2px solid #dee2e6;">Compra</th>
      <th scope="col" style="background: #00aba4;color: #fff;border-left: 2px solid #dee2e6;">Venta</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($dolar_h as $dolar_hi)
    <tr>
      <th scope="row">{{ Carbon\Carbon::parse($dolar_hi->fecha)->format('d-m-Y')}}</th>
      <td>$ {{$dolar_hi->compra}}</td>
      <td>$ {{$dolar_hi->venta}}</td>

    </tr>

    @endforeach

  </tbody>
</table>
           
            


          </div> <!-- end col -->

          <div class="col-lg-3">
         
         
<!-- dolar plus -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9763763422449766"
     data-ad-slot="7010945269"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script> 


      

          </div>  
          <div class="col-lg-3">
              
          <h3><b>Distintas denominaciones de dólar</b></h3>  

          <p><strong>- Dólar oficial:</strong> es el valor del dólar que se liquida por parte del gobierno nacional.</p>
          <p><strong>- Dólar blue:</strong>se trata del billete que se comercializa en cuevas o a través de "arbolitos", es decir, por fuera del circuito legal. La cotización de este billete se disparó un 2% a $74.</p>
          <p><strong>- Dólar minorista:</strong> se trata del dólar billete que se compra y vende en agencias y casas de cambio, con un máximo de u$s200 por mes, a raíz del cepo hard.</p>
          <p><strong>- Dólar mayorista:</strong> se trata del intercambiado en el segmento donde operan bancos y agentes de comercio exterior. </p>
          <p><strong>- Dólar futuro:</strong> se trata del que se compra en el mercado Rofex. </p>
          <p><strong>- Dólar para turismo en el exterior:</strong> e trata del valor del dólares más un impuesto del 30% que se pagará por consumos y compras con tarjeta de crédito o de débito en el exterior.</p>


          
 
          <article class="entry card post-list">

              <div class="entry__body  card__body">
                <div class="entry__header">
                  <h2 class="entry__title">
                    ¿Cuánto cerró el dólar hoy?
                  </h2>

                </div>        
                <div class="entry__excerpt">
                  <p>Según promedio del Banco Central</p>
                  <p>El dólar hoy cerro a {{ $dolar->venta }} venta y {{ $dolar->compra }} para la compra</p>
                </div>
              </div>
            </article>



            <article class="entry card post-list">

<div class="entry__body  card__body">
  <div class="entry__header">
    <h2 class="entry__title">
      ¿Cuánto cerró el dólar blue?
    </h2>

  </div>        
  <div class="entry__excerpt">
    <p>Según promedio del Banco Central y city porteña</p>
    <p>El dolar blue cerro a {{ $dolar_b->venta }} venta y {{ $dolar_b->compra }} para la compra</p>
  </div>
</div>
</article>


          </div>  
                

        </div>
      </div>
    </section> <!-- end featured posts grid -->



            



<section class="section mb-0">



</section>



<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [
          @foreach ($dolar_hchart as $dolar_hi)
          '{{ Carbon\Carbon::parse($dolar_hi->fecha)->format('d-m-Y')}}',
          @endforeach
          
          ],
        datasets: [{
            label: 'Dolar {{$tipo}}',
            data: [
              @foreach ($dolar_hchart as $dolar_hi)
         
          <?=str_replace(',', '.', $dolar_hi->venta)?>,
          @endforeach

            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

@endsection
