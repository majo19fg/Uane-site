@extends('index-admin')
@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="#">Dashboard</a>
        <a class="breadcrumb-item" href="{{ route('usuarios.PlantillaDescarga') }}">Plantilla de Diseños</a>
        <span class="breadcrumb-item active">Brochures</span>
    </nav>
</div><!-- br-pageheader -->
<div class="br-pagetitle">
  <img src="{{ asset('/multi/images/Marketing box/logo.png') }}" width="150px" height="150px"/>
    <div>
        <h4>Logotipos </h4>
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
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EXGxqzIA9MpDvi2c_GOFiiMBaxPLFmZEuOT85I0MCrriEQ?e=sjR0JF">En linea blanco.png</a></th>
                                      <td>21 de Febrero</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EXGxqzIA9MpDvi2c_GOFiiMBaxPLFmZEuOT85I0MCrriEQ?e=sjR0JF"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ERTACg-xAVtOhn6VKYSDR84BNNlkSGng6KG6FhdgeJBjfA?e=i57FqD">Logotipo uane fondo blanco.jpg</a></th>
                                        <td>21 de Febrero</td>
                                        <td>4.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ERTACg-xAVtOhn6VKYSDR84BNNlkSGng6KG6FhdgeJBjfA?e=i57FqD"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EdV903omwrlJh55TDBBaTXsBgYMgoCXuktqwbABC_u9uoA?e=hb2dQP">Logotipo Americana.jpg</a></th>
                                        <td>21 de Febrero</td>
                                        <td>2.7 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EdV903omwrlJh55TDBBaTXsBgYMgoCXuktqwbABC_u9uoA?e=hb2dQP"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EV6cuas231hIktLZxCO-NWUBaIUDy3e6jXRFmz-iuaBGUQ?e=VPyvi3">Logotipo Autonoma.jpg</a></th>
                                        <td>21 de Febrero</td>
                                        <td>5.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EV6cuas231hIktLZxCO-NWUBaIUDy3e6jXRFmz-iuaBGUQ?e=VPyvi3"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EXMyjwYUjh9Bp9RbXVyenqYBqc4LJTbpe2TCB26zmkNZVg?e=MeiKda">Logotipo uane fondo guinda.jpg</a></th>
                                          <td>21 de Febrero</td>
                                          <td>4.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EXMyjwYUjh9Bp9RbXVyenqYBqc4LJTbpe2TCB26zmkNZVg?e=MeiKda"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQXFZcNBPw1Knh0cA4nziDABLmttvVT9kxWn0yzWJLXSZQ?e=zqzqVv">UANE - Experiencia que transforma fondo guinda.jpg</a></th>
                                          <td>21 de Febrero</td>
                                          <td>2.7 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQXFZcNBPw1Knh0cA4nziDABLmttvVT9kxWn0yzWJLXSZQ?e=zqzqVv"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EVSIdPsa0HFDlwBDtWq0wDABjw3WICFsiG7p3B1O4P_mfw?e=BV1uul">UANE - Experiencia que transforma fondo blanco.jpg</a></th>
                                            <td>21 de Febrero</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EVSIdPsa0HFDlwBDtWq0wDABjw3WICFsiG7p3B1O4P_mfw?e=BV1uul"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ERGKTHkOyKZIjKfb-qzlbIEB8OFmqUdU9jSOKJz5S12ibA?e=zk0oWj">UANE En línea fondo blanco.jpg</a></th>
                                              <td>21 de Febrero</td>
                                              <td>4.6 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ERGKTHkOyKZIjKfb-qzlbIEB8OFmqUdU9jSOKJz5S12ibA?e=zk0oWj"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EVEDQVV1BlVKu7RnygRjdcEBLdWH9nGYzlLgwzqrN2l5ow?e=hGca4s">UANE En línea fondo guinda.jpg</a></th>
                                              <td>21 de Febrero</td>
                                              <td>2.7 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EVEDQVV1BlVKu7RnygRjdcEBLdWH9nGYzlLgwzqrN2l5ow?e=hGca4s"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                                <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ET95jsPZi5tHjgI23CT8xiIBJ-jG51Ot5VhXDSKThcHbgg?e=NQGml0">UANE En línea sin fondo.png</a></th>
                                                <td>21 de Febrero</td>
                                                <td>5.6 MB</td>
                                                <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ET95jsPZi5tHjgI23CT8xiIBJ-jG51Ot5VhXDSKThcHbgg?e=NQGml0"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                              </tr>
               
                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection