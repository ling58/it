@extends('app.master')
@section('title', 'Daftar karyawan')
@section('content')
<div class="main">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Data karyawan</h3>
          </div>
          <div>
          <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#createKaryawan">
                  Tambah
          </button>
          </div>
          <div class="panel-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Nik</th>
                  <th>Email</th>
                  <th>Jabatan</th>
                  <th>Direktorat</th>
                  <th>Departement</th>
                  <th>duty</th>
                  <th>cuti</th>
                  <th>pt</th>
                  <th>grade</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              @php $x=1 @endphp
              @foreach($data_karyawan as $i)
                    <tbody>
                    <tr>
                        <th scope="row">{{$x++}}</th>
                          <td>{{$i->nama}}</td>
                          <td>{{$i->nik}}</td>
                          <td>{{$i->email}}</td>
                          <td>{{$i->jabatan->jabatan}}</td>
                          <td>{{$i->direktorat->direktorat}}</td>
                          <td>{{$i->departement->departement}}</td>
                          <td>{{$i->duty->duty}}</td>
                          <td>{{$i->cuti}}</td>
                          <td>{{$i->pt['pt']}}</td>
                          <td>{{$i->level['level']}}</td>
                        <td>
                          <a href="/karyawan/{{$i->id}}/edit" class="btn btn-warning" type="button"><i class="fa fa-warning"></i> Edit</a>
                          <a href="/karyawan/{{$i->id}}/delete" class="btn btn-danger fa fa-trash-o" type="button" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"> Hapus</a>
                        </td>
                    </tr>
                    </tbody>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="createKaryawan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Karyawan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/karyawan/create" method="POST">
            {{csrf_field()}}
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
            <label for="nik">Nik</label>
            <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukan NIK">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email">
            <label for="">Tanggal masuk kerja</label>
            <input type="date" class="form-control" name="masuk">
            <label for="jabatan">Jabatan</label>
            <select class="form-control" name="jabatan_id">
              @foreach ($jabatan as $d)
								<option value="{{$d->id}}">{{$d->jabatan}}</option>
              @endforeach				
						</select>
            <label>Direktorat</label>
            <select class="form-control" name="direktorat_id">
              @foreach ($direktorat as $a)
								<option value="{{$a->id}}">{{$a->direktorat}}</option>
              @endforeach				
						</select>
            <label for="">Departement</label>
            <select class="form-control" name="departement_id">
                @foreach ($departement as $b)
								<option value="{{$b->id}}">{{$b->departement}}</option>
              @endforeach
            </select>	
            <label for="duty">Duty</label>
            <select class="form-control" name="duty_id">
                @foreach ($duty as $c)
								<option value="{{$c->id}}">{{$c->duty}}</option>
              @endforeach
            </select>
            <label for="">Grade</label>
            <select class="form-control" name='level_id'>
              @foreach ($level as $e)
              <option value="{{$e->id}}">{{$e->level}}</option>
              @endforeach
            </select>
            <label for="pt">PT</label>
            <select class="form-control" name='pt_id'>
              @foreach ($pt as $d)
              <option value="{{$d->id}}">{{$d->pt}}</option>
              @endforeach
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
    </form>
  </div>
</div>

@stop
