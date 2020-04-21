<html>
<head>
	<title>Laporan Sales PDF</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Data Sales</h4>
		<h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/"></a></h5>
	</center>
 <br>
	<table class='table table-bordered'>
		<thead>
			<tr>
            <th>#</th>
                                                    <th>Nota Id</th>
                                                    <th>Nama Pegawai</th>
                                                    <th>Nama Customer</th>
                                                    <th>Nota Date</th>
                                                    <th>Total Payment</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($sales as $s)
			<tr>
            <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $s -> nota_id }}</td>
                                                    <td>{{ $s -> user_id }}</td>
                                                    <td>{{ $s -> customer_id }}</td>
                                                    <td>{{ $s -> nota_date }}</td>
                                                    <td>{{ $s -> total_payment }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>