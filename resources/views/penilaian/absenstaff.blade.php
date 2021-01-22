@extends('app.master')

@section('content')
<div class="container">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title"><center><h4> Daftar Pengisian Absensi Staff / Non Staff </h4></center></div>
                        </div>
                        <div class="panel-body">
                            <div class="container">
                                <div class="col-sm-4">
                                    <div class="table-responsive-sm">
                                        <table class="table">
                                            <center><caption>Absensi Karyawan yang belum di isi</caption></center>
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nik</th>
                                                    <th scope="col">Nama</th>
                                                </tr>
                                            </thead>
                                            @php $x=1 @endphp
                                            @foreach($kehadiran as $i)                                        
                                            <tbody>
                                                <tr>
                                                    <td>{{$x++}}</td>
                                                    <td>{{$i->nik}}</td>
                                                    <td>{{$i->nama}}</td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="table-responsive-sm">
                                        <table class="table">
                                            <caption>Absensi Karyawan yang sudah di isi</caption>
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nik</th>
                                                    <th scope="col">Nama</th>
                                                </tr>
                                            </thead>
                                        </table>
                                            @php $i=1 @endphp
                                            
                                            <tbody>
                                            
                                            </tbody>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection