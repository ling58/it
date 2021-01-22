	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>hrd</title>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
			integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
			integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
			</script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
			integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
			</script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
			integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
			</script>
	</head>
	<body>
	<form action="/penilaian/create" method="POST">
		{{csrf_field()}}
		<div class="container border border border-dark">
			<div class="container">
				<div class="border-bottom border border-dark">
				<center><span><h4>PENILAIAN PRESTASI</h4></span></center>
				<center><p><h5>Non Staff / Staff</h5></p></center>
					<center>Periode s/d </center>
					<br/>
				</div>
			</div>
			<br/>	
			<input type="hidden" name="karyawan_id" value="{{$data->id}}">
			<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
			<input type="hidden" name="status" value="menunggu">
			<div class="container">
				<div class="border-bottom border border-dark">
					<div class="row">
						<div class="col-sm-5">
							Nama : {{$data->nama}}
							<input type="hidden" value="{{$data->nama}}" name="nama">
						</div>
						<div class="col-sm">
							NIK : {{$data->nik}}
							<input type="hidden" name="nik" value="{{$data->nik}}">
						</div>
						<div class="col-sm">
							Lokasi : {{$data->duty->duty}}
							<input type="hidden" name="duty" value="{{$data->duty}}">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-5">
							Jabatan : {{$data->jabatan->jabatan}}
							<input type="hidden" name="jabatan" value="{{$data->jabatan->jabatan}}">
						</div>
						<div class="col-sm">
							Departement : {{$data->departement->departement}}
							<input type="hidden" name="departement" value="{{$data->departement->departement}}">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-5">
							Tanggal mulai kerja
						</div>
						<div class="col-sm">
							Golongan
						</div>
					</div>
					<br/>
				</div>
			</div>
			<div class="container">
				<div>
					<p class="font-weight-bold">PILIHLAH SALAH SATU ANGKA PADA SETIAP UNSUR PENILAIAN DI BAWAH INI</p>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<span class="font-weight-bold">1. PENGUASAAN PEKERJAAN :</span>
					</div>
					<div class="col-sm">
						<p>Menilai tingkat penguasaan pengetahuan jabatan dan kemampuan melaksanakan tugas.</p>
					</div>
					<div class="table-responsive container">
						<table class="table-hover border">
							<tr>
								<td width="90px" class="border border-dark"><input type="radio" value="100" name="p1"> 100</td>
								<td width="90px" class="border border-dark"><input type="radio" value="95" name="p1"> 95</td>
								<td width="90px" class="border border-dark"><input type="radio" value="90" name="p1"> 90</td>	
								<td width="90px" class="border border-dark"><input type="radio" value="85" name="p1"> 85</td>
								<td width="90px" class="border border-dark"><input type="radio" value="80" name="p1"> 80</td>
								<td width="90px" class="border border-dark"><input type="radio" value="75" name="p1"> 75</td>
								<td width="90px" class="border border-dark"><input type="radio" value="70" name="p1"> 70</td>
								<td width="90px" class="border border-dark"><input type="radio" value="65" name="p1"> 65</td>
								<td width="90px" class="border border-dark"><input type="radio" value="60" name="p1"> 60</td>
								<td width="90px" class="border border-dark"><input type="radio" value="55" name="p1"> 55</td>
								<td width="90px" class="border border-dark"><input type="radio" value="50" name="p1"> 50</td>
								<td width="90px" class="border border-dark"><input type="radio" value="45" name="p1"> 45</td>
								<td width="90px" class="border border-dark"><input type="radio" value="40" name="p1"> 40</td>
								<td width="90px" class="border border-dark"><input type="radio" value="35" name="p1"> 35</td>
								<td width="90px" class="border border-dark"><input type="radio" value="30" name="p1"> 30</td>
							</tr>
							<tr>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">menguasai bidang pekerjaan dengan sangat baik. Tidak membutuhkan pengarahan, dapat diandalkan.</td>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Menguasai bidang pekerjaannya dengan baik. Hampir tidak membutuhkan pengarahan.</td>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Menguasai bidang pekerjaan dengan baik, hampir tidak membutuhkan pengarahan.</td>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Kurang menguasai bidang pekerjaannya, masih perlu dibantu dan diarahkan dalam melaksanakan tugasnya.</td>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Tidak menguasai bidang pekerjaannya. Harus selalu dibantu dan diarahkan oleh atasannya.</td>
							</tr>
						</table>
					</div>

					<div class="col-sm-3">
						<span class="font-weight-bold">2. KUALITAS KERJA :</span>
					</div>
					<div class="col-sm">
						<p>Menilai derajat akurasi, ketuntasan, kelengkapan, kerapian dan sistematika dalam melaksanakan tugas.</p>
					</div>
					<div class="table-responsive container">
						<table class="table-hover border">
							<tr>
								<td width="90px" class="border border-dark"><input type="radio" value="100" name="p2"> 100</td>
								<td width="90px" class="border border-dark"><input type="radio" value="95" name="p2"> 95</td>
								<td width="90px" class="border border-dark"><input type="radio" value="90" name="p2"> 90</td>	
								<td width="90px" class="border border-dark"><input type="radio" value="85" name="p2"> 85</td>
								<td width="90px" class="border border-dark"><input type="radio" value="80" name="p2"> 80</td>
								<td width="90px" class="border border-dark"><input type="radio" value="75" name="p2"> 75</td>
								<td width="90px" class="border border-dark"><input type="radio" value="70" name="p2"> 70</td>
								<td width="90px" class="border border-dark"><input type="radio" value="65" name="p2"> 65</td>
								<td width="90px" class="border border-dark"><input type="radio" value="60" name="p2"> 60</td>
								<td width="90px" class="border border-dark"><input type="radio" value="55" name="p2"> 55</td>
								<td width="90px" class="border border-dark"><input type="radio" value="50" name="p2"> 50</td>
								<td width="90px" class="border border-dark"><input type="radio" value="45" name="p2"> 45</td>
								<td width="90px" class="border border-dark"><input type="radio" value="40" name="p2"> 40</td>
								<td width="90px" class="border border-dark"><input type="radio" value="35" name="p2"> 35</td>
								<td width="90px" class="border border-dark"><input type="radio" value="30" name="p2"> 30</td>
							</tr>
							<tr>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Kualitas kerja sangat baik sekali. Secara konsisten hasil kerjanya akurat, tuntas, lengkap, rapi, sistematis dan terandalkan.</td>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Kualitas kerja baik, secara konsisten memenuhi standard yang ditentukan. Jarang sekali diperlukan perbaikan/penyesuaian.</td>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Secara konsisten kualitas kerjanya cukup baik, tetapi kadang kala masih diperlukan koreksi/revisi/penyesuaian kecil.</td>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Kualitas kerja rata-rata masih dapat diterima. Sering diperlukan perbaikan dan penyesuaian.</td>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Kualitas kerja tidak dapat diterima. Hasil kerjanya selalu tidak akurat, tidak lengkap, tidak rapi.</td>
							</tr>
						</table>
					</div>
					<div class="col-sm-3">
						<span class="font-weight-bold">3. PENYELESAIAN TUGAS :</span>
					</div>
					<div class="col-sm">
						<p>Menilai tingkat ketepatan waktu dalam menyelesaikan tugas berdasarkan jadwal yang ditetapkan.</p>
					</div>
					<div class="table-responsive container">
						<table class="table-hover border">
							<tr>
								<td width="90px" class="border border-dark"><input type="radio" value="100" name="p3"> 100</td>
								<td width="90px" class="border border-dark"><input type="radio" value="95" name="p3"> 95</td>
								<td width="90px" class="border border-dark"><input type="radio" value="90" name="p3"> 90</td>	
								<td width="90px" class="border border-dark"><input type="radio" value="85" name="p3"> 85</td>
								<td width="90px" class="border border-dark"><input type="radio" value="80" name="p3"> 80</td>
								<td width="90px" class="border border-dark"><input type="radio" value="75" name="p3"> 75</td>
								<td width="90px" class="border border-dark"><input type="radio" value="70" name="p3"> 70</td>
								<td width="90px" class="border border-dark"><input type="radio" value="65" name="p3"> 65</td>
								<td width="90px" class="border border-dark"><input type="radio" value="60" name="p3"> 60</td>
								<td width="90px" class="border border-dark"><input type="radio" value="55" name="p3"> 55</td>
								<td width="90px" class="border border-dark"><input type="radio" value="50" name="p3"> 50</td>
								<td width="90px" class="border border-dark"><input type="radio" value="45" name="p3"> 45</td>
								<td width="90px" class="border border-dark"><input type="radio" value="40" name="p3"> 40</td>
								<td width="90px" class="border border-dark"><input type="radio" value="35" name="p3"> 35</td>
								<td width="90px" class="border border-dark"><input type="radio" value="30" name="p3"> 30</td>
							</tr>
							<tr>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Secara konsisten selalu menyelesaikan tugas lebih cepat dari waktu yang ditetapkan dengan hasil yang benar.</td>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Menyelesaikan tugas tepat waktu. Kadangkala lebih cepat dari waktu yang ditetapkan.</td>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Menyelesaikan tugas tepat waktu, sesekali tidak tepat dari waktu yang ditetapkan.</td>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Seringkali menyelesaikan tugas tidak tepat dari waktu yang ditetapkan.</td>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Dalam menyelesaikan tugas selalu tidak tepat waktu, sangat lamban.</td>
							</tr>
						</table>
					</div>
					<div class="col-sm-3">
						<span class="font-weight-bold">4. KEMANDIRIAN KARYAWAN :</span>
					</div>
					<div class="col-sm">
						<p>: Menilai tingginya unsur supervisi yang masih diperlukan bagi karyawan yang bersangkutan dalam melaksanakan tugasnya.</p>
					</div>
					<div class="table-responsive container">
						<table class="table-hover border">
							<tr>
								<td width="90px" class="border border-dark"><input type="radio" value="100" name="p4"> 100</td>
								<td width="90px" class="border border-dark"><input type="radio" value="95" name="p4"> 95</td>
								<td width="90px" class="border border-dark"><input type="radio" value="90" name="p4"> 90</td>	
								<td width="90px" class="border border-dark"><input type="radio" value="85" name="p4"> 85</td>
								<td width="90px" class="border border-dark"><input type="radio" value="80" name="p4"> 80</td>
								<td width="90px" class="border border-dark"><input type="radio" value="75" name="p4"> 75</td>
								<td width="90px" class="border border-dark"><input type="radio" value="70" name="p4"> 70</td>
								<td width="90px" class="border border-dark"><input type="radio" value="65" name="p4"> 65</td>
								<td width="90px" class="border border-dark"><input type="radio" value="60" name="p4"> 60</td>
								<td width="90px" class="border border-dark"><input type="radio" value="55" name="p4"> 55</td>
								<td width="90px" class="border border-dark"><input type="radio" value="50" name="p4"> 50</td>
								<td width="90px" class="border border-dark"><input type="radio" value="45" name="p4"> 45</td>
								<td width="90px" class="border border-dark"><input type="radio" value="40" name="p4"> 40</td>
								<td width="90px" class="border border-dark"><input type="radio" value="35" name="p4"> 35</td>
								<td width="90px" class="border border-dark"><input type="radio" value="30" name="p4"> 30</td>
							</tr>
							<tr>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Tidak membutuhkan supervisi sama sekali. Sepenuhnya mampu mandiri dan dapat diandalkan.</td>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Kadang kala masih perlu sedikit supervisi, khususnya dalam melaksanakan tugas yang kompleks dan tidak rutin.</td>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Sering memerlukan supervisi, kadang kala diperlukan juga arahan dari atasannya.</td>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Masih memerlukan supervisi dari waktu ke waktu dan juga pengarahan dari atasan.</td>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Untuk melaksanakan tugasnya, selalu harus diperintah dan dijelaskan secara mendetail.</td>
							</tr>
						</table>
					</div>
					<div class="col-sm-3">
						<span class="font-weight-bold">5. KEMANDIRIAN KARYAWAN :</span>
					</div>
					<div class="col-sm">
						<p>: Menilai tingkat kemampuan berkomunikasi.</p>
					</div>
					<div class="table-responsive container">
						<table class="table-hover border">
							<tr>
								<td width="90px" class="border border-dark"><input type="radio" value="100" name="p5"> 100</td>
								<td width="90px" class="border border-dark"><input type="radio" value="95" name="p5"> 95</td>
								<td width="90px" class="border border-dark"><input type="radio" value="90" name="p5"> 90</td>	
								<td width="90px" class="border border-dark"><input type="radio" value="85" name="p5"> 85</td>
								<td width="90px" class="border border-dark"><input type="radio" value="80" name="p5"> 80</td>
								<td width="90px" class="border border-dark"><input type="radio" value="75" name="p5"> 75</td>
								<td width="90px" class="border border-dark"><input type="radio" value="70" name="p5"> 70</td>
								<td width="90px" class="border border-dark"><input type="radio" value="65" name="p5"> 65</td>
								<td width="90px" class="border border-dark"><input type="radio" value="60" name="p5"> 60</td>
								<td width="90px" class="border border-dark"><input type="radio" value="55" name="p5"> 55</td>
								<td width="90px" class="border border-dark"><input type="radio" value="50" name="p5"> 50</td>
								<td width="90px" class="border border-dark"><input type="radio" value="45" name="p5"> 45</td>
								<td width="90px" class="border border-dark"><input type="radio" value="40" name="p5"> 40</td>
								<td width="90px" class="border border-dark"><input type="radio" value="35" name="p5"> 35</td>
								<td width="90px" class="border border-dark"><input type="radio" value="30" name="p5"> 30</td>
							</tr>
							<tr>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Mampu menjalin komunikasi dengan semua pihak dengan sangat baik.</td>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Mampu	menjalin komunikasi dengan semua pihak dengan baik.</td>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Cukup mampu menjalin komunikasi dengan pihak tertentu saja.</td>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Kurang mampu menjalin	komunikasi dengan pihak lain.</td>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Tidak mampu menjalin komunikasi dengan pihak lain.</td>
							</tr>
						</table>
					</div>
					<div class="col-sm-3">
						<span class="font-weight-bold">6. KERJA SAMA :</span>
					</div>
					<div class="col-sm">
						<p>: Menilai tingkat kemampuan bekerja sama dengan atasan dan rekan sekerja dalam melaksanakan tugas.</p>
					</div>
					<div class="table-responsive container">
						<table class="table-hover border">
							<tr>
								<td width="90px" class="border border-dark"><input type="radio" value="100" name="p6"> 100</td>
								<td width="90px" class="border border-dark"><input type="radio" value="95" name="p6"> 95</td>
								<td width="90px" class="border border-dark"><input type="radio" value="90" name="p6"> 90</td>	
								<td width="90px" class="border border-dark"><input type="radio" value="85" name="p6"> 85</td>
								<td width="90px" class="border border-dark"><input type="radio" value="80" name="p6"> 80</td>
								<td width="90px" class="border border-dark"><input type="radio" value="75" name="p6"> 75</td>
								<td width="90px" class="border border-dark"><input type="radio" value="70" name="p6"> 70</td>
								<td width="90px" class="border border-dark"><input type="radio" value="65" name="p6"> 65</td>
								<td width="90px" class="border border-dark"><input type="radio" value="60" name="p6"> 60</td>
								<td width="90px" class="border border-dark"><input type="radio" value="55" name="p6"> 55</td>
								<td width="90px" class="border border-dark"><input type="radio" value="50" name="p6"> 50</td>
								<td width="90px" class="border border-dark"><input type="radio" value="45" name="p6"> 45</td>
								<td width="90px" class="border border-dark"><input type="radio" value="40" name="p6"> 40</td>
								<td width="90px" class="border border-dark"><input type="radio" value="35" name="p6"> 35</td>
								<td width="90px" class="border border-dark"><input type="radio" value="30" name="p6"> 30</td>
							</tr>
							<tr>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Memiliki	kemampuan tinggi dalam membina kerja sama kelompok, terbuka terhadap pendapat atau saran yang positif.</td>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Selalu menunjukkan hubungan kerja sama yang baik dan melibatkan diri demi tercapainya tujuan kelompok, bersedia membantu rekan sekerjanya.</td>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Secara umum memiliki hubungan kerja sama yang cukup baik dan tidak pernah menolak bila dimintai bantuan.</td>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Kurang bersedia membantu rekan sekerja, kurang dapat menerima saran/pendapat orang lain, dan lebih mementingkan diri sendiri.</td>
								<td width="90px" class="border border-dark" colspan="3" class="fkues">Sulit diajak bekerja sama dan kurang bersedia membantu rekan sekerja, cenderung bekerja sendiri.</td>
							</tr>
						</table>
					</div>
						<div class="col-sm-3">
							<span class="font-weight-bold">7. KEMAMPUAN PRIBADI :</span>
						</div>
						<div class="col-sm">
							<p>: Menilai tingkat kemampuan bekerja sama dengan atasan dan rekan sekerja dalam melaksanakan tugas.</p>
						</div>
						<div class="table-responsive container">
							<table class="table-hover border">
								<tr>
									<td width="90px" class="border border-dark"><input type="radio" value="100" name="p7"> 100</td>
									<td width="90px" class="border border-dark"><input type="radio" value="95" name="p7"> 95</td>
									<td width="90px" class="border border-dark"><input type="radio" value="90" name="p7"> 90</td>	
									<td width="90px" class="border border-dark"><input type="radio" value="85" name="p7"> 85</td>
									<td width="90px" class="border border-dark"><input type="radio" value="80" name="p7"> 80</td>
									<td width="90px" class="border border-dark"><input type="radio" value="75" name="p7"> 75</td>
									<td width="90px" class="border border-dark"><input type="radio" value="70" name="p7"> 70</td>
									<td width="90px" class="border border-dark"><input type="radio" value="65" name="p7"> 65</td>
									<td width="90px" class="border border-dark"><input type="radio" value="60" name="p7"> 60</td>
									<td width="90px" class="border border-dark"><input type="radio" value="55" name="p7"> 55</td>
									<td width="90px" class="border border-dark"><input type="radio" value="50" name="p7"> 50</td>
									<td width="90px" class="border border-dark"><input type="radio" value="45" name="p7"> 45</td>
									<td width="90px" class="border border-dark"><input type="radio" value="40" name="p7"> 40</td>
									<td width="90px" class="border border-dark"><input type="radio" value="35" name="p7"> 35</td>
									<td width="90px" class="border border-dark"><input type="radio" value="30" name="p7"> 30</td>
								</tr>
								<tr>
									<td width="90px" class="border border-dark" colspan="3" class="fkues">Kemampuan	pribadi	sangat baik sekali, berinisiatif, kreatif, proaktif luar biasa, motivasi tinggi untuk mempelajari hal- hal baru, ingin maju.</td>
									<td width="90px" class="border border-dark" colspan="3" class="fkues">Kemampuan	pribadi	baik, berinisiatif, kreatif, proaktif tinggi, konsisten dalam mengembangkan diri.</td>
									<td width="90px" class="border border-dark" colspan="3" class="fkues">Kemampuan	pribadi	rata-rata dapat diterima, masih terlihat adanya inisiatif, kreatif dan proaktif, tetapi kadang kala masih perlu dorongan.</td>
									<td width="90px" class="border border-dark" colspan="3" class="fkues">Kemampuan	pribadi	sering dibawah yang diharapkan, perlu dorongan untuk berinisiatif, kreatif dan proaktif, cenderung agak pasif.</td>
									<td width="90px" class="border border-dark" colspan="3" class="fkues">Kemampuan	pribadi	sangat rendah, tidak berinisiatif, tidak kreatif, tidak proaktif, cenderung pasif.</td>
								</tr>
							</table>
						</div>
<!-- 						
						<div class="table-responsive container">
							<span class="font-weight-bold">8. ABSENSI :</span>
						
							<p>a. Kehadiran di tempat kerja.</p>
							<table class="table-hover border">
								<tr>
									<td width="300px" class="border border-dark"><input type="radio" name="optradio"> 100</td>
									<td width="300px" class="border border-dark"><input type="radio" name="optradio"> 80</td>
									<td width="300px" class="border border-dark"><input type="radio" name="optradio"> 65</td>	
									<td width="300px" class="border border-dark"><input type="radio" name="optradio"> 50</td>
									<td width="300px" class="border border-dark"><input type="radio" name="optradio"> 35</td>
								</tr>
								<tr>
									<td width="300px" class="border border-dark">Tidak pernah mangkir.</td>
									<td width="300px" class="border border-dark">1 (satu) hari mangkir.</td>
									<td width="300px" class="border border-dark">2 (dua) hari mangkir.</td>
									<td width="300px" class="border border-dark">3 (tiga) hari mangkir.</td>
									<td width="300px" class="border border-dark">Lebih dari 3 (tiga) hari mangkir.</td>
								</tr>
							</table>
							<p>b. Ketepatan hadir di tempat kerja (jumlah hari)</p>
							<table class="table-hover border">
								<tr>
									<td width="300px" class="border border-dark"><input type="radio" name="optradio"> 100</td>
									<td width="300px" class="border border-dark"><input type="radio" name="optradio"> 80</td>
									<td width="300px" class="border border-dark"><input type="radio" name="optradio"> 65</td>	
									<td width="300px" class="border border-dark"><input type="radio" name="optradio"> 50</td>
									<td width="300px" class="border border-dark"><input type="radio" name="optradio"> 35</td>
								</tr>
								<tr>
									<td width="300px" class="border border-dark">Terlambat antara 0 - 12 hari.</td>
									<td width="300px" class="border border-dark">Terlambat antara 13 - 24 hari.</td>
									<td width="300px" class="border border-dark">Terlambat antara 25 - 36 hari.</td>
									<td width="300px" class="border border-dark">Terlambat antara 37 - 48 hari.</td>
									<td width="300px" class="border border-dark">Terlambat labih dari 48 hari. </td>
								</tr>
							</table>
							<p>c. Ketepatan hadir di tempat kerja (jumlah menit)</p>
							<table class="table-hover border">
								<tr>
									<td width="300px" class="border border-dark"><input type="radio" name="optradio"> 100</td>
									<td width="300px" class="border border-dark"><input type="radio" name="optradio"> 80</td>
									<td width="300px" class="border border-dark"><input type="radio" name="optradio"> 65</td>	
									<td width="300px" class="border border-dark"><input type="radio" name="optradio"> 50</td>
									<td width="300px" class="border border-dark"><input type="radio" name="optradio"> 35</td>
								</tr>
								<tr>
									<td width="300px" class="border border-dark">Terlambat antara 0 - 770 menit.</td>
									<td width="300px" class="border border-dark">Terlambat antara 771 - 1.499 menit.</td>
									<td width="300px" class="border border-dark">Terlambat antara 1.500 - 2.219 menit.</td>
									<td width="300px" class="border border-dark">Terlambat antara 2.220 - 2.929 menit.</td>
									<td width="300px" class="border border-dark">Terlambat labih dari 2.930 menit. </td>
								</tr>
							</table> -->
							
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Kekuatan/Kelebihan Karyawan ini.</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="kekuatan"></textarea>
							</div>
							<!-- <div class="form-group">
								<label for="exampleFormControlTextarea1">Kelemahan/Hal-hal yang perlu di perbaiki.</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="kelemahan"></textarea>
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">langkah apa yang anda rencakanan untuk mengembangkan karyawan ini.</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="rencana"></textarea> -->
							</div>
										<button type="submit" class="btn btn-success">Simpan</button>

						</div>
				</div>
			</div>
		</body>
	</html>
			