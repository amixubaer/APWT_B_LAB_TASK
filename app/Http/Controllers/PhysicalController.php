<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Physical_store_channel;
use Illuminate\Support\Facades\DB;

class PhysicalController extends Controller
{
    public function index(){
        return view('system.physical');
    }

    public function addPhysical(Request $req){
        
        $product = DB::table('products')->where('product_name', $req->pname);


        $physical = new Physical_store_channel;
        $physical->customer_name = $req->cname;
        $physical->address = $req->address;
        $physical->phone = $req->phone;
        $physical->product_id = $product->value('id');
        $physical->product_name = $req->pname;
        $physical->unit_price = $product->value('unit_price');
        $physical->quantity = $req->quantity;
        $physical->total_price = $req->quantity*$product->value('unit_price');
        $physical->payment_type = $req->paytype;
        $physical->status = 'sold';
        $physical->save();
        return redirect()->route('Physical.index');
    }
}