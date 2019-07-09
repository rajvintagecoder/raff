<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Categories;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.rafflrs-index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Categories::pluck('category_name', 'id');
        return view('admin.rafflrs', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'end_date' => 'required',
            'product_image' => 'image|required|max:1999'
        ]);

        //Handle Image File

        if ($request->hasFile('product_image')) {
            //Get Filename with extension
            $fileNameWithExt = $request->file('product_image')->getClientOriginalName();
            //Get just file Name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get Just Extension
            $extension = $request->file('product_image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //Upload Image
            $path = $request->file('product_image')->storeAs('/public/product_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $product = new Product();
        $product->product_name = $request['product_name'];
        $product->description = $request['description'];
        $product->price = $request['price'];
        $product->quantity = $request['quantity'];
        $product->end_date = $request['end_date'];
        $product->product_image = $fileNameToStore;
        $product->save();
        return redirect('/products')->with('success', 'Product Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('pages.show-raffles')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $product = Product::find($id);
        // $category = Categories::pluck('category_name', 'id');
        return view('admin.edit-raffles')->with('product', $product);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'end_date' => 'nullable',
            'product_image' => 'image|nullable|max:1999'
        ]);

        //Handle Image File

        if ($request->hasFile('product_image')) {
            //Get Filename with extension
            $fileNameWithExt = $request->file('product_image')->getClientOriginalName();
            //Get just file Name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get Just Extension
            $extension = $request->file('product_image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //Upload Image
            $path = $request->file('product_image')->storeAs('/public/product_images', $fileNameToStore);
        }

        $product = Product::find($id);
        $product->product_name = $request['product_name'];
        $product->description = $request['description'];
        $product->price = $request['price'];
        $product->quantity = $request['quantity'];
        $product->end_date = $request['end_date'];
        if ($request->hasFile('product_image')) {
            $product->product_image = $fileNameToStore;
        }
        $product->save();
        return redirect('/products')->with('success', 'Product Updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product->product_image != 'noimage.jpg') {
            Storage::delete('/public/product_images/' . $product->product_image);
        }
        $product->delete();
        return redirect('/products')->with('success', 'Product Deleted');
    }
}
