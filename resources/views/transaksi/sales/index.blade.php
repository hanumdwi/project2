@extends('layout/main')

@section('title', 'Sales')

@section('container')

@if(\Session::has('kasir') || \Session::has('admin'))
                                <div id="page-wrapper">
                                    <div class="main-page">
                                    <h3 class="title1">Daftar Sales</h3>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-actions">
                                            <a href="salesdcetak_pdf" class="btn btn-primary my-3">CETAK PDF</a>  
                                            </table>
                                        </div>

                                        <div class="bs-example widget-shadow" data-example-id="bordered-table"> 
                                            <table class="table table-bordered">
                                            <thead><tr>
                                                <th>#</th>
                                                    <th>Nota Id</th>
                                                    <th>Pegawai Id</th>
                                                    <th>Customer Id</th>
                                                    <th>Nota Date</th>
                                                    <th>Total Payment</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                                    @foreach($sales as $s)
                                                    <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $s -> nota_id }}</td>
                                                    <td>{{ $s->USFIRST_NAME }} {{ $s->USLAST_NAME }}</td>
						                            <td>{{ $s->first_name }} {{ $s->last_name }}</td>
                                                    <td>{{ $s -> nota_date }}</td>
                                                    <td>{{ $s -> total_payment }}</td>
                                                    <td>
                                                    <button type="button" class="label label-warning" data-toggle="modal" data-target="#EditModal{{ $s->nota_id }}">
                                                    <svg class="bi bi-pencil" width="3em" height="2em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M13.293 3.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM14 4l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"></path>
                                                    <path fill-rule="evenodd" d="M14.146 8.354l-2.5-2.5.708-.708 2.5 2.5-.708.708zM5 12v.5a.5.5 0 00.5.5H6v.5a.5.5 0 00.5.5H7v.5a.5.5 0 00.5.5H8v-1.5a.5.5 0 00-.5-.5H7v-.5a.5.5 0 00-.5-.5H5z" clip-rule="evenodd"></path>
                                                    </svg>Detail</button>
                                                    <a href ="salesinvoice_pdf{{ $s->nota_id }}">
                                                    <button type="button" class="label label-success">
                                                    <svg class="bi bi-print" width="3em" height="2em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M13.293 3.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM14 4l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"></path>
                                                    <path fill-rule="evenodd" d="M14.146 8.354l-2.5-2.5.708-.708 2.5 2.5-.708.708zM5 12v.5a.5.5 0 00.5.5H6v.5a.5.5 0 00.5.5H7v.5a.5.5 0 00.5.5H8v-1.5a.5.5 0 00-.5-.5H7v-.5a.5.5 0 00-.5-.5H5z" clip-rule="evenodd"></path>
                                                    </svg>Print Invoice</button></a>
                                                    
                                                        <!-- /Button trigger modal -->
                                                        
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="EditModal{{ $s->nota_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                            <!-- Modal Content -->
                                                                <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">DETAIL PENJUALAN</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form class="form-horizontal form-label-left" method="POST">
                                                                                        <table class="table table-bordered">
                                                                                                <thead>
                                                                                                    <tr role="row">
                                                                                                        <th class="datatable-nosort sorting_disabled" rowspan="1" colspan="1">Product Name</th>
                                                                                                        <th class="datatable-nosort sorting_disabled" rowspan="1" colspan="1">Qty</th>
                                                                                                        <th class="datatable-nosort sorting_disabled" rowspan="1" colspan="1">Disc</th>
                                                                                                        <th class="datatable-nosort sorting_disabled" rowspan="1" colspan="1" aria-label="Phone">Price</th>
                                                                                                        <th class="datatable-nosort sorting_disabled" rowspan="1" colspan="1">Total Price</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    @foreach( $sales_detail as $sd )
                                                                                                    @if($sd->nota_id == $s->nota_id)
                                                                                                    <tr role="row" class="odd" style="cursor:pointer">
                                                                                                        <td>{{ $sd->product_name }}</td>
                                                                                                        <td>{{ $sd->quantity }}</td>
                                                                                                        <td>{{ $sd->discount }}</td>
                                                                                                        <td>{{ $sd->selling_price }}</td>
                                                                                                        <td>{{ $sd->total_price }}</td>
                                                                                                    </tr>
                                                                                                    @endif
                                                                                                    @endforeach
                                                                                                </tbody>
                                                                                        </table>
                                                                   
                                                                        </form>
                                                                    </div>
                                                                </div>                                
                                                            </div>                                
                                                        </div>              
                                                    </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                                
   <script>
    swal("Welcome to Sales!", "You clicked the button!", "success");
   </script>
@endif
@endsection
