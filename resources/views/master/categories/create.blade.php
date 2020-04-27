@extends('layout/main')

@section('container')

@if(\Session::has('kasir') || \Session::has('admin'))
<div id="page-wrapper">
	<div class="main-page">
    <h3 class="title1">Input Data Categories</h3>
        <div class="form-three widget-shadow">
            <form class="form-horizontal" action="categoriesstore" method="post">
            @csrf
                <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Category Name</label>
                    <div class="col-sm-5">
                    <div class="input-group input-icon right">
												<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
												</span>
                    <input type="text" class="form-control1" id="category_name" name="category_name" placeholder="Default Input">
                    </div>
                        <div class="col-sm-2">
                        </div></div></div>
                        swal("Good job!", "You clicked the button!", "success")
        <button type="submit" class="btn btn-primary">Submit</button> </form> 
        </div>
                            
                            </div>
                        </div>                    
                        
                    </div>
                    </div>
                    </div>
                    </div>
                <!-- END PAGE CONTENT WRAPPER -->  
                @endif
                @endsection