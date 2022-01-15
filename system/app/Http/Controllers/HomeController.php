<?php 

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Provinsi;
class HomeController extends Controller{
	function showBeranda(){
		return view('beranda');
	}
	function showKategory(){
		return view('kategory');
	}
	function showProduk(){
		return view('produk');
	}
	function showPromo(){
		return view('promo');
	}
	function showPelanggan(){
		return view('pelanggan');
	}
	function showSupplier(){
		return view('supplier');
	}
	function showCreate(){
		return view('create');
	}
	function showTemplate(){
		return view('template.base');
	}
	function showCard(){
		return view('card');
	}
	function test($produk, $hargaMin =0 , $hargaMax =0){
		if($produk == 'lampu'){
			echo "Tampilkan Produk Lampu";
		}elseif ($produk == 'spiker') {
			echo "Produk Spiker";
		}
		echo "<br>";
		echo "Harga minimal adalah $hargaMin <br>";
		echo "Harga Maximal adalah $hargaMax <br>";
	}
	public function testCollection(){
		$list_bike = ['Honda','Yamaha','Kawasaki'];
		$collection = collect($list_bike);
		$list_produk = Produk::all();

		//sortby harga terendah
		//dd($list_produk->sortBy('Harga'));

		//sortby harga tertinggi
		//dd($list_produk->sortByDesc('Harga'));

		//$data['list'] = $list_produk;
		//return view('test-collection', $data);

		//maps
		//$map = $list_produk->map(function($item){
			//$result['Nama_produk'] = $item->Nama_produk;
			//$result['Harga'] = $item->Harga;
			//return $result;
		//});
		//dd($map);

		//each
		//$list_produk->each(function($item){
			//echo "$item->Nama_produk<br>";
		//});

		//filter
		//$filtered = $list_produk->filter(function($item){
			//return $item->harga > 3000;
		//});
		//dd($filtered);


		//$sum = $list_produk->sum('Harga');
		//dd($sum);

		//$sum = $list_produk->max('Harga');
		//dd($sum);

		//$sum = $list_produk->min('Harga');
		//dd($sum);

		//$sum = $list_produk->average('Harga');
		//dd($sum);

		$data['list'] = Produk:: Paginate(5);
		return view('test-collection', $data);

		dd($list_bike, $list_produk);
	}
	function cardPembelian(){
		$data['list_provinsi'] = Provinsi::all();
		return view('card', $data);
	}
}

