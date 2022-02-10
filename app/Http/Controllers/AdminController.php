<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){

        $users_daftar = User::where('validation','0')->get();

        $users_active = User::where('validation','1')->get();

        $users_non_active = User::where('validation','2')->get();

        return view('admin_lora.data_user', compact('users_daftar','users_active','users_non_active'));
    }

    public function user_regist($id)
    {
        User::where('id',$id)
        ->update([
                'validation' => '0'
            ]);

        return back();
    }

    public function user_active($id)
    {
        User::where('id',$id)
        ->update([
                'validation' => '1'
            ]);

        return back();
    }

    public function user_non_active($id)
    {
        User::where('id',$id)
        ->update([
                'validation' => '2'
            ]);

        return back();
    }

    public function user_delete($id)
    {
        User::where('id',$id)->delete();

        return back();
    }
    
}
