<?php

namespace App\Http\Controllers\master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controller_categories extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DB::table('categories')->get();
        $product = DB::table('product')->get();
        //dump($categories);
        return view ('master/categories/index',['categories' =>$categories], ['product'=>$product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master/categories/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('categories')->insert([
            'category_name'     => $request->category_name
             ]);
     
             return redirect('categoriesindex');
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
        $categories = DB::table('categories')->where('category_id',$id)->get();
		// passing data categories yang didapat ke view edit.blade.php
		return view('master.categories.edit',['categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('categories')->where('category_id',$request->id)->update([
            'category_name'     => $request->category_name,
            'status'            => $request->status
        ]);
     
             return redirect('categoriesindex')->with('statusupdate','Data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('categories')->where('category_id',$id)->delete();
		
		// alihkan halaman ke halaman categories
		return redirect('categoriesindex');
    }

    public function update_switch(Request $request)
    {
        $categories=DB::table('categories')->where('category_id',$request->id)->value('status','=','1');
        if($categories){
            DB::table('categories')
                ->where('category_id',$request->id)
                ->update(['status'=>0]);
        }
        else{
            DB::table('categories')
                ->where('category_id',$request->id)
                ->update(['status'=>1]);
        }
        return redirect('categoriesindex');
        // $categories=categories::find($request->id);
        // dump($categories);
        // if($categories->status==1){
        //     $categories->status=0;
        // }
        // else{
        //     $categories->status=1;
        // }
        // $categories->save();
        // return redirect('categoriesindex');
    }
}
