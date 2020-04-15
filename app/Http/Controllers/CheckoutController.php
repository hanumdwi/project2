<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function GetAddress()
    {
     $customer = DB::table('customer')
     ->where('id_customer', '=',1518115130)
     ->select(['id','customer'])
     ->get();
  
    // dd($address);
  
  
     return Datatables::of($customer)
     
             ->addColumn('action', function ($customer) {
     
                 return "<center><button id='add-address-to-textarea'>Pilih</button></center>";
             })
  
   ->make(true);
    }

    public function index()
    {
        $user = DB::table('user')->get();
        //dump($user);
        return view ('master/user/index',['user' =>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master/user/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('user')->insert([
            'first_name'   => $request->firstname,
            'last_name'    => $request->lastname,
            'phone'        => $request->phone,
            'email'        => $request->email,
            'password'     => $request->password,
            'job_status'   => $request->jobstatus
             ]);
     
             return redirect('userindex');
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
        $user = DB::table('user')->where('user_id',$id)->get();
		// passing data user yang didapat ke view edit.blade.php
		return view('master.user.edit',['user' => $user]);
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
        DB::table('user')->where('user_id',$request->id)->update([
            'first_name'   => $request->firstname,
            'last_name'    => $request->lastname,
            'phone'        => $request->phone,
            'email'        => $request->email,
            'password'     => $request->password,
            'job_status'   => $request->jobstatus
        ]);
     
             return redirect('userindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('user')->where('user_id',$id)->delete();
		
		// alihkan halaman ke halaman user
		return redirect('userindex');
    }
}
