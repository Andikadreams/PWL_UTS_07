<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;


class PerpustakaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = buku::paginate(5); // Mengambil semua isi tabel
        $posts = buku::orderBy('kode_buku', 'desc')->paginate(6);
        return view('perpustakaan.index', compact('buku'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perpustakaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_buku' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'jenis_buku' => 'required',
            'harga' => 'required',
            'qty' => 'required',
        ]);
        //fungsi eloquent untuk menambah data
        buku::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('perpustakaan.index')
        ->with('success', 'Data Buku Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kode_buku)
    {
        //menampilkan detail data dengan menemukan/berdasarkan kode_buku
        $buku = buku::find($kode_buku);
        return view('perpustakaan.detail', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kode_buku)
    {
        //menampilkan detail data dengan menemukan berdasarkan kode_buku untuk diedit
        $buku = buku::find($kode_buku);
        return view('perpustakaan.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_buku)
    {
         //melakukan validasi data
        $request->validate([
            'kode_buku' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'jenis_buku' => 'required',
            'harga' => 'required',
            'qty' => 'required',
            ]);
            //fungsi eloquent untuk mengupdate data inputan kita
            buku::find($kode_buku)->update($request->all());
            //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('perpustakaan.index')
            ->with('success', 'Data Buku Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_buku)
    {
        //fungsi eloquent untuk menghapus data
        buku::find($kode_buku)->delete();
        return redirect()->route('perpustakaan.index')
        -> with('success', 'Data Buku Berhasil Dihapus');
    }
    public function search(Request $request)
    {
        $keyword = $request->search;
        // $buku = buku::where('pengarang', 'like', "%" . $keyword . "%")->paginate(1);
        // return view('perpustakaan.index', compact('buku'))->with('i', (request()->input('page', 1) - 1) * 5);
        $buku = buku::where('kodebuku', 'LIKE', '%' . request('search') . '%')
                ->orWhere('judul', 'LIKE', '%' . request('search') . '%')
                ->orWhere('jenis_buku', 'LIKE', '%' . request('search') . '%')
                ->paginate(5);
                return view('perpustakaan.index', ['buku' => $buku]);
    }
}
