@extends('layout/main')

@section('title', 'categories')

@section('container')

@if(\Session::has('kasir') || \Session::has('admin'))
<div id="page-wrapper">
	<div class="main-page">
    <h3 class="title1">Edit Data Categories :</h3>
        <div class="form-three widget-shadow">
	
	
	@foreach($categories as $c)
	<form action="categoriesupdate" method="post">
		{{ csrf_field() }}

		<input type="hidden" name="id" value="{{ $c->category_id }}"> <br/>
        <div class="form-group">
        <label class="col-md-3 control-label">Category Name</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="category_name" name="category_name" value="{{ $c->category_name }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>
                              
        <div class="form-group">
        <label class="col-md-3 control-label">Status</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                        <select name="status" id="status" class="form-control col-md-7 col-xs-12">
                        <option value="1">Active</option>
                        <option value="0">Non-Active</option>
                        </select>
                            </div>
                                </div>
        


		<button id="{{$c -> category_id}}" onclick="tampil(id)"  type="submit" class="btn btn-info mt-3">Simpan Data</button>
	</form>
	@endforeach

<script>
            
            function tampil(id){
                const x = document.getElementById(id);
           
            swal({
                title: "Good job!",
                text: "Data Berhasil di Edit!",
                icon: "success",
                button: "Ok!",
            })
            }
</script>
@endif
@endsection