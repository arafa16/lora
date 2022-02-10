<?php

namespace App\Http\Controllers;
use App\Models\Kolam;
use Illuminate\Http\Request;

class KolamController extends Controller
{
    public function create_kolam(Request $request){

        Kolam::create([
            'name' => $request->nama_kolam,
            'code' => $request->code_kolam,
            'status' => "1"
        ]);

        return back();
    }
}
