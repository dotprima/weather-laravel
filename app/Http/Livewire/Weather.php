<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;

use Livewire\Component;

class Weather extends Component
{
    public $search;
    public $json;
    public $response = null;
    public $next = null;
    public function resetSearch(){
        $this->search = null;
    }
    
    public function render()
    {
        return view('livewire.weather');
    }
    
    public function search(){
        $url = "http://api.openweathermap.org/data/2.5/weather?q=$this->search&appid=5f75e1043b062f887e35bef42a97cb00";
        $response = Http::get($url); 
        $this->response = $response->json();
        if (isset($this->response['id'])) {
            $query = $this->response['id'];
            $url = "http://api.openweathermap.org/data/2.5/forecast?id=$query&appid=5f75e1043b062f887e35bef42a97cb00";
            $next = Http::get($url); 
            $this->next = $next->json();
        }
        $this->resetSearch();
        session()->flash('message', 'Post successfully updated.');
    }
}