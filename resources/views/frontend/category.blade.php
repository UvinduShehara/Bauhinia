@extends('layouts.front')

@section('title')
    Category
@endsection

@section('content')

    <div class="py-3 mb-4 shadow-sm bg-info border-top">
        <div class="container">
            <h6 class="mb-0">
                <a href="{{ url('category') }}">
                    Collections 
                </a>
            </h6>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h3> <i class="material-icons">category</i> Shop by Category</h3>
                <div class="col-md-12">
                    <div class="row">
                        @foreach($category as $cate)
                            <div class="col-md-3 mb-2">
                                <a href="{{ url('view-category/'.$cate->slug) }}">
                                    <div class="card">
                                        <img src="{{ asset('assets/uploads/category/'.$cate->image) }}" alt="Category Image">
                                        <div class="card-body">
                                            <h5>{{ $cate->name }}</h5>
                                            <p>
                                                {{ $cate->description }}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                         @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.inc.footer')
@endsection

