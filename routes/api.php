<?php

use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/products',function(Request $request)
{
    return Product::all();
});


Route::post('/product',function(Request $request){
    $product = Product::create($request->all());
    return $product;
});

Route::post('/category',function(Request $request){
    $validator = Validator::make($request->all(),[
        'name'=>'required|string|max:100',
        'price'=>'required|numeric|min:0',
    ]);


    if($validator->fails()){
        return response()->json(['error'=>$validator->errors()->first()],422);
    }
    $category=Category::create($request->all());
    return $category;
});
