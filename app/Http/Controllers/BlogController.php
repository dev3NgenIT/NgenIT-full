<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{   
    // public function index(){
    //     return view(('frontend.index'),[
    //         'blogs' => Blog::latest()->paginate(4)
    //     ]); 
    // }

    public function solutions(){
        return view ('backend.blogs.view',[
            'blogs' => Blog::all()
        ]);
    }
    public function addSolutionT(){
        return view ('backend.blogs.create');
    }
    
    //Show Edit Form
    public function edit(Blog $blog){
    return view('backend.blogs.edit', ['blog' => $blog]);
    }

    // Show All Listing
    public function blogs()
    {
        return view(
            'frontend.blogs.blogs', [
                // 'heading' => 'Latest Blogs',
                'blogs' => Blog::all()
            ]);
    }


    //Show Create 
    public function create()
    { 
        return view('backend.blogs.create'); 
    }

    
    //Store Blog Data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => ['required', Rule::unique('blogs', 'title')],
            'header1' => 'required',
            'header2' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);
        
        
        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        
        Blog::create($formFields);
        
        return redirect('/')->with('message', 'Listing created succesfully!');
    }

    //Update Blog Data
    public function update(Request $request, Blog $blog)
    {
        
        $formFields = $request->validate([
            'title' => ['required' ],
            'header1' => 'required',
            'header2' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);
        
        
        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        
        $blog->update($formFields);
        
        return redirect()->route('single',['blog' => $blog->id]);
        // return back()->with('message', 'Listing updated succesfully!');
        // ->with('message', 'Listing updated succesfully!');
    }


    // Delete Blog
    public function destroy(Blog $blog){
        $blog->delete();
        return redirect('/')->with('message', 'Listing Deleted Successfully');
    }


    //Show Single Blog
    public function show(Blog $blog)
    {
        return view('frontend/blogs/show', [
            'blog' => $blog
        ]);
    }
}
