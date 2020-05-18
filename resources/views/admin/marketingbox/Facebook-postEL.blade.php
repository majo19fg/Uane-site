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
        <h4>FB En Línea </h4>
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
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EekxbpX2fftKqWf0prj3xCoBCZunvQqkcBJNspKlID5fLg?e=qsYt5A">Post FB - CP.jpg</a></th>
                                      <td>7 de Mayo</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EekxbpX2fftKqWf0prj3xCoBCZunvQqkcBJNspKlID5fLg?e=qsYt5A"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EbfLOsw8ysBHgJzLXryllVkBVlPWj7_sFhH0uO6S7FO9OQ?e=Q3C8Oc">Post FB - EAYL.jpg</a></th>
                                      <td>7 de Mayo</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EbfLOsw8ysBHgJzLXryllVkBVlPWj7_sFhH0uO6S7FO9OQ?e=Q3C8Oc"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZpZyAg8xG5MltTqOanxZn0BLMyY4mIdSHas2CN_y5iGuw?e=pjtym1">Post FB - EL.jpg</a></th>
                                      <td>7 de Mayo</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZpZyAg8xG5MltTqOanxZn0BLMyY4mIdSHas2CN_y5iGuw?e=pjtym1"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EVDiaqwbUg9Mr6M6NPkXzWEBKpfYtGcWsOfSmk9LGk4eRQ?e=jgid7e">Post FB - EME.jpg</a></th>
                                      <td>7 de Mayo</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EVDiaqwbUg9Mr6M6NPkXzWEBKpfYtGcWsOfSmk9LGk4eRQ?e=jgid7e"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Eb1kKKhHKl9Cq2JyWYGEyZUBk0IqGLZ40VwUGCwp1v74aA?e=pyejHC">Post FB - ESO.jpg</a></th>
                                      <td>7 de Mayo</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Eb1kKKhHKl9Cq2JyWYGEyZUBk0IqGLZ40VwUGCwp1v74aA?e=pyejHC"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ERUY5C3wEDtFjjQTnhkkceUB7l1g8nb-ZDQ4l2jy8gZTfA?e=BEzv60">Post FB - IDS.jpg</a></th>
                                      <td>7 de Mayo</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ERUY5C3wEDtFjjQTnhkkceUB7l1g8nb-ZDQ4l2jy8gZTfA?e=BEzv60"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EUclOB5hqyhGtlZZGpuOEzABxCHAjSojJtylsFrZ5DM7uA?e=9drLb7">Post FB - IIS.jpg</a></th>
                                      <td>7 de Mayo</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EUclOB5hqyhGtlZZGpuOEzABxCHAjSojJtylsFrZ5DM7uA?e=9drLb7"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EXqm93boctxNjVi0MSQHKNsBHPj3wVo546aQzB3ArOQykA?e=y4g14E">Post FB - IMPI.jpg</a></th>
                                      <td>7 de Mayo</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EXqm93boctxNjVi0MSQHKNsBHPj3wVo546aQzB3ArOQykA?e=y4g14E"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EVRTr62iHJlNtOgVryPQ-JsBtYN5SESbQHP_wD_b_FHIvg?e=ywR05Q">Post FB - LAE.jpg</a></th>
                                      <td>7 de Mayo</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EVRTr62iHJlNtOgVryPQ-JsBtYN5SESbQHP_wD_b_FHIvg?e=ywR05Q"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EcLrN426vGRNp5oosCu4P3wBzgSBDFPU8Hv_rGzX7DxzkA?e=0uJ97R">Post FB - LAET.jpg</a></th>
                                      <td>7 de Mayo</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EcLrN426vGRNp5oosCu4P3wBzgSBDFPU8Hv_rGzX7DxzkA?e=0uJ97R"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ERB8avA0wpVGqWod3NJlqCQBavmFVICwR1XMdTvN3JJO-w?e=gBL1ub">Post FB - LARH.jpg</a></th>
                                      <td>7 de Mayo</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ERB8avA0wpVGqWod3NJlqCQBavmFVICwR1XMdTvN3JJO-w?e=gBL1ub"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ETUevtDGerpEmpkP0FYB0QMBEGETSSuw-ujhuI6iPhTDEA?e=cofgHb">Post FB - LCE.jpg</a></th>
                                        <td>7 de Mayo</td>
                                        <td>5.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ETUevtDGerpEmpkP0FYB0QMBEGETSSuw-ujhuI6iPhTDEA?e=cofgHb"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQ8mQD6CWBhFp5kiadAWXakBs8wAs0LGEFIWshkQtlfDog?e=g3vbzi">Post FB - LCI.jpg</a></th>
                                        <td>7 de Mayo</td>
                                        <td>5.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQ8mQD6CWBhFp5kiadAWXakBs8wAs0LGEFIWshkQtlfDog?e=g3vbzi"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ETtCYT2KCWJMifoOIa6oUvUB0dT04G-TDdUexNsCzkjHYQ?e=fh0Y3h">Post FB - LD.jpg</a></th>
                                        <td>7 de Mayo</td>
                                        <td>5.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ETtCYT2KCWJMifoOIa6oUvUB0dT04G-TDdUexNsCzkjHYQ?e=fh0Y3h"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                        <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZsPtqq5as9MhDmFKe3EfXMBJUVVgRPK3ecARrbELMQd7g?e=nKg9fU">Post FB - LCD.jpg</a></th>
                                          <td>7 de Mayo</td>
                                          <td>5.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZsPtqq5as9MhDmFKe3EfXMBJUVVgRPK3ecARrbELMQd7g?e=nKg9fU"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EY4HYW1rbnBPn4mWSl8wToUBXlL8A1482kPza52BQP4ioQ?e=b7uSch">Post FB - LIMD.jpg</a></th>
                                          <td>7 de Mayo</td>
                                          <td>5.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EY4HYW1rbnBPn4mWSl8wToUBXlL8A1482kPza52BQP4ioQ?e=b7uSch"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EVP8jEIAl2NCn8f00m4Q6gABcHqwzuizdZb2jSHCYKK2Fw?e=26Rftt">Post FB - LPL.jpg</a></th>
                                            <td>7 de Mayo</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EVP8jEIAl2NCn8f00m4Q6gABcHqwzuizdZb2jSHCYKK2Fw?e=26Rftt"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EWtw56_tUcVLppMU8tRbkuIBk2Sozl5LU88gx9uYnXewEw?e=OfZu5y">Post FB - MAGNM.jpg</a></th>
                                            <td>7 de Mayo</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EWtw56_tUcVLppMU8tRbkuIBk2Sozl5LU88gx9uYnXewEw?e=OfZu5y"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                            <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EaH7xLJFVrpFlsHr_-_Tcl8BC45WjSJbX4aQZBjydbgLSA?e=2gbL1R">Post FB - MAYL.jpg</a></th>
                                              <td>7 de Mayo</td>
                                              <td>5.6 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EaH7xLJFVrpFlsHr_-_Tcl8BC45WjSJbX4aQZBjydbgLSA?e=2gbL1R"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQCq3pSkkNxHs6XHskAJWYgBv1rEezVpJbcjZaS5Cv3p7w?e=vtpE1u">Post FB - MDIE.jpg</a></th>
                                              <td>7 de Mayo</td>
                                              <td>5.6 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQCq3pSkkNxHs6XHskAJWYgBv1rEezVpJbcjZaS5Cv3p7w?e=vtpE1u"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                                <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Efv2uD5wc-5Bv1SmNBvReoABVA3SnqLf-v-Izf1rxSA_fg?e=1679dr">Post FB - MGA.jpg</a></th>
                                                <td>7 de Mayo</td>
                                                <td>5.6 MB</td>
                                                <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Efv2uD5wc-5Bv1SmNBvReoABVA3SnqLf-v-Izf1rxSA_fg?e=1679dr"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                              </tr>
                                              <tr>
                                                  <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EfNYo83wZs5EicQPJqCprUcBxmERYoY8I0obqTDUUUZ-Fw?e=SHEGFC">Post FB - MME.jpg</a></th>
                                                  <td>7 de Mayo</td>
                                                  <td>5.6 MB</td>
                                                  <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EfNYo83wZs5EicQPJqCprUcBxmERYoY8I0obqTDUUUZ-Fw?e=SHEGFC"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                </tr>
                                                <tr>
                                                  <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ERkYqTftyVJMhC4e2OZJfkUB8z6VJgxp-9fboveew6V-IQ?e=cx6bSV">Post FB - MSO.jpg</a></th>
                                                  <td>7 de Mayo</td>
                                                  <td>5.6 MB</td>
                                                  <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ERkYqTftyVJMhC4e2OZJfkUB8z6VJgxp-9fboveew6V-IQ?e=cx6bSV"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                </tr>
                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection