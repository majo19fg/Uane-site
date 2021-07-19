@extends('index-admin')
@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="#">Dashboard</a>
        <a class="breadcrumb-item" href="{{ route('usuarios.PlantillaDescarga') }}">Plantilla de Diseños</a>
        <span class="breadcrumb-item active">Cursos en línea</span>
    </nav>
</div><!-- br-pageheader -->
<div class="br-pagetitle">
  <img src="{{ asset('/multi/images/Marketing box/logo.png') }}" width="150px" height="150px"/>
    <div>
        <h4>Cursos en línea </h4>
        <p class="mg-b-0"></p>
    </div>
</div><!-- d-flex -->


<section class="">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    {{-- <p class="mb-10">The Cweren Law Firm is a recognized leader in landlord tenant representation throughout Texas.The largest professional property.</p> --}}
                              <table border-collapse: separate; style>
                                  <colgroup>
                                    <col style="width: 60%"/>
                                    <col style="width: 20%"/>
                                    <col style="width: 20%"/>
                                    <col style="width: 20%"/>
                                  </colgroup>
                                  <thead>
                                    <tr>
                                      <th rowspan="2">Nombre</th>
                                      <th rowspan="2">Fecha</th>
                                      <th rowspan="2">Tamaño</th>
                                      <th rowspan="2">Descarga</th>
                                    </tr>
                                  </thead>
                                  <tfoot>
                                  </tfoot>
                                  <tbody>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EeIhmiYLgSBOkXXiOE4UsWoBlTsXXXaSu_Boe_XrXcAAtw?e=YoaFjq">Cursos_UANE_7 Desperdicios.jpg</a></th>
                                      <td>6 de Mayo</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EeIhmiYLgSBOkXXiOE4UsWoBlTsXXXaSu_Boe_XrXcAAtw?e=YoaFjq"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EVx4Y7m-xHlGj4MJHqOTfqQBbvTXgjg8PNE0yIY2kZWjGw?e=Ig5bg0">Cursos_UANE_Administración y Certificación-de Proveedores.jpg</a></th>
                                        <td>6 de Mayo</td>
                                        <td>4.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EVx4Y7m-xHlGj4MJHqOTfqQBbvTXgjg8PNE0yIY2kZWjGw?e=Ig5bg0"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ES0I9tF8xD1EqQVuLUjbaeIBLMmXd9UsT3INtxjWOlp0tg?e=aBfi8s">Cursos_UANE_Administración-Estratégica.jpg</a></th>
                                        <td>6 de Mayo</td>
                                        <td>5.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ES0I9tF8xD1EqQVuLUjbaeIBLMmXd9UsT3INtxjWOlp0tg?e=aBfi8s"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ESiRFWAUon9PkQKjjHilz10BZ074AJ1nZ14ngj6DbeSaUA?e=utxN1T">Cursos_UANE_Atrévete a ser Docente.jpg</a></th>
                                          <td>6 de Mayo</td>
                                          <td>4.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ESiRFWAUon9PkQKjjHilz10BZ074AJ1nZ14ngj6DbeSaUA?e=utxN1T"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Eab8kylkrMpNnlqsCs08QVYBhLBrI-2E14R_qSGyXZxrwg?e=fXBcMx">Cursos_UANE_Coaching.jpg</a></th>
                                          <td>6 de Mayo</td>
                                          <td>5.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Eab8kylkrMpNnlqsCs08QVYBhLBrI-2E14R_qSGyXZxrwg?e=fXBcMx"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EWLjCqEKRMZJn5qigWzHMD4B3UjzH-rtJfUm-DcrLkKQHQ?e=jwnm2B">Cursos_UANE_Cómo Evitar los Daños del Divorcio.jpg</a></th>
                                            <td>6 de Mayo</td>
                                            <td>4.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EWLjCqEKRMZJn5qigWzHMD4B3UjzH-rtJfUm-DcrLkKQHQ?e=jwnm2B"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EWqyBDECRRZAnZDdabHhhl0BVgOfotbUgd9SGajoc5805g?e=b5a3I8">Cursos_UANE_Cómo Iniciar una Idea de Negocio.jpg</a></th>
                                            <td>6 de Mayo</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EWqyBDECRRZAnZDdabHhhl0BVgOfotbUgd9SGajoc5805g?e=b5a3I8"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EVRuQCLCmA1Noh9Zo9wwDSwBK87UY7zxPGkKn7jwtDVa-w?e=i0GrJa">Cursos_UANE_Cómo Sanar la Relación Padre-Hija.jpg</a></th>
                                              <td>6 de Mayo</td>
                                              <td>4.6 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EVRuQCLCmA1Noh9Zo9wwDSwBK87UY7zxPGkKn7jwtDVa-w?e=i0GrJa"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ERTjHmZ7U5ZLq94xFIf02FIBE5OLSQzCVhvf-RpITbm_TQ?e=uxw79g">Cursos_UANE_Cultura de Servicio al Cliente.jpg</a></th>
                                              <td>6 de Mayo</td>
                                              <td>5.6 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ERTjHmZ7U5ZLq94xFIf02FIBE5OLSQzCVhvf-RpITbm_TQ?e=uxw79g"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                                <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ESzqVgz5HBVDn-lrZ-icW2QBrirbSWC4UzGnDZ0jviNHIg?e=2hKyrc">Cursos_UANE_Enfrentando a la Diabetes.jpg</a></th>
                                                <td>6 de Mayo</td>
                                                <td>4.6 MB</td>
                                                <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ESzqVgz5HBVDn-lrZ-icW2QBrirbSWC4UzGnDZ0jviNHIg?e=2hKyrc"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                              </tr>
                                              <tr>
                                                <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EeZotZe-WR9Om0T8DOSMe_kB7mHxe1YrELItCZRJBLBcbA?e=A2uIIU">Cursos_UANE_Franquicias.jpg</a></th>
                                                <td>6 de Mayo</td>
                                                <td>5.6 MB</td>
                                                <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EeZotZe-WR9Om0T8DOSMe_kB7mHxe1YrELItCZRJBLBcbA?e=A2uIIU"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                              </tr>
                                              <tr>
                                                  <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQK4jimdHV1EmQX4dbDRiKcBltye4Z_y9CC0ytbcFdoZGw?e=KkMquq">Cursos_UANE_Gestión del Talento Humano.jpg</a></th>
                                                  <td>6 de Mayo</td>
                                                  <td>4.6 MB</td>
                                                  <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQK4jimdHV1EmQX4dbDRiKcBltye4Z_y9CC0ytbcFdoZGw?e=KkMquq"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                </tr>
                                                <tr>
                                                  <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EaCgesxlMHZMnoIgVy5JldgBE7JHagnCUkK_6KvPrVF54A?e=Cp3oWw">Cursos_UANE_Gestor de Redes Sociales.jpg</a></th>
                                                  <td>6 de Mayo</td>
                                                  <td>5.6 MB</td>
                                                  <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EaCgesxlMHZMnoIgVy5JldgBE7JHagnCUkK_6KvPrVF54A?e=Cp3oWw"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                </tr>
                                                <tr>
                                                    <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ed9t_0PrfDpLgD1b6eOpPFcBkELnpQvi2ZWJtoEbnqoGJA?e=aIkMzJ">Cursos_UANE_Hábitos de la Gente Exitosa.jpg</a></th>
                                                    <td>6 de Mayo</td>
                                                    <td>4.6 MB</td>
                                                    <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ed9t_0PrfDpLgD1b6eOpPFcBkELnpQvi2ZWJtoEbnqoGJA?e=aIkMzJ"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                  </tr>
                                    <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EWbukhy0C_BGlSzYhet4YOgBmmu3p3j3Zy9xRjT1NX9vZA?e=9Ktt7N">Cursos_UANE_Herramientas Básicas para la Inclusión Educativa.jpg</a></th>
                                        <td>6 de Mayo</td>
                                        <td>4.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EWbukhy0C_BGlSzYhet4YOgBmmu3p3j3Zy9xRjT1NX9vZA?e=9Ktt7N"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EenB3QcPQqFMgX9XEodQV_YBz6_2ebPURpQOXTOqmNNYlQ?e=22PPRF">Cursos_UANE_Lean Manufacturing.jpg</a></th>
                                        <td>6 de Mayo</td>
                                        <td>5.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EenB3QcPQqFMgX9XEodQV_YBz6_2ebPURpQOXTOqmNNYlQ?e=22PPRF"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EYb4Uz0jjRxDp4sII8crk6gBD_ebliUEBEq71CeZhOOtcQ?e=KPz6kW">Cursos_UANE_Los Secretos Personales y Familiares.jpg</a></th>
                                          <td>6 de Mayo</td>
                                          <td>4.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EYb4Uz0jjRxDp4sII8crk6gBD_ebliUEBEq71CeZhOOtcQ?e=KPz6kW"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ES1TH0GvNhVFld7FOcZnROMBXkAQXqQuEtXj3JP_0hU1_A?e=dqdsbO">Cursos_UANE_Maltrato Físico y-o Psicológico.jpg</a></th>
                                          <td>6 de Mayo</td>
                                          <td>5.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ES1TH0GvNhVFld7FOcZnROMBXkAQXqQuEtXj3JP_0hU1_A?e=dqdsbO"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EWRTMT1jPAJMuqwCyrjnBqAB6j-ppGKLbS4nknn3jvhlYg?e=qoGgj3">Cursos_UANE_Manejo-de Conflictos.jpg</a></th>
                                            <td>6 de Mayo</td>
                                            <td>4.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EWRTMT1jPAJMuqwCyrjnBqAB6j-ppGKLbS4nknn3jvhlYg?e=qoGgj3"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZr_XnNkM7xEkAysxoc-JYoBp_L_UxArefRCgoITp-FUAA?e=s5CWPM">Cursos_UANE_Marca Profesional.jpg</a></th>
                                            <td>6 de Mayo</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZr_XnNkM7xEkAysxoc-JYoBp_L_UxArefRCgoITp-FUAA?e=s5CWPM"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EW8-itk9BnJHuPUE5NNn890BLPx8Ssu5OQZSOBWLd24x2g?e=Oz4cW4">Cursos_UANE_Plan de Negocios.jpg</a></th>
                                              <td>6 de Mayo</td>
                                              <td>4.6 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EW8-itk9BnJHuPUE5NNn890BLPx8Ssu5OQZSOBWLd24x2g?e=Oz4cW4"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ETQr7w6-iGVDqe0xlnMqxMgBrNqCawY5JIpKksqQ51ggcw?e=doTRtu">Cursos_UANE_Qué es Seis Sigma.jpg</a></th>
                                              <td>6 de Mayo</td>
                                              <td>5.6 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ETQr7w6-iGVDqe0xlnMqxMgBrNqCawY5JIpKksqQ51ggcw?e=doTRtu"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                                <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EeVKWSN4_5VJv3b38J3JsIwBPeL8XY60mmBWsmX-bV_Nhw?e=DeriX0">Cursos_UANE_Satisfacción en el Trabajo.jpg</a></th>
                                                <td>6 de Mayo</td>
                                                <td>4.6 MB</td>
                                                <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EeVKWSN4_5VJv3b38J3JsIwBPeL8XY60mmBWsmX-bV_Nhw?e=DeriX0"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                              </tr>
                                              <tr>
                                                <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQRScBp5zIlLktJJf_rK9soBvDpspXzUULZOe38tvCD4-w?e=PuvrBq">Cursos_UANE_Supervisando para el Éxito.jpg</a></th>
                                                <td>6 de Mayo</td>
                                                <td>5.6 MB</td>
                                                <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQRScBp5zIlLktJJf_rK9soBvDpspXzUULZOe38tvCD4-w?e=PuvrBq"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                              </tr>
                                   </tbody>
                                </table>
        </div>
    </div>
    </div>
</section>
@endsection