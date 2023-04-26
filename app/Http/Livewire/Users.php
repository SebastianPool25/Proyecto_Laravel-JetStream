<?php

namespace App\Http\Livewire;
use App\Models\User;
use livewire\WithPagination;
use Livewire\Component;

class Users extends Component
{
    

    public $mensaje = "Este es un mensaje, bizcochito";
    //public $users;
    public $detallesUser, $nombre;
    public $editarNombre = false;

    public function mount(){
        //$this->users = User::all();
        $this->mensaje = "Este es un mensaje del mount";
    }

    public function render()
    {
        return view('livewire.users',[
            'users' => User::paginate(10),
        ]);

    }
    public function show($id)
    {
        $this->mensaje = "pulsaste detalles de $id";
        $this->detallesUser = User::find($id);
        $this->nombre = $this->detallesUser->name;
    }
    public function edit($id){
        
        $this->editarNombre=true;
        $this->mensaje="pulsaste update de $id";

    }
    public function update($id){
        $this->detallesUser->name=$this->nombre;
        $this->detallesUser->save();
        }
}
