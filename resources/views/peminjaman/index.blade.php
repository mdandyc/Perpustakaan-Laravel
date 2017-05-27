<h1>List Peminjaman</h1>
<form action="/peminjaman/search" method="post">
	<input type="text" name="keyword" placeholder="Masukan Nama Siswa">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="submit" value="Cari!">
</form>
<a href="/peminjaman/create">Input Data</a>

	<table border="1">
	<tr>
		<th>Tanggal Pinjam</th>
		<th>Tanggal Kembali</th>
		<th>Keterangan</th>
		<th>Nama Siswa</th>
		<th>Judul Buku</th>
		<th colspan="3">Opsi</th>
	</tr>
@foreach ($pinjams as $data)
<tr>
		<td> {{$data->tgl_pinjam}}</td>
		<td> {{$data->tgl_kembali}}</td>
		<td> {{$data->keterangan}}</td>
		<td> {{$data->siswa->nama}}</td>
		<td> {{$data->buku->judul}}</td>
		<td><a href="/peminjaman/{{$data->id}}">Detail</a></td>
		<td><a href="/peminjaman/{{$data->id}}/edit">Edit</a></td>
		<td>
			<form action="/peminjaman/{{$data->id}}" method="post">
				<input type="hidden" name="_method" value="delete">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="submit" value="Delete">
			</form>
		</td>
		</tr>
@endforeach
	</table>
	{!! $pinjams->links() !!}