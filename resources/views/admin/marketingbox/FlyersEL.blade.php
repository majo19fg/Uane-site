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
        <h4>Flyers Coahuila </h4>
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
                                      <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EROkLoReaBJJhKynYzd77FwByKV3WBW1h74FUvXzbvsIIQ?e=lLQ7OZ">CP-2020.pdf</a></th>
                                      <td>21 de Febrero</td>
                                      <td>5.6 MB</td>
                                      <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EROkLoReaBJJhKynYzd77FwByKV3WBW1h74FUvXzbvsIIQ?e=lLQ7OZ"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                    </tr>
                                    <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EQGkXUa5aWtNtcJvM0GXKowBTg2kk7V74plZfm_Mf_QCZQ?e=swk3V9">EAYL-2020.pdf</a></th>
                                        <td>21 de Febrero</td>
                                        <td>4.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EQGkXUa5aWtNtcJvM0GXKowBTg2kk7V74plZfm_Mf_QCZQ?e=swk3V9"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/Ec91RnPuLgtLn2lf6cFbBBoBtWF_d4XvI5Uq71o9MH4Q2w?e=TWQxlr">EL-2020.pdf</a></th>
                                        <td>21 de Febrero</td>
                                        <td>2.7 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/Ec91RnPuLgtLn2lf6cFbBBoBtWF_d4XvI5Uq71o9MH4Q2w?e=TWQxlr"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                        <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EfRzDT11CBVFrIv0qrSKRKUBj15tCfbZV6nAnSpBsBdgkQ?e=NNFOaW">EME-2020.pdf</a></th>
                                        <td>21 de Febrero</td>
                                        <td>5.6 MB</td>
                                        <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EfRzDT11CBVFrIv0qrSKRKUBj15tCfbZV6nAnSpBsBdgkQ?e=NNFOaW"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                      </tr>
                                      <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EW1yYL33Tx5JgxNuIFN5qpYBsO2PrGsZ7rUnjjEOU1-YYQ?e=kNvvMq">ESO-2020.pdf</a></th>
                                          <td>21 de Febrero</td>
                                          <td>4.6 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EW1yYL33Tx5JgxNuIFN5qpYBsO2PrGsZ7rUnjjEOU1-YYQ?e=kNvvMq"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                          <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ES3gni1CVfBEq7tiz9pz7P0BmO07bheglXG_N7g8ZCJzfA?e=Uhz131">IDS-2020.pdf</a></th>
                                          <td>21 de Febrero</td>
                                          <td>2.7 MB</td>
                                          <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ES3gni1CVfBEq7tiz9pz7P0BmO07bheglXG_N7g8ZCJzfA?e=Uhz131"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                        </tr>
                                        <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EaqJg82dgqRMsMpsxMQ5TskBrgkKUfo9H1rngpgg7Unmqg?e=TCuBuJ">IIS-2020.pdf</a></th>
                                            <td>21 de Febrero</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EaqJg82dgqRMsMpsxMQ5TskBrgkKUfo9H1rngpgg7Unmqg?e=TCuBuJ"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EQKQjJuH7u5JnvN9NJ4z8YgBo6YZsfcYCoJvk4X1WqiC-Q?e=YTX0Bd">IMPI-2020.pdf</a></th>
                                            <td>21 de Febrero</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EQKQjJuH7u5JnvN9NJ4z8YgBo6YZsfcYCoJvk4X1WqiC-Q?e=YTX0Bd"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                            <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EapVcQICyshMtwIeA8NONy4BtBBaVj1QePPPAEgqM36JTw?e=mEPW6B">LAE-2020.pdf</a></th>
                                            <td>21 de Febrero</td>
                                            <td>5.6 MB</td>
                                            <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EapVcQICyshMtwIeA8NONy4BtBBaVj1QePPPAEgqM36JTw?e=mEPW6B"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                          </tr>
                                          <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ERTt1RR1zdlOqt_Pu5d-GBMBGM-eLBOMTRsIm5Q_0cLiUg?e=DfLDjk">LAET-2020.pdf</a></th>
                                              <td>21 de Febrero</td>
                                              <td>4.6 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ERTt1RR1zdlOqt_Pu5d-GBMBGM-eLBOMTRsIm5Q_0cLiUg?e=DfLDjk"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EWkUYV_W_e9AtSnHpQniq7kBpp-x1zaoHCiynyEgZkCfRg?e=cWg2e9">LARH-2020.pdf</a></th>
                                              <td>21 de Febrero</td>
                                              <td>2.7 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EWkUYV_W_e9AtSnHpQniq7kBpp-x1zaoHCiynyEgZkCfRg?e=cWg2e9"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EYMXEza412NDuvLM0UP0JzIB1Y2826DygAS7L4hJ59l47g?e=QrAc2I">LCE-2020.pdf</a></th>
                                              <td>21 de Febrero</td>
                                              <td>2.7 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EYMXEza412NDuvLM0UP0JzIB1Y2826DygAS7L4hJ59l47g?e=QrAc2I"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                              <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/Ec8fTiHZ54xMnlxOeZlQ2xkB0c2evQMsTrqhyG91JRyv8A?e=J5asFf">LCI-2020.pdf</a></th>
                                              <td>21 de Febrero</td>
                                              <td>5.6 MB</td>
                                              <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/Ec8fTiHZ54xMnlxOeZlQ2xkB0c2evQMsTrqhyG91JRyv8A?e=J5asFf"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                            </tr>
                                            <tr>
                                                <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EXcL_-WTfyVAq-KsDjIoUpoBPLUGHj6U4DLGdGipwE9sww?e=D2c8bj">LD-2020.pdf</a></th>
                                                <td>21 de Febrero</td>
                                                <td>4.6 MB</td>
                                                <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EXcL_-WTfyVAq-KsDjIoUpoBPLUGHj6U4DLGdGipwE9sww?e=D2c8bj"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                              </tr>
                                              <tr>
                                                <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EfWKRH3T2C1DuU3yf-_6lSoB7veUFMhrxS73bxTS7huFjQ?e=KH8KQN">LPL-2020.pdf</a></th>
                                                <td>21 de Febrero</td>
                                                <td>2.7 MB</td>
                                                <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EfWKRH3T2C1DuU3yf-_6lSoB7veUFMhrxS73bxTS7huFjQ?e=KH8KQN"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                              </tr>
                                              <tr>
                                                  <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EZkno-AbOf1FoH50UVUqdfIBuPp9hfjhunJGrV8e2rEVDw?e=yO58yE">MAGNM-2020.pdf</a></th>
                                                  <td>21 de Febrero</td>
                                                  <td>5.6 MB</td>
                                                  <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EZkno-AbOf1FoH50UVUqdfIBuPp9hfjhunJGrV8e2rEVDw?e=yO58yE"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                </tr>
                                                <tr>
                                                  <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EeOJeocnRVtFjIQc6zb5q2sBu_YV8ImbxBJvlCDAB32XKA?e=nbfWXT">MAYL-2020.pdf</a></th>
                                                  <td>21 de Febrero</td>
                                                  <td>5.6 MB</td>
                                                  <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EeOJeocnRVtFjIQc6zb5q2sBu_YV8ImbxBJvlCDAB32XKA?e=nbfWXT"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                </tr>
                                                <tr>
                                                    <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ER7nkB7SIXhKnYzi9Jp7EQEBVCVZMQ1nu-G68SBxZRO95A?e=KdBPPe">MDIE-2020.pdf</a></th>
                                                    <td>21 de Febrero</td>
                                                    <td>4.6 MB</td>
                                                    <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ER7nkB7SIXhKnYzi9Jp7EQEBVCVZMQ1nu-G68SBxZRO95A?e=KdBPPe"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                  </tr>
                                                  <tr>
                                                    <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ESYYmVKdiKVKrj0qkA4xibcB2V1-bN_0QN26Tj-5gw_x0Q?e=CPUCbg">MGA-2020.pdf</a></th>
                                                    <td>21 de Febrero</td>
                                                    <td>2.7 MB</td>
                                                    <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ESYYmVKdiKVKrj0qkA4xibcB2V1-bN_0QN26Tj-5gw_x0Q?e=CPUCbg"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                  </tr>
                                                  <tr>
                                                    <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EW6MbkJGQehLoY5a_ydr_DcBtOY4R8U9CZTke56p4O73vg?e=tdAoA8">MME-2020.pdf</a></th>
                                                    <td>21 de Febrero</td>
                                                    <td>5.6 MB</td>
                                                    <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/EW6MbkJGQehLoY5a_ydr_DcBtOY4R8U9CZTke56p4O73vg?e=tdAoA8"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                  </tr>
                                                  <tr>
                                                      <th><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ESUjFrEX8MZCtpBI5VsYjwABU8QxyR2f7eUnjfTReUAhqw?e=Vo6cvU">MSO-2020.pdf</a></th>
                                                      <td>21 de Febrero</td>
                                                      <td>4.6 MB</td>
                                                      <td><a href="https://uanemx-my.sharepoint.com/:b:/g/personal/marketingdigital_uane_edu_mx/ESUjFrEX8MZCtpBI5VsYjwABU8QxyR2f7eUnjfTReUAhqw?e=Vo6cvU"><img src="{{ asset('/multi/images/download.png') }}"width="50px" height="50px" /></a></td>
                                                    </tr>
                                   </tbody>
                                </table>
        </div>
    </div>
    </div>
</section>
@endsection