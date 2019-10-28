<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sheet;
use App\helper\test;

class CommerceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = sheet::get();
        $sumAmount = 0;
        $sumIncome = 0;
        foreach ($products as $product) {
            $sumAmount += 1;
            $sumIncome += (float)$product->price;
        }
        return view('commerce.PortSelling', [
            'products' => $products, 
            'sumAmount' => $sumAmount,
            'sumIncome' => $sumIncome
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('commerce.selling');
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
        $products = sheet::get();
        $sumAmount = 0;
        $sumIncome = 0;
        foreach ($products as $product) {
            $sumAmount += 1;
            $sumIncome += (float)$product->price;
        }
        return view('commerce.manageProduct', [
            'products' => $products, 
            'sumAmount' => $sumAmount,
            'sumIncome' => $sumIncome
            ]);
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
