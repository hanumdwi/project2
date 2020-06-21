<?php

namespace App\Http\Controllers\transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\pegawai;
use App\product;
use PDF;


class controller_sales extends Controller
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
            $sales = DB::table('sales')
            ->join('pegawai','pegawai.user_id','=','sales.user_id')
            ->join('customer','customer.customer_id','=','sales.customer_id')
            ->select('sales.nota_id','pegawai.first_name as USFIRST_NAME','pegawai.last_name as USLAST_NAME','customer.first_name','customer.last_name','sales.nota_date','sales.total_payment')
            ->get();

        $sales_detail = DB::table('sales_detail')
                        ->join('product','product.product_id','=','sales_detail.product_id')
                        ->get();
       
        //dump($sales);
        return view('transaksi/sales/index', ['sales'=>$sales],['sales_detail' => $sales_detail]);
    }
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

    public function cetak_pdf()
    {
    	$sales = sales::all();
 
    	$pdf = PDF::loadview('sales_pdf',['sales'=>$sales]);
    	return $pdf->download('laporan-sales-pdf');
    }

    public function invoice($id)
    {
        $pegawai=DB::table('pegawai')->get();
        $customer = DB::table('customer')->get();
        $pegawai = DB::table('pegawai')->get();
        $product = DB::table('product')->get();
        $sales = DB::table('sales',$id)->get();
        $sales_detail = DB::table('sales_detail')->get();
        $nota_id=$id;
        $pdf = PDF::loadview('transaksi/sales/invoice_pdf',['id'=>$nota_id, 'sales'=>$sales, 'customer'=> $customer,
         'pegawai'=> $pegawai, 'product'=> $product, 'sales_detail' => $sales_detail],
        compact('invoice'))->setPaper('a4', 'landscape');
        return $pdf->stream('invoice-pdf');
    }
}
