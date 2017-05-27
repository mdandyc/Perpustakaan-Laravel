<form action="/siswa/search" method="post">
	<input type="text" name="keyword" placeholder="Masukan Nama Siswa">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="submit" value="Cari!">
</form>
@foreach ($siswas as $data)
	<p>NISN: {{$data->nisn}}</p>
	<p>Nama : {{$data->nama}}</p>
	<p>Kontak : {{$data->kontak}}</p>
	<p>Jurusan : {{$data->jurusan->nama_jurusan}}</p>
	<a href="/siswa/{{$data->nisn}}/edit">Edit</a>
	<form action="siswa/{{$data->nisn}}" method="post">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="hidden" name="_method" value="delete">
	<input type="submit" value="delete">
	</form>
	<hr>
@endforeach