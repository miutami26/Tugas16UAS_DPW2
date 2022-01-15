@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Detail Kategory
					</div>
					<div class="card-body">
						<h4>{{$kategory->nama}}</h4><hr>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection