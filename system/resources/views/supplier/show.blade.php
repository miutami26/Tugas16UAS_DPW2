@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Detail Data Supplier
					</div>
					<div class="card-body">
						<h4>{{$supplier->nama}}</h4><hr>
						<p>	alamat : {{$supplier->alamat}} |
							telepon : {{$supplier->telepon}}| 
						</p>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection