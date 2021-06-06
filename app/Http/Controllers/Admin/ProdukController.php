<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProdukRequest;
use App\Models\Produk;
use App\Models\Gambar;
use App\Models\Warna;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Produk::all();

        return view('pages.admin.products', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdukRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_produk);

        $newProduk = Produk::create($data);

        $data['id_produk'] = $newProduk->id;
        $data['gambar'] = $request->file('gambar')->store(
            'gambar-produk'.$data['id_produk'], 'public'
        );
        
        Gambar::create($data);
        Warna::create($data);

        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProdukRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
