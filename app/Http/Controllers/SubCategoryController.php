<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use Validator;


class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=SubCategory::all();

        return view('backend.admin.categories.subCategory.subCategories',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('backend.admin.categories.subCategory.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation=$this->validate($request,[
            'subcategory_name'=>'required'

        ]);
        if (!$validation){
            return redirect()->back()->withInput()->withErrors($validation);
        }
        try {
            $data=[
                'subcategory_name'=>$request->subcategory_name,
                'parent_id'=>$request->parent_id
            ];
            $save= SubCategory::create($data);
           dd($save);
            session()->flash('type','success');
            session()->flash('message','SubCategory Added !');
            return redirect()->back();

        }catch (\Exception $error){
            session()->flash('type','danger');
            session()->flash('message','Oh no!Something went to wrong');
            return $error;
        }
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
        $categories=SubCategory::all();
        $categories=Category::all();
        $category=SubCategory::where('id',$id)->first();
//       dd($category);
        return view('backend.admin.categories.subCategory.edit',compact('category','categories'));
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

        $validation = $this->validate($request, [
            'category_name' => 'required',

        ]);
        if (!$validation) {
            return redirect()->back()->withInput()->withErrors($validation);
        }
        try {
            $save = SubCategory::where('id',$id)->find($id);
            $save->subcategory_name=$request->subcategory_name;
            $save->parent_id=$request->parent;
//dd($request);
            $update=    $save->update();
//            dd($update);
            session()->flash('type', 'success');
            session()->flash('message', 'Category Added !');
            return redirect()->back();

        } catch (\Exception $error) {
            session()->flash('type', 'danger');
            session()->flash('message', 'Oh no!Something went to wrong');
            return $error;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=SubCategory::where('id',$id)->find($id);
        $category->destroy($id);
        return redirect()->back();
    }
}
