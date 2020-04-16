@extends('index')

@section('content')

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="/multi/images/banners/separados.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">UANE Matamoros</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="/">Inicio</a></li>
                <li><a href="#">Campus</a></li>
                <li class="active text-gray-silver">Matamoros</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Experts Details -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-4">
              <div class="thumb">
                <img src="/multi/images/campus/uane-matamoros.jpg" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <h4 class="name font-24 mt-0 mb-0">Campus Matamoros</h4>
              <h5 class="mt-5 text-theme-color-2">Chemistry Teachers</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam vero expedita fugiat illo quasi doloremque, in unde omnis sint assumenda! Quaerat in, reprehenderit corporis voluptatum natus sequi reiciendis ullam. Quam eaque dolorum voluptates cupiditate explicabo.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt culpa dicta quaerat qui recusandae possimus placeat quidem ipsam voluptates similique libero tempore, labore quasi delectus vero alias, consectetur blanditiis eum maxime sunt accusantium ipsa doloribus reiciendis. Ea quod reprehenderit deserunt. Veritatis omnis similique tempora delectus a consequuntur, quis.  Adipisicing elit. Nesciunt culpa dicta quaerat qui recusandae possimus placeat quidem ipsam voluptates similique libero tempore, labore quasi delectus vero alias.</p>
              <ul class="styled-icons icon-dark icon-theme-colored icon-sm mt-15 mb-0">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
             </ul>
            </div>
          </div>
          <div class="row mt-30">
            <div class="col-md-4">
              <h4 class="line-bottom">About Me:</h4>
              <div class="volunteer-address">
                <ul>
                  <li>
                    <div class="bg-light media border-bottom p-15 mb-20">
                      <div class="media-left">
                        <i class="pe-7s-pen text-theme-colored font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Experiences:</h5>
                        <p>Chemistry (BSc), Computer Science (BSc), English and Creative Writing (BA)</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="bg-light media border-bottom p-15 mb-20">
                      <div class="media-left">
                        <i class="fa fa-map-marker text-theme-colored font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Address:</h5>
                        <p>Village 856 Broadway New York</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="bg-light media border-bottom p-15">
                      <div class="media-left">
                        <i class="fa fa-phone text-theme-colored font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Contact:</h5>
                        <p><span>Phone:</span> +262 695 2601<br><span>Email:</span> you@yourdomain.com</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            {{-- <div class="col-md-4">
              <h4 class="line-bottom">Find Location:</h4>

              <!-- Google Map HTML Codes -->
              <div 
                data-address="121 King Street, Melbourne Victoria 3000 Australia"
                data-popupstring-id="#popupstring1"
                class="map-canvas autoload-map"
                data-mapstyle="style1"
                data-height="335"
                data-latlng="22.798835,89.534401"
                data-title="sample title"
                data-zoom="14"
                data-marker="images/map-marker.png">
              </div>
              <div class="map-popupstring hidden" id="popupstring1">
                <div class="text-center">
                  <h3>CharityFund Office</h3>
                  <p>121 King Street, Melbourne Victoria 3000 Australia</p>
                </div>
              </div>
              <!-- Google Map Javascript Codes -->
              <script src="http://maps.google.com/maps/api/js"></script>
              <script src="js/google-map-init.js"></script>
            </div> --}}
            <div class="col-md-8">
              <div class="clearfix">
                <h4 class="line-bottom">Quick Contact:</h4>
              </div>
              <div class="owl-carousel-2col" data-dots="true">
                @foreach ($programas as $programa)
                <div class="item ">
                  <div class="service-block bg-white">
                    <div class="thumb"> <img alt="featured project" src="images/project/4.jpg" class="img-fullwidth">
                    <h4 class="text-white mt-0 mb-0"><span class="price">$125</span></h4>
                    </div>
                    <div class="content text-left flip p-25 pt-0">
                      <h4 class="line-bottom mb-10">{{ $programa->title }}</h4>
                        <p>
                            @foreach ($programa->campus as $campus)
                                @if ($campus->name == 'Matamoros')
                                    {{ $loop->first ? '' : '|' }}
                                    <b>{{ $campus->name}}</b>
                                @endif
                                
                            @endforeach 
                            {{ $programa->campus->name }}
                        </p>
                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="page-courses-accounting-technologies.html">view details</a>
                    </div>
                  </div>
                </div>    
                @endforeach
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: COURSES -->
    <section class="bg-lighter">
      <div class="container pb-60">
        <div class="section-title mb-10">
        <div class="row">
          <div class="col-md-8">
            <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Our <span class="text-theme-color-2 font-weight-400">COURSES</span></h2>
         </div>
        </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="owl-carousel-4col" data-dots="true">
                <div class="item ">
                  <div class="service-block bg-white">
                    <div class="thumb"> <img alt="featured project" src="images/project/4.jpg" class="img-fullwidth">
                    <h4 class="text-white mt-0 mb-0"><span class="price">$125</span></h4>
                    </div>
                    <div class="content text-left flip p-25 pt-0">
                      <h4 class="line-bottom mb-10">Accounting Technologies</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquam ipsum quis ipsum facilisis sit amet.</p>
                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="page-courses-accounting-technologies.html">view details</a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="service-block mb-md-30 bg-white">
                    <div class="thumb"> <img alt="featured project" src="images/project/5.jpg" class="img-responsive img-fullwidth">
                    <h4 class="text-white mt-0 mb-0"><span class="price">$125</span></h4>
                    </div>
                    <div class="content text-left flip p-25 pt-0">
                      <h4 class="line-bottom mb-10">Computer Technologies</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquam ipsum quis ipsum facilisis sit amet.</p>
                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="page-courses-accounting-technologies.html">view details</a>
                   </div>
                  </div>
                </div>
                <div class="item">
                  <div class="service-block mb-md-30 bg-white">
                    <div class="thumb"> <img alt="featured project" src="images/project/6.jpg" class="img-responsive img-fullwidth">
                    <h4 class="text-white mt-0 mb-0"><span class="price">$125</span></h4>
                    </div>
                    <div class="content text-left flip p-25 pt-0">
                      <h4 class="line-bottom mb-10">Development Studies</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquam ipsum quis ipsum facilisis sit amet.</p>
                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="page-courses-accounting-technologies.html">view details</a>
                   </div>
                  </div>
                </div>
                <div class="item">
                  <div class="service-block mb-md-30 bg-white">
                    <div class="thumb"> <img alt="featured project" src="images/project/7.jpg" class="img-responsive img-fullwidth">
                    <h4 class="text-white mt-0 mb-0"><span class="price">$125</span></h4>
                    </div>
                    <div class="content text-left flip p-25 pt-0">
                      <h4 class="line-bottom mb-10">Electrical & Electronic</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquam ipsum quis ipsum facilisis sit amet.</p>
                      <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="page-courses-accounting-technologies.html">view details</a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="service-block mb-md-30 bg-white">
                    <div class="thumb"> <img alt="featured project" src="images/project/8.jpg" class="img-responsive img-fullwidth">
                    <h4 class="text-white mt-0 mb-0"><span class="price">$125</span></h4>
                    </div>
                    <div class="content text-left flip p-25 pt-0">
                      <h4 class="line-bottom mb-10">Chemical Engineering</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquam ipsum quis ipsum facilisis sit amet.</p>
                      <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="page-courses-accounting-technologies.html">view details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
@endsection