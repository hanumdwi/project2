@extends('layout/main')

@section('title', 'product')

@section('container')

@if(\Session::has('kasir') || \Session::has('admin'))
<div id="page-wrapper">
		
				<div class="row">
					<div class="col-md-12 map widget-shadow">
						<img src="asset/login/images/image-1.png" alt="" class="image-1" width="250px">
							<div class="col-md-8 center">
								<br>
								<div class="col-md-5 left">
								<h4 class="bg-warning text-white">Keep Healthy and #stayhome</h4>
								<br>
								<h3></h3>
							</div>
							<br>
							<div class="wrapper">
							<div class="inner">
							<img src="asset/login/images/corona.jpg" alt="" class="image-2" width="500px">
							</div>
							</div>
							</div>
							</div>
							</div>
							@endif
		@endsection