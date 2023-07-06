<!DOCTYPE html>
<html>
<head>
    <title>Product Report</title>
</head>
<body>
    <div style="text-align: center;">
        <img src="assets/images/iconlongcol.png" alt="BAUHINIA" width="120" height="50" class="d-inline-block align-text-top">
    </div>
    <hr>
    
    <img src="{{ asset('../ assets/uploads/products'.$products->image) }}" alt="BAUHINIA" width="120" height="50" class="d-inline-block align-text-top">
    <h3>Product Name: {{ $name }}</h3>
    <h4>Category: {{ $small_description }}</h4>
    <h4>Category: {{ $description }}</h4>
    <h4>Category: {{ $original_price }}</h4>
    <h4>Category: {{ $selling_price }}</h4>
    <h4>Category: {{ $tax }}</h4>
    <h4>Category: {{ $qty }}</h4>
    
</body>
</html>