@extends('layouts.front')

@section('title')
    {{ $category->name }}
@endsection

@section('content')

    <div class="py-3 mb-4 shadow-sm bg-info border-top">
        <div class="container">
            <h6 class="mb-0">
                <a href="{{ url('category') }}">
                    Collections 
                </a> / {{ $category->name }} 
            </h6>
        </div>
    </div>

    <div class="py-5"> 
        <div class="container">
            <h3> <i class="material-icons">checkroom</i> {{ $category->name }}</h3>
            <div class="row">
                    
                    @foreach($products as $prod)
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <a href="{{ url('view-category/'.$category->slug.'/'.$prod->slug) }}">
                                    <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" alt="Product Image" class="prod_img">
                                    <div class="card-body">
                                        <h5>{{ $prod->name }}</h5>
                                        <span class="float-start bg-info"><b>Rs. {{ $prod->selling_price }}</b></span>
                                        <span class="float-end"><s> Rs. {{ $prod->original_price }}</s></span>
                                        @if($prod->qty > 0)
                                            <label class="badge bg-success">In Stock</label>
                                        @else
                                            <label class="badge bg-danger">Out of Stock</label>
                                        @endif
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach   

            </div>
        </div>
    </div>

    @include('layouts.inc.footer')
    
@endsection
