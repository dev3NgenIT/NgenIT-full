@extends('backend.master')
@section('content')

      <!-- /# Sidebar -->
   @include('backend.sidebar');
   <!-- /# Header -->
   @include('backend.header');

   <div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
           
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Create Product</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form class="row" action="{{ route('addProduct') }}" method="POST" enctype="multipart/form-data">
                                       @csrf
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Name</label>
                                            <input type="name" name="title" class="form-control" placeholder="Enter your product name...">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Price</label>
                                            <input type="number" name="price" class="form-control" placeholder="Enter your price">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description" placeholder="Prodcut description..." rows="5"></textarea>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control" placeholder="Upload your image">
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Category</label>
                                            <select name="category" class="form-control">
                                                <option>Select Category</option>
                                                @foreach ($categories as $item)
                                                <option value="{{ $item->title }}">{{ $item->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Brands</label>
                                            <select name="brand" class="form-control">
                                                <option>Select Brand</option>
                                                @foreach ($brands as $item)
                                                <option value="{{ $item->title }}">{{ $item->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                            <label>Industries</label>
                                            <select name="industry" class="form-control">
                                                <option>Select Industry</option>
                                                @foreach ($industries as $item)
                                                <option value="{{ $item->title }}">{{ $item->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                     </div>
                                    <button type="submit" class="btn btn-info ml-2">Add Product</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
        </div>
    </div>
</div>
   
@endsection

    
    

