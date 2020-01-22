@extends('index-admin')

@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="#">Dashboard</a>
        <a class="breadcrumb-item" href="#">Campus</a>
        <span class="breadcrumb-item active">Lista de campus</span>
    </nav>
</div><!-- br-pageheader -->
<div class="br-pagetitle">
        <i class="icon ion-ios-gear-outline"></i>
    <div>
        <h4>Form Layouts</h4>
        <p class="mg-b-0">Forms are used to collect user information with different element types of input, select, checkboxes, radios and more.</p>
    </div>
</div><!-- d-flex -->


<div class="br-pagebody pd-x-20 pd-sm-x-30 ">
    <div class="row row-sm mg-b-50">
        @foreach ($campus as $campus)

            <div class="col-md-3 mg-t-20 pd-t-20 mg-md-t-0">
              <div class="card bd-0">
                <img class="card-img-top img-fluid" src="/laravel/public/multi/images/{{ $campus->miniatura }}" alt="Image">
                <div class="card-body rounded-bottom">
                    <h5 class="tx-normal tx-roboto tx-lg-16-force tx-xl-20-force lh-3 mg-b-15"><a href="{{ route('editar.campus', $campus) }}" class="tx-inverse">Da clic para editar la información del Campus {{ $campus->name }}</a></h5>
                  {{-- <p class="card-text tx-white">{{  str_limit($campus->history, 400) }}</p> --}}
                </div>
              </div>
            </div><!-- col -->
        @endforeach
    </div>

</div>
@endsection