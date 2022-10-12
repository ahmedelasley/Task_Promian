@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <form action="{{ route('pictures.store') }}" method="post" enctype="multipart/form-data" class="dropzone cz-clickable" id="dropzone">
                        @csrf
                        <div>
                            <h3 class="text-center">Upload Image By Click On Box</h3>
                        </div>
                        <div class="dz-default dz-message">
                            <span>Drop Files Here To Upload</span>
                        </div>
                    </form>
                </div>

                <div class="card-body">
                    <div class="row">
                        {{-- @if( $album->pictures()->count() > 0) --}}
                        <!-- card1 start -->
                        <div class="col-md-4 col-xl-3">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>
                                    <span class="text-c-blue f-w-600">Use space</span>
                                    <h4>49/50GB</h4>
                                    <div>
                                        <span class="f-left m-t-10 text-muted">
                                            <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i>Get more space
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card1 end -->
                        {{-- @else
                        <p> No Picture For This Album</p>
                        @endif --}}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
