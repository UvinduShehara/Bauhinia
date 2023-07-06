@extends('layouts.front')

@section('title')
    {{ $products->name }}
@endsection

@section('content')

<div class="py-3 mb-4 shadow-sm bg-info border-top">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url('category') }}">
                 Collections 
            </a> / 
            <a href="{{ url('view-category/'.$products->category->slug) }}">
                {{ $products->category->name }} 
            </a> / {{ $products->name }}
        </h6>
    </div>
</div>

<div class="container">
    <div class="card shadow product_data">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 boder-right">
                    <img src="{{ asset('../ assets/uploads/products'.$products->image) }}" class="prod_img" alt="Product Image">
                </div>

                <div class="col-md-8">
                    <h2 class="mb-0">
                        {{ $products->name}}
                    </h2>

                    <hr>

                    <label class="me-3">Original Price : <s> Rs {{ $products->original_price }} </s></label>
                    <label class="fw-bold">Selling Price : Rs {{ $products->selling_price }} </label>

                    @if($products->trending == '1')
                    <label style="font-size: 16px;" class="float-end badge bg-danger trending_tag">   Trending  </label>
                    @endif

                    <p class="mt-3">
                        {!! $products->small_description !!}
                    </p>

                    <hr>

                    @if($products->qty > 0)
                        <label class="badge bg-success">In Stock</label>
                        <p class="mt-3">
                            Available Stock : {!! $products->qty !!}
                        </p>

                        <div class="col-md-2">
                            <input type="hidden" value="{{ $products->id }}" class="prod_id">
                            <label for="Quantity">Quantity</label>
                            <div class="input-group text-center mb-3" style="width: 130px;">
                                <!-- <button class="input-group-text decrement-btn">-</button> -->
                                <input type="text" name="quantity" value="1" class="form-control text-center qty-input" >
                                <!-- <button class="input-group-text increment-btn">+</button> -->
                            </div>
                        </div>
                        
                    @else
                        <label class="badge bg-danger">Out of Stock</label>
                    @endif

                    <div class="row-mt-2">
                        
                        

                        <div class="col-md-10">
                            <br/>

                            @if($products->qty > 0)
                                <button type="button" class="btn btn-primary me-3 addToCartBtn float-start">Add to Cart <i class="fa fa-shopping-cart"></i> </button>
                            @endif
                            <!-- <button type="button" class="btn btn-success me-3 float-start">Add to Wishlist <i class="fa fa-heart"></i> </button> -->
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <hr>
                    <h4>Description</h4>
                    <p class="mt-3">
                        {!! $products->description !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.inc.footer')

@endsection

@section('scripts')
<script>
    $(document).ready(function(){

        $('.addToCartBtn').click(function(e){
            e.preventDefault();

            var product_id = $(this).closest('.product_data').find('.prod_id').val();
            var product_qty = $(this).closest('.product_data').find('.qty-input').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method:"POST",
                url:"/add-to-cart",
                data:{
                    'product_id' : product_id,
                    'product_qty' : product_qty,
                },
                success: function(response){
                    swal(response.status);
                }
            });
        });


        $('.increment-btn').click(function(e) {
            e.preventDefault();

            var inc_value = $('.qty-input').val();
            var value = parseInt(inc_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value < 10)
            {
                value++
                $('.qty-input').val(value);
            }
        });

        $('.decrement-btn').click(function(e) {
            e.preventDefault();

            var dec_value = $('.qty-input').val();
            var value = parseInt(dec_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value > 1)
            {
                value--
                $('.qty-input').val(value);
            }
        });
    });
</script>

@endsection
