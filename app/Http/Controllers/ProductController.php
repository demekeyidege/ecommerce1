<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function register(Request $request){
       
        //For testing purpose, use hard coded data, till we design UI
       /* $product = Product::create([
            'id'=>'1794',
            'name' => 'demeke',
             'unit'=>'80',
             'quantity'=>'34',

        ]);
        echo 'Product: ', $product->name;*/
        return view('product.register');
     function store(Request $request)
        {
            $product=new product();
            $product->name=$request->name;
            $product->unit=$request->unit;
            $product->price=$request->price;
            $product->quantity=$request->quantity;
            $is_seccessed=$product::save();
            $is_seccessed=$product::save();
            if($is_seccessed)
            echo 'Record save succesfully';
            else
            echo 'something went wrong try again';
        }
     }
}
