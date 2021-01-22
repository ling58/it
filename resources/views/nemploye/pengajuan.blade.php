<!doctype html>
<html lang="en">

<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/chartist/css/chartist-custom.css')}}">
	
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
<div class="container">
        <div class="container">
            <div class="row">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">
                        <h2><label><center>Form Permintaan Tenaga Kerja</center></label></h2>
                        </div>
                    </div>
                    <div class="panel-body">
                    <form action="/nemploye/create" method="POST">
                            {{csrf_field()}}
                        <div class="form-group">
                            <span for="">PT</span>
                            <select class="form-control" name="pt_id">
                                @foreach ($pt as $j)
                                <option value="{{$j->id}}">{{$j->pt}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <span for="">Lokasi dan Nomor</span>
                            <input type="text" class="form-control" id="" aria-describedby="" name="nomor" placeholder="">
                        </div>
                        <div class="form-group">
                            <span for="">Tanggal diajukan</span>
                            <input type="date" class="form-control" id="" aria-describedby="" name="pengajuan" placeholder="">
                        </div>
                        <div class="form-group">
                            <span for="">DIREKTORAT</span>
                            <select class="form-control" name="direktorat_id">
                            @foreach ($direktorat as $a)
                                <option value="{{$a->id}}">{{$a->direktorat}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div>
                            <h4><label>PEMOHON</label></h4>
                        </div>
                        <div class="form-group">
                            <span for="">DEPARTEMENT</span>
                            <select class="form-control" name="departement_id" id="">
                            @foreach ($departement as $b)
                                <option value="{{$b->id}}">{{$b->departement}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <span for="">PENEMPATAN</span>
                            <select class="form-control" name="duty_id">
                            @foreach ($duty as $c)
                                <option value="{{$c->id}}">{{$c->duty}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <span for="">Jabatan / title yang akan di isi</span>
                            <select class="form-control" name="posisi_id">
                            @foreach ($posisi as $d)
                                <option value="{{$d->id}}">{{$d->posisi}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <span for="">Golongan / Job Level</span>
                            <select class="form-control" name="jabatan_id">
                            @foreach ($jabatan as $e)
                                <option value="{{$e->id}}">{{$e->jabatan}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <span for="">Kebutuhan Tenaga kerja</span>
                            <input type="text" class="form-control" id="" name="kebutuhan" aria-describedby="" placeholder="">
                        </div>
                        <div>
                            <h4><label>ALASAN PERMINTAAN TENAGA KERJA</label></h4>
                        </div>
                        <div>
                            <span>Terdapat dalam Perencanaan Tenaga Kerja</span>
                                <label class="fancy-checkbox">
										<input type="checkbox" name="perencanaan" value="yes">
										<span>Ya</span>
									</label>
                                <label class="fancy-checkbox">
										<input type="checkbox" name="perencanaan" value="no" data-toggle="collapse" data-target="#keterangan">
										<span>Tidak</span>
									</label>
                                <div class="collapse" id="keterangan">
                                    <div class="card card-body">
                                        <h5>Keterangan</h5>
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="posisibaru">
                                            <span>Posisi Baru</span>
                                            </label>
                                            <label class="fancy-checkbox">
                                            <input name="status" value="ganti" type="checkbox" data-toggle="collapse" data-target="#ganti">
                                                <span>Menggantikan Karyawan</span>
                                            </label>
                                                <div class="collapse" id="ganti">
                                                    <div class="card card-body">
                                                        <div>
                                                            <label class="fancy-checkbox col-sm-3">
                                                                <input type="checkbox" name="resign">
                                                                <span>Resign</span>
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label class="fancy-checkbox col-sm-3">
                                                                <input type="checkbox" name="pensiun">
                                                                <span>Pensiun</span>
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label class="fancy-checkbox col-sm-3">
                                                                <input type="checkbox" name="meninggal">
                                                                <span>Meninggal Dunia</span>
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label class="fancy-checkbox col-sm-3">
                                                                <input type="checkbox" name="phk">
                                                                <span>PHK</span>
                                                            </label>
                                                        </div>  
                                                    </div>
                                                </div>
                                            <label class="fancy-checkbox">
                                            <input name="status" value="lain-lain" name="lain" type="checkbox">
                                                <span>Lain-lain</span>
                                            </label>
                                            <div>
                                                <span>Penjelasan :</span>
                                                <textarea class="form-control" placeholder="Penjelasan" name="penjelasan" rows="4"></textarea>
                                            </div>
                                    </div>
                                </div>
                                <div>
                                    <span>URAIAN PEKERJAAN, TUGAS DAN BERTANGGUNG JAWAB :</span>
                                </div>
                                    <textarea class="form-control" placeholder="Uraian" rows="4" name="uraian"></textarea>
                        </div>
                        <div>
                            <h4><label>PERSYARATAN / KUALIFIKASI</label></h4>
                        </div>
                        <div class="form-group row">
                            <span for="staticEmail" class="col-sm-2 col-form-label">1. Pendidikan</span>
                            <div class="col-sm-10">
                            <div>
                                <label class="fancy-checkbox col-sm-2">
                                    <input type="checkbox" value="smp" name="edu1">
                                    <span>SMP</span>
                                </label>
                            </div>
                            <div>
                                <label class="fancy-checkbox col-sm-2">
                                    <input type="checkbox" value="sma" name="edu2">
                                    <span>SMA</span>
                                </label>
                            </div>
                            <div>
                                <label class="fancy-checkbox col-sm-2">
                                    <input type="checkbox" value="diploma" name="edu3">
                                    <span>DIPLOMA</span>
                                </label>
                            </div>
                            <div>
                                <label class="fancy-checkbox col-sm-2">
                                    <input type="checkbox" value="s1" name="edu4">
                                    <span>S1</span>
                                </label>
                            </div>
                            <div>
                                <label class="fancy-checkbox col-sm-2">
                                    <input type="checkbox" value="s2" name="edu5">
                                    <span>S2</span>
                                </label>
                            </div> 
                        </div>
                        </div>
                        <div class="form-group row">
                            <span for="staticEmail" class="col-sm-2 col-form-label">2. Keahlian</span>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="keahlian">
                            </div>
                        </div>
                        <div class="form-group row">
                            <span for="staticEmail" class="col-sm-2 col-form-label">3. Pengalaman</span>
                            <div class="col-sm-1">
                                <input type="text" class="form-control" name="pengalaman">
                            </div>
                            <div>
                                <span>Tahun</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span for="staticEmail" class="col-sm-2 col-form-label">4. Usia</span>
                            <div class="col-sm-1">
                                <input type="text" class="form-control" name="usia">
                            </div>
                            <div>
                                <span>Tahun</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span for="staticEmail" class="col-sm-2 col-form-label">5. Jenis Kelamin</span>
                            <div class="col-sm-10">
                            <div>
                                <label class="fancy-checkbox col-sm-2">
                                    <input type="checkbox" value="laki-laki" name="jeskel1">
                                    <span>Laki-laki</span>
                                </label>
                            </div>
                            <div>
                                <label class="fancy-checkbox col-sm-2">
                                    <input type="checkbox" value="perempuan" name="jeskel2">
                                    <span>Perempuan</span>
                                </label>
                            </div>
                            <div>
                                <span>(Pilih keduanya jika tidak ada kekhususan)</span>
                            </div>
                        </div>
                        </div>
                        <div class="form-group row">
                            <span for="staticEmail" class="col-sm-2 col-form-label">6. Kondisi Fisik</span>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="fisik">
                            </div>
                        </div>
                        <div>
                            <h4><label>CATATAN / JIKA ADA KANDIDAT YANG DIUSULKAN</label></h4>
                            <div class="col-sm-12">
                                <textarea class="form-control" placeholder="Catatan" rows="10" name="catatan"></textarea>
                            </div>
                        </div>
                        <br/>
                        <br/>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-primary">Ajukan</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<!-- <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p> -->
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	<!-- <script src="{{asset('admin/assets/vendor/chartist/js/chartist.min.js')}}"></script> -->
	<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery-ui/jquery-ui.min.js')}}"></script>
	
</body>

</html>