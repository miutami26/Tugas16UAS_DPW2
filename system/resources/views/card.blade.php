@extends('templatecustomer.base')
@section('content')

<div class="container mt-5">
	<div class="row">
		<div class="col-md-2">
			<div class="card">
				<div class="card-header">
				<p><b>Kategory Lain</b></p>
				</div>
				<div class="card body">
					<a href="" >Pakain Pria</a>
					<a href="" >Kesehatan</a>
					<a href="" >Makanan dan Minuman</a>
					<a href="" >Handphone dan aksesoris</a>
					<a href="" >Fashion bayi</a>
					<a href="" >Sepatu wanita</a>
					<a href="" >Hijab</a>
					<a href="" >Elektronik</a>
					<a href="" >Hobi dan koleksi</a>
					<a href="" >Perawatan dan Kecantikan</a>
					<a href="" >Perengkapan rumah</a>
					<a href="" >Komputer dan aksesoris</a>
					<a href="" >Tas Pria dan jam tangan</a>
					<a href="" >Hobi dan koleksi</a>
				</div>
			</div>
		</div>
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">
				<p><b>Masukan Alamat Pengiriman</b></p>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-3">
							<label class="control-label">Provinsi</label>
							<select name="" class="form-control" onchange="gantiProvinsi(this.value)">
								<option value="">Pilih Provinsi</option>
								@foreach($list_provinsi as $provinsi)
									<option value="{{$provinsi->id}}">{{$provinsi->nama}}</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-3">
							<label class="control-label">Kabupaten</label>
							<select name="" class="form-control" id="kabupaten" onchange="gantiKabupaten(this.value)">
								<option value="">Pilih Provinsi Terlebih Dahulu</option>
									<option value=""></option>
							</select>
						</div>
						<div class="col-md-3">
							<label class="control-label">Kecamatan</label>
							<select name="" class="form-control" id="kecamatan" onchange="gantiKecamatan(this.value)">
								<option value="">Pilih Kabupaten Terlebih Dahulu</option>
									<option value=""></option>
							</select>
						</div>
						<div class="col-md-3">
							<label class="control-label">Desa</label>
							<select name="" class="form-control" id="desa">
								<option value="">Pilih Kecamatan Terlebih Dahulu</option>
									<option value=""></option>
							</select>
						</div>
						
					</div><br>
					<b>Kurir Pengiriman :</b> 
					<button class="btn btn-dark float-right"><i class="fa fa-card"> Simpan dan checkout</i></button>
				</div>
			</div>
	</div>
</div>




@endsection

@push('script')
<script>
	function gantiProvinsi(id){
		$.get("api/provinsi/"+id, function(result){
			result = JSON.parse(result)
			option = ""
			for(item of result){
				option += `<option value="${item.id}">${item.nama}</option>`;
			}
			$("#kabupaten").html(option)
		});
	}
	function gantiKabupaten(id){
		$.get("api/kabupaten/"+id, function(result){
			result = JSON.parse(result)
			option = ""
			for(item of result){
				option += `<option value="${item.id}">${item.nama}</option>`;
			}
			$("#kecamatan").html(option)
		});
	}
	function gantiKecamatan(id){
		$.get("api/kecamatan/"+id, function(result){
			result = JSON.parse(result)
			option = ""
			for(item of result){
				option += `<option value="${item.id}">${item.nama}</option>`;
			}
			$("#desa").html(option)
		});
	}
</script>
@endpush