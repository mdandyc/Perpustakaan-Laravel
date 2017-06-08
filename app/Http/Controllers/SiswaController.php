<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
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
        $siswas = Siswa::paginate(5);
        return view('siswa.index',compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
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
        'nisn' => 'required|unique:siswa',
        'nama' => 'required',
        'kontak' => 'required',
        'id_jurusan' => 'required',
    ]);
        $siswa = new Siswa;

        $siswa->nisn = $request->nisn;
        $siswa->nama = $request->nama;
        $siswa->kontak = $request->kontak;
        $siswa->id_jurusan = $request->id_jurusan;

        $siswa->save();

        return redirect('siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        $siswas = Siswa::findOrFail($siswa);
        return view('siswa.view',compact('siswas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        $siswas = Siswa::findOrFail($siswa);
        return view('siswa.edit',compact('siswas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $this->validate($request, [
        'nisn' => 'required',
        'nama' => 'required',
        'kontak' => 'required',
        'id_jurusan' => 'required',
    ]);
        $siswa = Siswa::findOrFail($siswa);

        $siswa->nisn = $request->nisn;
        $siswa->nama = $request->nama;
        $siswa->kontak = $request->kontak;
        $siswa->id_jurusan = $request->id_jurusan;

        $siswa->save();

        return redirect('siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $flight = Siswa::findOrFail($siswa);

        $flight->delete();

        return redirect('siswa');
    }

    public function search(Request $request)
    {
        $keyword = $request['keyword'];
        $siswas = Siswa::where('nama','LIKE',"%{$keyword}%")->paginate(30);
        return view('siswa.index',compact('siswas'));
    }
}
