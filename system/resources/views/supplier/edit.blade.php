@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Edit Data Supplier
						<form action="{{url('supplier', $supplier->id)}}" method="post">
							@csrf
							@method('PUT')
					</div>
					<div class="card-body">
					<div class="form-group">
						<label class="control-label" for="">Nama</label>
						<input type="text" name="nama" class="form-control" value="{{$supplier->nama}}">
					</div>

					<div class="form-group">
						<label class="control-label" for="">Alamat</label>
						<input type="text" name="alamat" class="form-control" value="{{$supplier->alamat}}">
					</div>

						<div class="form-group">
							<label class="control-label" for="">Telepon</label>
							<input type="text" name="telepon" class="form-control" value="{{$supplier->telepon}}">
						</div>
					<button class="btn btn-dark float-right"><i class="fa fa-save"> simpan</i></button>
					</form>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection