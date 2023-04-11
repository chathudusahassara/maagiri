<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsController extends Controller
{
    //
    public function executive(){

        return view('rooms.executive');
    }


    public function junior(){

        return view('rooms.junior');
    }

    public function ocean(){
        
        return view('rooms.ocean');
    }

    public function premier(){

        return view('rooms.premier');
    }


}
