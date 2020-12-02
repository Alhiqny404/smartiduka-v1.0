<h1>UPLOAD ijazah</h1>

<form method="POST" action="{{route('ijazah.up',auth()->user()->id)}}" enctype="multipart/form-data">
	@csrf
	<input type="file" required name="ijazah" value="{{$ijazah->ijazah}}">
	<button type="submit">Upload</button>
</form>

<hr>

@php $path = Storage::url('ijazah/'.$ijazah->ijazah); @endphp
                    <tr>
                      <td><img src="{{ url($path) }}" width="200px" height="100px"></td>
                      <td><a href="{{ url($path) }}">Download</a></td>
                    </tr>

                    {{$ijazah->ijazah}}
