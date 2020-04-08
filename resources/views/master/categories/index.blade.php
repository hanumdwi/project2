@extends('layout/main')

@section('title', 'Categories')

@section('container')

<div id="page-wrapper">
	<div class="main-page">
    <h3 class="title1">Daftar Categories</h3>
<div class="table-responsive">
    <table class="table table-bordered table-striped table-actions">
   
    <!-- <div class="col-md-4 modal-grids"> -->
						<button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#tambahcategory">Tambah Data Category</button>
						<div class="modal fade" id="tambahcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="exampleModalLabel">Tambah Data Category</h4>
									</div>
									<div class="modal-body">
                                    
										<form class="form-horizontal" action="categoriesstore" method="post">
                                        @csrf
											<div class="form-group">
												<label for="recipient-name" class="control-label">Category Name</label>
												<input type="text" class="form-control" id="category_name" name="category_name">
											</div>
										
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary" id="submit">Submit</button>
									</div>
                                    </form>
								</div>
							</div>
						</div>
					</div>
    </table>
</div>

<div class="bs-example widget-shadow" data-example-id="bordered-table"> 
		<table class="table table-bordered">
            <thead><tr> 
                <th>#</th>
                <th>Status Category</th> 
                <th>Category Id</th> 
                <th>Category Name</th>
                <th>Action</th> 
                </tr> </thead> 
            <tbody>
                @foreach($categories as $c)
                <tr>
                <th>{{ $loop->iteration }}</th>
                <td> 
                    @php $x=0; @endphp
                        @foreach($product as $p)
                            @if($c->category_id == $p->category_id)
                    @php $x=1; @endphp
                            @endif
                        @endforeach
                @if($x==0)               
                <form class="post0" method="post" action="categoriesupdateswitch">
                @csrf
                <input type="hidden" name="id" value="{{$c->category_id}}">
                @if($c -> status == 1)
                <label class="switch" for="switch{{$c->category_id}}" >
                <input type="checkbox" checked id="switch{{$c->category_id}}"/>
                <span></span></label>
                <p><p class="label label-success">Active</p></p>
                 @else 
                 <label class="switch" for="switch{{$c->category_id}}">
                 <input type="checkbox" id="switch{{$c->category_id}}"/>
                 <span></span></label>
                 <p><p class="label label-danger">Non-Active</p></p>
                  @endif
                  </form>
                  @else
                  <form id="modal{{$c->category_id}}" onclick="modal(id)" method="post" action="#">
                  @csrf
                  <input type="hidden" name="id" value="{{$c->category_id}}">
                  @if($c -> status == 1)
                  <label class="switch" for="switch">
                  <input type="checkbox" checked id="switch{{$c->category_id}}"/>
                  <span></span></label>
                  <p><p class="label label-success">Active</p></p>
                  @else 
                  <label class="switch" for="switch{{$c->category_id}}">
                  <input type="checkbox" id="switch{{$c->category_id}}"/>
                  <span></span></label>
                  <p><p class="label label-danger">Non-Active</p></p>
                   @endif
                   </form>
                   @endif
                   </td>   
                <td>{{ $c -> category_id }}</td>
                <td>{{ $c -> category_name }}</td>
                
                   <td>
                   @if($c -> status == 1)
                   <a href="categoriesedit{{$c -> category_id}}">
                   <button type="button" class="btn btn-success">
                   <svg class="bi bi-pencil" width="3em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                   <path fill-rule="evenodd" d="M13.293 3.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM14 4l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"></path>
                    <path fill-rule="evenodd" d="M14.146 8.354l-2.5-2.5.708-.708 2.5 2.5-.708.708zM5 12v.5a.5.5 0 00.5.5H6v.5a.5.5 0 00.5.5H7v.5a.5.5 0 00.5.5H8v-1.5a.5.5 0 00-.5-.5H7v-.5a.5.5 0 00-.5-.5H5z" clip-rule="evenodd"></path>
                    </svg>Edit </button></a>
                    @else
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal1{{$c -> category_id}}">
                    <svg class="bi bi-pencil" width="3em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M13.293 3.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM14 4l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"></path>
                    <path fill-rule="evenodd" d="M14.146 8.354l-2.5-2.5.708-.708 2.5 2.5-.708.708zM5 12v.5a.5.5 0 00.5.5H6v.5a.5.5 0 00.5.5H7v.5a.5.5 0 00.5.5H8v-1.5a.5.5 0 00-.5-.5H7v-.5a.5.5 0 00-.5-.5H5z" clip-rule="evenodd"></path>
                    </svg>Edit </button>
                    <div class="modal fade" id="tampil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                    </div>
                    <div class="modal-body">
                    Maaf.. Data Telah digunakan di Product
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="modal fade" id="exampleModal1{{$c -> category_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                    </div>
                    <div class="modal-body">
                    Maaf.. Data Non-Active</div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                    </div>
                    </div>     
                    <div class="modal fade" id="exampleModal{{$c -> category_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete category</h5>
                    </div>
                    <div class="modal-body">
                    Anda yakin untuk menghapus data ?
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="categoriesdestroy{{$c -> category_id}}" ><button type="button" class="btn btn-primary">Delete</button></a>
                    </div>
                    </div>
                    </div>
                    </div>     
                    </a>
                    @endif
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$c -> category_id}}">
                    <svg class="bi bi-trash" width="3em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 7.5A.5.5 0 018 8v6a.5.5 0 01-1 0V8a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V8a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V8z"></path>
                    <path fill-rule="evenodd" d="M16.5 5a1 1 0 01-1 1H15v9a2 2 0 01-2 2H7a2 2 0 01-2-2V6h-.5a1 1 0 01-1-1V4a1 1 0 011-1H8a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM6.118 6L6 6.059V15a1 1 0 001 1h6a1 1 0 001-1V6.059L13.882 6H6.118zM4.5 5V4h11v1h-11z" clip-rule="evenodd"></path>
                    </svg>Delete
                    </button>
                    <div class="modal fade" id="exampleModal{{$c -> category_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
                    </div>
                    <div class="modal-body">
                    Anda yakin untuk menghapus data ?
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="categoriesdestroy{{$c -> category_id}}" ><button type="button" class="btn btn-primary">Delete</button></a>
                    </div>
                    </div>
                    </div>
                    </div>    
                    </td>                 
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
        </div></div>
        <!-- END PAGE CONTAINER -->    
   <script>
            console.log('x : ')
            const x = document.getElementsByClassName('post0');
            for(let i=0;i<x.length;i++){
                x[i].addEventListener('click',function(){
                    x[i].submit();
                });
            }

            function modal(id){
                const y=document.getElementById(id);
                $("#tampil").modal();
            }

    
   </script>
  
@endsection