<?php

namespace App\Http\Controllers;

use App\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
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
        $buku = Buku::paginate(5);
        return view('buku.index',compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
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
        'isbn' => 'required|unique:buku',
        'judul' => 'required',
        'pengarang' => 'required',
    ]);
        $siswa = new Buku;

        $siswa->isbn = $request->isbn;
        $siswa->judul = $request->judul;
        $siswa->pengarang = $request->pengarang;
        $siswa->save();

        return redirect('buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        $siswas = Buku::findOrFail($buku);
        return view('buku.view',compact('siswas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        $siswas = Buku::findOrFail($buku);
        return view('buku.edit',compact('siswas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku)
    {
        $this->validate($request, [
        'isbn' => 'required',
        'judul' => 'required',
        'pengarang' => 'required',
    ]);
        $siswa = Buku::findOrFail($buku);

        $siswa->isbn = $request->isbn;
        $siswa->judul = $request->judul;
        $siswa->pengarang = $request->pengarang;
        $siswa->save();

        return redirect('buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        $flight = Buku::findOrFail($buku);

        $flight->delete();

        return redirect('buku');
    }
}
