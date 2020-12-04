<!DOCTYPE html>
<html>
<head>
	<title>SMART IDUKA</title>
</head>
<body>
	<h2>Hi {{$body['name']}}</h2>
	<p>Anda Telah Melamar online di SMART IDUKA pada postingan {{$body['title_post']}} <br> yang diselengkarakan oleh {{$body['name_company']}}</p>
	<p>Setelah dilakuan pengecekan penyeleksian, Selamat anda memenuhi kriteria yang diinginkan perusahaan</p>
	<p>Maka dari itu perusahaan menyatakan bahwa lamaran perkerjaan anda <b>LOLOS</b></p>
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
</body>
</html>