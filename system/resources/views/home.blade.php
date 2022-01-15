@extends('templatecustomer.base')

@section('content')
<br>
<div class="container">
  <div class="row">
    @foreach($list_produk as $data)
    <div class="col-md-3">
      <div class="card">
      <img src="{{url("system/public/$data->foto") }}" alt="" height ="200px">
        <div class="card-header">
        <b> {{$data->Nama_produk}}</b>
        </div>
        <div class="card-body">
        {{$data->Harga}}
       </div>
       <p class="buttons ml-2"><a href="card" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
      </p>
        
      </div>
    </div>
    @endforeach
  </div>
  </div>

    
@endsection