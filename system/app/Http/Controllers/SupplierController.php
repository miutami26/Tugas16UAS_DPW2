<?php 

namespace App\Http\Controllers;
use App\Models\Supplier;

class SupplierController extends controller{
	function index(){
		$data['list_supplier'] = Supplier::all();
		return view('supplier.index', $data);
	}
	function create(){
		return view('supplier.create');
	}
	function store(){
		$supplier= new Supplier;
		$supplier-> nama = request('nama');
		$supplier-> alamat = request('alamat');
		$supplier-> telepon = request('telepon');
		$supplier->save();

		return redirect('supplier')->with('success','Data berhasil ditambahkan');
	}
	function show(Supplier $supplier){
		$data['supplier'] = $supplier;
		return view('supplier.show', $data);
	}
	function edit(Supplier $supplier){
		$data['supplier'] = $supplier;
		return view('supplier.edit', $data);
	}
	function update(Supplier $supplier){
		$supplier-> nama = request('nama');
		$supplier-> alamat = request('alamat');
		$supplier-> telepon = request('telepon');
		$supplier->save();

		return redirect('supplier')->with('warning','Data berhasil diupdate');
	}
	function destroy(Supplier $supplier){
		$supplier->delete();
		return redirect('supplier')->with('danger','Data berhasil dihapus');
	}
}