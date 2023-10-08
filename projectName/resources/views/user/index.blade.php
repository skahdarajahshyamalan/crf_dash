@extends('layouts.main')
@section('title', __('Roles'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Roles List') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">{{ __('Dashboard') }}</a></li>
            <li class="breadcrumb-item">{{ __('Roles') }}</li>
        </ul>
    </div>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive py-5 pb-4  ">
                    <div class="container-fluid">
                     table
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('style')
    @include('layouts.includes.datatable_css')
@endpush
@push('script')
    @include('layouts.includes.datatable_js')
    data table
    @endpush
