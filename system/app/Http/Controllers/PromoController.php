<?php 

namespace App\Http\Controllers;
use App\Models\Promo;

class PromoController extends controller{
	function index(){
		$data['list_promo'] = Promo::all();
		return view('promo.index', $data);
	}
	function create(){
		return view('promo.create');
	}
	function store(){
		$promo= new Promo;
		$promo-> nama = request('nama');
		$promo-> harga = request('harga');
		$promo-> stok = request('stok');
		$promo-> deskripsi = request('deskripsi');
		$promo->save();

		return redirect('promo')->with('success','Data berhasil ditambahkan');
	}
	function show(Promo $promo){
		$data['promo'] = $promo;
		return view('promo.show', $data);
	}
	function edit(Promo $promo){
		$data['promo'] = $promo;
		return view('promo.edit', $data);
	}
	function update(Promo $promo){
		$promo-> nama = request('nama');
		$promo-> harga = request('harga');
		$promo-> stok = request('stok');
		$promo-> deskripsi = request('deskripsi');
		$promo->save();

		return redirect('promo')->with('warning','Data berhasil diupdate');
	}
	function destroy(Promo $promo){
		$promo->delete();
		return redirect('promo')->with('danger','Data berhasil dihapus');
	}
}