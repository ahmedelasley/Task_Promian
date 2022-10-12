<!-- Create modal -->
<div wire:ignore.self class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Add New Album</h6>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click="close()"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form id="form" >
                    <div class="form-group">
                        <label class="main-content-label tx-12 tx-medium">Album Name</label>
                        <input class="form-control" type="text" name="name" wire:model='name'>
                        @error('name')<span class="bg-danger tx-white d-block px-1 py-1">{{ $message }}</span>@enderror
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button class="btn ripple btn-primary" type="button" wire:click.prevent="store()">Save</button>
                <button class="btn ripple btn-secondary" data-dismiss="modal" type="button" wire:click="close()">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Create modal -->

<!-- Update modal -->
<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Update Album</h6>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click="close()"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form id="form" >
                    <div class="form-group">
                        <label class="main-content-label tx-12 tx-medium">Album Name</label>
                        <input class="form-control" type="text" name="name" wire:model='name'>
                        @error('name')<span class="bg-danger tx-white d-block px-1 py-1">{{ $message }}</span>@enderror
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button class="btn ripple btn-primary" type="button" wire:click.prevent="update()">Update</button>
                <button class="btn ripple btn-secondary" data-dismiss="modal" type="button" wire:click="close()">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Update modal -->

<!-- Show modal -->
<div wire:ignore.self class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-body tx-center pd-y-20 pd-x-20">
                <div class="modal-header">
                    <h6 class="modal-title">Delete Album</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click="close()"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form id="form" >
                        <h6>Are You Sure Delete Album " {{$name}} " ?</h6>
                        @if( $numberAlbumPictures > 0)
                        <div class="form-group ">
                            <label class="main-content-label tx-18">Choice Album </label>
                            <div class="input-group">
                                <select class="form-control" wire:model="album_id">
                                    <option value="NULL">No Choice Album</option>
                                    @foreach ($getAlbums as $album)
                                        <option value="{{ $album->id }}">{{ $album->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('category')<span class="bg-danger tx-white d-block px-1 py-1">{{ $message }}</span>@enderror
    
                        </div>
                        @endif
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-primary" type="button"  wire:click.prevent='delete({{ $ids }})'>Yes</button>
                    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button" wire:click="close()">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Show modal -->

{{-- <!-- Delete modal -->
<div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-body tx-center pd-y-20 pd-x-20">
                <div class="modal-header">
                    <h6 class="modal-title">Delete Album</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click="close()"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form id="form" >
                        <h1>Are You Sure Delete Album ?</h1>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn ripple btn-primary" type="button" wire:click.prevent="destroy()">Yes</button>
                    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button" wire:click="close()">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Delete modal --> --}}
