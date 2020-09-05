@extends('www.layouts.app')

@section('title', $noticia->titulo )

@section('description', $noticia->copete )

@section('img', "http:".$noticia->img )

@section('content')

<style type="text/css">
  
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

</style>

<div id="banner_l" class="banner">
  <img src="https://i.pinimg.com/236x/4f/9c/4b/4f9c4b700a84f22a60dd2277e3e0c2e7--skyscraper-banner-skyscrapers.jpg">
</div>

<div id="banner_r" class="banner">
  <img src="https://i.pinimg.com/236x/4f/9c/4b/4f9c4b700a84f22a60dd2277e3e0c2e7--skyscraper-banner-skyscrapers.jpg">

</div>

 <div class="row">
            
        <!-- post content -->
        <div class="col-lg-8 blog__content mb-72">
          <div class="content-box">           

            <!-- standard post -->
            <article class="entry mb-0">
              
              <div class="single-post__entry-header entry__header">
                
                <h1 class="single-post__entry-title">
                 {{ $noticia->titulo }}
                </h1>

 
              </div> <!-- end entry header -->

<p> {{ $noticia->copete }}</p>


              <div class="entry__article-wrap">

        


<iframe width="100%" height="700" src="{{ $noticia->url }}" frameborder="0" allowfullscreen></iframe>

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
