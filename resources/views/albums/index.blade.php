@extends('layouts.master')
@section('title')
    Albums
@stop
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <div>
                <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hello, Welcome Back!</h2>
                <p class="mg-b-0">{{Auth::user()->name}}</p>
            </div>
        </div>
        <div class="main-dashboard-header-right">
            <div>
                <label class="tx-13 text-center"></label>
                <h5></h5>
            </div>

        </div>
    </div>
    <!-- /breadcrumb -->
@endsection




@section('content')
    <div class="row">

        <livewire:albums>
        
    </div>

</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
