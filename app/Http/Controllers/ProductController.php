<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Vendor;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        return view('system.product');
    }

    public function existingIndex(){
        return view('system.exproduct');
    }

    public function upcomingIndex(){
        return view('system.upproduct');
    }

    public function addIndex(){
        return view('system.addproduct');
    }


    public function addProduct(Request $req){
       // $user = User::find($id);
    //   $vendor=Vendor::where('full_name',$req->vname)->get();
        //$vid = $vendor->vendor_id;

        //$vendor = DB::table('vendors')->get();
        $vid = DB::table('vendors')->where('full_name', $req->vname)->value('vendor_id');


        $product = new Product;
        $product->product_name = $req->pname;
        $product->category = $req->category;
        $product->unit_price = $req->uprice;
        $product->status = $req->status;
        $product->vendor_id = $vid;
        $product->save();
        return redirect()->route('Product.addIndex');
    }

    
}
