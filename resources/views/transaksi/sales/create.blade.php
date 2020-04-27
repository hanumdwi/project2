@extends('layout/main')

@section('container')

@if(\Session::has('kasir') || \Session::has('admin'))
<div id="page-wrapper">
	<div class="main-page">
    <h3 class="title1">Input Data Sales :</h3>
        <div class="form-three widget-shadow">
                            <form class="form-horizontal" action="salesstore" method="post">
                            @csrf
                                        <div class="form-group">
                                                <label class="col-md-3 control-label">Customer Name</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                    <select name="customer_id" class="form-control" id="customer_id">
                                           @foreach($customer as $cus)
                                           @if($cus->status == 1)
                                           <option value="{{$cus->customer_id}}">{{$cus->first_name}}</option>
                                            @endif
                                           @endforeach                           
                          </select>
                                                    </div>
                                                    </div>                                            
                                                  
                                                </div>
                                            
                                            
                                        <div class="form-group">
                                       
                                                <label class="col-md-3 control-label">User Id</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                    <select name="user_id" class="form-control" id="user_id">
                                           @foreach($pegawai as $u)
                                           @if($u->status == 1)
                                           <option value="{{$u->user_id}}">{{$u->first_name}}</option>
                                            @endif
                                           @endforeach                           
                          </select>
                                                    </div>                                            
                                                  
                                                </div>
                                            </div>
                                            
                                        <div class="form-group">
                                                <label class="col-md-3 control-label">Nota Date</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="date" class="form-control" id="nota_date" name="nota_date" />
                                                    </div>                                            
                                                  
                                                </div>
                                            </div>
                                        <div class="form-group">
                                                <label class="col-md-3 control-label">Total Payment</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" id="total_payment" name="total_payment" />
                                                    </div>                                            
                                                  
                                                </div>
                                            </div>
                                     
                                            
                                                                   
                                            <button type="submit" class="btn btn-primary">Submit</button> </form> 
                    </div>
                            
                        </div>
                    </div>                    
                    
                </div>                
                  
                <!-- END PAGE CONTENT WRAPPER -->  
                @endif
                @endsection