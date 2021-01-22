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
        <!-- ICONS -->
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Permohonan Cuti</h3>
                        </div>
                        <div class="panel-body">
                            <div class="panel-body">
                                <form action="/leave/create" method="POST">
                                    {{csrf_field()}}
                                    <input name="status" type="hidden" value="menunggu">
                                    <input type="hidden" name="user" value="{{Auth::user()->name}}">
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-4">
                                        <input type="text" class="form-control" name="nama" id="nama" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-4">
                                        <input type="text" class="form-control" id="" name="nik" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="form-label col-sm-2">Jabatan</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="jabatan_id">
                                            @foreach ($jabatan as $a)
                                            <option value="{{$a->id}}">{{$a->jabatan}}</option>
                                            @endforeach				
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">PT</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="pt_id">
                                            @foreach ($pt as $b)
                                            <option value="{{$b->id}}">{{$b->pt}}</option>
                                            @endforeach				
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Duty</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="duty_id">
                                            @foreach ($duty as $c)
                                            <option value="{{$c->id}}">{{$c->duty}}</option>
                                            @endforeach				
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Direktorat</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="direktorat_id">
                                            @foreach ($direktorat as $d)
                                            <option value="{{$d->id}}">{{$d->direktorat}}</option>
                                            @endforeach				
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Departement</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="departement_id">
                                            @foreach ($departement as $e)
                                            <option value="{{$e->id}}">{{$e->departement}}</option>
                                            @endforeach				
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Cuti yang diambil</label>
                                        <div class="col-sm-3">
                                        <input type="text"  class="form-control" id="staticEmail" name="cutiambil" value="" required >
                                        </div>
                                        <label for="staticEmail" class="col-sm-2 col-form-label">hari</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Cuti Mulai Tanggal</label>
                                        <div class="col-sm-3">
                                        <input type="date" class="form-control" id="inputPassword" name="cutimulai" placeholder="" required >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Sampai dengan</label>
                                        <div class="col-sm-3">
                                        <input type="date" class="form-control" id="inputPassword" name="cutisampai" placeholder="" required >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Masuk kembali</label>
                                        <div class="col-sm-3">
                                        <input type="date" class="form-control" id="inputPassword" name="masukkembali" placeholder="" required >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Alasan Cuti</label>
                                        <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inputPassword" name="alasan" placeholder="" required >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Alamat Selama Cuti</label>
                                        <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inputPassword" name="alamat" placeholder="" required >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Dapat di hubungi di</label>
                                        <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inputPassword" name="hubungi" placeholder="" required >
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Pengganti Selama Cuti</h3>
                        </div>
                        <div class="panel-body">
                            <div class="panel-body">
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-4">
                                        <input type="text"  class="form-control" id="staticEmail" name="namapeng" value="" required >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inputPassword" name="nikpeng" placeholder="" required>
                                        </div>
                                    </div>
                                    <label for="staticEmail" class="form-label col-sm-2">Jabatan</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="jabatanpeng_id">
                                            @foreach ($jabatan as $a)
                                            <option value="{{$a->id}}">{{$a->jabatan}}</option>
                                            @endforeach				
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="/leave/laporan" type="button" class="btn btn-success">Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
