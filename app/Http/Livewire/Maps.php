<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Maps extends Component
{
    public $response;
    public function render()
    {
        return view('livewire.maps');
    }

    public function reContent($response){
        session()->flash('message', 'Pegawai '.$response['name'].' Telah Berhasil di tambahkan');
    }
}