@extends('www.layouts.app')

@section('title', $noticia->titulo )
@section('description', $noticia->copete )
@section('img', Request::root().'/images/news/'.$noticia->img)

@section('content')
<script data-ad-client="ca-pub-9763763422449766" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<style type="text/css">
  
  .banner {
  position: absolute;
  width: 120px;
  height: 300px;
  background: url(ads.gif);
  top: 100px;
}
.variacion-max-min {
    border-radius: 6px;
}

.title_dolar{
  font-size: 26px;
    text-align: center;
    color: white;
}
#banner_l { left: 5px; }

#banner_r { right: 5px; }

.zindex { z-index: -999; }

.social-whatsapp {
    background-color: #01E675;
}
.single-post__entry-title{
    font-family: 'Roboto Slab', serif;
  font-size: 43px;
}
.entry__meta-category--green{
      background: linear-gradient(#e70f70, #b7349a);
}
</style>



 <div class="row">
  <div class="col-lg-12 ">
                <h1 class="single-post__entry-title">
                 {{ $noticia->titulo }}
                </h1>
  </div>              
        <!-- post content -->
        <div class="col-lg-8 blog__content mb-72">
          <div class="">           

            <!-- standard post -->
            <article class="entry mb-0">
              
              <div class="single-post__entry-header entry__header">
                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--green">{{$noticia->hastag}}</a>


                <div class="entry__meta-holder">
                  <ul class="entry__meta">
                    <li class="entry__meta-date">
                  
                      {{ $noticia->created_at->formatLocalized('%A %e %B %Y') }}
                      
                    </li>
                  </ul>

                  <ul class="entry__meta">
                    <li class="entry__meta-views">
                      <i class="ui-eye"></i>
                      <span>{{ $noticia->visitas }}</span>
                    </li>

                  </ul>
                </div>
              </div> <!-- end entry header -->

              <div class="entry__img-holder">
                <img src="{{ Request::root() }}/images/news/{{ $noticia->img }}" alt="" class="entry__img">
              </div>

        
   


              <div class="entry__article-wrap">

                <!-- Share -->
                <div class="entry__share">
                  <div class="sticky-col">
                    <div class="socials socials--rounded socials--large">
                      <a class="social social-facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ Request::root() }}/{{ $noticia->slug }}" title="facebook" target="_blank" aria-label="facebook">
                      <i class="fab fa-facebook-f"></i>
                      </a>
                      
                      <a class="social social-whatsapp" href="whatsapp://send?text={{ $noticia->titulo }}:{{ Request::root() }}/{{ $noticia->slug }}" title="whatsapp" target="_blank" aria-label="whatsapp">
                      <i class="fab fa-whatsapp"></i>
                      </a>
                    </div>
                  </div>                  
                </div> <!-- share -->

                <div class="entry__article">

                  <p>{{ $noticia->copete }}</p>

                  @if($noticia->cotizacion==1)

<div class="row">

<!-- Small post -->
<div class="featured-posts-grid__item featured-posts-grid__item--sm col-lg-6" style="    height: auto;padding-bottom: 0px;">
 
<div class="variacion-max-min indicador dos" data-indice="/dolar/oficial" data-ep="/variacion" data-url="https://mercados.ambito.com/">
<h2 class="title_dolar">Dolar Oficial</h2>
  <div class="percent-content"><span class="description">variación</span><span class="percent data-class-variacion data-variacion down">{{ $dolar->variacion }}</span></div>
  <div class="first"><span class="description">compra</span><span class="value data-compra">{{ $dolar->compra }}</span></div>
  <div class="second"><span class="description">venta</span><span class="value data-venta">{{ $dolar->venta }}</span></div>
  
  <div class="second" style="width: 100%;">
  <p><a href="{{ route('historico_oficial') }}" style="color:#fff" >Historico del dolar oficial hoy</a></p>
  </div>

  </div>
</div> <!-- end post -->

          <!-- Small post -->
<div class="featured-posts-grid__item featured-posts-grid__item--sm col-lg-6" style="    height: auto;padding-bottom: 0px;">


<div class="variacion-max-min indicador " data-indice="/dolar/oficial" data-ep="/variacion" data-url="https://mercados.ambito.com/">
<h2 class="title_dolar">Dolar Blue</h2>
  <div class="percent-content"><span class="description">variación</span><span class="percent data-class-variacion data-variacion down">{{ $dolar_b->variacion }}</span></div>
  <div class="first"><span class="description">compra</span><span class="value data-compra">{{ $dolar_b->compra }}</span></div>
  <div class="second"><span class="description">venta</span><span class="value data-venta">{{ $dolar_b->venta }}</span></div>
  
  <div class="second" style="width: 100%;">
  <p><a href="{{ route('historico_blue') }}" style="color:#fff" >Historico del dolar blue</a></p>
  </div>

</div>

</div> <!-- end post -->



</div>

@endif   

                
                  <p><?php echo $noticia->curepo ?> </p>

                </div> <!-- end entry article -->

              </div> <!-- end entry article wrap -->
              




 
          

              <!-- Related Posts -->
              <section class="section related-posts mt-40 mb-0">
                <div class="title-wrap title-wrap--line title-wrap--pr">
                  <h3 class="section-title">Comentarios</h3>
                </div>

              
              <div class="fb-comments" data-href="{{url()->current()}}" data-width="100%" data-numposts="5"></div>

              </section> <!-- end related posts -->            

            </article> <!-- end standard post -->

            <!-- Comments -->
            

            <!-- Comment Form -->
            
          </div> <!-- end content box -->
        </div> <!-- end post content -->
        
        <!-- Sidebar -->
        
         @include('www.layouts.googletend')
      
      </div>

@endsection
