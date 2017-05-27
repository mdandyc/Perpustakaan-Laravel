@foreach ($buku as $data)
	<p>ISBN: {{$data->isbn}}</p>
	<p>Judul : {{$data->judul}}</p>
	<p>Pengarang : {{$data->pengarang}}</p>
	<a href="/buku/{{$data->isbn}}/edit">Edit</a>
	<form action="/buku/{{$data->isbn}}" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="hidden" name="_method" value="delete">
		<input type="submit" value="delete">
	</form>
	<hr>
@endforeach