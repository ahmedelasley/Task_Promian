<?php

namespace App\Http\Livewire;

use App\Models\Album;
use Livewire\Component;
use App\Models\AlbumPictures;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class Albums extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public $ids, $name, $numberAlbumPictures, $album_id, $getAlbums;

    public function resetInputFields()
    {
        $this->name = '';
    }
    public function close()
    {
        $this->resetInputFields();

    }
    protected function rules()
    {
        return [
            'name' => 'required|string|unique:albums,name,'.$this->ids,
        ];
    }

    public function store()
    {
        $validatedData = $this->validate();

        Album::create([
            'name'    => $this->name,
            'user_id' =>  Auth::user()->id,
        ]);
        $this->dispatchBrowserEvent('swal:alert', [
            'icon' => 'success',
            'title' => 'Done',
            'text' => 'Add Album Successfuly',
        ]);
        $this->resetInputFields();
        $this->dispatchBrowserEvent('close-modal');

    }


    public function edit(int $id) 
    {
        $album = Album::find($id);
        if ($album) {
            $this->ids          = $album->id;
            $this->name         = $album->name;
        } else {
            return redirect()->to('/albums');
        }
    }

    public function update()
    {
        $validatedData = $this->validate();
        Album::find($this->ids)->update([
            'name'     => $validatedData['name'] ,
            'user_id'  =>  Auth::user()->id,

        ]);

        $this->resetInputFields();
        $this->dispatchBrowserEvent('close-modal');
        $this->dispatchBrowserEvent('swal:alert', [
            'icon' => 'success',
            'title' => 'Done',
            'text' => 'Updated Album Successfuly',
        ]);


    }

    public function show($id)
    {
        $this->ids = $id;
        $album = Album::find($id);
        $this->name = $album->name;
        $this->numberAlbumPictures = $album->pictures()->count();
        if ($this->numberAlbumPictures > 0) {
            $this->getAlbums = Album::where('id', '!=', $id)->get();
        }

    }

    public function delete($id)
    {
        $this->ids = $id;
        if ($this->album_id != NULL) {
            AlbumPictures::where('album_id', $id)->update([
                'album_id'  =>  $this->album_id,
            ]);
        }else{

            $pictures = AlbumPictures::where('album_id', $id);
            $pictures->delete();

        }

        
        $album = Album::find($this->ids)->delete();
        $this->dispatchBrowserEvent('swal:alert', [
            'icon' => 'success',
            'title' => 'Done',
            'text' => 'Delete Album Successfuly',
        ]);
        $this->dispatchBrowserEvent('close-modal');


    }
    
    public function destroy()
    {
        $album = Album::find($this->ids)->delete();
        $this->dispatchBrowserEvent('swal:alert', [
            'icon' => 'success',
            'title' => 'Done',
            'text' => 'Delete Album Successfuly',
        ]);
        $this->dispatchBrowserEvent('close-modal');

    }

    public function render()
    {
        $albums = Album::paginate(12);
        return view('livewire.albums',[
            'albums' => $albums,

        ]);
    }
}
