@extends('layouts.appp')

@section('content')
<!--begin::Toolbar-->

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
        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
            <i class="bi bi-x fs-1 text-primary"></i>
        </button>
        <!--end::Close-->
    </div>
    <!--end::Alert-->
    @endif

    @if ($message = Session::get('reset'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{$message}}
        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
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
														<span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
																<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
															</svg>
														</span>
														<!--end::Svg Icon-->
														{{-- <input type="text" class="form-control form-control-solid ps-10" name="search" value="" placeholder="Search"> --}}
													</div>
													<!--end::Input group-->
													<!--begin:Action-->
													<div class="d-flex align-items-center">
														
														<a id="kt_horizontal_search_advanced_link" class="btn btn-link" data-bs-toggle="collapse" href="#kt_advanced_search_form" aria-expanded="false">Hide Advanced Search</a>
													</div>
													<!--end:Action-->
												</div>
												<!--end::Compact form-->
												<!--begin::Advance form-->
												<div class="collapse" id="kt_advanced_search_form" style="" data-select2-id="select2-data-kt_advanced_search_form">
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
                                                                        <input type='text' name="date" class="form-control" readonly  placeholder="Select date range"/>
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
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
																	<select name="type" class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-placeholder="In Progress" data-hide-search="true" data-select2-id="select2-data-10-o460" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																		<option value="" data-select2-id="select2-data-137-l9de"></option>
																		<option value="1" data-select2-id="select2-data-138-tsvc">Sudah Lunas</option>
																		<option value="2" selected="selected" data-select2-id="select2-data-12-j4ge">Belum Lunas</option>
																		{{-- <option value="3" data-select2-id="select2-data-139-klsn">Done</option> --}}
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
            <div class="row">
                <div class="card-body py-3">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table id="example" class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bold text-muted">
                                    {{-- <th><span style="width: 20px;"><label class="checkbox checkbox-single checkbox-all"><input id="selectAll" type="checkbox">&nbsp;<span></span></label></span></th> --}}
                                    <th class="min-w-100px">#</th>
                                    <th class="min-w-150px">Nama</th>
                                    <th class="min-w-140px">HP</th>
                                    <th class="min-w-120px">Nama Orangtua</th>
                                    <th class="min-w-120px">Alamat</th>
                                    <th class="min-w-120px">Kelas</th>
                                    {{-- <th class="min-w-100px text-end">Actions</th> --}}
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>

                                @foreach($siswas as $key => $siswa)
                                <tr>
                                    {{-- <td><span style="width: 20px;"><label class="checkbox checkbox-single"><input id="checkBoxBuku" name="id_siswa[]" type="checkbox" value="{{ $siswa->id_siswa }}">&nbsp;<span></span></label></span></td> --}}
                                    <td>
                                        <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{$key+1}}</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$siswa->name}}</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$siswa->hp}}</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{$siswa->nama_orangtua}}</a>
                                    </td>
                                    <td class="text-dark fw-bold text-hover-primary fs-6">{{$siswa->alamat}}</td>
                                    <td>
                                        <span class="badge badge-light-success">{{$siswa->kelas}}</span>
                                    </td>
                                    {{-- <td class="text-end">
                                        <a href="{{ url('siswas/'.$siswa->id.'/edit') }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
                                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
                                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
                                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                        <a href="{{ route('reset',$siswa->id) }}" class="btn btn-warning btn-sm">reset</a>
                                    </td>
                                </tr> --}}
                                @endforeach
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->

                    </div>
                    <!--end::Table container-->
                </div>
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