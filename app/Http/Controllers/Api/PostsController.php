<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\sheet;
use Illuminate\Http\Request;
use App\Http\Resources\Post as PostResource;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = sheet::with(['user'])->get();
        $posts = sheet::get();
        return PostResource::collection($posts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sheet = new sheet;
        $sheet->sheetName = trim($request->input('title'));
        $sheet->save()
        return new PostResource($post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sheet  $sheet
     * @return \Illuminate\Http\Response
     */
    public function show(sheet $sheet)
    {
        return new PostResource($sheet);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sheet  $sheet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sheet $sheet)
    {
        // ใช้ method put ในการส่ง
        $sheet->sheetName = trim($request->input('title'));
        $sheet->save()
        return new PostResource($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sheet  $sheet
     * @return \Illuminate\Http\Response
     */
    public function destroy(sheet $sheet)
    {
        $sheet->delete();
        return [
            'data' => [
                'massage' => 'sheet has been deleted'
            ]
        ];
    }
}
