@if (count($errors)>0)
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</ul>
@endif
<form action="/buku" method="post">
	isbn : <input type="text" name="isbn"><br>
	judul : <input type="text" name="judul"><br>
	pengarang : <input type="text" name="pengarang"><br>
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="submit" value="submit">
</form>