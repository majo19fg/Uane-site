@extends('index-admin')
@section('title' ,'Panel principal')
@section('content')


<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline tx-70 lh-0"></i>
    <div>
        <h4>Dashboard</h4>
    </div>
</div><!-- d-flex -->


<div class="br-pagebody">

   

    {{-- <div class="row tx-center">
        <div class="col-lg-3">
            <div class="pd-y-20 bd">
                <div id="morrisDonut1" class="ht-200 ht-sm-250"></div>
            </div>
        </div><!-- col-6 -->
        <div class="col-lg-9 mg-t-20 mg-lg-t-0">
            <div id="morrisBar3" class="ht-200 ht-sm-300 bd"></div>
        </div><!-- col-6 -->
    </div><!-- row -->
 --}}


</div>


@push('css')
<link href="/admin/lib/morris.js/morris.css" rel="stylesheet">

@endpush

@push('js')
<script src="/admin/lib/raphael/raphael.min.js"></script>
<script src="/admin/lib/morris.js/morris.min.js"></script>

<script>
    $(function(){
        'use strict';

        new Morris.Donut({
            element: 'morrisDonut1',
            data: [
            {label: "Saltillo", value: 12},
            {label: "Torreón", value: 30},
            {label: "Monclova", value: 20},
            {label: "Sabinas", value: 20},
            {label: "Piedras Negras", value: 45},
            {label: "Monterrey", value: 13},
            {label: "Matamoros", value: 56},
            {label: "Reynosa", value: 23},
            {label: "Rectoria", value: 63}

            ],
            colors: ['#3D449C','#268FB2','#74DE00'],
            resize: true
        });


        new Morris.Bar({
            element: 'morrisBar3',
            data: [
            { y: 'Enero', a: 100, b: 90, c: 80, d: 55, e: 18, f:77, g: 130, h:71 },
            { y: 'Febrero', a: 75,  b: 65, c: 75, d: 55, e: 18, f:77, g: 130, h:71 },
            { y: 'Marzo', a: 50,  b: 40, c: 45, d: 55, e: 18, f:77, g: 130, h:71 },
            { y: 'Abril', a: 75,  b: 65, c: 85, d: 55, e: 18, f:77, g: 130, h:71 },
            { y: 'Mayo', a: 100, b: 90, c: 80, d: 55, e: 18, f:77, g: 130, h:71 },
            { y: 'Junio', a: 100, b: 90, c: 80, d: 55, e: 18, f:77, g: 130, h:71 },
            { y: 'Julio', a: 100, b: 90, c: 80, d: 55, e: 18, f:77, g: 130, h:71 },
            { y: 'Agosto', a: 100, b: 90, c: 80, d: 55, e: 18, f:77, g: 130, h:71 },
            { y: 'Septiembre', a: 100, b: 90, c: 80, d: 55, e: 18, f:77, g: 130, h:71 },
            { y: 'Octubre', a: 100, b: 90, c: 80, d: 55, e: 18, f:77, g: 130, h:71 },
            { y: 'Noviembre', a: 100, b: 90, c: 80, d: 55, e: 18, f:77, g: 130, h:71 },
            { y: 'Diciembre', a: 100, b: 90, c: 80, d: 55, e: 18, f:77, g: 130, h:71 },
            ],
            xkey: 'y',
            ykeys: ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'],
            labels: ['Saltillo', 'Torreón', 'Monclova', 'Sabinas', 'Piedras Negras', 'Monterrey', 'Matamoros', 'Reynosa', 'Rectoria'],
            barColors: ['#5058AB', '#14A0C1','#01CB99'],
            gridTextSize: 11,
            hideHover: 'auto',
            resize: true
        });

    });
  
</script>
@endpush


@endsection