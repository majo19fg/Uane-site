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
                <form id="form-aspirantes"  class="reservation-form" method="post" action="{{ route('guardar.aspirante2') }}"><h3 class="mt-0 line-bottom text-theme-colored mb-40">Uno de nuestros asesores se comunicará contigo para contarte más sobre <span class="text-theme-colored font-weight-600"> UANE</span></h3>
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
                          <select name="modalidadAspirante" id="modalidadAspirante" class="form-control">
                            <option value="">- Selecciona una opción -</option>
                            <option value="Presencial">Presencial</option>
                            <option value="En línea">En línea</option>
                          </select>
                        </div>
                      </div>
                    </div>
                
                    {{-- Campus --}}
                    <div class="col-sm-6" data-show="presencial" data-hide="modalidadAspirante">
                      <div class="form-group mb-30">
                        <div class="styled-select">
                            <select name="campusAspirante" id="campusAspirante" class="form-control" required="">
                                <option value="">-- --</option>
                                  <option  value="Saltillo">Saltillo</option>
                                  <option  value="Torreón">Torreón</option>
                                  <option  value="Monclova">Monclova</option>
                                  <option  value="Sabinas">Sabinas</option>
                                  <option  value="Piedras Negras">Piedras Negras</option>
                                  <option  value="Monterrey">Monterrey</option>
                                  <option  value="Reynosa">Reynosa</option>
                                  <option  value="Matamoros">Matamoros</option>
                            </select>
                        </div>
                      </div>
                    </div>

                    {{-- Tipo de programa --}}
                    <div class="col-sm-12">
                      <div class="form-group mb-30">
                        <div class="styled-select">
                            <select name="tipoProgramaAspirante" id="tipoProgramaAspirante" class="form-control" required="">
                                <option value="">-- --</option>
                                  <option  value="Bachillerato">Bachillerato</option>
                                  <option  value="Licenciatura">Licenciatura</option>
                                  <option  value="Maestría">Maestría</option>
                                  <option  value="Especialidad">Especialidad</option>
                                  <option  value="Doctorado">Doctorado</option>
                            </select>
                        </div>
                      </div>
                    </div>


                    <div class="col-sm-12">
                      <div class="form-group mb-30">
                        <div class="styled-select">
                          <select name="programaAspirante" id="programaAspirante" class="form-control">
                            <option value="">-- --</option>
                            {{-- Saltillo --}}
                              <optgroup class="BachSaltillo" label="Bachillerato para Saltillo">
                              @foreach ($BachSaltillo as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="LicSaltillo" label="Licenciatura para Saltillo">
                              @foreach ($LicSaltillo as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="MaeSaltillo" label="Maestría para Saltillo">
                              @foreach ($MaeSaltillo as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="EspSaltillo" label="Especialidad para Saltillo">
                              @foreach ($EspSaltillo as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="DocSaltillo" label="Doctorado para Saltillo">
                              @foreach ($DocSaltillo as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                            {{--  --}}
                            {{-- Torreón --}}
                              <optgroup class="BachTorreon" label="Bachillerato para Torreón">
                              @foreach ($BachTorreon as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="LicTorreon" label="Licenciatura para Torreón">
                              @foreach ($LicTorreon as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="MaeTorreon" label="Maestría para Torreón">
                              @foreach ($MaeTorreon as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="EspTorreon" label="Especialidad para Torreón">
                              @foreach ($EspTorreon as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="DocTorreon" label="Doctorado para Torreón">
                              @foreach ($DocTorreon as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                            {{--  --}}
                            {{-- Monclova --}}
                              <optgroup class="BachMonclova" label="Bachillerato para Monclova">
                              @foreach ($BachMonclova as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="LicMonclova" label="Licenciatura para Monclova">
                              @foreach ($LicMonclova as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="MaeMonclova" label="Maestría para Monclova">
                              @foreach ($MaeMonclova as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="EspMonclova" label="Especialidad para Monclova">
                              @foreach ($EspMonclova as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="DocMonclova" label="Doctorado para Monclova">
                              @foreach ($DocMonclova as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                            {{--  --}}
                            {{-- Sabinas --}}
                              <optgroup class="BachSabinas" label="Bachillerato para Sabinas">
                              @foreach ($BachSabinas as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="LicSabinas" label="Licenciatura para Sabinas">
                              @foreach ($LicSabinas as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="MaeSabinas" label="Maestría para Sabinas">
                              @foreach ($MaeSabinas as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="EspSabinas" label="Especialidad para Sabinas">
                              @foreach ($EspSabinas as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="DocSabinas" label="Doctorado para Sabinas">
                              @foreach ($DocSabinas as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                            {{--  --}}
                            {{-- Piedras Negras --}}
                              <optgroup class="BachPiedras" label="Bachillerato para Piedras Negras">
                              @foreach ($BachPiedras as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="LicPiedras" label="Licenciatura para Piedras Negras">
                              @foreach ($LicPiedras as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="MaePiedras" label="Maestría para Piedras Negras">
                              @foreach ($MaePiedras as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="EspPiedras" label="Especialidad para Piedras Negras">
                              @foreach ($EspPiedras as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="DocPiedras" label="Doctorado para Piedras Negras">
                              @foreach ($DocPiedras as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                            {{--  --}}
                            {{-- Monterrey --}}
                              <optgroup class="BachMonterrey" label="Bachillerato para Monterrey">
                              @foreach ($BachMonterrey as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="LicMonterrey" label="Licenciatura para Monterrey">
                              @foreach ($LicMonterrey as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="MaeMonterrey" label="Maestría para Monterrey">
                              @foreach ($MaeMonterrey as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="EspMonterrey" label="Especialidad para Monterrey">
                              @foreach ($EspMonterrey as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="DocMonterrey" label="Doctorado para Monterrey">
                              @foreach ($DocMonterrey as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                            {{--  --}}
                            {{-- Reynosa --}}
                              <optgroup class="BachReynosa" label="Bachillerato para Reynosa">
                              @foreach ($BachReynosa as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="LicReynosa" label="Licenciatura para Reynosa">
                              @foreach ($LicReynosa as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="MaeReynosa" label="Maestría para Reynosa">
                              @foreach ($MaeReynosa as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="EspReynosa" label="Especialidad para Reynosa">
                              @foreach ($EspReynosa as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="DocReynosa" label="Doctorado para Reynosa">
                              @foreach ($DocReynosa as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                            {{--  --}}
                            {{-- Matamoros --}}
                              <optgroup class="BachMatamoros" label="Bachillerato para Matamoros">
                              @foreach ($BachMatamoros as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="LicMatamoros" label="Licenciatura para Matamoros">
                              @foreach ($LicMatamoros as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="MaeMatamoros" label="Maestría para Matamoros">
                              @foreach ($MaeMatamoros as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="EspMatamoros" label="Especialidad para Matamoros">
                              @foreach ($EspMatamoros as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                              <optgroup class="DocMatamoros" label="Doctorado para Matamoros">
                              @foreach ($DocMatamoros as $campus)
                                  <option value="{{ $campus->title }}">{{ $campus->title }}</option>
                              @endforeach
                              </optgroup>
                            {{--  --}}

                            {{-- En línea --}}

                            <optgroup class="LicEnLinea">
                                @foreach ($LicEnLinea as $programa)
                                    <option value="{{ $programa->title }}">{{ $programa->title }}</option>
                                @endforeach
                            </optgroup>
                            <optgroup class="MaeEnLinea">
                                @foreach ($MaeEnLinea as $programa)
                                    <option value="{{ $programa->title }}">{{ $programa->title }}</option>
                                @endforeach
                            </optgroup>


                          </select>
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
     