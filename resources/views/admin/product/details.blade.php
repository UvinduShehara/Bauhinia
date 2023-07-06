@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Product Details</h4>
        </div>
        <div class="card-body">
            <form>
                @method('PUT')
                @csrf
                <div class="row">

                    

                    <div class="col-md-12 mb-3">
                        <lable for="">Name</lable>
                        <option value="">  {{ $products->name }} </option>
                    </div>

                    <!-- <div class="col-md-6 mb-3">
                        <a href="{{ url('report-product/') }}"><button type="submit" class="btn btn-primary">Download Report</button></a>
                    </div> -->

                    <div class="col-md-6 mb-3">
                           Product Category <option value="">  {{ $products->category->name }} </option>
                    </div>

                    <div class="col-md-6 mb-3">
                        <!-- <lable for="">Slug</lable>
                        <input type="text" class="form-control" name="slug"  value="{{ $products->slug }}"> -->
                    </div>

                    @if($products->image)
                        <img src="{{ asset('assets/uploads/products/' .$products->image) }}" class="cate-image" alt="Product image">
                    @endif

                    <div class="col-md-12 mb-3">
                        <lable for="">Small Description</lable>
                        <option value="">  {{ $products->small_description }} </option>
                    </div>
                    <div class="col-md-12 mb-3">
                        <lable for="">Description</lable>
                        <option value="">  {{ $products->description }} </option>
                    </div>

                    <div class="col-md-6 mb-3">
                        <lable for="">Original Price</lable>
                        <option value="">  {{ $products->original_price }} </option>
                    </div>
                    <div class="col-md-6 mb-3">
                        <lable for="">Selling Price</lable>
                        <option value="">  {{ $products->selling_price }} </option>
                    </div>

                    <div class="col-md-6 mb-3">
                        <lable for="">Tax</lable>
                        <option value="">  {{ $products->tax }} </option>
                    </div>

                    <div class="col-md-6 mb-3">
                        <lable for="">Quantity</lable>
                        <option value="">  {{ $products->qty }} </option>
                    </div>

                    <div class="col-md-6 mb-3">
                        <lable for="">Status</lable>
                        <option value="">  {{ $products->status == "1" ? 'checked' : '' }} </option>
                    </div>
                    <div class="col-md-6 mb-3">
                        <lable for="">Trending</lable>
                        <option value="">  {{ $products->trending == "1" ? 'yes' : '' }} </option>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

