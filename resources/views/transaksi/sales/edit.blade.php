@extends('layout/main')

@section('title', 'sales')

@section('container')

<div id="page-wrapper">
	<div class="main-page">
    <h3 class="title1">Edit Data Sales :</h3>
        <div class="form-three widget-shadow">
 
	@foreach($sales as $s)
	<form action="salesupdate" method="post">
		{{ csrf_field() }}

		<input type="hidden" name="id" value="{{ $s->nota_id }}"> <br/>
        <div class="form-group">
        <label class="col-md-3 control-label">Customer Id</label>
        <div class="col-md-9">                                            
            <div class="input-group">
            <select class="form-control" id="customer_id" required="" name="customer_id">

                                                        <option disabled selected="">Pilih Kategori</option>
                                                        @foreach($customer as $cus)
                                                        <option value="{{ $cus->customer_id }}">{{$cus->first_name}}</option>
                                                        @endforeach
                                                        </select>
                            </div>
                                </div>


        <div class="form-group">
        <label class="col-md-3 control-label">Sales Name</label>
        <div class="col-md-9">                                            
            <div class="input-group">
            <select class="form-control" id="user_id" required="" name="user_id">
                                                        <option disabled selected="">Pilih Kategori</option>
                                                        @foreach($pegawai as $u)
                                                        <option value="{{ $u->user_id }}">{{$u->first_name}}</option>
                                                        @endforeach
                                                        </select>
                            </div>
                                </div>

        <div class="form-group">
        <label class="col-md-3 control-label">Nota Date</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="date" class="form-control" id="nota_date" name="nota_date" value="{{ $s->nota_date }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>

        <div class="form-group">
        <label class="col-md-3 control-label">Total Payment</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="total_payment" name="total_payment" value="{{ $s->total_payment }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>
        
		<button type="submit" class="btn btn-info mt-3">Simpan Data</button>
	</form>
	@endforeach

@endsection

	