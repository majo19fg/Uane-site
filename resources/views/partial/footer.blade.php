<!-- Footer -->
<footer id="footer" class="footer pb-0" data-bg-img="/multi/images/footer-bg.png" data-bg-color="#25272e">
  <div class="container pt-60 pb-30">
    <div class="row">
      <div class="col-sm-6 col-md-3">
        <div class="widget mb-20"> <img alt="" src="/multi/images/uane-logo-blanco.png">
          <p class="font-12 mt-15 mb-10">La misión de UANE es generar oportunidades para desarrollar personas
            ejemplares, comprometidas con su futuro.</p>
          <a class="btn btn-default btn-transparent btn-xs btn-flat mt-5"
            href="{{route('somos-uane.historia')}} ">Conoce más</a>
        </div>
        <div class="widget dark">
          <div class="widget-subscribe mt-20">
            <h5 class="subscribe-title font-13 text-gray">Ingresa tu correo para suscribirte a nuestras actualizaciones
            </h5>
            <form id="mailchimp-subscription-form" class="newsletter-form mt-10">
              <div class="input-group">
                <input type="email" id="mce-EMAIL" data-height="34px" class="form-control input-sm"
                  placeholder="nombre@correo.com" name="EMAIL" value="">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-colored btn-theme-color-2 text-white btn-xs m-0"
                    data-height="34px">Suscribirse</button>
                </span>
              </div>
            </form>

            <!-- Mailchimp Subscription Form Validation-->
            {{-- <script type="text/javascript">
                $('#mailchimp-subscription-form').ajaxChimp({
                    callback: mailChimpCallBack,
                    url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                });

                function mailChimpCallBack(resp) {
                    // Hide any previous response text
                    var $mailchimpform = $('#mailchimp-subscription-form'),
                        $response = '';
                    $mailchimpform.children(".alert").remove();
                    if (resp.result === 'success') {
                        $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                    } else if (resp.result === 'error') {
                        $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                    }
                    $mailchimpform.prepend($response);
                }
              </script> --}}

          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <h5 class="widget-title line-bottom-theme-colored-2">Tipos de programas</h5>
          <ul class="list list-divider list-border">
            <li><a href="{{ route('programas.bach') }}"><i class="far fa-check-square mr-10 text-black-light"></i>
                Bachillerato</a></li>
            <li><a href="{{ route('programas.lic') }}"><i class="far fa-check-square mr-10 text-black-light"></i>
                Licenciatura</a></li>
            <li><a href="{{ route('programas.ing') }}"><i class="far fa-check-square mr-10 text-black-light"></i>
                Ingeniería</a></li>
            <li><a href="{{ route('programas.maes') }}"><i class="far fa-check-square mr-10 text-black-light"></i>
                Maestría</a></li>
            <li><a href="{{ route('programas.esp') }}"><i class="far fa-check-square mr-10 text-black-light"></i>
                Especialidad</a></li>
            <li><a href="{{ route('programas.doc') }}"><i class="far fa-check-square mr-10 text-black-light"></i>
                Doctorado</a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <h5 class="widget-title line-bottom-theme-colored-2">Twitter Feed</h5>
          <div class="twitter-feed list-border clearfix" data-username="UANEOSOS" data-count="2"></div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <h5 class="widget-title line-bottom-theme-colored-2">Horario de atencion</h5>
          <div class="opening-hours">
            <ul class="list list-border">
              {{-- <li class="clearfix"> <span><i class="fa fa-clock-o mr-5"></i> Mond - Tuesday :</span>
                  <div class="value pull-right"> 9.00 am - 10.00 pm </div>
                </li> --}}
              <li class="clearfix"> <span class="text-theme-color-2"><i class="fa fa-clock-o mr-5"></i> Lunes - Viernes
                </span>
                <div class="value pull-right text-white"> 9:00 - 1:00 pm <br> 4:00 - 8:30 pm </div>
              </li>
              <li class="clearfix"> <span class="text-theme-color-2"><i class="fa fa-clock-o mr-5"></i> Sabado :</span>
                <div class="value pull-right text-white"> 9:00 am - 3:00 pm </div>
              </li>
              <li class="clearfix"> <span><i class="fa fa-clock-o mr-5"></i> Domingo :</span>
                <div class="value pull-right"> <span class="text-highlight bg-theme-color-2 text-white">Cerrado</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="widget dark text-center">
          <img style="img-fluid" width="150px" alt="" src="/multi/images/logo-fimpes.png">
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-theme-colored p-20">
    <div class="row text-center">
      <div class="col-md-12">
        <p class="text-white font-11 m-0">Copyright &copy;<span id="copyright">
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>
          </span> UANE.</p>
      </div>
    </div>

  </div>
</footer>