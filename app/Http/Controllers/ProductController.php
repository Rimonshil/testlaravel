<?php

namespace App\Http\Controllers;

use App\Http\Middleware\VerifySupply;
use App\Product;
use App\Supplyer;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('VerifySupply')->only(['create', 'store']);
    }
    public function index()
    { 
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supplyers = Supplyer::all();
        return view('product.create', compact('supplyers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create([ 
            'name'=> $request->name,
            'size'=> $request->size,
            'color'=> $request->color,
            'quantity'=> $request->quantity,
            'price'=> $request->price,
            'supplyer_id'=>$request->supplyer,
            'purchase_id'=>$request->purchase_id,
            'user_id'=>auth()->user()->id,
            ]);

            session()->flash('success', 'Story Created successfully');
            return redirect(route('product.index'));
        }
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $product = Product::findorfail($id);
        return view("product.edit", compact('product'));
        
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
        $product = Product::findorfail($id);
        $product->update($request->all());
        $product->save();
        session()->flash('success', 'Story updated successfully');
        return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
