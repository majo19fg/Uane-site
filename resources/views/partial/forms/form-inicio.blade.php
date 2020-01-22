<!-- Modal -->
<div class="modal fade" id="BSParentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-theme-colored">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title text-white" id="myModalLabel">¿Necesitas más información?</h4>
        </div>
        <div class="p-40">
          <!-- Reservation Form Start-->
            <form id="reservation_form_popup" name="reservation_form" class="reservation-form" method="post" action="{{ route('guardar.aspirante') }}"><h3 class="mt-0 line-bottom text-theme-colored mb-40">Uno de nuestros asesores se comunicará contigo para contarte más sobre <span class="text-theme-colored font-weight-600"> UANE</span></h3>
              @csrf
              
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input placeholder="Nombre" type="text" id="reservation_name" name="nombreAspirante" required="" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input placeholder="Apellido" type="text" id="reservation_secondname" name="apellidoAspirante" required="" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input placeholder="Email" type="text" id="reservation_email" name="correoAspirante" class="form-control" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input placeholder="Teléfono" type="text" id="reservation_phone" name="telefonoAspirante" class="form-control" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <div class="styled-select">
                      <select id="car_select" name="modalidadAspirante" class="form-control" required="">
                        <option value="">- Modalidad -</option>
                          @foreach ($modalidad as $modalidad)
                            <option value="{{ $modalidad->name }}">{{ $modalidad->name }}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                </div>
  
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <div class="styled-select">
                      <select id="campusAspirante" name="campusAspirante" class="form-control" required="">
                        <option value="">- Selecciona un campus -</option>
                          @foreach ($campus as $campus)
                            <option value="{{ $campus->name }}">Campus {{ $campus->name }}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                </div>
  
                <div class="col-sm-12">
                  <div class="form-group mb-30">
                    <div class="styled-select">
                      <select name="tipoProgramaAspirante" class="form-control" required="">
                          <option value="">- Nivel de estudio -</option>
                        
                      </select>
                    </div>
                  </div>
                </div>
  
                <div class="col-sm-12">
                    <div class="form-group mb-30">
                      <div class="styled-select">
                        <select name="programaAspirante" class="form-control" required="">
                            <option value="">- Programa -</option>
                            @foreach ($programas as $programa)
                              <option value="{{ $programa->title }}">{{ $programa->title }}</option>
  
                            @endforeach
                      </div>
                    </div>
                  </div>
                
                <div class="col-sm-12">
                  <div class="form-group mb-0 mt-0">
                    <input name="form_botcheck" class="form-control" type="hidden" value="">
                    <button type="submit" class="btn btn-colored btn-theme-colored btn-lg btn-flat border-left-theme-colored-4px mt-20" data-loading-text="Please wait...">Enviar datos</button>
                  </div>
                </div>
              </div>
            </form>
            <!-- Reservation Form End-->
  
            
        </div>
      </div>
    </div>
  </div>
  <!-- Footer Scripts -->
 