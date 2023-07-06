@extends('layouts.front')

@section('title')
    My Cart
@endsection

@section('content')

    <div class="py-3 mb-4 shadow-sm bg-info border-top">
        <div class="container">
            <h6 class="mb-0">
                <a href="{{ url('/') }}">
                    Home 
                </a> / <i class="fa fa-shopping-cart"></i> Cart
            </h6>
        </div>
    </div>

    <div class="container my-5">
        <div class="card shadow product_data">
            <div class="cart-body">
                @foreach($cartitems as $item)
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{ asset('') }}" alt="Image here">
                        </div>
                        <div class="col-md--5">
                            <h3>{{ $item->products->name }}</h3>
                        </div>
                        <div class="col-md-3">
                            <input type="hidden" class="prod_id">
                            <label for="Quantity">Quantity</label>
                            <div class="input-group text-center mb-3" style="width: 130px;">
                                <button class="input-group-text decrement-btn">-</button>
                                <input type="text" name="quantity" value="1" class="form-control text-center qty-input" >
                                <button class="input-group-text increment-btn">+</button>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <h3>Remove</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('layouts.inc.footer')
    
@endsection