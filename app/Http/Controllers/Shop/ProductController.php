<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Product;

class ProductController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
	/* Only for authenticated users */
        $this->middleware('auth');
    }

    /* Show create product page. */
    public function showProductCreatePage()
    {
        return view('shop.create-product');
    }

    /* Create a new product. */
    public function productCreate(Request $request)
    {
        // Validate input

        $newProduct = new Product;

	$newProduct->name = $request->input('product_name');
	$newProduct->rate = $request->input('rate');
	$newProduct->currency = $request->input('currency');

	$newProduct->save();

	session()->flash('status', 'Success: Product Created');
	return redirect('/shop/products/create');
    }

    /* List products. */
    public function listProducts()
    {
	$products = Product::all();

        return view('shop.list-products')
	    ->with('products', $products);
    }
}
