@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Data Supplier
						<a href="{{url('supplier/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus">  Tambah Data</i></a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<th>No</th>
								<th width="200px">Aksi</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Telepon</th>
							</thead>
							<tbody>
								@foreach($list_supplier as $supplier)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">										
											<a href="{{url('supplier', $supplier->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
										<a href="{{url('supplier', $supplier->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
										@include('template.utils.delete',['url' => url('supplier', $supplier->id)])
										</div>

									</td>
									<td>{{$supplier->nama}}</td>
									<td>{{$supplier->alamat}}</td>
									<td>{{$supplier->telepon}}</td>
								</tr>
								@endforeach
							</tbody>							
						</table>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection