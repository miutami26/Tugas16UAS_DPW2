<?php 

namespace App\Http\Controllers;
use App\Models\Pelanggan;

class PelangganController extends controller{
	function index(){
		$data['list_pelanggan'] = Pelanggan::all();
		return view('pelanggan.index', $data);
	}
	function create(){
		return view('pelanggan.create');
	}
	function store(){
		$pelanggan= new Pelanggan;
		$pelanggan-> nama = request('nama');
		$pelanggan->save();

		return redirect('pelanggan')->with('success','Data berhasil ditambahkan');
	}
	function show(Pelanggan $pelanggan){
		$data['pelanggan'] = $pelanggan;
		return view('pelanggan.show', $data);
	}
	function edit(Pelanggan $pelanggan){
		$data['pelanggan'] = $pelanggan;
		return view('pelanggan.edit', $data);
	}
	function update(Pelanggan $pelanggan){
		$pelanggan-> nama = request('nama');
		$pelanggan->save();

		return redirect('pelanggan')->with('warning','Data berhasil diupdate');
	}
	function destroy(Pelanggan $pelanggan){
		$pelanggan->delete();
		return redirect('pelanggan')->with('danger','Data berhasil dihapus');
	}
}