<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\LoginRequest;
use App\Admin;
use App\Accountant;
use App\Customer;
use App\Vendor;

class LoginController extends Controller
{
    public function index(){
        return view('login.login');
    }

    public function verify(LoginRequest $req){

        $admin = Admin::where('email', $req->email)
            ->where('password', $req->password)
            ->first();


        if(count((array)$admin) > 0){
            $req->session()->put('email', $req->email);
            return redirect()->route('system.index');
        }else{
            $req->session()->flash('msg', 'invaild email or password');
            return redirect()->route('login.index');
        }
    }
}
