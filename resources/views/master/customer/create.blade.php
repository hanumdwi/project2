@extends('layout/main')

@section('container')

@if(\Session::has('kasir') || \Session::has('admin'))
<div id="page-wrapper">
	<div class="main-page">
    <h3 class="title1">Input Data Customer</h3>
        <div class="form-three widget-shadow">
            <form class="form-horizontal" action="customerstore" method="post">
            @csrf
                <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-8">
                    <div class="input-group input-icon right">
												<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
												</span>
                    <input type="text" class="form-control1" id="firstname" name="firstname" placeholder="Default Input">
                    </div>
                        <div class="col-sm-2">
                        
                        </div></div></div>

                <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-8">
                    <div class="input-group input-icon right">
												<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
												</span>
                    <input type="text" class="form-control1" id="lastname" name="lastname" placeholder="Default Input">
                    </div>
                        <div class="col-sm-2">
                        
                        </div></div></div>

                <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-8">
                    <div class="input-group input-icon right">
												<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
												</span>
                    <input type="text" class="form-control1" id="phone" name="phone" placeholder="Default Input">
                    </div>
                        <div class="col-sm-2">
                        
                        </div></div></div>

                <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-8">
                    <div class="input-group input-icon right">
												<span class="input-group-addon">
													<i class="fa fa-envelope-o"></i>
												</span>
                    <input type="email" class="form-control1" id="email" name="email" placeholder="Default Input">
                    </div>
                        <div class="col-sm-2">
                        </div></div></div>

                <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Street</label>
                    <div class="col-sm-8">
                    <div class="input-group input-icon right">
												<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
												</span>
                    <input type="text" class="form-control1" id="street" name="street" placeholder="Default Input">
                    </div>
                        <div class="col-sm-2">
                        
                        </div></div></div>

                <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">City</label>
                    <div class="col-sm-8">
                    <div class="input-group input-icon right">
												<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
												</span>
                    <input type="text" class="form-control1" id="city" name="city" placeholder="Default Input">
                    </div>
                        <div class="col-sm-2">
                        
                        </div></div></div>

                <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">State</label>
                    <div class="col-sm-8">
                    <div class="input-group input-icon right">
												<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
												</span>
                    <input type="text" class="form-control1" id="state" name="state" placeholder="Default Input">
                    </div>
                        <div class="col-sm-2">
                        
                        </div></div></div>
                <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Zip Code</label>
                    <div class="col-sm-8">
                    <div class="input-group input-icon right">
												<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
												</span>
                    <input type="text" class="form-control1" id="zipcode" name="zipcode" placeholder="Default Input">
                    </div>
                        <div class="col-sm-2">
                        
                        </div></div></div>
                
                
                                       
                        <button type="submit" class="btn btn-primary">Submit</button> </form> 
                    </div>
                            
                        </div>
                    </div>                    
                    
                </div>
                
                <script>
                function create(id){
             const z=document.getElementById(id);
             swal("Data Berhasil di Tambahkan!", "You clicked the button!", "success");
                }
                </script>

                @endif
                @endsection