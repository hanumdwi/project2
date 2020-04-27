@extends('layout/main')

@section('container')

@if(\Session::has('kasir') || \Session::has('admin'))
<div id="page-wrapper">
	<div class="main-page">
    <h3 class="title1">Input Data Product</h3>
        <div class="form-three widget-shadow">
            <form class="form-horizontal" action="productstore" method="post">
            @csrf
                <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Category Id</label>
                    <div class="col-sm-8">
                    <select name="category_id" class="form-control" id="category_id">
                        @foreach($categories as $c)
                        @if($c->status == 1)
                        <option value="{{$c->category_id}}">{{$c->category_name}}</option>
                        @endif
                        @endforeach                 
                    </select>
                    </div></div>
        
          
            <form class="form-horizontal">
                <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Product Name</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control1" id="product_name" name="product_name" placeholder="Default Input">
                    </div>
                        <div class="col-sm-2">
                        </div>
                    </div>

                        
          
            <form class="form-horizontal">
                <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Product Price</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control1" id="product_price" name="product_price" placeholder="Default Input">
                    </div>
                        <div class="col-sm-2">
                        </div></div>

            <form class="form-horizontal">
                <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Product Stock</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control1" id="product_stock" name="product_stock" placeholder="Default Input">
                    </div>
                        <div class="col-sm-2">
                        </div></div>

       
            <form class="form-horizontal">
                <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Explanation</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control1" id="explanation" name="explanation" placeholder="Default Input">
                    </div>
                        <div class="col-sm-2">
                        </div></div>
                

<button type="submit" class="btn btn-primary">Submit</button> </form> 
</div>
                            
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->  
                @endif
                @endsection