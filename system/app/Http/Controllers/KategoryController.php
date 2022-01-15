<?php 

namespace App\Http\Controllers;
use App\Models\Kategory;

class KategoryController extends controller{
	function index(){
		$data['list_kategory'] = Kategory::all();
		return view('kategory.index', $data);
	}
	function create(){
		return view('kategory.create');
	}
	function store(){
		$kategory= new Kategory;
		$kategory-> nama = request('nama');
		$kategory->save();

		return redirect('kategory')->with('success','Data berhasil ditambahkan');
	}
	function show(Kategory $kategory){
		$data['kategory'] = $kategory;
		return view('kategory.show', $data);
	}
	function edit(Kategory $kategory){
		$data['kategory'] = $kategory;
		return view('kategory.edit', $data);
	}
	function update(Kategory $kategory){
		$kategory-> nama = request('nama');
		$kategory->save();

		return redirect('kategory')->with('warning','Data berhasil diupdate');
	}
	function destroy(Kategory $kategory){
		$kategory->delete();
		return redirect('kategory')->with('danger','Data berhasil dihapus');
	}
}