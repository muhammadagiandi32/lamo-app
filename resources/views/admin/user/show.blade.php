@extends('layouts.appp')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name}}</div>

                <div class="card-body">
                    <!-- {{$users[1]->name}} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection