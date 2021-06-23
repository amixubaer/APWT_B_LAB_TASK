<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function index(){
        return view('registration.registration');
    }

    public function verify(RegistrationRequest $req){
        echo 'registration done';
    }
}
