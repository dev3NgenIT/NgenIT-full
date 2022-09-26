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
                            <h4>Solution Page </h4>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Edit/Delete</th>
                                            {{-- <th>Description</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($blogs ?? '' as $blog) --}}
                                        @foreach ($blogs as $blog)
                                        <tr>
                                            <td>{{ $blog->id}}</td>
                                            <td>{{ $blog->title }}</td>
                                            <td><img src="{{$blog->logo ? asset ('storage/' . $blog->logo) : asset('assets/frontend/image/Logo/logo.png')}}"
                                                alt="">
                                            </td>
                                            <td>
                                                <a href="/blogs/{{$blog->id}}/edit">
                                                    <button class="btn-sm btn-warning">Edit</button>
                                                </a>
                                                
                                                <form method="POST" action="/blogs/{{$blog->id}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn-sm btn-danger">
                                                        Delete
                                                    </button>
                                                </form>
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