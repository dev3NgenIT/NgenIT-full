<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function industries(){
        $industries = Industry::all();
        return view ('backend.industry.industry_view',compact('industries'));
    }
    public function addIndustryT(){
        return view ('backend.industry.industry_create');
    }
    public function addIndustry(Request $request){
    $data = new Industry();
    $data->title = $request->title;
    $image = $request->image; 
    $imageName = time() . '.' . $image->extension(); 
    $image->storeAs('Industry', $imageName);
    $data->image = $imageName;
    $data->save();

    return redirect()->route('industries');

    }
    public function editIndustry($id){
        $data = Industry::find($id)->first();
        return view('backend.industry.industry_edit',compact('data'));
    }
    public function updateIndustry(Request $request, $id){
        
        $image = $request->image; 
        $imageName = time() . '.' . $image->extension(); 
        $image->storeAs('Industry', $imageName);

        Industry::find($id)->update([
        'title' => $request->title,
        'image' => $imageName,
        ]);
        return redirect()->route('industries');
    }
    public function deleteIndustry($id){
        Industry::find($id)->delete();
        return redirect()->back();
    }
}
