<?php

namespace App\Http\Controllers;
use App\Models\Kolam;
use App\Models\Input;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $kolams = Kolam::all();

        $find = 0;
        
        // set layout sesion(key)
        session(['layout' => 'normal']);
        return view('dashboard_lora.dashboard', compact('kolams','find'));

    }

    public function view_kolam($id){

        

        $kolams = Kolam::all();

        $view_kolam = Kolam::where('id',$id)->first();

        $cek_data = Input::where('code_id',$view_kolam->code)->first();

        $datas = Input::where('code_id',$view_kolam->code)->get();

        

        if($cek_data == null){
            $find = 0;
        }
        else{
            $find = 1;
        }
        
        // set layout sesion(key)
        session(['layout' => 'normal']);

        return view('dashboard_lora.dashboard', compact('kolams','view_kolam','datas','find'));
    }
}
