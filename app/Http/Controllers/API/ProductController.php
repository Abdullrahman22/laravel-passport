<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::get();
        $products = Product::select( 
            'id' ,
            'name_' . app()->getLocale() . ' as name',
        )->get();
        return response() -> json( $products );
    }

}
