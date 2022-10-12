@extends('layouts.master')
@section('title')
    Albums | {{ $album->name }}
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h3 class="text-blue f-w-900 f-20">{{ $album->name }}</h3>
                        </div>
                        <div>
                            <a class="btn btn-success btn-icon text-white rounded-50"><i class="fa fa-pencil-alt"></i></a>
                        </div>

                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('pictures.store', $album->id) }}" method="post" enctype="multipart/form-data" class="dropzone cz-clickable" id="dropzone">
                        @csrf
                        <div>
                            <h3 class="text-center">Upload Pictures By Click On Box</h3>
                        </div>
                        <div class="dz-default dz-message dz-remove">
                            <span>Drop Pictures Here To Upload</span>
                        </div>
                    </form>
                    <div class="row mg-t-10">
                        @if( $album->pictures()->count() > 0)
                            @foreach( $albumPicture as $picture)
                                <!-- card1 start -->
                                <div class="col-md-2 col-xl-2">
                                    <div class="card widget-card-1">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h6 class="text-c-blue f-w-900">{{ $picture->name }}</h6>
                                                </div>
                                                <div>
                                                    <a class="btn btn-danger btn-icon text-white rounded-50"><i class="fa fa-trash"></i></a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="card-body" style="height: 200px;">
                                            <img src="{{URL::asset('images/'. $picture->picture)}}" class="img-thumbnail w-100 mh-100 " alt="...">
                                        </div>
                                    </div>
                                </div>
                                <!-- card1 end -->
                            @endforeach
                            
                        @else
                            <p> No Picture For This Album</p>
                        @endif
                    </div>
                    
                </div>
            </div>
        </div>

    </div>
@endsection



@section('js')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js" integrity="sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection
