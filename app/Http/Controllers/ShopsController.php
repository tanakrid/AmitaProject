<?php

namespace App\Http\Controllers;
use App\Sheet;
use App\OwnSheet;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Auth;

class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allSheets = Sheet::get();
        $allPosts = Post::get();
        return view('shop.FrontLine', [
            'products' => $allSheets,
            'posts' => $allPosts
        ]);
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
        $own_sheet = new OwnSheet;
        $own_sheet->user_id = Auth::user()->id;
        $own_sheet->sheet_id = $request->input('sheet_id');
        $own_sheet->save();

        $sheet = Sheet::findOrFail($own_sheet->sheet_id);
        $count = $sheet->sale + 1;
        $incomeNow = $sheet->price + $sheet->income;
        $sheet->sale = $count;
        $sheet->income = $incomeNow;
        $sheet->save();
        return redirect()->action('ShopsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Sheet::findOrFail($id);
        return view('shop.ProfileProduct', ['product' => $product]);
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

    public function showOwnSheet($id){
        $product = Sheet::findOrFail($id);
        // return view('shop.OwnSheetPage', ['product' => $product]);
        // $url = Storage::url()
        return Storage::download($product->sheet_src);
    }
}
