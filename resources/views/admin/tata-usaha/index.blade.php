@extends('layouts.appp')

@section('content')
<!--begin::Toolbar-->
<form method="POST" action="{{ url('/tagihanBuku') }}" class="form">
    @csrf
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <ol class="breadcrumb breadcrumb-line text-muted fs-6 fw-bold">
                    <li class="breadcrumb-item pe-3"><a href="#" class="pe-3">Home</a></li>
                    <!-- <li class="breadcrumb-item pe-3"><a href="#" class="pe-3">Library</a></li> -->
                    <li class="breadcrumb-item px-3 text-muted">Siswa</li>
                </ol>
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{$message}}
        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
            <i class="bi bi-x fs-1 text-success"></i>
        </button>
    </div>
    @endif
    <div class="card-body">
        <div class="card mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Tata Usaha</span>
                    <span class="text-muted mt-1 fw-semibold fs-7">Jumlah Tata Usaha 500</span>
                </h3>
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <a href="{{'tata_usaha/create'}}" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                        <span class="svg-icon svg-icon-2">
                            <i class="fas fa-plus"></i>
                        </span>
                        <!--end::Svg Icon-->
                    </a>

                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->

            <div class="row">
                <div class="card-body py-3">

                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table id="example" class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bold text-muted">
                                    <th><span style="width: 20px;"><label class="checkbox checkbox-single checkbox-all"><input id="selectAll" type="checkbox">&nbsp;<span></span></label></span></th>
                                    <th class="min-w-100px">#</th>
                                    <th class="min-w-100px">User_ID</th>
                                    <th class="min-w-140px">HP</th>
                                    <th class="min-w-120px">Alamat</th>
                                    <th class="min-w-120px">Created At</th>
                                    <th class="min-w-100px text-end">Actions</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->

                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
            </div>
            <!--end begin::Body-->
        </div>
    </div>
</form>
@endsection


@section('js')
<link src="{{ asset('assets/js/jquery.dataTables.min.css')}}">
</link>
<link src="{{ asset('assets/js/scroller.dataTables.min.css')}}">
</link>

@endsection