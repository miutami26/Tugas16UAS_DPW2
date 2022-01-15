@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Tambah Data Produk
						
					</div>
					<div class="card-body">
					@if($errors->any())
						<div class="alert alert-danger">
						<ul>
							@foreach($errors->all() as $error)
								<li>{{$error}}</li>
							@endforeach
						</ul>
						</div>
					@endif
					<form action="{{url('admin/produk')}}" method="post" enctype="multipart/form-data">
							@csrf
					<div class="form-group">
						<label class="control-label" for="">Nama</label>
						<input type="text" name="Nama_produk" class="form-control">
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label" for="">Foto</label>
							<input type="file" name="foto" class="form-control" accept=".png">
						</div>
					</div>
					<div class="row no-gutters">
					<div class="col-md-6">
						<div class="form-group">
						<label class="control-label" for="">Berat</label>
						<input type="text" name="Berat" class="form-control">
					</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label" for="">Harga</label>
							<input type="text" name="Harga" class="form-control">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label" for="">Warna</label>
							<input type="text" name="warna" class="form-control">
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label" for="">Stok</label>
						<input type="text" name="Stok" class="form-control">
					</div>
					</div>			
					<div class="form-group">
						<label class="control-label" for="">Deskripsi</label>
						<textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
					</div>
					
					<button class="btn btn-dark float-right"><i class="fa fa-save"> simpan</i></button>
					</form>
					</div>
				</div>
			</div>
		</div>		
	</div>
	
@endsection

@push('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
	$(document).ready(function() {
	  $('#deskripsi').summernote();
	});
</script>
@endpush