<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Sheet;
use App\helper\test;
use Auth;

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
        $products = DB::table('sheets')
            ->join('users', 'sheets.user_id', '=', 'users.id')
            ->select('sheets.*')
            ->get();
        $sumAmount = 0;
        $sumIncome = 0;
        foreach ($products as $product) {
            $sumAmount += $product->sale;
            $sumIncome += (float)$product->income;
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
        $sheet = new Sheet;
        $sheet->sheet_name = $request->input('sheet_name');
        $sheet->sheet_type = $request->input('sheet_type');
        $sheet->instructor = $request->input('instructor');
        $sheet->subject_id = $request->input('subject_id');
        $sheet->sec_number = $request->input('sec_number');
        $sheet->price = floatval($request->input('price'));
        $sheet->sheet_src = $request->input('sheet_src');
        $sheet->rating = 'NORMAL';
        $sheet->autor_name = Auth::user()->name;
        $sheet->user_id = Auth::user()->id;
        $sheet->save();
        return redirect()->action('CommerceController@create');
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
