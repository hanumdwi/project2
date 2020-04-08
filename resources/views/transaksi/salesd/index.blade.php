@php 
                    $no = 1;
                    $totalPrice = 0;
                    $totalQty = 0;
                    $total = 0;
                @endphp
                @forelse($detail_sales as $row)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->product->product_name }}</td>
                    <td>Rp {{ number_format($row->product_price) }}</td>
                    <td>{{ $row->quantity }} Item</td>
                    <td>Rp {{ number_format($row->product_price * $row->quantity) }}</td>
                </tr>

                @php
                    $totalPrice += $row->product_price;
                    $totalQty += $row->quantity;
                    $total += ($row->product_price * $row->quantity);
                @endphp
                @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data</td>
                </tr>
                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <td>Rp {{ number_format($totalPrice) }}</td>
                    <td>{{ number_format($totalQty) }} Item</td>
                    <td>Rp {{ number_format($total) }}</td>
                </tr>
            </tfoot>

            <div class="x_content">
 <form class="form-horizontal form-label-left" action="#" method="POST">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Customer Name</label>
                                        <div class="col-md-1">                                                                                
                                            <select class="form-control select" data-live-search="true">
                                                @foreach($customer as $cus)
                                                <option value="{{ $cus -> customer_id }}">{{ $cus -> first_name }}</option>
                                                @endforeach  
                                            </select>
                                        </div>
                                    </div>
                            
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">User Name</label>
                                        <div class="col-md-1">                                                                                
                                            <select class="form-control select" data-live-search="true">
                                                @foreach($pegawai as $u)
                                                <option value="{{ $u -> user_id }}">{{ $u -> first_name }}</option>
                                                @endforeach  
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Nota Date</label>
                                        <div class="col-md-2">                   
                                                        <input type="date" class="form-control" id="nota_date" name="nota_date" />
                                                    </div>   
                                    </div>
                                    <br>

                                    @extends('layout/main')

@section('title', 'product')

@section('container')
   
 <!-- START RESPONSIVE TABLES -->
                <div class="row">
                        <div class="col-md-15 col-sm-15 col-xs-15">
                                    <h3 class="panel-title">Point of Sales</h3>
                                    <br>
                                    <br>
                            </div>
                    </div>
 <!-- <div class="x_content"> -->
 <!-- <input type="text" class="form-control" id="search" name="search" value="" placeholder="Enter Your Product Name!"> -->
                    <form class="form-horizontal form-label-left" action="#" method="POST">
                      <div class="item form-group ">
                        <label class="control-label col-md-2 col-sm-2 col-xs-2" for="categoriesid"> Categories Id<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                          <input id="categoriesid" class="form-control col-md-3 col-xs-3" data-validate-length-range="6" 
                          data-validate-words="2" name="categoriesid" readonly required="required" 
                          type="text">
                        </div>

                        <label class="control-label col-md-3 col-sm-3 col-xs-3" for="categoriesname"> Categories Name <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                           <select name="categoriesid" class="form-control" id="categoriesid">
                                           @foreach($categories as $c)
                                           <option value="{{ $c -> category_id }}">{{ $c -> category_name }}</option>
                                           @endforeach                           
                          </select>
                        </div>
                      </div>
                     
                      <div class="panel panel-default"> 
                        <div class="panel-heading">
                        <div class="form-group">
                            <label for="exampleInputProductID"></label>
                            <!-- <input type="text" class="form-control" id="exampleInputProductID" placeholder="Enter Your Product ID"> -->
                            <button type="button" data-toggle="modal" data-target="#tambahModal">Open modal</button>

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

                                        <font size="3"> <table class="table table-striped table-bordered mydatatable" id="modal1"></font>
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

                                            <th scope="row"><input type="checkbox" id="check{{$p->product_id }}" ></th>
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
                                        <font size="6"><button type="button"  class="add-row" data-dismiss="modal">Add</button></font>
                                        <font size="6"><button type="button" class="delete-row" data-dismiss="modal">Back</button></font>
                                        
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
                                    <table class="table table-striped" id="keranjang">
                                                <tr>
                                                <th>&nbsp;</th>
                                                
                                                    <th>Product Name</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                            <!-- <tr> -->
                                         
                                            <!-- <td><button type="button" class="btn btn-danger">
                                            <i class="fa fa-times"></li></button></td> -->
                                            <!-- <td>{{ $p->product_name}}</td>
                                            <td>{{ $p->product_price}}</td>
                                                <td><div class="quantity">
                                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                    <input type="number" class="qty-text" id="qty2" step="1" min="1" max="300" name="quantity" value="1">
                                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                </div></td>
                                                <td>Rp. 10.000</td></tr> -->
                                               
                                            </tbody>
                                        </table>
                                    </div>       

                                    <div class="row justify-content-end">
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Choose Your Payment</h3>
                         <!-- Cash on delivery -->
                         <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="radio" name="pilihan" class="custom-control-input" id="cod" checked>
                                        <label class="custom-control-label" for="cod">Cash</label>
                                    </div>
                                    <!-- Paypal -->
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="radio" name="pilihan" class="custom-control-input" id="paypal">
                                        <label class="custom-control-label" for="paypal">Paypal<img class="ml-15" src="asset/amado/img/core-img/paypal.png" alt=""></label>
                              
                                        </div></label>
    					<!-- <p>Enter your coupon code if you have one</p> -->
  						<form action="#" class="info">
	              <div class="form-group">
	              	
	              </div>
	            </form>
    				</div>
    				<!-- <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Apply Coupon</a></p> -->
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <label class="control-label col-md-5 col-sm-5 col-xs-5" for="categoriesname">
                <!-- <div class="col-md-6"> -->
                <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3>Code Cupon</h3>
                                    <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <div class="col-md-20">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input class="form-control" placeholder=""/>                                                
                                            </div>                                                                                        
                                        </div>                                        
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="btn-group pull-left">
                                                <!-- <button class="btn btn-primary"><span class="fa fa-camera"></span></button>
                                                <button class="btn btn-primary"><span class="fa fa-map-marker"></span></button>
                                                <button class="btn btn-primary"><span class="fa fa-calendar"></span></button> -->
                                            </div>
                                            <div class="pull-right">
                                                <button class="btn btn-info"><span class="fa fa-share"></span>Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
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
                                <!-- <div class="x_content">
                                    <form class="form-horizontal form-label-left" action="#" method="POST">
                                    <div class="col-lg-4 mt-5 cart-wrap ftco-animate"> -->
                                    <!-- <th>Metode Pembayaran</th> -->
    				                
                                
                                        
                                                            
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </form>
                    <!-- END RESPONSIVE TABLES -->
                    
                <!-- END PAGE CONTENT WRAPPER -->                                    
                       
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->    
                                
<script>
var arrBarang=<?php echo json_encode($product)?>;
        function getModal( event ){
            console.log("masuk get modal");
            if(event.keyCode==13){
                $("#tambahModal").modal();
                myFunction();
            }
        };

        
        

    function myFunction() {
     document.getElementById("search").value='';
    }

    $(document).ready(function(){
        
        $(".add-row").click(function(){
            console.log("masukkk");
            var checks = $("#modal1").find("input[type=checkbox]:checked");
            var ids = Array();
            for(var i=0;i<checks.length;i++) {
                ids[i] = checks[i].id;
                $("#"+ids[i]).prop("checked", false);
                ids[i] = ids[i].substring(5,10);
                pilihBarang(ids[i]);
                $("#modal1 tbody tr#"+ids[i]).hide();
            }
        });
        
        // Find and remove selected table rows
        $(".delete-row").click(function(){
            $("table tbody").find('input[name="record"]').each(function(){
            	if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });

        function pilihBarang(index)
{
  for(var i=0; i<arrBarang.length; i++)
  {
    if(arrBarang[i]["product_id"]==id)
      break;
  }
  console.log(arrBarang[i]);
  

  $("#myModal").modal("hide");

  var table = document.getElementById('keranjang');

  var flag=-1;

  var id = barang.product[index].product_id;
  var nama_barang = barang.product[index].product_name;
  var harga = barang.product[index].product_price;

  for(var z=1; z<table.rows.length; z++)
  {
    //console.log(table.rows[z].childNodes[0].childNodes[2].value);
    if(table.rows[z].childNodes[0].childNodes[2].value == id)
    {
      flag=z;
      break;
    }
  }

  if(flag != -1)
  {
    var qty = table.rows[flag].childNodes[2].childNodes[0];
    qty.value = parseInt(qty.value) + 1;
    var row_id = table.rows[flag].id;
    updateSubtotal(row_id);
  }
  else
  {
    var row = table.insertRow(table.rows.length);
    var idrow = 'col'+colnum;
    row.setAttribute('id',idrow);
    colnum++;

    var cel_1=row.insertCell(0);
    var cel_2=row.insertCell(1);
    var cel_3=row.insertCell(2);
    var cel_4=row.insertCell(3);
    var cel_5=row.insertCell(4);

/*    cel_1.innerHTML = '<input type="text" name="barang[]" value="'+arrBarang[i][1]+'" style="background:transparent; border:none; text-align:center; width=100%" readonly>\
                        <input type="hidden" name="idBarang" id="idBarang" value="'+arrBarang[i][0]+'">';
    cel_2.innerHTML = '<input type="text" name="harga[]" value="'+arrBarang[i][2]+'" readonly>';
    cel_3.innerHTML = '<input type="text" name="qty[]" value="1" onkeyup="updateSubtotal(\''+idrow+'\')" onfocus="select()">';
    cel_4.innerHTML = '<input type="text" name="subtotal[]" value="'+arrBarang[i][2]+'" readonly>';
    cel_5.innerHTML = '<button onclick="hapusEl(\''+idrow+'\')">Del</button>';
*/
    cel_1.innerHTML = '<input type="text" name="barang[]" value="'+arrBarang[i]['product_name']+'" style="background:transparent; border:none; text-align:center; width=100%" readonly>\
                        <input type="hidden" name="idBarang" id="idBarang" value="'+arrBarang[i]['product_id']+'">';
    cel_2.innerHTML = '<input type="text" name="harga[]" value="'+arrBarang[i]['price']+'" readonly>';
    cel_3.innerHTML = '<input type="text" name="qty[]" value="1" onkeyup="updateSubtotal(\''+idrow+'\')" onfocus="select()">';
    cel_4.innerHTML = '<input type="text" name="subtotal[]" value="'+arrBarang[i]['price']+'" readonly>';
    cel_5.innerHTML = '<button onclick="hapusEl(\''+idrow+'\')">Del</button>';
  }

  updateTotal();

}

function hapusEl(idRow)
{
  document.getElementById(idRow).remove();
  updateTotal();
}

function updateSubtotal(id)
{
  
  //hanya menerima input angka
  
  var row = document.getElementById(id);
  var qty = row.childNodes[2].childNodes[0].value;    
  var harga = row.childNodes[1].childNodes[0].value;
  
  var subTot = harga*qty;

  var colSubTot = row.childNodes[3].childNodes[0];
  colSubTot.value = subTot;

  
  updateTotal();
}

function updateTotal()
{
  var table = document.getElementById('keranjang');
  var total=0;
  for(var i=1; i<table.rows.length; i++)
  {
    total = total + parseInt(table.rows[i].childNodes[3].childNodes[0].value);
  }

  document.getElementById('total').value=total;
}
    });    


</script>
@endsection