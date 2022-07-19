

@extends('layouts.auth')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" id="kt_post" style="background-image: url('{{ asset('assets/dist/assets/media/illustrations/sketchy-1/14.png')}}')">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="col-xxl-8">
                    <!--begin::Chart widget 22-->
                    <div class="card card-flush h-lg-100" id="kt_contacts_main">
                        <!--begin::Card header-->
                        <div class="card-header pt-7" id="kt_chat_contacts_header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg')}}-->
                                <span class="svg-icon svg-icon-1 me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor"></path>
                                        <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <h2>Pendaftaran Peserta Didik Baru 2022</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-5">
                            <!--begin::Form-->
                            <form enctype="multipart/form-data" id="kt_ecommerce_settings_general_form" data-id="id_form" method="POST" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{ url( '/regis/ppdb ') }}">
                                <input type="hidden" name="id_status" value="1">
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7 fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">NISN</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Enter the contact's email." aria-label="Enter the contact's email."></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="nisn" value="" autocomplete="off">
                                            <!--end::Input-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Nama Lengkap</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Enter the contact's phone number (optional)." aria-label="Enter the contact's phone number (optional)."></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="long_name" value="" autocomplete="off">
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label mt-3">
                                            <span class="required">Asal Sekolah</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Enter the contact's name." aria-label="Enter the contact's name."></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" name="origin_school" value="" autocomplete="off">
                                        <!--end::Input-->
                                        {{-- <span class="help-block text-danger error_email"></span> --}}
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span>Email</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Enter the contact's company name (optional)." aria-label="Enter the contact's company name (optional)."></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="email" value="" autocomplete="off">
                                    <!--end::Input-->
                                    {{-- <span class="help-block">Please correct the error</span> --}}
                                </div>
                                <!--end::Input group-->
                                <!--begin::Row-->
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7 fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Tempat Lahir</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Enter the contact's email." aria-label="Enter the contact's email."></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="place" value="" autocomplete="off">
                                            <!--end::Input-->
                                        <div class="invalid-feedback"></div></div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Tanggal Lahir</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Enter the contact's phone number (optional)." aria-label="Enter the contact's phone number (optional)."></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="date" class="form-control form-control-solid" name="dob" value="" autocomplete="off">
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7 fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Lulus Tahun</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Enter the contact's email." aria-label="Enter the contact's email."></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="year" class="form-control form-control-solid" name="year_graduated" value="" autocomplete="off">
                                            <!--end::Input-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Jenis Kelamin</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Enter the contact's phone number (optional)." aria-label="Enter the contact's phone number (optional)."></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div class="form-group" >
                                                <select  required="required" class="form-control" name="gender">
                                                    <option value="">--Pilih--</option>
                                                    <option value="pria">Laki-laki</option>
                                                    <option value="wanita">Perempuan</option>
                                                </select>
                                            </div>
                                            <!-- <input type="text" class="form-control form-control-solid" name="gender" value="" autocomplete="off"> -->
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7 fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">No HP(Aktif)</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Enter the contact's email." aria-label="Enter the contact's email."></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="number" class="form-control form-control-solid" name="no_hp" value="" autocomplete="off">
                                            <!--end::Input-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7 fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Nama Ayah Kandung</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Enter the contact's email." aria-label="Enter the contact's email."></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="father_name" value="" autocomplete="off">
                                            <!--end::Input-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Nama Gadis Ibu Kandung</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Enter the contact's phone number (optional)." aria-label="Enter the contact's phone number (optional)."></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="mother_name" value="">
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span>Alamat</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Enter any additional notes about the contact (optional)." aria-label="Enter any additional notes about the contact (optional)."></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea id="address" class="form-control form-control-solid" name="address"></textarea>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7 fv-plugins-icon-container">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">No HP Ortu/Wali(Aktif)</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Enter the contact's email." aria-label="Enter the contact's email."></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="number" class="form-control form-control-solid" name="no_hp_guardian" value="" autocomplete="off">
                                            <!--end::Input-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                        <!--begin::Input group-->
                                        <div class="mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold mb-3">
                                        <span>Update Ijazah</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Allowed file types: png, jpg, jpeg." aria-label="Allowed file types: png, jpg, jpeg."></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Image input wrapper-->
                                    <div class="mt-1">
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{ asset('assets/dist/assets/media/svg/avatars/blank.svg')}}')">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-100px h-100px" style="background-image: url('{{ asset('assets/dist/assets/media/svg/avatars/blank.svg')}}')"></div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Edit-->
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change avatar">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <!--begin::Inputs-->
                                                <input type="file" id="avatar" name="avatar" accept=".png, .jpg, .jpeg">
                                                <input type="hidden" name="avatar_remove">
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Edit-->
                                            <!--begin::Cancel-->
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Cancel-->
                                            <!--begin::Remove-->
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Remove-->
                                        </div>
                                        <!--end::Image input-->
                                    </div>
                                    <!--end::Image input wrapper-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Separator-->
                                <div class="separator mb-6"></div>
                                <!--end::Separator-->
                                <!--begin::Action buttons-->
                                <div class="d-flex justify-content-end">
                                    <!--begin::Button-->
                                    <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="submit" id="submit-ppdb" data-kt-contacts-type="submit" class="btn btn-primary">
                                        <span class="indicator-label">Save</span>
                                        <span class="indicator-progress">Please wait... 
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                                <!--end::Action buttons-->
                            <div>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Card body-->
                    </div>                    
                    <!--end::Chart widget 22-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                    <div class="col-xxl-4">
                        <!--begin::Slider Widget 3-->
                        <div id="kt_sliders_widget_3_slider" class="card card-flush carousel slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5000">
                            <!--begin::Header-->
                            <div class="card-header pt-5 mb-5">
                                <h3>Informasi Pendaftaran Siswa Baru</h3>
                                <p>Seluruh kegiatan PPDB selama Pandemi COVID-19 diadakan secara Online, berkaitan dengan informasi – infomasi lain tetap pantau perkembangan informasi yang berada di website kami.</p>
                            </div>
                            <!--end::Header-->
                            <div class="card-header pt-5 mb-5">
                                <h3>WAKTU BELAJAR :</h3>
                                <p>1. Belajar pagi mulai hari Senin s.d. Jum’at <br>
                                2. Sabtu untuk ekstrakurikuler mulai pagi dari jam 07.00 s.d. 10.30 dan sore dari jam 15.30 s.d. 17.30.</p>
                            </div>
                        </div>
                        <!--end::Slider Widget 3-->
                    </div>
                    <!--end::Col-->
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
</div>
{{-- beginn: Ajax Controllers --}}
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.11/dist/sweetalert2.all.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("#kt_ecommerce_settings_general_form").on('submit',function (event) {
            event.preventDefault();

            var files = $('#avatar')[0].files;
            // var formData = new FormData($('#kt_ecommerce_settings_general_form'));
            var form = this;
            // formData.append('file',files[0]);
            // var id_form = $('#kt_ecommerce_settings_general_form');

            $.ajax({
                type:'POST',
                url:'/regis/ppdb ',
                headers: { 'CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                datatType : 'json',
                processData: false,
                contentType: false,
                data: new FormData(form),
                beforeSend:function(){
                    $(document).find('span.text-danger').text('');
                    
                },
                success: function(data)
                {
                    console.log(data);
                    if(data.status == 0){
                        $.each(data.error, function(errorf, val){
                            console.log(val);
                            // $('span.'+errorf+'_error').text(val[0])
                            Swal.fire({
                                icon: 'error',
                                title: '<b>ERROR<b>',
                                html: '<b>'+errorf+'</b><b>'+val[0]+'</b>'
                            })
                        })
                    }else{
                        Swal.fire({
                            icon: 'success',
                            title: 'Conglatulaions',
                            text: 'Your Data hasben progres verivication...'
                        });
                        $("form").trigger("reset");
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    console.log(xhr);
                },
            });
        });
    });
</script>
{{-- end: Ajax Controllers --}}
@endsection