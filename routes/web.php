<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Models\Blog;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\SolutionController;


// Route::get()


//Frontend

    // header 
   

    Route::get('/contttactus',function(){
        return view('frontend.contttactus');
    });
    
    Route::get('/allsoftware_t',function(){
        return view('frontend.allsoftware_t');
    });

    Route::get('/CommonhardwareShop',function(){
        return view('frontend.CommonhardwareShop');
    });

    Route::get('/popup',function(){
        return view('frontend.popup');
    });

    Route::get('/soft',function(){
        return view('frontend.software');
    });

    Route::get('/industryall',function(){
        return view('frontend.industry');
    });

    Route::get('/service',function(){
        return view('frontend.service');
    });

    Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs');
    
    //Success
    // Route::get

    //Blogs
    //All Blogs
    Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs');
    //Show Create Form
    Route::get('/blogs/create', [BlogController::class, 'create']);
    //Store Blog Data
    Route::post('/blogs', [BlogController::class, 'store']);
    //Show Edit Form
    Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('edit');
    //Update Listing
    Route::put('blogs/{blog}', [BlogController::class, 'update']);
    //Update Delete
    Route::delete('blogs/{blog}', [BlogController::class, 'destroy']);
    //Single Blogs
    Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('single');
    
// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/contact', [HomeController::class, 'contact']);
// Route::post('/dynamic_dependent/fetch', [HomeController::class, 'fetch'])->name('dynamicdependent.fetch');
// Route::post('/contact_us', [HomeController::class, 'contactUs'])->name('contactus.store');
Route::get('head',function (){
   return view('frontend.header') ;
});
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/contact',[HomeController::class,'contact']);
Route::post('/dynamic_dependent/fetch',[HomeController::class,'fetch'])->name('dynamicdependent.fetch');
Route::post('/contact_us',[HomeController::class,'contactUs'])->name('contactus.store');
Route::post('/search',[HomeController::class,'search'])->name('product.search');
Route::get('/single/product/{id}',[HomeController::class,'product'])->name('product');

// Route::get('/blog/show',[BlogController::class,'show']);



//Auth
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/logout', [HomeController::class, 'customLogout']);
//End Auth


//Client Story
Route::get('/story', [HomeController::class, 'story']);
Route::post('/story', [HomeController::class, 'addStory']);
//End Client Story

//End Frontend



//Backend Start

//rubait
//products
Route::get('/admin', [BackendController::class, 'index']);
// Route::get('/product', [BackendController::class, 'products'])->name('products');
// Route::get('/addProduct', [BackendController::class, 'addProductT'])->name('ProductT');
// Route::post('/add/product', [BackendController::class, 'addProduct'])->name('addProduct');

// //category

// Route::get('/category', [CategoryController::class, 'categories'])->name('categories');
// Route::get('/addCategory', [CategoryController::class, 'addCategoryT'])->name('CategoriesT');
// Route::post('/add/category', [CategoryController::class, 'addCategory'])->name('addCategory');

//billal

//products
Route::get('/product',[BackendController::class,'products'])->name('products');
Route::get('/addProduct',[BackendController::class,'addProductT'])->name('ProductT');
Route::post('/add/product',[BackendController::class,'addProduct'])->name('addProduct');
Route::get('/edit/product/{id}',[BackendController::class,'editProduct']);
Route::post('/update/product/{id}',[BackendController::class,'updateProduct']);
Route::get('/delete/product/{id}',[BackendController::class,'deleteProduct']);

//category

Route::get('/category',[CategoryController::class,'categories'])->name('categories');
Route::get('/addCategory',[CategoryController::class,'addCategoryT'])->name('CategoriesT');
Route::post('/add/category',[CategoryController::class,'addCategory'])->name('addCategory');
Route::get('/edit/category/{id}',[CategoryController::class,'editCategory']);
Route::post('/update/category/{id}',[CategoryController::class,'updateCategory']);
Route::get('/delete/category/{id}',[CategoryController::class,'deleteCategory']);


//Brand
//rubait
// Route::get('/brand', [BrandController::class, 'brands'])->name('brands');
// Route::get('/addBrand', [BrandController::class, 'addBrandT'])->name('BrandsT');
// Route::post('/add/brand', [BrandController::class, 'addBrand'])->name('addBrand');
//billal
Route::get('/brand',[BrandController::class,'brands'])->name('brands');
Route::get('/addBrand',[BrandController::class,'addBrandT'])->name('BrandsT');
Route::post('/add/brand',[BrandController::class,'addBrand'])->name('addBrand');
Route::get('/edit/brand/{id}',[BrandController::class,'editBrand']);
Route::post('/update/brand/{id}',[BrandController::class,'updateBrand']);
Route::get('/delete/brand/{id}',[BrandController::class,'deleteBrand']);





//Industry

Route::get('/industry',[IndustryController::class,'industries'])->name('industries');
Route::get('/addIndustry',[IndustryController::class,'addIndustryT'])->name('IndustryT');
Route::post('/add/industry',[IndustryController::class,'addIndustry'])->name('addIndustry');
Route::get('/edit/industry/{id}',[IndustryController::class,'editIndustry']);
Route::post('/update/industry/{id}',[IndustryController::class,'updateIndustry']);
Route::get('/delete/industry/{id}',[IndustryController::class,'deleteIndustry']);

//Solution

Route::get('/solution', [BlogController::class, 'solutions'])->name('solutions');
Route::get('/addSolution', [BlogController::class, 'addSolutionT'])->name('SolutionT');
Route::post('/add/solution', [BlogController::class, 'addSolution'])->name('addSolution');

//Cart

Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

//End Cart


//Checkout

Route::get('checkout', [CartController::class, 'checkout'])->name('checkout');












Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
