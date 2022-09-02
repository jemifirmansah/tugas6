<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ClientController extends Controller
{

    function filter()
    {
        $nama = request('nama');
        $data['nama'] = $nama;
        $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();

        return view('frontview.shop', $data);
    }


    function showHome()
    {
        $data['list_produk'] = Produk::all();
        return view('frontview.home', $data);
    }

    function showCart()
    {
        return view('frontview.cart');
    }

    function showShop()
    {
        $data['list_produk'] = Produk::all();
        return view('frontview.shop', $data);
    }

    function showProduct(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('frontview.product', $data);
    }

    function showLogin(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('frontview.login', $data);
    }

}