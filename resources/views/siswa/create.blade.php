<form action="/siswa" method="post">
	NISN : <input type="text" name="nisn"><br>
	nama : <input type="text" name="nama"><br>
	kontak : <input type="text" name="kontak"><br>
	jurusan : <input type="text" name="id_jurusan"><br>
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="submit" value="submit">
</form>