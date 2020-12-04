<!DOCTYPE html>
<html>
<head>
	<title>SMART IDUKA</title>
</head>
<body>
	<h2>Hi {{$body['name']}}</h2>
	<p>Selamat Lamaran anda pada {{$body['title_post']}} <br> yang diselengkarakan oleh {{$body['name_company']}}</p>
	<p>Telah dinyatakan LOLOS</p>
	<p>Tahap selanjutnya anda diundang untuk interiew secara offline</p>
	<table  cellpadding="3">
		<tr>
			<td><b>Tempat</b></td>
			<td><b>:</b></td>
			<td><a href="#">{{$body['tempat']}}</a></td>
		</tr>
		<tr>
			<td><b>Waktu</b></td>
			<td><b>:</b></td>
			<td><a href="#">{{$body['waktu']}}</a></td>
		</tr>
		<tr>
			<td><b>Tanggal</b></td>
			<td><b>:</b></td>
			<td><a href="#">{{$body['tanggal']}}</a></td>
		</tr>
		<tr>
			<td><b>Deskripsi</b></td>
			<td><b>:</b></td>
			<td><a href="#">{{$body['deskripsi']}}</a></td>
		</tr>
	</table>

	<h3>ADA PERTANYAAN?</h3>
	<p>Hubungi kontak dan email {{$body['name_company']}} dibawah ini</p>
	<table  cellpadding="3">
		<tr>
			<td><b>email Penanggung Jawab</b></td>
			<td><b>:</b></td>
			<td><a href="#">{{$body['email_company']}}</a></td>
		</tr>
		<tr>
			<td><b>Telepon Penanggung Jawab</b></td>
			<td><b>:</b></td>
			<td><a href="#">{{$body['contact_company']}}</a></td>
		</tr>
	</table>
<h3>Semoga mendapatkan hasil yang sesuai keinginan</h3>
</body>
</html>