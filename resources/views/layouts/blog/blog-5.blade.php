@extends('index')

@section('content')
	<!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="/multi/images/banners/separados.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Noticias y comunicados</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="/">Inicio</a></li>
                <li class="active text-gray-silver">Noticias y comunicados</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="/multi/images/noticias/cv.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                </div>  
                <div class="entry-title pt-10 pl-15">
                  <h4><a class="text-uppercase" href="#">Tips para mejorar tu Currículum</a></h4>
                </div>
                <div class="entry-meta pl-15">
                  <ul class="list-inline">
                    <li>Fecha: <span class="text-theme-color-2"> 29/03/2019</span></li>
                    <li>Por: <span class="text-theme-color-2">UANE</span></li>
                  </ul>
                </div>
                <div class="entry-content mt-10">
                  <p style="text-align: justify;">El Currículum Vitae es el primer contacto que tendrá una empresa contigo, por eso es importante dar el primer impacto de la manera correcta, ya sabes lo que dicen: “Nunca hay una segunda oportunidad para una primera impresión”</p>

                  <p style="text-align: justify;">En Voz UANE te ayudaremos a conocer un poco más sobre cómo puedes realizar un currículum completo y conciso, ya sea para tu primer trabajo o si estas en busca de alguno nuevo. </p>

                  <p style="text-align: justify;">Ve el video y considera los tips que te damos para hacer tu CV más eficiente ya que recuerda, el currículum es nuestra carta de presentación por escrito y es igual de importante que la impresión a primera vista.</p>


                  <div class="fluid-video-wrapper pt-30">
                    <iframe height="550px"  src="https://www.youtube.com/embed/5LmMjc6cHaE" frameborder="0" allowfullscreen></iframe>
                    
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>

    

@endsection