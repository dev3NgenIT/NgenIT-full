<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\Industry;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index(){
        return view ('backend.index');
    }

    public function products(){
        $products = Product::all();
        return view ('backend.products.product_view',compact('products'));
    }

    public function addProductT(){
        $brands = Brand::all();
        $categories = Category::all();
        $industries = Industry::all();
        return view ('backend.products.product_create',compact('categories','brands','industries'));
    }
    public function addProduct(Request $request){
        $data = new Product();
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $image = $request->image; 
        $imageName = time() . '.' . $image->extension(); 
        $image->storeAs('Product', $imageName);
        $data->image = $imageName;
        $data->category = $request->category;
        $data->brand = $request->brand;
        $data->industry = $request->industry;

        $data->save();
    
        return redirect()->route('products');
    
        }
        public function editProduct($id){
            $data = Product::find($id)->first();
            $brands = Brand::all();
            $categories = Category::all();
            $industries = Industry::all();
            return view('backend.products.product_edit',compact('data','categories','brands','industries'));
        }
        public function updateProduct(Request $request, $id){
            
            $image = $request->image; 
            $imageName = time() . '.' . $image->extension(); 
            $image->storeAs('Product', $imageName);
    
            Product::find($id)->update([
            'title' => $request->title,
            'price' => $request->price,
            'image' => $imageName,
            'category' => $request->category,
            'brand' => $request->brand,
            'industry' => $request->industry
            ]);
            return redirect()->route('products');
        }
        public function deleteProduct($id){
            Product::find($id)->delete();
            return redirect()->back();
        }
    

}
