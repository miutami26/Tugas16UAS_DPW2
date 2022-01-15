@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Detail Data Produk
					</div>
					<div class="card-body">
						<h4>{{$produk->Nama_produk}}</h4><hr>
						@include('produk.show.detail')
						<p>
						{!! nl2br($produk->deskripsi) !!}<br>
						 Foto :
							<img src="{{ url("system/public/$produk->foto") }}" alt="" height="300px">	
						</p>
						
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection