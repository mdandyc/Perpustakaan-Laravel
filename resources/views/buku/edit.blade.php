@if (count($errors)>0)
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</ul>
@endif
<form action="/buku/{{$siswas->isbn}}" method="post">
	isbn : <input type="text" name="isbn" value="{{$siswas->isbn}}"><br>
	judul : <input type="text" name="judul" value="{{$siswas->judul}}"><br>
	pengarang : <input type="text" name="pengarang" value="{{$siswas->pengarang}}"><br>
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="hidden" name="_method" value="put">
	<input type="submit" value="submit">
</form>