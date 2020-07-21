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
        <h4>FB Presencial </h4>
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
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EbVq4htX2uZCiU5NXa4OIQMBVhYesa8t61heicOp8Nc9JQ?e=Erg8mG">Post FB - LP.jpg</a></th>
                                      <td>1 de Abril</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EbVq4htX2uZCiU5NXa4OIQMBVhYesa8t61heicOp8Nc9JQ?e=Erg8mG"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EdkizZeheKNOoHP_t1KnibsBWic3LFkLlz_fU3kYqIHKag?e=jApjW9">Post FB - LCE.jpg</a></th>
                                        <td>1 de Abril</td>
                                        <td>5.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EdkizZeheKNOoHP_t1KnibsBWic3LFkLlz_fU3kYqIHKag?e=jApjW9"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZnWBev4OZRAnsNPzvqg8ZoBnJGwnn4lDIx42BeetzA6iw?e=CQGbt6">Post FB - LCI.jpg</a></th>
                                        <td>1 de Abril</td>
                                        <td>5.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EZnWBev4OZRAnsNPzvqg8ZoBnJGwnn4lDIx42BeetzA6iw?e=CQGbt6"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EeTHjlSvZVtCuk-XH_XBeAwBRWRhbI3JOFr4eNOQe4DlXA?e=vun38e">Post FB -  LCP.jpg</a></th>
                                        <td>21 de Julio</td>
                                        <td>5.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EeTHjlSvZVtCuk-XH_XBeAwBRWRhbI3JOFr4eNOQe4DlXA?e=vun38e"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EaOS8w5GSttJnIdrMnuKYh4BnRA6eWgtiTzH0BU1DsZFuw?e=2enePy">Post FB - LD.jpg</a></th>
                                        <td>1 de Abril</td>
                                        <td>5.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EaOS8w5GSttJnIdrMnuKYh4BnRA6eWgtiTzH0BU1DsZFuw?e=2enePy"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EXvjcO1tMoZJq_hGsTINd8oBzY2Og7vuBex6XRrKglwGbw?e=0rhF74">Post FB - LDG.jpg</a></th>
                                        <td>1 de Abril</td>
                                        <td>5.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EXvjcO1tMoZJq_hGsTINd8oBzY2Og7vuBex6XRrKglwGbw?e=0rhF74"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ec0kAPTvoHRIq8-pNYtEfnwBBsC_ti23YtlOS5GhKwvzWQ?e=jNL5q4">Post FB - LG.jpg</a></th>
                                          <td>1 de Abril</td>
                                          <td>5.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ec0kAPTvoHRIq8-pNYtEfnwBBsC_ti23YtlOS5GhKwvzWQ?e=jNL5q4"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ERNNNwtGNehIksyK0vBuB7YBYOAcjp8iZePNPt00auxpvA?e=qZE4vc">Post FB - LI.jpg</a></th>
                                          <td>1 de Abril</td>
                                          <td>5.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ERNNNwtGNehIksyK0vBuB7YBYOAcjp8iZePNPt00auxpvA?e=qZE4vc"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EdPzad2HhNNOtvt64h2UY9wBId7SCbu-d8rA8DA-fanxQw?e=tWtafX">Post FB - LN.jpg</a></th>
                                          <td>1 de Abril</td>
                                          <td>5.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EdPzad2HhNNOtvt64h2UY9wBId7SCbu-d8rA8DA-fanxQw?e=tWtafX"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EYYc4IdZ00pApm8Vw5Gh8BgB_CWTfKkouRacxuyB1nA-sw?e=H4REkt">Post FB - LP.jpg</a></th>
                                            <td>1 de Abril</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EYYc4IdZ00pApm8Vw5Gh8BgB_CWTfKkouRacxuyB1nA-sw?e=H4REkt"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EfgpRCs84thBqml_zzc7Za4BjTm0CkJt6LWqpfTK51f0WQ?e=VOpakz">Post FB - EME.jpg</a></th>
                                            <td>1 de Abril</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EfgpRCs84thBqml_zzc7Za4BjTm0CkJt6LWqpfTK51f0WQ?e=VOpakz"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ee97GfK4eOBCmf7kTTAK2x8Bu9b9TJ2TbeTEyLzkh48dew?e=qeG6SJ">Post FB - EGDRH.jpg</a></th>
                                            <td>15 de Mayo</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ee97GfK4eOBCmf7kTTAK2x8Bu9b9TJ2TbeTEyLzkh48dew?e=qeG6SJ"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                            <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EXPxh5TurlZPh57vatgja60BLJ9JBM401Ik6QLrMWtE7lA?e=IUz8Zi">Post FB - MASC.jpg</a></th>
                                              <td>1 de Abril</td>
                                              <td>5.6 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EXPxh5TurlZPh57vatgja60BLJ9JBM401Ik6QLrMWtE7lA?e=IUz8Zi"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQQVf_Z-qzRNuQv6Bq8uqHEB_bJnp6T_c4dE1n2OYpVVUQ?e=K1Z9Xz">Post FB - MAYL.jpg</a></th>
                                              <td>15 de Mayo</td>
                                              <td>5.6 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EQQVf_Z-qzRNuQv6Bq8uqHEB_bJnp6T_c4dE1n2OYpVVUQ?e=K1Z9Xz"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ERos0qszAUJGqdvI6x8Wwo0B3pLd06xHMSDm_4hWsfs6tg?e=sQgu5c">Post FB - MD.jpg</a></th>
                                              <td>1 de Abril</td>
                                              <td>5.6 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ERos0qszAUJGqdvI6x8Wwo0B3pLd06xHMSDm_4hWsfs6tg?e=sQgu5c"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                                <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EfEJWZmimMJFuyqFy_pmQfsB0HxOmUNc_4zbxMb3FhI0gg?e=gYp73o">Post FB - MDM.jpg</a></th>
                                                <td>1 de Abril</td>
                                                <td>5.6 MB</td>
                                                <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EfEJWZmimMJFuyqFy_pmQfsB0HxOmUNc_4zbxMb3FhI0gg?e=gYp73o"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                              </tr>
                                              <tr>
                                                  <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EfIzL7H8d3BBv_ib5qLe5ikB7hXeDzoHHyYdkzjic6V3zQ?e=g1IejG">Post FB - MED.jpg</a></th>
                                                  <td>1 de Abril</td>
                                                  <td>5.6 MB</td>
                                                  <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EfIzL7H8d3BBv_ib5qLe5ikB7hXeDzoHHyYdkzjic6V3zQ?e=g1IejG"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                </tr>
                                                <tr>
                                                  <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ef8xh9qbdhZOvnHfK0jp3eMBjZQFmAZ3p21Sx1h8M6yzTw?e=8pbuwe">Post FB - MEFO.jpg</a></th>
                                                  <td>1 de Abril</td>
                                                  <td>5.6 MB</td>
                                                  <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ef8xh9qbdhZOvnHfK0jp3eMBjZQFmAZ3p21Sx1h8M6yzTw?e=8pbuwe"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                </tr>
                                                <tr>
                                                  <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Eao9NCYnIRJBs85bZb6_7S0Bn79FgjAiDIPxA-ModnpinA?e=btg3N3">Post FB - METF.jpg</a></th>
                                                  <td>1 de Abril</td>
                                                  <td>5.6 MB</td>
                                                  <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Eao9NCYnIRJBs85bZb6_7S0Bn79FgjAiDIPxA-ModnpinA?e=btg3N3"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                </tr>
                                                <tr>
                                                    <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ET-I2WgtCFtJttjixMLZ1AcBQwg5QvU5n-JCrxILIrtFrg?e=EMhWCu">Post FB - MGA.jpg</a></th>
                                                    <td>1 de Abril</td>
                                                    <td>5.6 MB</td>
                                                    <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ET-I2WgtCFtJttjixMLZ1AcBQwg5QvU5n-JCrxILIrtFrg?e=EMhWCu"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                  </tr>
                                                  <tr>
                                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ESosk1jdBANKg5qmuJCBmQIB2V8hOMcsa6ImSbADLlej4A?e=KmPtV0">Post FB - MGNM.jpg</a></th>
                                                      <td>1 de Abril</td>
                                                      <td>5.6 MB</td>
                                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/ESosk1jdBANKg5qmuJCBmQIB2V8hOMcsa6ImSbADLlej4A?e=KmPtV0"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                    </tr>
                                                    <tr>
                                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EXcDNCpAlJ9Gk9vNWRVsPs8B7JMAfoeUBhioH5jXEC_AiA?e=TSbmuu">Post FB - MI.jpg</a></th>
                                                      <td>1 de Abril</td>
                                                      <td>5.6 MB</td>
                                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EXcDNCpAlJ9Gk9vNWRVsPs8B7JMAfoeUBhioH5jXEC_AiA?e=TSbmuu"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                    </tr>
                                                    <tr>
                                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ef4fd1eBUQtAp1POxcz7jxkB9Iv4LB5wudXg3UutNfW_1Q?e=urKbaf">Post FB - MNOD.jpg</a></th>
                                                      <td>1 de Abril</td>
                                                      <td>5.6 MB</td>
                                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/Ef4fd1eBUQtAp1POxcz7jxkB9Iv4LB5wudXg3UutNfW_1Q?e=urKbaf"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                    </tr>
                                    <tr>
                                      <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EV1s9rC_YklFp9x-Kngl7MsBVgah_bFkC8VO_9yFMUQlxg?e=Jc1RYO">Post FB - MSO.jpg</a></th>
                                      <td>1 de Abril</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EV1s9rC_YklFp9x-Kngl7MsBVgah_bFkC8VO_9yFMUQlxg?e=Jc1RYO"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EcOg07UN_T5GmH4z2Y14S30B4CP4IeljT_AXbJa1SS3WLQ?e=38YojQ">Post FB - MSPA.jpg</a></th>
                                        <td>1 de Abril</td>
                                        <td>5.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:i:/g/personal/marketingdigital_uane_edu_mx/EcOg07UN_T5GmH4z2Y14S30B4CP4IeljT_AXbJa1SS3WLQ?e=38YojQ"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>


 
                                  </tbody>
                                </table>
                       

        </div>
    </div>
    </div>
</section>
@endsection