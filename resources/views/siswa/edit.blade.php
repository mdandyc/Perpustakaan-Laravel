<form action="/siswa/{{$siswas->nisn}}" method="post">
	NISN : <input type="text" name="nisn" value="{{$siswas->nisn}}"><br>
	nama : <input type="text" name="nama" value="{{$siswas->nama}}"><br>
	kontak : <input type="text" name="kontak" value="{{$siswas->kontak}}"><br>
	jurusan : <input type="text" name="id_jurusan" value="{{$siswas->id_jurusan}}"><br>
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="hidden" name="_method" value="put">
	<input type="submit" value="submit">
</form>