<?php

namespace App\Http\Controllers;

use App\Models\prod;
use App\Http\Requests\StoreprodRequest;
use App\Http\Requests\UpdateprodRequest;
use Exception;

class ProdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreprodRequest $request)
    {

        try {
            $product = new Prod;

            $product->email = $request->email;
            $product->desc = $request->details;
            $product->save();
            echo "Product Recorded Successfully";
            return redirect('/');

        }catch (Exception $e){
            echo "Error Creating the product, Cleck here to go back";
            return redirect('/product');
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(prod $prod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(prod $prod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprodRequest $request, prod $prod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prod $prod)
    {
        //
    }
}
