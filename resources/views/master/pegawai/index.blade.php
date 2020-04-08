@extends('layout/main')

@section('title', 'User')

@section('container')

<div id="page-wrapper">
	<div class="main-page">
    <h3 class="title1">Daftar Pegawai</h3>
<div class="table-responsive">
    <table class="table table-bordered table-striped table-actions">
    <a href="pegawaicreate" class="btn btn-primary my-3">Tambah Data Pegawai</a>
    </table>
</div>

    <div class="bs-example widget-shadow" data-example-id="bordered-table">
		<table class="table table-bordered">
            <thead><tr> 
                <th>#</th> 
                <th>id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Job Status</th>
                <th>Actions</th>                
                </tr> </thead> 
            <tbody><tr> 
            <thead>                                 
            @foreach($pegawai as $u)
            <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $u -> user_id }}</td>
            <td>{{ $u -> first_name }}</td>
            <td>{{ $u -> last_name }}</td>
            <td>{{ $u -> username }}</td>
            <td>{{ $u -> phone }}</td>
            <td>{{ $u -> email }}</td>
            <td>{{ $u -> job_status }}</td>
            <td><a href="pegawaiedit{{$u -> user_id}}">
            <button type="button" class="btn btn-success">
            <svg class="bi bi-pencil" width="3em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M13.293 3.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM14 4l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"></path>
            <path fill-rule="evenodd" d="M14.146 8.354l-2.5-2.5.708-.708 2.5 2.5-.708.708zM5 12v.5a.5.5 0 00.5.5H6v.5a.5.5 0 00.5.5H7v.5a.5.5 0 00.5.5H8v-1.5a.5.5 0 00-.5-.5H7v-.5a.5.5 0 00-.5-.5H5z" clip-rule="evenodd"></path>
            </svg>Edit </button></a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$u -> user_id}}">
            <svg class="bi bi-trash" width="3em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.5 7.5A.5.5 0 018 8v6a.5.5 0 01-1 0V8a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V8a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V8z"></path>
            <path fill-rule="evenodd" d="M16.5 5a1 1 0 01-1 1H15v9a2 2 0 01-2 2H7a2 2 0 01-2-2V6h-.5a1 1 0 01-1-1V4a1 1 0 011-1H8a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM6.118 6L6 6.059V15a1 1 0 001 1h6a1 1 0 001-1V6.059L13.882 6H6.118zM4.5 5V4h11v1h-11z" clip-rule="evenodd"></path>
            </svg>Delete
            </button>
            <div class="modal fade" id="exampleModal{{$u -> user_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Pegawai</h5>
            </div>
            <div class="modal-body">
            Anda yakin untuk menghapus data ?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href="pegawaidestroy{{$u -> user_id}}" >
            <button type="button" class="btn btn-primary">Delete</button></a>
            </div>
            </div>
            </div>
            </div>                           
            </tr>
            @endforeach
            </tbody>
            </table>
            </div>              
            </div>
            </div>      
            </div>
            </div>
                    <!-- END RESPONSIVE TABLES -->
                    
                <!-- END PAGE CONTENT WRAPPER -->                                    
                </div>         
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->    
   
@endsection
