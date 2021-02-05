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
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EbnEjETpStBHgQDlMjS-1kkBCd4YQrNH7x12Vc_i6_fuwQ?e=xttn6N">Cursos_UANE_7 Desperdicios.jpg</a></th>
                                      <td>29 de Enero</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EbnEjETpStBHgQDlMjS-1kkBCd4YQrNH7x12Vc_i6_fuwQ?e=xttn6N"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ESzBOClvCC1DrIAIkiDujFEBYiGI4RRHoUDwZ8jibd-yWg?e=WA8KkP">Cursos_UANE_Administración y Certificación-de Proveedores.jpg</a></th>
                                        <td>29 de Enero</td>
                                        <td>4.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ESzBOClvCC1DrIAIkiDujFEBYiGI4RRHoUDwZ8jibd-yWg?e=WA8KkP"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Eeauvn-npahOr-rDzIioUMkBc9iLuUgy3pSK1a7yZHiXkw?e=We8ja0">Cursos_UANE_Administración-Estratégica.jpg</a></th>
                                        <td>29 de Enero</td>
                                        <td>5.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Eeauvn-npahOr-rDzIioUMkBc9iLuUgy3pSK1a7yZHiXkw?e=We8ja0"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQDv2qIsMcZFsHyyMF2v6_8B7TpE3I4cgpgxcc9W7M2FsQ?e=EOg8lh">Cursos_UANE_Atrévete a ser Docente.jpg</a></th>
                                          <td>29 de Enero</td>
                                          <td>4.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQDv2qIsMcZFsHyyMF2v6_8B7TpE3I4cgpgxcc9W7M2FsQ?e=EOg8lh"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ee8hlczYY8lGg2hlhmsaE3gBaslShBLCqX5LYyzhBQFhtQ?e=Sa3pqY">Cursos_UANE_Coaching.jpg</a></th>
                                          <td>29 de Enero</td>
                                          <td>5.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ee8hlczYY8lGg2hlhmsaE3gBaslShBLCqX5LYyzhBQFhtQ?e=Sa3pqY"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EdFrDXVwwb5HlMeJmf2BgVkBLjWqYD4LRn8CID7ev2Jlig?e=TywFdZ">Cursos_UANE_Cómo Evitar los Daños del Divorcio.jpg</a></th>
                                            <td>29 de Enero</td>
                                            <td>4.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EdFrDXVwwb5HlMeJmf2BgVkBLjWqYD4LRn8CID7ev2Jlig?e=TywFdZ"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EbIobbDYE95Aja3Q64izxrQBTn_avi5nCvw9WJKiKxYt6Q?e=CfKHLm">Cursos_UANE_Cómo Iniciar una Idea de Negocio.jpg</a></th>
                                            <td>29 de Enero</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EbIobbDYE95Aja3Q64izxrQBTn_avi5nCvw9WJKiKxYt6Q?e=CfKHLm"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EX_zQdfMPzBLlRg6fTr4hl8B5KeRdlq_eSCKWu_7VveJSg?e=9evvAz">Cursos_UANE_Cómo Sanar la Relación Padre-Hija.jpg</a></th>
                                              <td>29 de Enero</td>
                                              <td>4.6 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EX_zQdfMPzBLlRg6fTr4hl8B5KeRdlq_eSCKWu_7VveJSg?e=9evvAz"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EcIGg57PStZAkjPCUIRl0n0B1YKB6f_Q9UGSuVvsKZmkcQ?e=itsllO">Cursos_UANE_Cultura de Servicio al Cliente.jpg</a></th>
                                              <td>29 de Enero</td>
                                              <td>5.6 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EcIGg57PStZAkjPCUIRl0n0B1YKB6f_Q9UGSuVvsKZmkcQ?e=itsllO"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                                <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZomm47OaNJGjTBkDEEJ6MwBHcnUJA8YU9NXVyLtpUsgjw?e=xx0H31">Cursos_UANE_Enfrentando a la Diabetes.jpg</a></th>
                                                <td>29 de Enero</td>
                                                <td>4.6 MB</td>
                                                <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZomm47OaNJGjTBkDEEJ6MwBHcnUJA8YU9NXVyLtpUsgjw?e=xx0H31"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                              </tr>
                                              <tr>
                                                <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ESYwt1OkP7dEgtGrCJT7w-cBYDDhaiN3ScffKVRd6tvEfA?e=teKaHQ">Cursos_UANE_Franquicias.jpg</a></th>
                                                <td>29 de Enero</td>
                                                <td>5.6 MB</td>
                                                <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ESYwt1OkP7dEgtGrCJT7w-cBYDDhaiN3ScffKVRd6tvEfA?e=teKaHQ"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                              </tr>
                                              <tr>
                                                  <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ef3ytwPTLH5PuUBy3g4DlMEBHnI2SE30YHx1Z2OVs0f89w?e=OELbul">Cursos_UANE_Gestión del Talento Humano.jpg</a></th>
                                                  <td>29 de Enero</td>
                                                  <td>4.6 MB</td>
                                                  <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ef3ytwPTLH5PuUBy3g4DlMEBHnI2SE30YHx1Z2OVs0f89w?e=OELbul"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                </tr>
                                                <tr>
                                                  <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ear-VyyS2hBJh8zK6PVOlMYBxHfGyXNydQrv1Mc0-ksFVQ?e=WmBHqf">Cursos_UANE_Gestor de Redes Sociales.jpg</a></th>
                                                  <td>29 de Enero</td>
                                                  <td>5.6 MB</td>
                                                  <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ear-VyyS2hBJh8zK6PVOlMYBxHfGyXNydQrv1Mc0-ksFVQ?e=WmBHqf"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                </tr>
                                                <tr>
                                                    <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ETZfKoUJ_w5LlEHZPhLZKgMBzfRYzQjO5OQtKgmzd3Idtg?e=UfeBnF">Cursos_UANE_Hábitos de la Gente Exitosa.jpg</a></th>
                                                    <td>29 de Enero</td>
                                                    <td>4.6 MB</td>
                                                    <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ETZfKoUJ_w5LlEHZPhLZKgMBzfRYzQjO5OQtKgmzd3Idtg?e=UfeBnF"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                  </tr>
                                                                                  <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Eb_XOP-whDJKk0NWUjR75JkBhgcK93XWRX6-9Xh-5mTvkQ?e=sv5sNF">Cursos_UANE_Herramientas Básicas para Ingenieros.jpg</a></th>
                                      <td>29 de Enero</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Eb_XOP-whDJKk0NWUjR75JkBhgcK93XWRX6-9Xh-5mTvkQ?e=sv5sNF"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ET3AoXlCAJVJjlTJrTAf23EBGzUo64bgixrginQ25t-zfw?e=sMa27j">Cursos_UANE_Herramientas Básicas para la Inclusión Educativa.jpg</a></th>
                                        <td>29 de Enero</td>
                                        <td>4.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ET3AoXlCAJVJjlTJrTAf23EBGzUo64bgixrginQ25t-zfw?e=sMa27j"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZKhem1Zuw9JmtUo6RmHXlMB4zw9mbwZbYrWZrS6N43P9w?e=TBEDfU">Cursos_UANE_Lean Manufacturing.jpg</a></th>
                                        <td>29 de Enero</td>
                                        <td>5.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZKhem1Zuw9JmtUo6RmHXlMB4zw9mbwZbYrWZrS6N43P9w?e=TBEDfU"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EWZSZrj2oa1AqRdrGGSVBA8BI2Aa_Dc1WCT3ewU_eRCNPQ?e=KlbmxI">Cursos_UANE_Los Secretos Personales y Familiares.jpg</a></th>
                                          <td>29 de Enero</td>
                                          <td>4.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EWZSZrj2oa1AqRdrGGSVBA8BI2Aa_Dc1WCT3ewU_eRCNPQ?e=KlbmxI"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ER9YsGazWyZLpoQhTa-Wst8Bsk_QV-8b0H4aTDGvDkTa5w?e=sFGgDz">Cursos_UANE_Maltrato Físico y-o Psicológico.jpg</a></th>
                                          <td>29 de Enero</td>
                                          <td>5.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ER9YsGazWyZLpoQhTa-Wst8Bsk_QV-8b0H4aTDGvDkTa5w?e=sFGgDz"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EeLdM0TsW-BJhYDPYFGONvsB02xhM4khT61UXGZ9xivYQA?e=8Pyax8">Cursos_UANE_Manejo-de Conflictos.jpg</a></th>
                                            <td>29 de Enero</td>
                                            <td>4.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EeLdM0TsW-BJhYDPYFGONvsB02xhM4khT61UXGZ9xivYQA?e=8Pyax8"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQ9HAnQNr5lIsUrfRFZid-oBzjpCaMev4ozureQDXcunmQ?e=Stvmpm">Cursos_UANE_Marca Profesional.jpg</a></th>
                                            <td>29 de Enero</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQ9HAnQNr5lIsUrfRFZid-oBzjpCaMev4ozureQDXcunmQ?e=Stvmpm"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ETqwPSyUwp9LinPcERNty0kBL-VUSmQvsB6Q6FYTHWVRkQ?e=ltD8xy">Cursos_UANE_Plan de Negocios.jpg</a></th>
                                              <td>29 de Enero</td>
                                              <td>4.6 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ETqwPSyUwp9LinPcERNty0kBL-VUSmQvsB6Q6FYTHWVRkQ?e=ltD8xy"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZRvTHJ4PoBHr9SAzOta370ByzudXJOrU28n0Ajd7X07mQ?e=R1yG75">Cursos_UANE_Qué es Seis Sigma.jpg</a></th>
                                              <td>29 de Enero</td>
                                              <td>5.6 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZRvTHJ4PoBHr9SAzOta370ByzudXJOrU28n0Ajd7X07mQ?e=R1yG75"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                                <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ea1R4VpfDJRLry_1MGraKbgBX4Dr-F4QIdp4QwrwqAGdhA?e=1SQF4t">Cursos_UANE_Satisfacción en el Trabajo.jpg</a></th>
                                                <td>29 de Enero</td>
                                                <td>4.6 MB</td>
                                                <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ea1R4VpfDJRLry_1MGraKbgBX4Dr-F4QIdp4QwrwqAGdhA?e=1SQF4t"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                              </tr>
                                              <tr>
                                                <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EaUsaB8ZJ95AmIg1E5F1Py4BlB-Nd4JGzwHVnbct2nvOPg?e=3tr952">Cursos_UANE_Supervisando para el Éxito.jpg</a></th>
                                                <td>29 de Enero</td>
                                                <td>5.6 MB</td>
                                                <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EaUsaB8ZJ95AmIg1E5F1Py4BlB-Nd4JGzwHVnbct2nvOPg?e=3tr952"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                              </tr>
                                   </tbody>
                                </table>
        </div>
    </div>
    </div>
</section>
@endsection