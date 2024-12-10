<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Throwable;

class ProductController extends Controller
{
    public function index(Request $request) {

        $products = Product::paginate(2);
        $data = [
            'products' => $products
        ];

        return view('product.index',$data);
    }
    public function create() {
        
        return view('product.create');
    }
    public function store(Request $request) {


      $this->validate($request,[
         'name' => ['required','min:5'],
         'price' => 'required|integer',
      ]);
       


       Product::create([
         'name' => $request->name,
         'description' => 'test description',
         'image' => 'https://picsum.photos/200/300',
         'price' => $request->price,
         'status' => 1,
       ]);

       return redirect("/");
    }

    public function delete(Request $request,$id) {

        $product = Product::find($id)->delete();
        //Product::where('id',$id)->delete();
        //return redirect()->route('product.index');
        return back();
        
    }


    public function edit(Request $request,$id) {
        $product = Product::findOrfail($id);
        return view('product.edit',['product' => $product]);
    }


    public function update(Request $request) {
        $product = Product::find($request->product_id);

        if(! $product) {
            session()->flash('fail', 'Product not found'); 
            return redirect()->route('product.index');
        }

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        session()->flash('sucesss', 'Product updated successfully'); 

        return redirect()->route('product.index');
    }
}
