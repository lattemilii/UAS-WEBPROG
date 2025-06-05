<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukCtr extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return view('DashboardAdmin', compact('produks'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' => 'required',
            'jenis_produk' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link' => 'required'
        ]);

        $path = $request->file('foto')->store('foto', 'public');

        $produk = Produk::create([
            'nama_produk' => $request->input('nama_produk'),
            'jenis_produk' => $request->input('jenis_produk'),
            'harga' => $request->input('harga'),
            'kategori' => $request->input('kategori'),
            'foto' => $path,
            'link' => $request->input('link'),
        ]);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('editProduk', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->jenis_produk = $request->jenis_produk;
        $produk->harga = $request->harga;
        $produk->kategori = $request->kategori;
        $produk->link = $request->link;
        if ($request->hasFile('foto')) {
            $produk->foto = $request->file('foto')->store('foto', 'public');
        }
        $produk->save();

        return redirect()->route('DashboardAdmin')->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('DashboardAdmin')->with('success', 'Produk berhasil dihapus.');
    }
}

