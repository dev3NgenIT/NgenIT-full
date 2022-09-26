<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function categories(){
        $categories = Category::all();
        return view ('backend.category.category_view',compact('categories'));
    }
    public function addCategoryT(){
        return view ('backend.category.category_create');
    }
    public function addCategory(Request $request){
    $data = new Category();
    $data->title = $request->title;
    $image = $request->image; 
    $imageName = time() . '.' . $image->extension(); 
    $image->storeAs('Category', $imageName);
    $data->image = $imageName;
    $data->save();

    return redirect()->route('categories');

    }
    public function editCategory($id){
        $data = Category::find($id)->first();
        return view('backend.category.category_edit',compact('data'));
    }
    public function updateCategory(Request $request, $id){
        
        $image = $request->image; 
        $imageName = time() . '.' . $image->extension(); 
        $image->storeAs('Category', $imageName);

        Category::find($id)->update([
        'title' => $request->title,
        'image' => $imageName,
        ]);
        return redirect()->route('categories');
    }
    public function deleteCategory($id){
        Category::find($id)->delete();
        return redirect()->back();
    }
}
