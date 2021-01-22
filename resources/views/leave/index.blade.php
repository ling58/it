@extends('app.master')

@section('content')
<div class="main">
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
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nama" id="nama">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" id="" name="nik" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Jabatan</label>
                                    <div class="col-sm-8">
                                    <input type="text"  class="form-control" id="staticEmail" name="jabatan_id" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">PT</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputPassword" name="pt" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Duty</label>
                                    <div class="col-sm-3">
                                    <input type="text" class="form-control" id="inputPassword" name="duty" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Direktorat</label>
                                    <div class="col-sm-3">
                                    <input type="text"  class="form-control" id="staticEmail" name="direktorat" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Departement</label>
                                    <div class="col-sm-3">
                                    <input type="text"  class="form-control" id="staticEmail" name="departement" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Masuk Kerja</label>
                                    <div class="col-sm-3">
                                    <input type="date" class="form-control" id="inputPassword" name="masuk" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Cuti yang diambil</label>
                                    <div class="col-sm-5">
                                    <input type="text"  class="form-control" id="staticEmail" name="cutiambil" value="">
                                    </div>
                                    <label for="staticEmail" class="col-sm-2 col-form-label">hari</label>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Sisa Cuti</label>
                                    <div class="col-sm-5">
                                    <input type="text"  class="form-control" id="staticEmail" name="cutisisa" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Cuti Mulai Tanggal</label>
                                    <div class="col-sm-3">
                                    <input type="date" class="form-control" id="inputPassword" name="cutimulai" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Sampai dengan</label>
                                    <div class="col-sm-3">
                                    <input type="date" class="form-control" id="inputPassword" name="cutisampai" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Masuk kembali</label>
                                    <div class="col-sm-3">
                                    <input type="date" class="form-control" id="inputPassword" name="masukkembali" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Alasan Cuti</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputPassword" name="alasan" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Alamat Selama Cuti</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputPassword" name="alamat" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Dapat di hubungi di</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputPassword" name="hubungi" placeholder="">
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
                                    <div class="col-sm-8">
                                    <input type="text"  class="form-control" id="staticEmail" name="namapeng" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputPassword" name="nikpeng" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Jabatan</label>
                                    <div class="col-sm-8">
                                    <input type="text"  class="form-control" id="staticEmail" name="jabatanpeng" value="">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
