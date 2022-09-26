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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-title">
                            <h4>Product Page </h4>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($i=1)
                                        @foreach ($products as $item )
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td><img src="{{ asset('storage/Product/'.$item->image) }}" width="70px" alt=""></td>
                                            <td>{{ $item->description }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>
                                                <a href="{{ url('edit/product/'.$item->id) }}"><button class="btn-sm btn-warning">Edit</button></a>
                                                <a href="{{ url('delete/product/'.$item->id) }}"><button class="btn-sm btn-danger">Delete</button></a>

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
   
