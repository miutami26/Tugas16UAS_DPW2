<p>
    {{$produk->Harga}} |
	Stok : {{$produk->Stok}} |
	Berat : {{$produk->Berat}} Kg |
	Warna : {{$produk->warna}} |
	Seller : {{$produk->seller->Nama_produk}} <br> 
	Diupload : {{$produk->created_at->diffforHumans()}} | 
    Diupdate : {{$produk->updated_at->diffforHumans()}}
</p>