<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Get list product
     * @return mixed
     */
    public function index(Request $request)
    {
        $products = Product::simplePaginate(10);
        return view('products.index', compact('products'));
    }

    /**
     * Delete product
     * @return mixed
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('products.index')->with('status', 'Delete Successfull');
    }
}
