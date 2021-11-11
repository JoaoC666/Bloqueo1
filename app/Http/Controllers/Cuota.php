<?php

namespace App\Http\Controllers;

use CreateBloqueadoresTable;
use Illuminate\Http\Request;
use App\Models\Bloqueador;

class Cuota extends Controller
{
    public function Uno(){
        $cat=new Bloqueador();
        $cat->nombre="Jhon";
        $cat->edad="25";  
        $cat->borrar="***";        
        $cat->save();   
        echo "*********".$cat->id."******";
        dd($cat);
    }

    public function Dos(){
        Bloqueador::find(2)->delete();       
    }

   
}
