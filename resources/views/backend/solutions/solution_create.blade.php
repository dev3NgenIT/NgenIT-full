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
                                <h4>Create Solution</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form class="row">
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Title</label>
                                            <input type="name" class="form-control" placeholder="Enter your solution name...">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Description</label>
                                            <textarea class="form-control" placeholder="Prodcut description..." rows="5"></textarea>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Image</label>
                                            <input type="file" class="form-control" placeholder="Upload your image" accept=".png">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Tag</label>
                                            <input type="teg" class="form-control" placeholder="Enter your tag name...">
                                        </div>
                                        <!--
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <label>Tag</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                        -->
                                        <button type="submit" class="btn btn-info ml-3">Add Solution</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
        </div>
    </div>
   </div>
   
@endsection

  
