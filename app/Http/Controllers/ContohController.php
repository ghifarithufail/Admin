<?php

namespace App\Http\Controllers;

use App\Models\Contoh;
use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function contoh(Request $request){
        if($request->has('search')){
            $contoh = Contoh::where('nama','LIKE','%' .$request->search. '%')->paginate(25);
        }
        else{
            $contoh = Contoh::paginate(25);
        }
        return view('contoh', compact('contoh'));
    }
}