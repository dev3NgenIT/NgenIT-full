<?php

namespace App\Http\Controllers;

use view;
use App\Models\Blog;
use App\Models\Story;
use App\Models\Product;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Success;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\Constraint\Count;

class HomeController extends Controller
{
    public function index(){
        $products = Product::latest()->get();
        $blogs = Blog::latest()->paginate(2);
        $success = Success::latest()->paginate();
        return view('frontend.index',compact('blogs','products'));
    }
    // public function blog(){
    //     return view('frontend.blogs.show');
    // }
    public function login(){
        return view('frontend.auth.login');
    }
    public function register(){
        return view('frontend.auth.register');
    }
    public function contact(){
        $countries =DB::table('countries')
                        ->groupBy('country')
                         ->get();
        return view('frontend.contactus')->with('countries',$countries);
    }
    public function fetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('countries')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }
    public function customLogout()
    {
        Auth::logout();
        return redirect()->back();
    }
    public function contactUs(Request $request){
        ContactUs::create($request->all());
       return redirect()->back()->with('sucess','Thank You for Your Interest');
    }
    public function addStory(Request $request){
        $data = new Story();
        $data->title = $request->title;
        $data->tag = $request->tag;
        $image = $request->image;              
        $imageName = time() . '.' . $image->extension(); 
        $image->storeAs('images', $imageName);
        $data->image = $imageName;
        $data->description = $request->description;
        $data->save();
    }
    public function search(Request $request)
    {
    if($request->keyword != ''){
    $sproducts = Product::where('title','LIKE','%'.$request->keyword.'%')->get();
    }
    return response()->json([
        'sproducts' => $sproducts
    ]);
    }
    public function product($id){
        $sproduct = Product::find($id);
        $products = Product::latest()->get();
        return view('frontend.product.show',['products' => $products,'sproduct' => $sproduct]);
    }


    
   
}
