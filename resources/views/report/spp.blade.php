@extends('layouts.appp')

@section('content')
<!--begin::Toolbar-->
<form id="tagihan_buku" method="POST" action="{{ url('/tagihanBuku') }}" class="form">
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
														<input type="text" class="form-control form-control-solid ps-10" name="search" value="" placeholder="Search">
													</div>
													<!--end::Input group-->
													<!--begin:Action-->
													<div class="d-flex align-items-center">
														<button type="submit" class="btn btn-primary me-5">Search</button>
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
															<label class="fs-6 form-label fw-bold text-dark">Tags</label>
															<tags class="tagify form-control form-control-solid" tabindex="-1">
            <tag title="products" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="products" contenteditable="false"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">products</span></div></tag><tag title="users" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="users" contenteditable="false"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">users</span></div></tag><tag title="events" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="events" contenteditable="false"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">events</span></div></tag><span tabindex="0" data-placeholder="​" aria-placeholder="" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false" contenteditable=""></span>
                ​
        </tags><input type="text" class="form-control form-control form-control-solid" name="tags" value="products, users, events" tabindex="-1">
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-xxl-5" data-select2-id="select2-data-133-w8ao">
															<!--begin::Row-->
															<div class="row g-8" data-select2-id="select2-data-132-1u2n">
																<!--begin::Col-->
																<div class="col-lg-6" data-select2-id="select2-data-131-5den">
																	<label class="fs-6 form-label fw-bold text-dark">Team Type</label>
																	<!--begin::Select-->
																	<select class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-placeholder="In Progress" data-hide-search="true" data-select2-id="select2-data-10-o460" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																		<option value="" data-select2-id="select2-data-137-l9de"></option>
																		<option value="1" data-select2-id="select2-data-138-tsvc">Not started</option>
																		<option value="2" selected="selected" data-select2-id="select2-data-12-j4ge">In Progress</option>
																		<option value="3" data-select2-id="select2-data-139-klsn">Done</option>
																	</select><span class="select2 select2-container select2-container--bootstrap5 select2-container--below" dir="ltr" data-select2-id="select2-data-11-8xtk" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-x4p0-container" aria-controls="select2-x4p0-container"><span class="select2-selection__rendered" id="select2-x4p0-container" role="textbox" aria-readonly="true" title="In Progress">In Progress</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																	<!--end::Select-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-6">
																	<label class="fs-6 form-label fw-bold text-dark">Select Group</label>
																	<!--begin::Radio group-->
																	<div class="nav-group nav-group-fluid">
																		<!--begin::Option-->
																		<label>
																			<input type="radio" class="btn-check" name="type" value="has" checked="checked">
																			<span class="btn btn-sm btn-color-muted btn-active btn-active-primary fw-bold px-4">All</span>
																		</label>
																		<!--end::Option-->
																		<!--begin::Option-->
																		<label>
																			<input type="radio" class="btn-check" name="type" value="users">
																			<span class="btn btn-sm btn-color-muted btn-active btn-active-primary fw-bold px-4">Users</span>
																		</label>
																		<!--end::Option-->
																		<!--begin::Option-->
																		<label>
																			<input type="radio" class="btn-check" name="type" value="orders">
																			<span class="btn btn-sm btn-color-muted btn-active btn-active-primary fw-bold px-4">Orders</span>
																		</label>
																		<!--end::Option-->
																	</div>
																	<!--end::Radio group-->
																</div>
																<!--end::Col-->
															</div>
															<!--end::Row-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
													<!--begin::Row-->
													<div class="row g-8">
														<!--begin::Col-->
														<div class="col-xxl-7">
															<!--begin::Row-->
															<div class="row g-8">
																<!--begin::Col-->
																<div class="col-lg-4">
																	<label class="fs-6 form-label fw-bold text-dark">Min. Amount</label>
																	<!--begin::Dialer-->
																	<div class="position-relative" data-kt-dialer="true" data-kt-dialer-min="1000" data-kt-dialer-max="50000" data-kt-dialer-step="1000" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
																		<!--begin::Decrease control-->
																		<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen042.svg-->
																			<span class="svg-icon svg-icon-1">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
																					<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</button>
																		<!--end::Decrease control-->
																		<!--begin::Input control-->
																		<input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="$50">
																		<!--end::Input control-->
																		<!--begin::Increase control-->
																		<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen041.svg-->
																			<span class="svg-icon svg-icon-1">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
																					<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
																					<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</button>
																		<!--end::Increase control-->
																	</div>
																	<!--end::Dialer-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-4">
																	<label class="fs-6 form-label fw-bold text-dark">Max. Amount</label>
																	<!--begin::Dialer-->
																	<div class="position-relative" data-kt-dialer="true" data-kt-dialer-min="1000" data-kt-dialer-max="50000" data-kt-dialer-step="1000" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
																		<!--begin::Decrease control-->
																		<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen042.svg-->
																			<span class="svg-icon svg-icon-1">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
																					<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</button>
																		<!--end::Decrease control-->
																		<!--begin::Input control-->
																		<input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="$100">
																		<!--end::Input control-->
																		<!--begin::Increase control-->
																		<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen041.svg-->
																			<span class="svg-icon svg-icon-1">
																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
																					<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
																					<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</button>
																		<!--end::Increase control-->
																	</div>
																	<!--end::Dialer-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-4">
																	<label class="fs-6 form-label fw-bold text-dark">Team Size</label>
																	<input type="text" class="form-control form-control form-control-solid" name="city">
																</div>
																<!--end::Col-->
															</div>
															<!--end::Row-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-xxl-5">
															<!--begin::Row-->
															<div class="row g-8">
																<!--begin::Col-->
																<div class="col-lg-6">
																	<label class="fs-6 form-label fw-bold text-dark">Category</label>
																	<!--begin::Select-->
																	<select class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-placeholder="In Progress" data-hide-search="true" data-select2-id="select2-data-13-s61l" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
																		<option value=""></option>
																		<option value="1">Not started</option>
																		<option value="2" selected="selected" data-select2-id="select2-data-15-k2n0">Select</option>
																		<option value="3">Done</option>
																	</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-14-0l2f" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-3tur-container" aria-controls="select2-3tur-container"><span class="select2-selection__rendered" id="select2-3tur-container" role="textbox" aria-readonly="true" title="Select">Select</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																	<!--end::Select-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-6">
																	<label class="fs-6 form-label fw-bold text-dark">Status</label>
																	<div class="form-check form-switch form-check-custom form-check-solid mt-1">
																		<input class="form-check-input" type="checkbox" value="" id="flexSwitchChecked" checked="checked">
																		<label class="form-check-label" for="flexSwitchChecked">Active</label>
																	</div>
																</div>
																<!--end::Col-->
															</div>
															<!--end::Row-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
												</div>
												<!--end::Advance form-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
									
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Siswa</span>
                    <span class="text-muted mt-1 fw-semibold fs-7">Jumlah Siswa 500</span>
                </h3>
                {{-- <div class="card-toolbar">
                    <!--begin::Menu-->
                    <a href="{{'siswas/create'}}" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                        <span class="svg-icon svg-icon-2">
                            <i class="fas fa-plus"></i>
                        </span>
                        <!--end::Svg Icon-->
                    </a>

                </div> --}}
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
</form>
@endsection


@section('js')
<link src="{{ asset('assets/js/jquery.dataTables.min.css')}}">
</link>
<link src="{{ asset('assets/js/scroller.dataTables.min.css')}}">
</link>

@endsection