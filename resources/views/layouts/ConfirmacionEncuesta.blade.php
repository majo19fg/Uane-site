@extends('index')

@section('title', 'Encuesta de medios')

@section('meta-desc', 'Hace 44 años, un grupo de personas tuvieron una visión de formar una Universidad cuyo principio fundamental era generar oportunidades para una educación superior de calidad para las personas que se encontraban inmersas en el campo laboral.')

@section('content')
   <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="/multi/images/banners/46banner.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: About -->
    <section class="" style="background-color:#73243C">
      <div class="container">
        <div class="section-content">
          <div class="row" >
           <div class="col-md-3">
           </div>

            <div class="col-md-6">
              <div class="section">
              <center>
              <h2 class="text-uppercase font-weight-600 mt-0 font-28" style="color: white">Encuesta registrada exitosamente.</h2>
              {{-- <h4 class="text-theme-colored">Lorem ipsum dolor sit amet soluta saepe odit error, maxime praesentium sunt udiandae!</h4> --}}
              <p style="color: white"><b>¡Haz finalizado tu encuesta!</b></p>
             {{--<p>En agradecimiento a tu colaboración, queremos darte la oportunidad de participar en un sorteo por<b> un kit promocional</b>.</p>
             <p>A los ganadores se les entregará su premio con su matricula personalmente en su campus correspondiente.</p>
             <p><b>Te mantendremos informado</b>.</p>
             <p><b>Cierre de la encuesta el dia 9 de Diciembre</b>.</p>--}}
              </center>
            </div>
           </div>
          </div>
          </div>
        </div>
      </div>
    </section>
    
    @include('partial.datos')

@endsection
@push('css')
<style>
 div.section {
      margin-top: 8px;
      margin-bottom: 8px;
      padding: 3px 10px;
      border: #F4C300 5px solid;
      border-radius: 8px;
      float: left;
      width: 100%;
      height: auto;
    }
</style>
@endpush