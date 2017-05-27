@if (count($errors)>0)
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</ul>
@endif

<?php 
	$siswater = $peminjaman->siswa_id;
	$bukuter = $peminjaman->buku_id;
?>
<form action="/peminjaman/{{$peminjaman->id}}" method="post">
	Tanggal Pinjam : <input type="text" name="tgl_pinjam" value="{{$peminjaman->tgl_pinjam}}"><br>
	Tanggal Kembali : <input type="text" name="tgl_kembali" value="{{$peminjaman->tgl_kembali}}"><br>
	Nama Siswa : 
	<select name="siswa_id">
		@foreach ($siswas as $siswa)
		<option value="{{$siswa->nisn}}" 
			<?php 
				if($siswater == $siswa->nisn){
					echo "selected";
				}
			?>
		>{{$siswa->nama}}</option>
		@endforeach
	</select><br>
	Judul Buku :
	<select name="buku_id">
		@foreach ($bukus as $buku)
		<option value="{{$buku->isbn}}"
			<?php 
				if($bukuter == $buku->isbn){
					echo "selected";
				}
			?>
		>{{$buku->judul}}</option>
		@endforeach
	</select><br>
	Keterangan : <br>
	<input type="radio" name="keterangan" value="belum"
			<?php 
				if($peminjaman->keterangan == "belum"){
					echo "checked";
				}
			?>
	>Belum <br>
	<input type="radio" name="keterangan" value="kembali"
			<?php 
				if($peminjaman->keterangan == "kembali"){
					echo "checked";
				}
			?>
	>Kembali <br>
	<input type="hidden" name="_method" value="put">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="submit" value="submit">
</form>