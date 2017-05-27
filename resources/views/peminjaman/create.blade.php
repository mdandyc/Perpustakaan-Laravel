@if (count($errors)>0)
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</ul>
@endif
<form action="/peminjaman" method="post">
	Tanggal Pinjam : <input type="text" name="tgl_pinjam"><br>
	Tanggal Kembali : <input type="text" name="tgl_kembali"><br>
	Nama Siswa : 
	<select name="siswa_id">
		@foreach ($siswas as $siswa)
		<option value="{{$siswa->nisn}}">{{$siswa->nama}}</option>
		@endforeach
	</select><br>
	Judul Buku :
	<select name="buku_id">
		@foreach ($bukus as $buku)
		<option value="{{$buku->isbn}}">{{$buku->judul}}</option>
		@endforeach
	</select><br>
	Keterangan : <br>
	<input type="radio" name="keterangan" value="belum">Belum <br>
	<input type="radio" name="keterangan" value="kembali">Kembali <br>
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="submit" value="submit">
</form>