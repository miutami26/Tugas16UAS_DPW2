<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class ClientController extends Controller
{
	function home(){
		$data['list_produk'] = produk::all();
		$list_produk = Produk::all();
		$data['list_produk'] = Produk:: Paginate(5);
		return view('home', $data);

		$produk->handleUploadfoto();
	}


	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('home', $data);
	}
	function filter(){
		$Nama_produk = request ('Nama_produk');
		$Stok = explode(",", request('Stok'));
		//$data['harga_min'] = $harga_min = request('harga_min');
		//$data['harga_max'] = $harga_max = request('harga_max');
		$data['list_produk'] = Produk::where('Nama_produk', 'like', "%$Nama_produk%")->get();
		//$data['list_produk'] = Produk:: whereIn('stok', $stok)->get();
		//$data['list_produk'] = Produk:: whereBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_produk'] = Produk::where('stok', '<>', $stok)->get();
		//$data['list_produk'] = Produk:: whereNotIn('stok', $stok)->get();
		//$data['list_produk'] = Produk:: whereNotBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_produk'] = Produk:: whereNull('stok')->get();
		//$data['list_produk'] = Produk:: whereNotNull('stok')->get();
		//$data['list_produk'] = Produk:: whereBetween('stok', [$harga_min, $harga_max])->whereNotIn('stok', [2])->whereYear('created_at', '2020')->get();
		$data['Nama_produk'] = $Nama_produk;
		$data['Stok'] = request('Stok');

		return view('home', $data);
	}
}