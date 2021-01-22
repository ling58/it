@extends('app.master')
@section('title','Edit Data Karyawan')
@section('content')

    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <div class="panel-body">
                    @if(session('success'))
    <div class="alert-alert success" role="alert">
        {{session('success')}}
    </div>
    @endif
    <div>
        <a href="/karyawan" class="btn btn-success" type="button">Kembali</a>
    </div>
    <div class="card col-md-10">
    <form action="/karyawan/{{$karyawan->id}}/update" method="POST">
        {{csrf_field()}}
        <div class="card-header">
        <h4 class="card-title">Edit Data Karyawan</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{$karyawan->nama}}" placeholder="Masukan Nama">
                <label for="nik">Nik</label>
                <input type="text" class="form-control" id="nik" name="nik" value="{{$karyawan->nik}}" placeholder="Masukan NIK">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{$karyawan->email}}" placeholder="Masukan Email">
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
                <label for="pt">PT</label>
                <select class="form-control" name='pt_id'>
                @foreach ($pt as $d)
                    <option value="{{$d->id}}">{{$d->pt}}</option>
                @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </div>
    </form>      
                </div>
            </div>
        </div>
    </div>
@stop
