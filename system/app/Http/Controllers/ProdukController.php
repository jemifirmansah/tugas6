<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class ProdukController extends Controller {
    function index(){
        $data['list_produk'] = Produk::all();
        return view('produk.index', $data);
    }
    function create(){
        return view('produk.create');
    }
    function store(){
        $produk = new Produk;
        $produk->Nama = request('nama');
        $produk->Stok = request('stok');
        $produk->Harga = request('harga');
        $produk->Berat = request('berat');
        $produk->Deskripsi = request('deskripsi');
        $produk->save();

        return redirect('Produk')->with('success', 'data berhasil ditambahkan');
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
        $produk->Nama = request('nama');
        $produk->Stok = request('stok');
        $produk->Harga = request('harga');
        $produk->Berat = request('berat');
        $produk->Deskripsi = request('deskripsi');
        $produk->save();

        return redirect('Produk')->with('success', 'data berhasil diedit');
    }
    function destroy(produk $produk){
        $produk->delete();

        return redirect('Produk')->with('danger', 'data berhasil dihapus');
    }

    function filter(){
        $nama = request('nama');
        $stok = explode(",", request('stok'));
        $data['harga_min'] = $harga_min = request('harga_min');
        $data['harga_max'] = $harga_max = request('harga_max');
        $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
        // $data['list_produk'] = Produk::whereIn('stok', $stok)->get();
        // $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
        // $data['list_produk'] = Produk::where('stok', '<>', $stok)->get();
        // $data['list_produk'] = Produk::whereNotIn('stok', $stok)->get();
        // $data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->get();
        // $data['list_produk'] = Produk::whereNotNull('stok')->get();
        // $data['list_produk'] = Produk::whereDate('created_at', ['2022-08-15', '2022-08-17'])->get();
        // $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->whereIn('stok', [10])->get();
        $data['nama'] = $nama;
        $data['stok'] = request('stok');

        return view('produk.index', $data);
    }
}