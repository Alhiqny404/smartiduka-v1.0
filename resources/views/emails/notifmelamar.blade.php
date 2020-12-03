<!DOCTYPE html>
<html>
<head>
	<title>SMART IDUKA</title>
</head>
<body>
	<h2>Hi {{$body['name']}}</h2>
	<p>Anda baru saja Melamar online di SMART IDUKA pada postingan {{$body['title_post']}} <br> yang diselengkarakan oleh {{$body['name_company']}}</p>
	<p>dengan demikian kami mengirim data diri berserta lampiran anda pada perusahaan terkait untuk dilakukan penyeleksian sesuai kualifikasi yang dibutuhkan</p>
	<p>Info lebih lanjut akan dikirim melalui email juga diwebsite</p>
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