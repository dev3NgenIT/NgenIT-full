@extends('backend.master')
@section('content')

      <!-- /# Sidebar -->
   @include('backend.sidebar');
   <!-- /# Header -->
   @include('backend.header');

   <div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <!--/# row-->
            <div class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-title">
                            <h4>Catagory Page </h4>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($i=1)
                                        @foreach ($categories as $item )
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td><img src="{{ asset('storage/Category/'.$item->image) }}" width="20px" alt=""></td>
                                            <td>
                                                <a href="{{ url('edit/category/'.$item->id) }}"><button class="btn-sm btn-warning">Edit</button></a>
                                                <a href="{{ url('delete/category/'.$item->id) }}"> <button class="btn-sm btn-danger">Delete</button></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   
@endsection
    

