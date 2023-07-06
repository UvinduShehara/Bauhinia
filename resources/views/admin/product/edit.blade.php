@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Product</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-product/'.$products->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">

                    <div class="col-md-12 mb-3">
                        <select class="form-select">
                            <option value="">  {{ $products->category->name }} </option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <lable for="">Name</lable>
                        <input type="text" class="form-control" name="name" value="{{ $products->name }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <lable for="">Slug</lable>
                        <input type="text" class="form-control" name="slug"  value="{{ $products->slug }}">
                    </div>

                    <div class="col-md-12 mb-3">
                        <lable for="">Small Description</lable>
                        <textarea name="small_description" rows="3" class="form-control">{{ $products->small_description }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <lable for="">Description</lable>
                        <textarea name="description" rows="3" class="form-control">{{ $products->description }}</textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <lable for="">Original Price</lable>
                        <input type="number" name="original_price" class="form-control" value="{{ $products->original_price }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <lable for="">Selling Price</lable>
                        <input type="number" name="selling_price" class="form-control" value="{{ $products->selling_price }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <lable for="">Tax</lable>
                        <input type="number" name="tax" class="form-control" value="{{ $products->tax }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <lable for="">Quantity</lable>
                        <input type="number" name="qty" class="form-control" value="{{ $products->qty }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <lable for="">Status</lable>
                        <input type="checkbox" name="status" {{ $products->status == "1" ? 'checked' : '' }}>
                    </div>
                    <div class="col-md-6 mb-3">
                        <lable for="">Trending</lable>
                        <input type="checkbox" name="trending" {{ $products->trending == "1" ? 'checked' : '' }}>
                    </div>

                    <div class="col-md-12 mb-3">
                        <lable for="">Meta Title</lable>
                        <input type="text" class="form-control" name="meta_title" value="{{ $products->meta_title }}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <lable for="">Meta Description</lable>
                        <textarea name="meta_description" rows="3" class="form-control">{{ $products->meta_keywords }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <lable for="">Meta Keywords</lable>
                        <textarea name="meta_keywords" rows="3" class="form-control">{{ $products->meta_description }}</textarea>
                    </div>

                    @if($products->image)
                        <img src="{{ asset('assets/uploads/products/' .$products->image) }}" class="cate-image" alt="Product image">
                    @endif

                    <div class="col-md-12 mb-3">
                        <lable for="">Add Image</lable>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

