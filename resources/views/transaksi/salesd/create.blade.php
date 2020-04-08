@extends('layout/main')

@section('title', 'product')

@section('container')
   
<div id="page-wrapper">
	<div class="main-page">
    <h3 class="title1">Input Data Product :</h3>
        <div class="form-three widget-shadow">
                    <form class="form-horizontal form-label-left" action="#" method="POST">
                    <div class="form-group">
                                        <label class="col-md-2 control-label">Customer Name</label>
                                        <div class="col-md-3">                                                                                
                                            <select class="form-control select" data-live-search="true">
                                                @foreach($customer as $cus)
                                                <option value="{{ $cus -> customer_id }}">{{ $cus -> first_name }}</option>
                                                @endforeach  
                                            </select>
                                        </div>
                                    </div>
                            
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">User Name</label>
                                        <div class="col-md-3">                                                                                
                                            <select class="form-control select" data-live-search="true">
                                                @foreach($pegawai as $u)
                                                <option value="{{ $u -> user_id }}">{{ $u -> first_name }}</option>
                                                @endforeach  
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Nota Date</label>
                                        <div class="col-md-3">                   
                                                        <input type="date" class="form-control" id="nota_date" name="nota_date" />
                                                    </div>   
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Category Name</label>
                                        <div class="col-md-3">    
                           <select name="categoriesid" class="form-control" id="categoriesid">
                                           @foreach($categories as $c)
                                           <option value="{{ $c -> category_id }}">{{ $c -> category_name }}</option>
                                           @endforeach                           
                          </select>
                        </div>
                      </div>
                      <form>
                      <div class="panel panel-default"> 
                        <div class="panel-heading">
                        <div class="form-group">
                            <label for="exampleInputProductID"></label>
                            <!-- <input type="text" class="form-control" id="exampleInputProductID" placeholder="Enter Your Product ID"> -->
                            <input type="text" class="form-control" id="search" name="search" value="" placeholder="Enter Your Product Name!" onkeyup="getModal(event)">

                                <!-- Modal -->
                                <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">

                                        <font size="3"> <table class="table table-striped table-bordered mydatatable"></font>
                                        <thead class="thead-dark">
                                            <tr>
                                            <th scope="col">#</th>
                                                    <th>Product Name</th>
                                                    <th>Product Price </th>
                                                    <th>Product Stock</th>
                                                    
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($product as $p)
                                            <tr>
                                            <th scope="row"><input type="checkbox" id="{{$p->product_id }}" ></th>
                                            <td>{{ $p->product_name}}</td>
                                            <td>{{ $p->product_price}}</td>
                                            <td>{{ $p->product_stock}}</td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                            </table>

                                        </div> <!-- Tutup Modal Body -->
                                        <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-success" id="save" > -->
                                        <!-- <svg aria-hidden="true" width="2px" height="2px" focusable="false" data-prefix="far" class=""></svg> Add To Cart</button> -->
                                        <font size="6"><button type="button" class="badge badge-info" data-dismiss="modal">Add</button></font>
                                        <font size="6"><button type="button" class="badge badge-danger" data-dismiss="modal">Back</button></font>
                                        
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        </div>
                     </form>
                    
                    <div class="panel panel-default">
                                <div class="panel-heading">
                                   
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped">
                                                <tr>
                                                <th>&nbsp;</th>
                                                
                                                    <th>Product Name</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                            <tr>
                                            <td><button type="button" class="btn btn-danger">
                                            <i class="fa fa-times"></li>
                                                        </button></td>
                                                <td>Chitos</td>
                                                <td>Rp. 10.000</td>
                                                <td><div class="quantity">
                                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                    <input type="number" class="qty-text" id="qty2" step="1" min="1" max="300" name="quantity" value="1">
                                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                </div></td>
                                                <td>Rp. 10.000</td></tr>
                                            <tr>
                                            <td><button type="button" class="btn btn-danger">
                                            <i class="fa fa-times"></li>
                                                        </button></td>
                                                <td>Piattos</td>
                                                <td>Rp. 5.000</td>
                                                <td><div class="quantity">
                                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                    <input type="number" class="qty-text" id="qty2" step="1" min="1" max="300" name="quantity" value="1">
                                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                </div></td>
                                                <td>Rp. 5.000</td></tr>
                                            <tr>
                                            <td><button type="button" class="btn btn-danger">
                                            <i class="fa fa-times"></li>
                                                        </button></td>
                                                <td>Biskuit Regal</td>
                                                <td>Rp. 20.000</td>
                                                <td><div class="quantity">
                                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                    <input type="number" class="qty-text" id="qty2" step="1" min="1" max="300" name="quantity" value="1">
                                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                </div></td>
                                                <td>Rp. 20.000</td></tr>
                                            </tbody>
                                        </table>
                                    </div>       

                                   
  						<form action="#" class="info">
	              <div class="form-group">
	              	
	              </div>
	            </form>
    				</div>
    				<!-- <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Apply Coupon</a></p> -->
    			</div>
    			
                                    

                                
    				</div>
    				<!-- <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Estimate</a></p> -->
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
                    <table class="table table-hover">
                    <h3>Charts Total</h3>
                                                    <!-- <th>Carts Total</th> -->
                                                        <thead>
                                                        
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                
                                                                <th>Subtotal
                                                                <td>Rp. 35.000</td>
                                                            </tr>
                                                            <tr>
                                                                
                                                                
                                                                <th>PPN
                                                                <td>10%</td>
                                                            </tr>
                                                            <tr>
                                                                
                                                                <th>Total
                                                                <td>Rp. 38.500</td>
                                                            </tr>
    			</div>
    		</div>
			</div>

                                
                            </div>
                                                            
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </form>
                    
                                    
<script>
        function getModal(event){
        if(event.keyCode==13){
            $("#tambahModal").modal();
            myFunction();
        }
    }
    function myFunction() {
     document.getElementById("search").value='';
    }
</script>

@endsection