<div class="col-12 col-sm-12 col-lg-12 col-xl-12">
    @include('livewire.modal')
    <div class="card">
        <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
                <h5 class="card-title mb-0 pb-0">Card title</h5>
                <a href="" class="btn btn-primary btn-icon text-white rounded-50" data-target="#createModal" data-toggle="modal"><i class="fa fa-plus"></i></a>

            </div>
        </div>
        <div class="card-body">
            <div class="row">
                @if( $albums->count() > 0)
                @foreach( $albums as $album)
                <div class="col-md-4">
                    <div class="card widget-card-1">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3 class="text-c-blue f-w-900 f-20">{{ $album->name }}</h3>
                                </div>
                                <div class="btn-icon-list">
                                    <a href="{{ url('show-album/'. $album->id ) }}" class="btn btn-primary btn-icon text-white rounded-50"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-success btn-icon text-white rounded-50 " data-toggle="modal" data-target="#updateModal" wire:click.prevent='edit({{ $album->id }})' ><i class="fa fa-pencil-alt"></i></a>
                                    <a class="btn btn-danger btn-icon text-white rounded-50" data-toggle="modal" data-target="#showModal" wire:click.prevent='show({{ $album->id }})'><i class="fa fa-trash"></i></a>
                                </div>

                            </div>                   
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
        
        
        
                @endforeach
                @else
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            
                        </div>
                    </div>
                </div>
                @endif

            </div>
        </div>
        <div class="card-footer">
            <div class="d-flex flex-row justify-content-around">
                <div class="">
                    <ul class="pagination product-pagination text-center">
                        {{ $albums->links() }} 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
