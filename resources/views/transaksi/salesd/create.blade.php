@extends('layout/main')

@section('title', 'Point of Sales')

@section('container')
   
<div id="page-wrapper">
	<div class="main-page">
        <h3 class="title1">Point of Sales</h3>
        <form method ="post" action="posstore">
        @csrf
            <div class="form-three widget-shadow">
            <div class="form-group">
                        <label class="col-md-2 control-label">Nota Date</label>
                            <div class="col-md-3" name="nota_date">         
                                <?php
                                    $tgl=date('l, d-m-Y');
                                    echo $tgl;
                                ?>       
                            </div><br><br>
                    <div class="form-group">
                    <input type="hidden" name="nota_id" value="{{$nota_id}}">
                        <label class="col-md-2 control-label">Customer Name</label>
                            <div class="col-md-3"> 
                                <select class="form-control select" name="customer_id" data-live-search="true">
                                    @foreach($customer as $cus)
                                        <option value="{{ $cus -> customer_id }}">{{ $cus -> first_name }}</option>
                                    @endforeach  
                                </select>
                            </div>
                            
                    <div class="form-group">
                        <label class="col-md-2 control-label">User Name</label>
                            <div class="col-md-3">
                            <select class="form-control select" name="user_id" data-live-search="true">
                                    @foreach($pegawai as $u)
                                        <option value="{{ $u -> user_id }}">{{ $u -> first_name }}</option>
                                    @endforeach 
                                </select> 
                            </div><br>
                    </div>

                    

                    <!-- <div class="form-group">
                        <label class="col-md-2 control-label">Category Name</label>
                            <div class="col-md-3">    
                                <select name="categoriesid" class="form-control" id="categoriesid">
                                    @foreach($categories as $c)
                                        <option value="{{ $c -> category_id }}">{{ $c -> category_name }}</option>
                                    @endforeach                           
                                </select>
                            </div>
                    </div> -->
                </div>
            </div>

                    <br><br><br><br>
                    <div class="form-group">
                        <input type="text" class="form-control" id="search" name="search" value="" placeholder="Enter Your Product Name!" onkeydown="getModal(event)">
                            <div class="form-group">
						        <label for="focusedinput" class="col-sm-2 control-label"></label>
								    <div class="col-sm-3">
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
                                                    <table class="table table-striped table-bordered mydatatable" id="tabelproduk">
                                                        <thead class="thead-warning">
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th>Product Name</th>
                                                                <th>Product Price </th>
                                                                <th>Product Stock</th>
                                                    
                                                            </tr>
                                                        </thead>
                                                            <tbody>
                                                                @foreach($product as $p)
                                                                    <tr id="row{{$p->product_id }}">
                                                                        <th scope="row"><input type="checkbox" id="as{{$p->product_id }}" ></th>
                                                                        <td>{{ $p->product_name}}</td>
                                                                        <td>{{ $p->product_price}}</td>
                                                                        <td>{{ $p->product_stock}}</td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                    </table>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="label label-warning" data-dismiss="modal" id="save">Add</button>
                                                    <button type="button" class="label label-info" data-dismiss="modal">Back</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                                                <div class="table-responsive">
                                                    <div class="tables">
                                                        <div class="panel-body widget-shadow">
                                                            <table class="table" id="cart">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Product Name</th>
                                                                        <th>Quantity</th>
                                                                        <th>Price</th>
                                                                        <th>Discount & Tax (%)</th>
                                                                        <th>Total</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                    <tbody>     
                                                                    </tbody>
                                                            </table>        
                                                        </div>
                                                    </div>
                                                </div>
                
				                                <div class="tables">
						                            <h4>Carts Total</h4>
						                                <table class="table table-bordered"> 
                                                            <tbody>
                                                                <tr>
                                                                    <input type="hidden" id="subtotal">
                                                                        <th>Subtotal
                                                                            <td id="subtotal-val"></td>
                                                                </tr>
                                                                <tr>
                                                                    <input type="hidden" id="total_discount">
                                                                        <th>Discount
                                                                            <td id="total_discount-val"></td>
                                                                </tr>
                                                                <tr>
                                                                    <input type="hidden" id="total_tax">
                                                                        <th>PPN
                                                                            <td id="total_tax-val"></td>
                                                                </tr>
                                                                <tr>
                                                                    <input type="hidden" name="total_payment" id="total_payment">
                                                                        <th>Total
                                                                            <td id="total_payment-val"></td>
                                                                </tr>

                                                                

                                                            </tbody>
                                                        </table>
                                                                <button type="submit" class="btn btn-success">Insert</button>
                                                                <button type="submit" class="btn btn-danger">Reset</button>

					                            </div>
                   
                    </div>
                    </form>
                </div>
                    </div> 
                                    
<script>
    function getModal(event){
        if(event.keyCode==13){
            $("#tambahModal").modal();
            event.preventDefault();
            myFunction();
        }
    }
    function tampil_modal(){
      $("#tambahModal").modal();
    }
    function myFunction() {
     document.getElementById("search").value='';
    }
    jQuery( function( $ ) {
        
        $("#save").click(function(){
          var checks = $("#tambahModal").find("input[type=checkbox]:checked");
          var ids = Array();
          for(var i=0;i<checks.length;i++) {
              ids[i] = checks[i].id; 
              $("#"+ids[i]).prop("checked", false);
              ids[i] = ids[i].substring(2,10);
              addRow(ids[i]);
              $("#tabelproduk tbody tr#row"+ids[i]).hide();
          }
        });
            //function agar di klik row mana saja bsa ke ceklis
        // $('#tabelproduk tr').click(function() {
        //     var check = $(this).find("input[type=checkbox]");
        //     if (check.prop("checked") == true) {
        //       check.prop("checked", false);
        //     }
        //     else{
        //       check.prop("checked", true);
        //     }
        // });
      });
    var products = <?php echo json_encode($product); ?>;
  function addRow(id){
      var index = getIndex(id);
      var id = products[index]["product_id"];
      var name = products[index]["product_name"];
      var price = products[index]["product_price"];
      var stock = products[index]["product_stok"];
      var mprice = money(price);
      var markup = "\
      <tr id='"+id+"' style='border: 3px;'>\
	  \
	  <td style='text-align: left; padding-left: 30px;' class='align-middle'>\
	    <div class='row'>\
	      <h3 class='product_name' style='font-weight:bold;'>"+name+"</h3></div>\
	    <div class='row'>\
	      <input type='hidden' name='product_id["+id+"]' value="+id+" readonly id='product_id"+id+"'></div>\
	  </td>\
	  \
	  <td style='width: 20%;' class='align-middle'>\
	    <div class='row justify-content-center'>\
      <button class='dec btn btn-sm btn-danger' type='button' onclick='dec(\""+id+"\")'>-</button>\
	    	<input type='number' style='background-color:#f5f5f5; -moz-appearance: textfield; width: 20%; border:1px;text-align: center;' class='quantity' oninput='recount("+id+")' name='jumlah["+id+"]' min='1' id='jumlah"+id+"'required max='"+stock+"' value='1'>\
        <button class='inc btn btn-sm btn-success' type='button' onclick='inc(\""+id+"\")'>+</button>\
	    </div>\
	  </td>\
	  \
	  <td style='text-align: left; width:15%;' class='align-middle'>\
	    <div class='row justify-content-left'>\
	      <input type='hidden' class='selling_price' name='selling_price["+id+"]' id='price"+id+"' value='"+price+"'>\
	        "+""+mprice+"\
	  </div>\
    </td>\
    <td>\
    <div class='row align-text-bottom justify-content-center'>\
	      <div class='col-2 pl-0 pt-1 align-middle'>\
	      <h6 style='text-align: left; font-weight:bold;'></h6></div>\
	      <div class='col-2 px-0 pt-1'>\
	        <input type='number' min='0' max='100' oninput='percentDisc(\""+id+"\")' class='percent' \
	        name='percent["+id+"]' id='percent"+id+"' \
	        placeholder='0' \
	        style='-moz-appearance: textfield;padding-right:5px; text-align:right; width: 30%;color: black;border-radius: 5pt;border: 3px solid #e09a6c;'>\
	        <input type='hidden' min='0' oninput='recount(\""+id+"\")' \
	        class='discount' name='discount["+id+"]' \
	        id='discount"+id+"' placeholder='0' \
	        style='-moz-appearance: textfield;text-align: right;'>\
	        <input type='number' min='0' max='100' oninput='percentTax(\""+id+"\")' class='percentTax' \
	        name='percentTax["+id+"]' id='percentTax"+id+"' \
	        placeholder='10' readonly\
	        style='-moz-appearance: textfield;padding-right:5px; text-align:right; width: 30%;color: black;border-radius: 5pt;border: 3px solid #e0d46c;'>\
	        <input type='hidden' min='0' oninput='recount(\""+id+"\")' \
	        class='discountTax' name='discountTax["+id+"]' \
	        id='discountTax"+id+"' placeholder='0' \
	        style='-moz-appearance: textfield;text-align: right;'>\
	    </div>\
	  </td>\
	  \
	  <td class='align-middle' style='width: 15%;'>\
		  <div class='row align-middle justify-content-end'>\
		  	<input type='hidden' class='total' name='total["+id+"]' min='1' id='total"+id+"' required>\
		  		<h4 style='text-align: left; padding-right: 20px;' id='total-val"+id+"'></h4>\
		  	</div>\
		  </div>\
	  </td>\
	  \
      <td>\
      <div class='row align-text-bottom justify-content-center'>\
      <div style='width: 5%;' class='align-middle'>\
          <i class='badge badge-danger' onclick='delRow(\""+id+"\")' style='cursor: pointer; '>x</i>\
          </div>\
          </div>\
	  </td>\
	</tr>\
	";
	$("#cart tbody").append(markup);
	recount(id);
}
function getIndex(id){
	for(var i = 0;i<products.length;i++){
	  if(products[i]["product_id"] == id){
	      var index = i;
	      return index;
	  }
	}
}
function money(text){
	var text = text.toString();
  // console.log(text);
	var panjang = text.length; //4
	var hasil = new Array();
	if (panjang>0){
		if(panjang>3){
			var div = parseInt(panjang/3); //1
			var char = new Array();
			var result="";
			if (div > 1 && panjang > 6) {
				var x = parseInt(panjang - (div*3));
				div++;
				for (var i=0; i<div; i++) {
					if (i == 0) {
						char[i] = text.slice(i,x);
					}
					else{
						char[i] = text.slice(((i-1)*3)+x,(i*3)+x);
					}
					if (i == (div-1)) {					
						hasil[i]= char[i];
					}
					else{
						hasil[i]= char[i]+".";
					}
				}
				for (var i=0; i<div; i++) {
					result+=hasil[i];
				}
			}
			else{
				result = text.slice(0,panjang-3)+"."+text.slice(panjang-3,panjang);
			//  console.log( text.slice(0,panjang-3));
      //  console.log(text.slice(panjang-3,panjang));
      }
			return result;
		}
    else if(panjang>0){
        return text;
    }
		return 0;
	}
}
    function recount(id) {
      console.log("function recount");
      var jumlah = document.getElementById("jumlah"+id).value;
      var price = document.getElementById("price"+id).value;
      var subtotal = (jumlah*price);
      document.getElementById("discount"+id).setAttribute("max", subtotal);
      document.getElementById("total"+id).value = subtotal;
      percentDisc(id);
    };
    function delRow(id){
          $('#cart tbody tr#'+id).remove();
          getTotal();
          $("#tabelproduk tbody tr#row"+id).show();
    }
    function percentDisc(id){
      console.log("function percentDisc");
      var percent = document.getElementById("percent"+id).value;
      if(percent>100 || percent<0){
        console.log('masukkk if percent');
        var percent = document.getElementById("percent"+id).value=0;
      }
      var total = document.getElementById("total"+id).value;
      var hasil = (Number(percent)/100) * total;
      document.getElementById("discount"+id).value = hasil;
      document.getElementById("total"+id).value = total;
      document.getElementById("total-val"+id).innerHTML = money(total-hasil);
      getTotal();
    };
    function getTotal(){
      console.log("function getTotal");
      var totals = document.getElementsByClassName("total");
      var i;
      var total_p = 0;
      for (i = 0; i < totals.length; ++i) {
        total_p = total_p + Number(totals[i].value);
      }
      document.getElementById('subtotal').value = total_p ;
      document.getElementById('subtotal-val').innerHTML = money(total_p);
      var discounts = document.getElementsByClassName("discount");
      var i;
      var total_disc = 0;
      for (i = 0; i < discounts.length; ++i){
        total_disc = total_disc + Number(discounts[i].value);
      }
    //  console.log(total_p);
      var l=document.getElementById('total_tax').value=(Number(total_p*0.1));
      // console.log(l);
      document.getElementById('total_tax-val').innerHTML=money(l);
      // console.log(money(l));
      document.getElementById('total_discount').value = total_disc;
      document.getElementById('total_discount-val').innerHTML = money(total_disc);
      let k = (Number(total_p))-total_disc;
      if(k<=0){
        console.log('masuk if k<=0');
        document.getElementById('total_payment').value = 0;
        document.getElementById('total_payment-val').innerHTML = '0';
      }
      else{
        console.log('masuk if k!=0');
        document.getElementById('total_payment').value = (total_p+(Number(total_p*0.1)))-total_disc;
        document.getElementById('total_payment-val').innerHTML = money((total_p+(Number(total_p*0.1)))-total_disc);
      }
     
    };
    function inc(id){
          var oldValue = $("#jumlah"+id).val();
          var newVal = parseFloat(oldValue)+1;
          var maximal = $("#jumlah"+id).attr('max');
          if(!(newVal > maximal)){
            $("#jumlah"+id).val(newVal);
            recount(id);
            console.log("massssuk");
          }
    }
        function dec(id){
          var oldValue = $("#jumlah"+id).val();
          if (parseFloat(oldValue) > 1) {
              var newVal = parseFloat(oldValue)-1;
              $("#jumlah"+id).val(newVal);
          }
          recount(id);
        }
    swal("Welcome to Point of Sales!", "You clicked the button!", "success");
</script>

@endsection