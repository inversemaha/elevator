<?php

namespace App\Http\Controllers;

use App\Category;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        unset($request['_token']); //Remove Token
        $request->validate([
            'categoryName' => 'required|unique:categories'
        ]);

       //return $request->all();

        try {
            Category::create($request->all());
            return Redirect:: to('/category/show')->with('success', "Category Saved");
        } catch (\Exception $exception) {
            return Redirect:: to('/category/show')->with('failed', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.pages.category.show')->with('category', Category::get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.category.edit')->with('category', Category::where('categoryId', $id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        unset($request['_token']); //Remove Token
        $request->validate([
            'categoryName' => 'required:categories'
        ]);

        // return $request->all();

        try {
            Category::where('categoryId', $request['categoryId'])->update($request->all());
            return Redirect:: to('/category/show')->with('success', "Category Updated");
        } catch (\Exception $exception) {
            return Redirect:: to('/category/show')->with('failed', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Category::where('categoryId', $id)->delete();
            return back()->with('success', "Category Deleted");
        } catch (\Exception $exception) {
            return back()->with('success', $exception->getMessage());
        }
    }
}
