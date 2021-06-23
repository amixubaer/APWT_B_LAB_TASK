<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\RegistrationRequest;
use App\Customer;

class RegistrationController extends Controller
{
    public function index(){
        return view('registration.registration');
    }

    public function verify(RegistrationRequest $req){
        echo 'registration done';
    }

    public function insert(RegistrationRequest $req){
        
        $customer = new Customer;
        $customer->full_name = $req->fullname;
        $customer->user_name = $req->username;
        $customer->email = $req->email;
        $customer->password = $req->password;
        $customer->city = $req->city;
        $customer->country = $req->country;
        $customer->phone = $req->phone;
        $customer->company_name = $req->cname;
        $customer->user_type = "active";
        $customer->save();
        return redirect()->route('login.index');
        }
        
}
