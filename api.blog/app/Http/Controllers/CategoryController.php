<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keyword = request()->input('keyword');
        $sort = request()->input('sort');
        $order = request()->input('order');
        $limit = request()->input('limit');
        try{
            $categories = Category::
            //Tim kiem theo tham so truyen vao
            when($sort, function($query1) use($sort, $order)
                {
                    //Khi sort co gia tri thi sap xep theo $sort
                    $query1->orderBy($sort, $order);
                },
                function ($query2)
                {
                    //Mac dinh sap xep theo id giam dan
                    $query2->orderBy('id', 'desc');
                })
            //Tim kiem theo keyword
            ->when($keyword, function($query3) use($keyword)
                    {
                        $query3->where('title', 'LIKE', "%$keyword%")
                        ->orWhere('description', 'LIKE', "$keyword");
                    }
                )->simplePaginate($limit);
            return response()->json($categories);
        }catch(\Exception $e){
            return response()->json(['status'=>'error','message'=>'Not Found']);
        }
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
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
