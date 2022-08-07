@extends('layouts.appp')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-px text-center py-20 my-10">
                    <!--begin::Title-->
                    <h2 class="fs-2x fw-bolder mb-10">Welcome to SIP App MA'ARIF</h2>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <p class="text-gray-400 fs-4 fw-bold mb-10">There are no customers added yet.
                        <br>Kickstart your CRM by adding a your first customer
                    </p>
                    <!--end::Description-->
                    <!--begin::Action-->
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">Add
                        Customer</a>
                    <!--end::Action-->
                </div>
            </div>

        </div>
    </div>
</div>
@endsection