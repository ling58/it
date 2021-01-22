
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
		</body>
		</head>
		<body>
		<form action="/penilaian/create" method="POST">
		{{csrf_field()}}
			<div class="container border border border-dark">
				<div class="container">
					<div class="border-bottom border border-dark">
					<center><span><h4>PENILAIAN PRESTASI</h4></span></center>
					<center><p><h5>Senior Staff</h5></p></center>
							<center>Periode s/d </center>
							<br/>
						</div>
					</div>
					<br/>
					<div class="container">
						<div class="border-bottom border border-dark">
							<p class="fisi">Penilaian Penting sekali maknanya untuk mengukur dan mendorong peningkatan prestasi kerja (performance) serta produktivitas karyawan, disamping juga untuk keperluan kenaikan gaji, untuk menentukan urutan-urutan dalam pemberhentian karyawan, untuk menentukan kenaikan pangkat, untuk menentukan kebutuhan latihan dan pendidikan serta untuk membantu karyawan memperbaiki hasil karyanya. Oleh karena itu, setiap atasan mempunyai kewajiban untuk melakukan penilaian seobyektif mungkin terhadap bawahannya baik demi kemajuan perusahaan maupun demi kepentingan karyawan itu sendiri.</p>
						</div>
					</div>
					<br/>
					<input type="hidden" name="karyawan_id" value="{{$data->id}}">
					<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
					<input type="hidden" name="penilai" value="{{Auth::user()->name}}">
					<input type="hidden" name="status" value="menunggu">
					<input type="hidden" name="kehadiran" value="0">
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
								<table class="table-hover tkuesioner border">
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
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Sangat menguasai pengetahuan di bidangnya & memiliki pengetahuan luas di bidang lain.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Menguasai pengetahuan di bidangnya & bidang lain yang berkaitan dalam unit kerjanya.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">cukup menguasai pengetahuan di bidangnya & sedikit memiliki pengetahuan dalam bidang lain yang berkaitan dalam unit kerjanya.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Kurang menguasai bidangnya & kurang memiliki pengetahuan dalam bidang lain yang berkaitan dalam unit kerjanya.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Tidak menguasai pengetahuan di bidangnya, sering membutuhkan petunjuk yang detail, tidak memiliki pengetahuan dalam bidang lain yang berkaitan dalam unit kerjanya.</td>
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
								<table class="table-hover tkuesioner border">
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
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Mampu menerapkan pengetahuan teknis profesinya dengan baik sekali, sempurna dan dapat diandalkan.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Mampu menerapkan pengetahuan teknis profesinya dengan baik dalam menjalankan tugas-tugasnya.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Cukup dapat menerapkan pengetahuan teknis profesinya dalam menjalankan tugas-tugasnya meskipun sesekali masih perlu diarahkan.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Kurang dapat menerapkan pengetahuan teknis profesinya dalam menjalankan tugas-tugasnya, masih harus diberi bimbingan dan arahan.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Tidak dapat menerapkan pengetahuan teknis profesinya, selalu membutuhkan petunjuk secara mendetail dalam menjalankan tugasnya.</td>
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
								<table class="table-hover tkuesioner border">
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
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Daya anallisanya sangat tajam, konsisten meneraokan analisa yang sistematis, obyektif, logis berdasarkan fakta dan sasaran tugas.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Memiliki daya analisa yang baik. Hasil kerjanya obyektif dan sistematis. Dalam hal yang kompleks kadang masih perlu arahan</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Secara umum hasil kerjanya sistematis, logis, obyektif, tetapi kadang kala masuh perlu bimbingan</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Seringkali analisanya kurang mendalam. Hasil kerjanya belum didukung analisa dan sistematikan kerja yang baik.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Tidak dapat berpikir analitis dan sistematis Gagal untuk mencapai sasaran tugas.</td>
									</tr>
								</table>
							</div>
							<div class="col-sm-3">
								<span class="font-weight-bold">4. KEMANDIRIAN KARYAWAN :</span>
							</div>
							<div class="col-sm">
								<p> Menilai tingginya unsur supervisi yang masih diperlukan bagi karyawan yang bersangkutan dalam melaksanakan tugasnya</p>
							</div>
							<div class="table-responsive container">
								<table class="table-hover tkuesioner border">
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
								<span class="font-weight-bold">5. KOMUNIKASI :</span>
							</div>
							<div class="col-sm">
								<p>Menilai tingkat kemampuan berkomunikasi.</p>
							</div>
							<div class="table-responsive container">
								<table class="table-hover tkuesioner border">
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
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Sangat sering menampilkan ide-ide dan langkah-langkah baru yang positif & selalu berani mengambil prakarsa dalam batas wewenang yang ada padanya.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Sering menampikan ide-ide dan langkah-langkah baru & ummumnya berani mengambil prakarsa sesuai wewenangnya.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Cukup dapat menampilkan ide-ide dan langkah-langkah baru & kadang kala perlu dukungan dari atasan atau rekan sekerja dalam mengambil prakarsa.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">jarang sekali menampikan ide-ide & langkah-langkah baru dan untuk mengambil prakarsa selalu memerlukan dorongan/dukungan dari atasan/rekan sekerjanya.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Tidak pernah menampilkan ide-ide & langkah-langkah baru dan sama sekali tidak berani mengambil prakarsa </td>
									</tr>
								</table>
							</div>
							<div class="col-sm-3">
								<span class="font-weight-bold">6. KERJA SAMA :</span>
							</div>
							<div class="col-sm">
								<p>Menilai tingkat kemampuan bekerja sama dengan atasan dan rekan sekerja dalam melaksanakan tugas.</p>
							</div>
							<div class="table-responsive container">
								<table class="table-hover tkuesioner border">
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
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Pemikiran, pertimbangan &pendapatnya selalu sangat masuk akal, mudah dipahami dan dapat diterima.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Pemikiran, pertimbangan & pendapatnya umum masuk akal dan dapat diterima</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">pemikiranm pertimbangan & pendapatanya cukup masuk akal namum terkadang kurang dapat diterima</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Pemikiran, pertimbangan & pendapatnya kadang kurang masuk akal dan agak sulit dipahami</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Pemikiran, pertimbangan & pendapatnya tidak masuk akal, sulit diterima & tidak logis</td>
									</tr>
								</table>
							</div>
							<div class="col-sm-3">
								<span class="font-weight-bold">7. KEMAMPUAN PRIBADI :</span>
							</div>
							<div class="col-sm">
								<p>: Menilai kemampuan mengambil inisiatif, usaha memperbaiki cara kerja, problem solving, proaktif, pengembangan diri .</p>
							</div>
							<div class="table-responsive container">
								<table class="table-hover tkuesioner border">
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
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Rasa tanggung jawabnya sangat besar dan melaksanakan tugasnya dengan konsisten meskipun keadaan yang sulit</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Rasa tanggung jawabnya besar dan tetap melaksanakan tugasnya meskipun dalam keadaan sulit</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Mempunyai cukup rasa tanggung jawab, kadang perlu dorongan/dukungan dari atasannya</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Tasa tanggung jawabnya kurang, sering menggeserkan tanggung jawab kepada pihak lain</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Tidak taat terhadap waktu kerja, selalu tidak mencapai standar target yang ditetapkan</td>
									</tr>
								</table>
							</div>
							<!-- <div class="col-sm-3">
								<span class="font-weight-bold">8. DISIPLIN KERJA</span>
							</div>
							<div class="col-sm">
								<p>: Menilai penggunaan waktu kerja secara efektif sehingga dicapai produktivitas yang tinggi</p>
							</div>
							<div class="table-responsive container">
								<table class="table-hover tkuesioner border">
									<tr>
										<td width="90px" class="border border-dark"><input type="radio" value="100" name="p8"> 100</td>
										<td width="90px" class="border border-dark"><input type="radio" value="95" name="p8"> 95</td>
										<td width="90px" class="border border-dark"><input type="radio" value="90" name="p8"> 90</td>	
										<td width="90px" class="border border-dark"><input type="radio" value="85" name="p8"> 85</td>
										<td width="90px" class="border border-dark"><input type="radio" value="80" name="p8"> 80</td>
										<td width="90px" class="border border-dark"><input type="radio" value="75" name="p8"> 75</td>
										<td width="90px" class="border border-dark"><input type="radio" value="70" name="p8"> 70</td>
										<td width="90px" class="border border-dark"><input type="radio" value="65" name="p8"> 65</td>
										<td width="90px" class="border border-dark"><input type="radio" value="60" name="p8"> 60</td>
										<td width="90px" class="border border-dark"><input type="radio" value="55" name="p8"> 55</td>
										<td width="90px" class="border border-dark"><input type="radio" value="50" name="p8"> 50</td>
										<td width="90px" class="border border-dark"><input type="radio" value="45" name="p8"> 45</td>
										<td width="90px" class="border border-dark"><input type="radio" value="40" name="p8"> 40</td>
										<td width="90px" class="border border-dark"><input type="radio" value="35" name="p8"> 35</td>
										<td width="90px" class="border border-dark"><input type="radio" value="30" name="p8"> 30</td>
									</tr>
									<tr>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Sangat taat pada waktu kerja, dapat memanfaatkannya secara sangat produktif, melebihi target yang ditentukan.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Taat terhadap waktu kerja, dapat memanfaatkannya secara produktif, selalu mencapai target yang ditentukan</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Umumnya taat terhadap waktu kerja dan dapat mencapai standar yang ditetapkan</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Kurang taat terhadap waktu kerja, sering tidak tercapai standar target yang ditetapkan</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Tidak taat terhadap waktu kerja, selalu tidak mencapai standar target yang ditetapkan</td>
									</tr>
								</table>
							</div>
							<div class="col-sm-3">
								<span class="font-weight-bold">9. FLEKSIBILITAS</span>
							</div>
								<div class="col-sm">
									<p>: Menilai kemampuan menyesuaikan diri terhadap ide-ide baru yang positif, suasana kerja, beban kerja, jenis pekerjaan maupun lingkungan kerja yang baru</p>
								</div>
								<div class="table-responsive container">
								<table class="table-hover tkuesioner border">
									<tr>
										<td width="90px" class="border border-dark"><input type="radio" value="100" name="p9"> 100</td>
										<td width="90px" class="border border-dark"><input type="radio" value="95" name="p9"> 95</td>
										<td width="90px" class="border border-dark"><input type="radio" value="90" name="p9"> 90</td>	
										<td width="90px" class="border border-dark"><input type="radio" value="85" name="p9"> 85</td>
										<td width="90px" class="border border-dark"><input type="radio" value="80" name="p9"> 80</td>
										<td width="90px" class="border border-dark"><input type="radio" value="75" name="p9"> 75</td>
										<td width="90px" class="border border-dark"><input type="radio" value="70" name="p9"> 70</td>
										<td width="90px" class="border border-dark"><input type="radio" value="65" name="p9"> 65</td>
										<td width="90px" class="border border-dark"><input type="radio" value="60" name="p9"> 60</td>
										<td width="90px" class="border border-dark"><input type="radio" value="55" name="p9"> 55</td>
										<td width="90px" class="border border-dark"><input type="radio" value="50" name="p9"> 50</td>
										<td width="90px" class="border border-dark"><input type="radio" value="45" name="p9"> 45</td>
										<td width="90px" class="border border-dark"><input type="radio" value="40" name="p9"> 40</td>
										<td width="90px" class="border border-dark"><input type="radio" value="35" name="p9"> 35</td>
										<td width="90px" class="border border-dark"><input type="radio" value="30" name="p9"> 30</td>
									</tr>
									<tr>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Sangat mudah menyesuaikan diri terhadap pembaharuan/perubahan dalam berbagai hal.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Dapat menyesuaikan diri dengan baik terhadap pembaharauan</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Cukup dapat menyesuaikan diri terhadap pembaharuan</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Kaku dan kurang dapat menyesuaikan diri terhadap pembaharuan</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Tidak dapat & mengalami kesulitan dalam menyesuaikan diri terhadap pembaharuan</td>
									</tr>
								</table>
								</div> -->
							<!-- <div class="col-sm-3">
									<span class="font-weight-bold">10. KERJA SAMA</span>
								</div>
								<div class="col-sm">
									<p>: Menilai kemampuan bekerja sama dengan atasan, rekan sekerja, bawahan serta pihak lain dalam pelaksanaan tugas.</p>
								</div>
								<div class="table-responsive container">
								<table class="table-hover tkuesioner border">
									<tr>
										<td width="90px" class="border border-dark"><input type="radio" value="100" name="p10"> 100</td>
										<td width="90px" class="border border-dark"><input type="radio" value="95" name="p10"> 95</td>
										<td width="90px" class="border border-dark"><input type="radio" value="90" name="p10"> 90</td>	
										<td width="90px" class="border border-dark"><input type="radio" value="85" name="p10"> 85</td>
										<td width="90px" class="border border-dark"><input type="radio" value="80" name="p10"> 80</td>
										<td width="90px" class="border border-dark"><input type="radio" value="75" name="p10"> 75</td>
										<td width="90px" class="border border-dark"><input type="radio" value="70" name="p10"> 70</td>
										<td width="90px" class="border border-dark"><input type="radio" value="65" name="p10"> 65</td>
										<td width="90px" class="border border-dark"><input type="radio" value="60" name="p10"> 60</td>
										<td width="90px" class="border border-dark"><input type="radio" value="55" name="p10"> 55</td>
										<td width="90px" class="border border-dark"><input type="radio" value="50" name="p10"> 50</td>
										<td width="90px" class="border border-dark"><input type="radio" value="45" name="p10"> 45</td>
										<td width="90px" class="border border-dark"><input type="radio" value="40" name="p10"> 40</td>
										<td width="90px" class="border border-dark"><input type="radio" value="35" name="p10"> 35</td>
										<td width="90px" class="border border-dark"><input type="radio" value="30" name="p10"> 30</td>
									</tr>
									<tr>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Sangat mudah bekerja sama, selalu mendorong pihak lain untuk bekerja sama & selalu dapat memberikan kontribusi yang sangat besar terhadap keberhasilan kelompok.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Mudah bekerja sama dengan semua pihak & mampu memberikan kontribusi yang besar terhadap keberhasilan usaha kelompok.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Dapat bekerja sama dengan pihak lain, perlu dorongan dari pihak lain agar berani memberikan kontribusi terhadap keberhasilan kelompok.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Kurang dapat bekerja sama dengan pihak lain dan cenderung pasif dalam kegiatan kelompok.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Tidak dapat bekerja sama dengan pihak lain, sukar bergaul, tidak mampu memberikan kontribusi terhadap kegiatan kelompok.</td>
									</tr>
								</table>
								</div>
								<div class="col-sm-3">
									<span class="font-weight-bold">11. KOMITMEN TERHADAP TUGAS</span>
								</div>
								<div class="col-sm">
									<p>: Menilai kemampuan mencurahkan perhatian dan usaha terhadap seluruh proses pelaksanaan tugas sebagai prioritas utama.</p>
								</div>
								<div class="table-responsive container">
								<table class="table-hover tkuesioner border">
									<tr>
										<td width="90px" class="border border-dark"><input type="radio" value="100" name="p11"> 100</td>
										<td width="90px" class="border border-dark"><input type="radio" value="95" name="p11"> 95</td>
										<td width="90px" class="border border-dark"><input type="radio" value="90" name="p11"> 90</td>	
										<td width="90px" class="border border-dark"><input type="radio" value="85" name="p11"> 85</td>
										<td width="90px" class="border border-dark"><input type="radio" value="80" name="p11"> 80</td>
										<td width="90px" class="border border-dark"><input type="radio" value="75" name="p11"> 75</td>
										<td width="90px" class="border border-dark"><input type="radio" value="70" name="p11"> 70</td>
										<td width="90px" class="border border-dark"><input type="radio" value="65" name="p11"> 65</td>
										<td width="90px" class="border border-dark"><input type="radio" value="60" name="p11"> 60</td>
										<td width="90px" class="border border-dark"><input type="radio" value="55" name="p11"> 55</td>
										<td width="90px" class="border border-dark"><input type="radio" value="50" name="p11"> 50</td>
										<td width="90px" class="border border-dark"><input type="radio" value="45" name="p11"> 45</td>
										<td width="90px" class="border border-dark"><input type="radio" value="40" name="p11"> 40</td>
										<td width="90px" class="border border-dark"><input type="radio" value="35" name="p11"> 35</td>
										<td width="90px" class="border border-dark"><input type="radio" value="30" name="p11"> 30</td>
									</tr>
									<tr>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Selalu bersedia bekerja tanpa perhitungan waktu dan pekerjaannya selalu	diselesaikan secara sistematis.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Bersedia bekerja tanpa perhitungan waktu & pekerjaannya umumnya diselesaikan secara sistematis.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Sekali-kali bekerja tanpa	perhitungan waktu &	pekerjaannya diselesaikan dengan cukup sistematis.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Selalu bekerja hanya terbatas pada jam kerja resmi & pekerjaannya diselesaikan secara kurang sistematis.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Malas & selalu memerlukan dorongan untuk bekerja & pekerjaannya diselesaikan secara tidak sistematis.</td>
									</tr>
								</table>
								</div> -->
								<!-- <div class="col-sm-3">
									<span class="font-weight-bold">12. SEMANGAT</span>
								</div>
								<div class="col-sm">
									<p>: Menilai usaha mental dan fisik pada tingkat optimal secara terus menerus dalam pelaksanaan tugas dan pengembangan dirinya.</p>
								</div>
								<div class="table-responsive container">
								<table class="table-hover tkuesioner border">
									<tr>
										<td width="90px" class="border border-dark"><input type="radio" value="100" name="p12"> 100</td>
										<td width="90px" class="border border-dark"><input type="radio" value="95" name="p12"> 95</td>
										<td width="90px" class="border border-dark"><input type="radio" value="90" name="p12"> 90</td>	
										<td width="90px" class="border border-dark"><input type="radio" value="85" name="p12"> 85</td>
										<td width="90px" class="border border-dark"><input type="radio" value="80" name="p12"> 80</td>
										<td width="90px" class="border border-dark"><input type="radio" value="75" name="p12"> 75</td>
										<td width="90px" class="border border-dark"><input type="radio" value="70" name="p12"> 70</td>
										<td width="90px" class="border border-dark"><input type="radio" value="65" name="p12"> 65</td>
										<td width="90px" class="border border-dark"><input type="radio" value="60" name="p12"> 60</td>
										<td width="90px" class="border border-dark"><input type="radio" value="55" name="p12"> 55</td>
										<td width="90px" class="border border-dark"><input type="radio" value="50" name="p12"> 50</td>
										<td width="90px" class="border border-dark"><input type="radio" value="45" name="p12"> 45</td>
										<td width="90px" class="border border-dark"><input type="radio" value="40" name="p12"> 40</td>
										<td width="90px" class="border border-dark"><input type="radio" value="35" name="p12"> 35</td>
										<td width="90px" class="border border-dark"><input type="radio" value="30" name="p12"> 30</td>
									</tr>
									<tr>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Kemauan untuk maju sangat menonjol dan usaha untuk mengatasi tugas serta memperbaiki & mengembangkan diri sangat tinggi, responsif terhadap kritik yang membangun.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Ada kemauan untuk maju & usaha untuk mengatasi tugas yang dihadapinya sebaik mungkin.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Ada usaha untuk mengatasi tugasnya dan mengembangkan diri setelah ada dorongan dari luar.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Sekali-kali berusaha untuk mengatasi tugasnya & mengembangkan diri.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Tidak mau berusaha untuk mengatasi tugas & mengembangkan diri.</td>
									</tr>
								</table>
								</div>
								<div class="col-sm-3">
									<span class="font-weight-bold">13. KEMATANGAN PRIBADI</span>
								</div>
								<div class="col-sm">
									<p>: Menilai kemampuan dalam mengutarakan pandangan, keterbukaan menerima ide dari pihak lain, menentukan tindakan/sikap dalam menangani persoalan.</p>
								</div> -->
								<div class="table-responsive container">
								<!-- <table class="table-hover tkuesioner border">
									<tr>
										<td width="90px" class="border border-dark"><input type="radio" value="100" name="p13"> 100</td>
										<td width="90px" class="border border-dark"><input type="radio" value="95" name="p13"> 95</td>
										<td width="90px" class="border border-dark"><input type="radio" value="90" name="p13"> 90</td>	
										<td width="90px" class="border border-dark"><input type="radio" value="85" name="p13"> 85</td>
										<td width="90px" class="border border-dark"><input type="radio" value="80" name="p13"> 80</td>
										<td width="90px" class="border border-dark"><input type="radio" value="75" name="p13"> 75</td>
										<td width="90px" class="border border-dark"><input type="radio" value="70" name="p13"> 70</td>
										<td width="90px" class="border border-dark"><input type="radio" value="65" name="p13"> 65</td>
										<td width="90px" class="border border-dark"><input type="radio" value="60" name="p13"> 60</td>
										<td width="90px" class="border border-dark"><input type="radio" value="55" name="p13"> 55</td>
										<td width="90px" class="border border-dark"><input type="radio" value="50" name="p13"> 50</td>
										<td width="90px" class="border border-dark"><input type="radio" value="45" name="p13"> 45</td>
										<td width="90px" class="border border-dark"><input type="radio" value="40" name="p13"> 40</td>
										<td width="90px" class="border border-dark"><input type="radio" value="35" name="p13"> 35</td>
										<td width="90px" class="border border-dark"><input type="radio" value="30" name="p13"> 30</td>
									</tr>
									<tr>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Sangat matang dalam cara berpikir, membuat pertimbangan, mengemukakan pendapat, bertindak & sangat terbuka untuk menerima ide dari pihak lain.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Matang dalam cara berpikir, membuat pertimbangan, mengemukakan pendapat, bertindak dan umumnya terbuka untuk menerima ide dari pihak lain.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Pemikiran, pertimbangan & sikapnya cukup matang, kadang kurang dapat menerima ide dari pihak lain.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Pemikiran, pertimbangan & sikapnya kurang matang dan sering menghadapi hambatan dalam berinteraksi dengan pihak lain.</td>
										<td width="90px" class="border border-dark" colspan="3" class="fkues">Pemikiran, pertimbangan & sikapnya tidak matang dan tidak dapat menerima ide dari pihak lain.</td>
									</tr>
								</table> -->
								<div class="form-group">
										<label for="exampleFormControlTextarea1">Kekuatan/Kelebihan Karyawan ini.</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="kekuatan"></textarea>
									</div>
									<div class="form-group">
										<label for="exampleFormControlTextarea1">Kelemahan/Hal-hal yang perlu di perbaiki.</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="kelemahan"></textarea>
									</div>
									<div class="form-group">
										<label for="exampleFormControlTextarea1">langkah apa yang anda rencakanan untuk mengembangkan karyawan ini.</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="rencana"></textarea>
									</div>
										<button type="submit" class="btn btn-success">Simpan</button>
									</div>
										<br/>
										<br/>
									</div>
								</div>
							</div>
						</div>
					</div>
				<br/>
				<br/>
				</form>
			</body>
</html>
				