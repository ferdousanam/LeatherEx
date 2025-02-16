<?php

namespace App\Http\Controllers\User;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $featured_footwear = Product::where('product_category_id', '=', 1)
            ->whereHas('product_images', function($query) {
                $query->where('featured_image', '=', 1);
            })
            ->orderBy('created_at', 'desc')->first();
        $featured_bags = Product::where('product_category_id', '=', 1)
            ->orderBy('created_at', 'desc')->first();
        $featured_accessories = Product::where('product_category_id', '=', 1)
            ->orderBy('created_at', 'desc')->first();
        $featured_corporate = Product::where('product_category_id', '=', 1)
            ->orderBy('created_at', 'desc')->first();

        $carousel_product = Product::orderBy('id', 'desc')->take(5)->get();
        return view('frontend.homepage.index', compact('featured_footwear', 'featured_bags', 'featured_accessories', 'featured_corporate', 'footwear_cat', 'carousel_product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
