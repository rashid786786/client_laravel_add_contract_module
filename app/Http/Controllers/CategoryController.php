<?php

namespace KarlosCabral\Http\Controllers;

use KarlosCabral\Category;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_a =Category::getSingleCategory($category_name='category_a');

        return view('dashboard.category.show_categories',['category_a'=>$category_a]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Category $category)
    {
       if($_POST)
       {
           $category->type=$request->field_type;
           $category->name=$request->name;
           if($category->save())
           {
            \Session::flash('key', ['class'=>'success','message'=>'Congratulations! Item Added Into Category']);
            return redirect()->route('category.show');
           }

       } 
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
     * @param  \KarlosCabral\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \KarlosCabral\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($id)
        $category = DB::table('categories')->where('id', $id)->get();
        if(isset($category) && !empty($category))
        {
            return view('dashboard.category.edit_category',['category'=>$category]);
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \KarlosCabral\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!empty($id) && isset($request))
        {
            $result = DB::table('categories')->where('id', '=', $id)->update([
                'name' =>$request->name,
                'type'=>$request->type
            ]);

            if($result)
            {
                \Session::flash('key', ['class'=>'success','message'=>'Congratulations! Category Item Updated  Successfully']);
            return redirect()->route('category.show'); 
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \KarlosCabral\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        if($id)
        {
             DB::table('categories')->where('id', $id)->delete();
             \Session::flash('key', ['class'=>'success','message'=>'Congratulations! Category Item Deleted  Successfully']);
            return redirect()->route('category.show');
        }
        
    }
}
