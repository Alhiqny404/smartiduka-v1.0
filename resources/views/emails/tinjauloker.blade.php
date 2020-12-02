<!DOCTYPE html>
<html>
<head>
	<title>SMART IDUKA</title>
</head>
<body>
	@if($body['status'] == 'success')
	<h2>Selamat Postingan Lowongan Kerja</h2>
	<table  cellpadding="3">
		<tr>
			<td><b>Judul</b></td>
			<td><b>:</b></td>
			<td><b>{{$body['title']}}</b></td>
		</tr>
		<tr>
			<td><b>Yang Diupload</b></td>
			<td><b>:</b></td>
			<td><b>{{$body['created_at']}}</b></td>
		</tr>
	</table>
	<h3>Telah kami nyatakan layak untuk dipublish</h3>
	@endif

	@if($body['status'] == 'failed')
	<h2>Mohon maaf Postingan Lowongan Kerja</h2>
	<table  cellpadding="3">
		<tr>
			<td><b>Judul</b></td>
			<td><b>:</b></td>
			<td><b>{{$body['title']}}</b></td>
		</tr>
		<tr>
			<td><b>Yang Diupload</b></td>
			<td><b>:</b></td>
			<td><b>{{$body['created_at']}}</b></td>
		</tr>
	</table>
	<h3>Telah kami nyatakan tidak layak untuk dipublish</h3>
	<h3>mengenai alasan dan pengajuan banding silahkan balas email ini <br> atau hubungi admin kami dibawah ini</h3>
	<a class="btn btn-sm btn-primary">HUBUNGI KAMI</a>
	@endif

</body>
</html>