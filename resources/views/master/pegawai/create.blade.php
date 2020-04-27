@extends('layout/main')

@section('container')

@if(\Session::has('kasir') || \Session::has('admin'))
<div id="page-wrapper">
	<div class="main-page">
    <h3 class="title1">Input Data Pegawai</h3>
        <div class="form-three widget-shadow">
            <form class="form-horizontal" action="pegawaiinsertdata" method="post">
            @csrf
                <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control1" id="first_name" name="first_name" placeholder="Default Input">
                    </div>
                        <div class="col-sm-2">
                        
                        </div></div>

                <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control1" id="last_name" name="last_name" placeholder="Default Input">
                    </div>
                        <div class="col-sm-2">
                        
                        </div></div>

                <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control1" id="username" name="username" placeholder="Default Input">
                    </div>
                        <div class="col-sm-2">
                        
                        </div></div>

                <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control1" id="phone" name="phone" placeholder="Default Input">
                    </div>
                        <div class="col-sm-2">
                        
                        </div></div>

				<div class="form-group">
				<label class="col-md-2 control-label">Email Address</label>
					<div class="col-md-8">
						<div class="input-group">							
							<span class="input-group-addon">
								<i class="fa fa-envelope-o"></i>
							</span>
								<input type="text" class="form-control1" id="email" name="email" placeholder="Email Address">
						</div>
					</div>
				</div>

                <div class="form-group">
				<label class="col-md-2 control-label">Password</label>
					<div class="col-md-8">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-key"></i>
							</span>
								<input type="password" class="form-control1" name="password" id="password" placeholder="Password">
						</div>
					</div>
				</div>

                <div class="form-group">
				<label class="col-md-2 control-label">Confirm Password</label>
					<div class="col-md-8">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-key"></i>
							</span>
								<input type="password" class="form-control1" name="password" id="copass" onkeyup="cekPass()" placeholder="Confirm Password">
                                    <p id="error" style="color:red"></p>
						</div>
					</div>
				</div>

                <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Job Status</label>
                    <div class="col-sm-8">
                    <select name="job_status" class="form-control" id="job_status">
                        <option selected="selected">--Pilih--</option>
                        <option>Admin</option>
                        <option>Kasir</option>
                    </select>
                    </div>
                        <div class="col-sm-2">
                        
                        </div></div>

                                       
                        <button type="submit" class="btn btn-primary">Submit</button> </form> 
                    </div>
                            
                        </div>
                    </div>                    
                    
                </div>
    
                <script>
                function cekPass()
                {
                var pass = document.getElementById('password').value;
                var copass = document.getElementById('copass').value;
                var text = document.getElementById('error');
                if(pass != copass)
                {
                text.style.color = 'red';
                text.innerHTML='Password tidak cocok';
                }
                else
                {
                text.style.color = 'green';
                text.innerHTML='Password Cocok';
                }

                }
                </script>
@endif
@endsection