<?php

namespace App\Http\Controllers\master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class controller_customer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Session::get('login')){
            return redirect('login');
        }
        else{
        $customer = DB::table('customer')->get();
        //dump($customer);
        return view ('master/customer/index',['customer' =>$customer]);
    }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        //$customer = DB::table('customer')->get();
        //dump($customer);
        //return view ('master/customer/create',['customer' =>$customer]);
        return view('master/customer/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        DB::table('customer')->insert([
       'first_name'   => $request->firstname,
       'last_name'    => $request->lastname,
       'phone'        => $request->phone,
       'email'        => $request->email,
       'street'       => $request->street,
       'city'         => $request->city,
       'state'        => $request->state,
       'zip_code'     => $request->zipcode
        ]);

        return redirect('customerindex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(customer\create $customer)
    {
        $customer = DB::table('customer')->get();
        return view('master.customer.show', compact('$customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // mengambil data customer berdasarkan id yang dipilih
		$customer = DB::table('customer')->where('customer_id',$id)->get();
		// passing data customer yang didapat ke view edit.blade.php
		return view('master.customer.edit',['customer' => $customer]);
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
        DB::table('customer')->where('customer_id',$request->id)->update([
			'first_name'   => $request->firstname,
            'last_name'    => $request->lastname,
            'phone'        => $request->phone,
            'email'        => $request->email,
            'street'       => $request->street,
            'city'         => $request->city,
            'state'        => $request->state,
            'zip_code'     => $request->zipcode,
            'status'       => $request->status
		]);
		// alihkan halaman ke halaman customer
		return redirect('customerindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // menghapus data customer berdasarkan id yang dipilih
		DB::table('customer')->where('customer_id',$id)->delete();
		
		// alihkan halaman ke halaman customer
		return redirect('customerindex');
    }

    public function update_switch(Request $request)
    {
        $customer=DB::table('customer')->where('customer_id',$request->id)->value('status','=','1');
        if($customer){
            DB::table('customer')
                ->where('customer_id',$request->id)
                ->update(['status'=>0]);
        }
        else{
            DB::table('customer')
                ->where('customer_id',$request->id)
                ->update(['status'=>1]);
        }
        return redirect('customerindex');
    }
}
