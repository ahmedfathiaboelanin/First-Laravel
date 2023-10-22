<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comments;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // show all products
    public function index (){
        return view('products.products',[
        'lists'=> Products::get()
    ]);
    }

    // show a single product
    public function showSingleProduct ($id){
        $product = Products::find($id);
        $productId=$product->id;
        $userId = $product->user_id;
        $comments = Comments::where('product_id',$productId)->get();
        $user = User::where('id', $userId)->first();
        if($product){
            return view('products.product',[
                'product'=> $product,
                'owner'=>$user,
                'comments'=>$comments
            ]);
        }else{
            return abort(404);
        }
    }
    public function test(){
        dd(request()->file());
    }
    
}
