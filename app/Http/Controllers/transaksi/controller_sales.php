<?php

namespace App\Http\Controllers\transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\customer;


class controller_sales extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = DB::table('customer')
        ->join('sales', 'customer.customer_id', '=', 'sales.customer_id')
        ->join('pegawai', 'sales.user_id', '=', 'pegawai.user_id')
        ->select('sales.nota_id', 
        DB::raw('CONCAT(customer.first_name, " ", customer.last_name) as customer_id'), 
        DB::raw('CONCAT(pegawai.first_name,  " " , pegawai.last_name) as user_id'),
            'sales.nota_date', 'sales.total_payment')
        ->get();
        //dump($sales);
        return view('transaksi/sales/index', ['sales'=>$sales]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = DB::table('customer')->get();
        $pegawai = DB::table('pegawai')->get();
        $product = DB::table('product')->get();
        //dump($sales);
        return view('transaksi/sales/create', ['customer'=> $customer, 'pegawai'=> $pegawai, 'product'=> $product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('sales')->insert([
            'customer_id' => $request->input('customer_id'),
            'user_id' => $request->input('user_id'),
            'nota_date' => $request->input('nota_date'),
            'total_payment' => $request->input('total_payment')]
        );
        return redirect( 'salesindex' );
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
     
        $customer = DB::table('customer')->get();
        $pegawai = DB::table('pegawai')->get();
        $sales=DB::table('sales')
            ->where('nota_id', $id)->get();

        return view('transaksi.sales.edit',['customer'=> $customer, 'pegawai'=> $pegawai, 'sales'=>$sales] );
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
        DB::table('sales')
        ->where('nota_id', $request->id)
        ->update([
            'customer_id' => $request->input('customer_id'),
            'user_id' => $request->input('user_id'),
            'nota_date' => $request->input('nota_date'),
            'total_payment' => $request->input('total_payment')]
        );
    return redirect('salesindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('sales')->where('nota_id','=', $id)->delete();
        return redirect( 'salesindex' );
    }
}
