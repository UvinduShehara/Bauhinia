<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use PDF;

class PDFController extends Controller
{
    // public function edit($id)
    // {
    //     $products = Product::find($id);
    //     return view('admin.product.edit', compact('products'));
    // }

    public function generatePDF($id)
    {
        $data = [
        
            // 'name' => $products->name = $request->input('name'),
            // 'small_description' => $products->small_description = $request->input('small_description'),
            // 'description' => $products->description = $request->input('description'),
            // 'original_price' => $products->original_price = $request->input('original_price'),
            // 'selling_price' => $products->selling_price = $request->input('selling_price'),
            // 'tax' => $products->tax = $request->input('tax'),
            // 'qty' => $products->qty = $request->input('qty')

        ];
          
        $pdf = PDF::loadView('prod-pdf', $data);
    
        return $pdf->download('product'.$id.'-reports.pdf');
    }


}
