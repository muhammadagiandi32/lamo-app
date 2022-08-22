@extends('layouts.appp')

@section('content')
<!--begin::Toolbar-->

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
<!--begin::Alert-->
<div class="alert alert-dismissible bg-light-primary border border-primary d-flex flex-column flex-sm-row p-5 mb-10">
    <!--begin::Icon-->
    <span class="svg-icon svg-icon-2hx svg-icon-primary me-4 mb-5 mb-sm-0">...</span>
    <!--end::Icon-->

    <!--begin::Wrapper-->
    <div class="d-flex flex-column pe-0 pe-sm-10">
        <!--begin::Title-->
        <h5 class="mb-1">This is an alert</h5>
        <!--end::Title-->
        <!--begin::Content-->
        <span>{{$message}}</span>
        <!--end::Content-->
    </div>
    <!--end::Wrapper-->

    <!--begin::Close-->
    <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
        data-bs-dismiss="alert">
        <i class="bi bi-x fs-1 text-primary"></i>
    </button>
    <!--end::Close-->
</div>
<!--end::Alert-->
@endif

@if ($message = Session::get('reset'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> {{$message}}
    <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
        data-bs-dismiss="alert">
        <i class="bi bi-x fs-1 text-success"></i>
    </button>
</div>
@endif
<div class="card-body">
    <div class="card mb-5 mb-xl-8">

        <!--begin::Card-->
        <form action="{{ url('/getDataReport') }}" id="getDataReport" method="POST">
            @csrf
            <div class="card mb-7">
                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Compact form-->
                    <div class="d-flex align-items-center">
                        <!--begin::Input group-->
                        <div class="position-relative w-md-400px me-md-2">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span
                                class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                        transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            {{-- <input type="text" class="form-control form-control-solid ps-10" name="search" value=""
                                placeholder="Search"> --}}
                        </div>
                        <!--end::Input group-->
                        <!--begin:Action-->
                        <div class="d-flex align-items-center">

                            <a id="kt_horizontal_search_advanced_link" class="btn btn-link" data-bs-toggle="collapse"
                                href="#kt_advanced_search_form" aria-expanded="false">Hide Advanced Search</a>
                        </div>
                        <!--end:Action-->
                    </div>
                    <!--end::Compact form-->
                    <!--begin::Advance form-->
                    <div class="collapse" id="kt_advanced_search_form" style=""
                        data-select2-id="select2-data-kt_advanced_search_form">
                        <!--begin::Separator-->
                        <div class="separator separator-dashed mt-9 mb-6"></div>
                        <!--end::Separator-->
                        <!--begin::Row-->
                        <div class="row g-8 mb-8" data-select2-id="select2-data-134-a3kz">
                            <!--begin::Col-->
                            <div class="col-xxl-7">
                                <div class="form-group row">
                                    <label class="fs-6 form-label fw-bold text-dark">Periode</label>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class='input-group' id='kt_daterangepicker_2'>
                                            <input type='text' name="date" class="form-control" readonly
                                                placeholder="Select date range" />
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i
                                                        class="la la-calendar-check-o"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xxl-5" data-select2-id="select2-data-133-w8ao">
                                <!--begin::Row-->
                                <div class="row g-8" data-select2-id="select2-data-132-1u2n">
                                    <!--begin::Col-->
                                    <div class="col-lg-12" data-select2-id="select1-data-131-5den">
                                        <label class="fs-6 form-label fw-bold text-dark">Team Type</label>
                                        <!--begin::Select-->
                                        <select name="type"
                                            class="form-select form-select-solid select2-hidden-accessible"
                                            data-control="select2" data-placeholder="Belum Lunas"
                                            data-hide-search="true" data-select2-id="select2-data-10-o460" tabindex="-1"
                                            aria-hidden="true" data-kt-initialized="1">
                                            <option value="" data-select2-id="select2-data-137-l9de"></option>
                                            <option value="1" data-select2-id="select2-data-138-tsvc">Sudah Lunas
                                            </option>
                                            <option value="" selected="selected" data-select2-id="select2-data-12-j4ge">
                                                Belum Lunas</option>
                                        </select>
                                        <!--end::Select-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->

                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->

                        <!--end::Row-->
                        <div class="text-right">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </div>
                    <!--end::Advance form-->
                </div>
                <!--end::Card body-->
            </div>
        </form>
        <!--end::Card-->

        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Siswa</span>
                <span class="text-muted mt-1 fw-semibold fs-7">Jumlah Siswa 500</span>
            </h3>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div id="report">

        </div>
        <!--end begin::Body-->
        {{-- Row 2 --}}
        <div id="tagihanBuku">

        </div>
        {{-- endrow 2 --}}
    </div>
</div>

@endsection


@section('js')
<link src="{{ asset('assets/js/jquery.dataTables.min.css')}}">
</link>
<link src="{{ asset('assets/js/scroller.dataTables.min.css')}}">
</link>

@endsection