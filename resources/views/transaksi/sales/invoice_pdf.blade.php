<html lang="en">
@if(\Session::has('kasir') || \Session::has('admin'))
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color:#333;
            text-align:left;
            font-size:14px;
            margin:0;
        }
        .container{
            margin:0 auto;
            margin-top:25px;
            padding:20px;
            width:950px;
            height:auto;
            background-color:#fff;
        }
        caption{
            font-size:28px;
            margin-bottom:15px;
        }
        table{
            border:0px solid #333;
            margin:0 auto;
            width:780px;
        }
        td, tr, th{
            padding:12px;
            border:1px solid #333;
            width:85px;
        }
        th{
            background-color: #f0f0f0;
        }
        h4, p{
            margin:2px;
        }
    </style>
</head>
@foreach($sales as $s)
        @if($id == $s->nota_id)
<body>
    <div class="container">
        <table>
            <caption>
                Penjualan Invoice
            </caption>
            <thead>
                <tr>
                    <th colspan="3">Invoice <strong>#{{ $s->nota_id }}</strong></th>
                    <th>{{ $s -> nota_date }}</th>
                </tr>
                <tr>
                    <td colspan="2">
                        <h4>Perusahaan: </h4>
                        <p>SI-Penjualan HANUM.<br>
                            Jl. Basuki Rahmad Surabaya<br>
                            085607875343<br>
                            penjualan_hanum@sukses.com
                        </p>
                    </td>
                    <td colspan="2">
                        <h4>Pelanggan: </h4>
                        @foreach($customer as $cus)
                            @if(($s->customer_id)==($cus->customer_id))
                        <p>{{ $cus->first_name }} {{ $cus -> first_name }}<br>
                        {{ $cus -> phone }}<br>
                        {{ $cus -> email }} <br>
                        {{ $cus -> street }}<br>
                        {{ $cus -> city }}<br>
                        {{ $cus -> state }}<br>
                        {{ $cus -> zip_code }}
                        </p>
                        @endif
                        @endforeach
                    </td>
                </tr>
                        <tr>
                            @foreach($pegawai as $u)
                                @if (($s->user_id)==($u->user_id))
                                    <th colspan="2">Pegawai <strong> : {{$u->first_name}} {{$u->last_name}}</strong></th>
                                    <th colspan="2">#{{$u->user_id}}</th>
                                @endif
                            @endforeach
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Discount</th>
                                <th>Price</th>
                            </tr>
                        @foreach ($sales_detail as $salesdetail)
                            @foreach($product as $p)
                                @if(($s->nota_id) == ($salesdetail->nota_id))
                                    @if(($salesdetail->product_id) == ($p->product_id))
                                    <tr>
                                    <td>{{ $p -> product_name }}</td>
                                    <td>{{ $salesdetail->quantity }}</td>
                                    <td>Rp {{ number_format($salesdetail->discount) }}</td>
                                    <td>Rp {{ number_format($salesdetail->selling_price) }}</td>
                    
                </tr>
                    @endif
                @endif
            @endforeach
        @endforeach
        </tbody>
            
            <tfoot>
                <tr>
                    <th colspan="3">Total Price</th>
                
                @foreach ($sales_detail as $salesdetail)
                            @foreach($product as $p)
                                @if(($s->nota_id) == ($salesdetail->nota_id))
                                    @if(($salesdetail->product_id) == ($p->product_id))
                                    
                                    <td>Rp {{ number_format($salesdetail->total_price) }}</td></tr>
                    @endif
                @endif
            @endforeach
        @endforeach
                <tr>
                    <th colspan="3">Pajak</th>
                    <td>10%</td>
                </tr>
                <tr>
                    <th colspan="3">Total Payment</th>
                    <td>Rp {{ number_format($s->total_payment) }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
@endif
@endforeach
@endif
</html>