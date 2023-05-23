<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    //mencetak nilai dari segment kedua URL jika segment tersebut tidak null. Jika segment kedua adalah null, maka akan menghasilkan respons 404 Not Found.
    public function index(Request $request){
        if($request->segment(2) !== null){
            $nama = $request->segment(2);
            echo $nama;
        } else{
            abort(404);
        }
    }
}
