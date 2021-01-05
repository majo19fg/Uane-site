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
        <h4>Wallpapers E20</h4>
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
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EXLFj8Y-4gxCh3IfYRL8sCUB9ePeAXLhZuJxMgEqzRAUfQ?e=xgQO1r">Wallpaper E20 1.jpg</a></th>
                                      <td>5 de Noviembre</td>
                                      <td>330 KB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EXLFj8Y-4gxCh3IfYRL8sCUB9ePeAXLhZuJxMgEqzRAUfQ?e=xgQO1r"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQOvbZrFQ-1PrpVUHz6YXLsBMEW-q8P1sEq20RYt48Ko9g?e=gSjTyJ">Wallpaper E20 2.jpg</a></th>
                                      <td>8 de Noviembre</td>
                                      <td>320 KB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQOvbZrFQ-1PrpVUHz6YXLsBMEW-q8P1sEq20RYt48Ko9g?e=gSjTyJ"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr> 
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ERHqNhZ8LuxArqVDv7UgDUkBVdeQXCnuf7GOlBAA_-OgWg?e=aZmyL2">Wallpaper E20 3.jpg</a></th>
                                      <td>8 de Noviembre</td>
                                      <td>584 KB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ERHqNhZ8LuxArqVDv7UgDUkBVdeQXCnuf7GOlBAA_-OgWg?e=aZmyL2"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ESGsZs4AR7FKs10gz4TZxScBngPN9wOmFVLrCvlbefV9SQ?e=LEZfEM">Wallpaper E20 4.jpg</a></th>
                                      <td>8 de Noviembre</td>
                                      <td>570 KB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ESGsZs4AR7FKs10gz4TZxScBngPN9wOmFVLrCvlbefV9SQ?e=LEZfEM"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr> 
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EUOlPaB6hWJGqC19AUylXoYBwoxsFTCHZreBIlHxxWhEUA?e=zd6LXk">Wallpaper E20 5.jpg</a></th>
                                      <td>8 de Noviembre</td>
                                      <td>720 KB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EUOlPaB6hWJGqC19AUylXoYBwoxsFTCHZreBIlHxxWhEUA?e=zd6LXk"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>  
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ef1pj-LttAJFmFm-lV_cueEBwy47H5iUKHXvfStHgh-STA?e=9R88QA">Wallpaper E20 6.jpg</a></th>
                                      <td>5 de Noviembre</td>
                                      <td>600 KB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ef1pj-LttAJFmFm-lV_cueEBwy47H5iUKHXvfStHgh-STA?e=9R88QA"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>                         
                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection
