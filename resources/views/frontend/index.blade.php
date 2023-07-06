@extends('layouts.front')

@section('title')
    BAUHINIA
@endsection

@section('content')

    @include('layouts.inc.slider')

    
    <div class="py-5"> 
        <div class="container">
            <h3> <i class="material-icons">whatshot</i> Trending Products  <i class="material-icons">whatshot</i></h3>
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                    
                    @foreach($featured_products as $prod)
                        <div class="col">
                            <div class="card">
                                <a href="{{ url('view-category/'.$category.'/'.$prod->slug) }}">
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

    <br>
    <hr>
    

    <div class="py-5"> 
        <div class="container">
            <div class="row">
                <h3> <i class="material-icons">category</i> Shop by Category</h3> <br>
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

    <hr>

    @include('layouts.inc.footer')
    
@endsection
