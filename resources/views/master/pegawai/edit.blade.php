@extends('layout/main')

@section('title', 'Pegawai')

@section('container')

<div id="page-wrapper">
	<div class="main-page">
    <h3 class="title1">Edit Data Pegawai :</h3>
        <div class="form-three widget-shadow">
 
	@foreach($pegawai as $u)
	<form action="pegawaiupdate" method="post">
		{{ csrf_field() }}

		<input type="hidden" name="id" value="{{ $u->user_id }}"> <br/>
        <div class="form-group">
        <label class="col-md-3 control-label">First Name</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $u->first_name }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>


        <div class="form-group">
        <label class="col-md-3 control-label">Last Name</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $u->last_name }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>

        <div class="form-group">
        <label class="col-md-3 control-label">Username</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="username" name="username" value="{{ $u->username }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>

        <div class="form-group">
        <label class="col-md-3 control-label">Phone</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $u->phone }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>

        <div class="form-group">
        <label class="col-md-3 control-label">Email</label>
        <div class="col-md-9">                                            
        <div class="input-group input-icon right">
			<span class="input-group-addon">
				<i class="fa fa-envelope-o"></i></span>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $u->email }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>

        <div class="form-group">
		<label class="col-md-3 control-label">Password</label>
		<div class="col-md-9">
		<div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-key"></i></span>
					<input type="password" class="form-control1" name="password" id="password" value="{{ $u->password }}"><br/></div>
                    <span class="help-block"></span>
					</div>
				</div>

                <div class="form-group">
				<label class="col-md-3 control-label">Confirm Password</label>
					<div class="col-md-9">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-key"></i></span>
								<input type="password" class="form-control1" name="password" id="copass" value="{{ $u->password }}"><br/></div>
                                <span class="help-block"></span>
						</div>
					</div>
			

        <div class="form-group">
        <label class="col-md-3 control-label">Job Status</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="jobstatus" name="jobstatus" value="{{ $u->job_status }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>

        
                                
		<button type="submit" class="btn btn-info mt-3">Simpan Data</button>
	</form>
	@endforeach

@endsection