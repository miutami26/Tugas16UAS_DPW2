<?php 

namespace App\Http\Controllers;
use App\Models\Produk;
use Faker;
use App\Http\Requests\ProdukStoreRequest;

class ProdukController extends controller{
	function index(){
		$user = request()->user();
		$data['list_produk'] = $user->produk;
		$data['list_produk'] = Produk:: Paginate(4);
		return view('produk.index', $data);

	}



	function create(){
		return view('produk.create');
	}
	function store(ProdukStoreRequest $request){
		$produk= new Produk;
		$produk-> id_user = request()->user()->id;
		$produk-> Nama_produk = request('Nama_produk');
		$produk-> Berat = request('Berat');
		$produk-> Harga = request('Harga');
		$produk-> warna = request('warna');
		$produk-> Stok = request('Stok');
		$produk-> deskripsi = request('deskripsi');
		$produk->save();

		$produk->handleUploadfoto();
		
		return redirect('admin/produk')->with('success','Data berhasil ditambahkan');
	}
	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('produk.show', $data);
	}
	function edit(Produk $produk){
		$data['produk'] = $produk;
		return view('produk.edit', $data);
	}
	function update(Produk $produk){
		$produk-> Nama_produk = request('Nama_produk');
		$produk-> Berat = request('Berat');
		$produk-> Harga = request('Harga');
		$produk-> warna = request('warna');
		$produk-> Stok = request('Stok');
		$produk-> deskripsi = request('deskripsi');
		$produk->save();

		$produk->handleUploadfoto();
		return redirect('admin/produk')->with('warning','Data berhasil diupdate');
	}


	function destroy(Produk $produk){
		$produk->handleDelete();
		$produk->delete();
		return redirect('admin/produk')->with('danger','Data berhasil dihapus');
	}
	

	function filter(){
		$Nama_produk = request ('Nama_produk');
		$Stok = explode(",", request('Stok'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
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

		return view('produk.index', $data);
	}
}