<?php

namespace App\Http\Controllers\transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pegawai;
use PDF;

class controller_salesd extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('transaksi/salesd/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = DB::table('customer')->get();
        $pegawai = Pegawai::all();
        $categories = DB::table('categories')->get();
        $product = DB::table('product')->get();
        $sales = DB::table('sales')->get();
        // $detail_sales = DB::table('detail_sales')->get();
        $max = DB::table('sales')->max('nota_id');
        date_default_timezone_set('Asia/Jakarta');
        $date=date("ymd",time());

        $max=substr($max,6);
        if($max>=1){
            $nota_id=$date.str_pad($max+1,4,"a",STR_PAD_LEFT);
        }
        else{
            $nota_id=$date.str_pad(1,4,"0",STR_PAD_LEFT);
        }
        return view('transaksi/salesd/create',['customer'=>$customer, 'pegawai'=>$pegawai, 'categories' =>$categories, 'product'=>$product, 'sales'=>$sales, 'nota_id'=>$nota_id]);
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
            'customer_id' => $request->customer_id,
            'user_id' => $request->user_id,
            'nota_date' => $request->nota_date,
            'total_payment' => $request->total_payment
        ]);

        foreach($request['product_id'] as $product){
            DB::table('sales_detail')->insert([
                'nota_id' => $request->nota_id,
                'product_id' => $product,
                'quantity' => $request['jumlah'][$product],
                'selling_price' => $request['selling_price'][$product],
                'discount' => $request['discount'][$product],
                'total_price' => $request['total'][$product]
            ]);
        }
        
             return redirect('salesdcreate')->with('insert','data berhasil di tambah');
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
    public function edit()
    {
        return "Ini Halaman Edit";
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
        //
    }

    public function cetak_pdf()
    {
    	$sales = DB::table('customer')
        ->join('sales', 'customer.customer_id', '=', 'sales.customer_id')
        ->join('pegawai', 'sales.user_id', '=', 'pegawai.user_id')
        ->select('sales.nota_id', 
        DB::raw('CONCAT(customer.first_name, " ", customer.last_name) as customer_id'), 
        DB::raw('CONCAT(pegawai.first_name,  " " , pegawai.last_name) as user_id'),
            'sales.nota_date', 'sales.total_payment')
        ->get();

    	$pdf = PDF::loadview('transaksi/sales/cetakpdf',['sales'=>$sales]);
    	return $pdf->stream();
    }
}
