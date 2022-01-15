@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Data Pelanggan
						<a href="{{url('pelanggan/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus">  Tambah Data</i></a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<th width="50px">No</th>
								<th>Aksi</th>
								<th>Nama</th>
							</thead>
							<tbody>
								@foreach($list_pelanggan as $pelanggan)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">										
											<a href="{{url('pelanggan', $pelanggan->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
										<a href="{{url('pelanggan', $pelanggan->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
										@include('template.utils.delete',['url' => url('pelanggan', $pelanggan->id)])
										</div>

									</td>
									<td>{{$pelanggan->nama}}</td>
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