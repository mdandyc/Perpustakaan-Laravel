<?php

namespace App\Http\Controllers;

use App\Peminjaman;
use App\Siswa;
use App\Buku;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $pinjams = Peminjaman::paginate(5);
        return view('peminjaman.index',compact('pinjams'));
    }

    public function search(Request $request)
    {
        $siswa=Siswa::all();
        $keyword = $request['keyword'];
        $pinjams = Peminjaman::where('tgl_pinjam','LIKE',"%$keyword%")->paginate(5);
        return view('peminjaman.index',compact('pinjams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswas = Siswa::all();
        $bukus = Buku::all();
        return view('peminjaman.create',compact(['siswas'],['bukus']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'tgl_pinjam' => 'required',
        'tgl_kembali' => 'required',
        'siswa_id' => 'required',
        'buku_id' => 'required',
        'keterangan' => 'required',
    ]);
        $siswa = new Peminjaman;

        $siswa->tgl_pinjam = $request->tgl_pinjam;
        $siswa->tgl_kembali = $request->tgl_kembali;
        $siswa->siswa_id = $request->siswa_id;
        $siswa->buku_id = $request->buku_id;
        $siswa->keterangan = $request->keterangan;


        $siswa->save();

        return redirect('peminjaman');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjaman $peminjaman)
    {
        $pinjams = Peminjaman::findOrFail($peminjaman);
        return view('peminjaman.view',compact('pinjams'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(Peminjaman $peminjaman)
    {
        $siswas = Siswa::all();
        $bukus = Buku::all();
        $peminjaman = Peminjaman::findOrFail($peminjaman);
        return view('peminjaman.edit',compact(['siswas'],['bukus'],['peminjaman']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        $this->validate($request, [
        'tgl_pinjam' => 'required',
        'tgl_kembali' => 'required',
        'siswa_id' => 'required',
        'buku_id' => 'required',
        'keterangan' => 'required',
    ]);
        $siswa = Peminjaman::findOrFail($peminjaman);

        $siswa->tgl_pinjam = $request->tgl_pinjam;
        $siswa->tgl_kembali = $request->tgl_kembali;
        $siswa->siswa_id = $request->siswa_id;
        $siswa->buku_id = $request->buku_id;
        $siswa->keterangan = $request->keterangan;


        $siswa->save();

        return redirect('peminjaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peminjaman $peminjaman)
    {
        $flight = Peminjaman::findOrFail($peminjaman);

        $flight->delete();

        return redirect('peminjaman');
    }
}
