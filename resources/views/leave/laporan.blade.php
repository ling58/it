@extends('app.master')

@section('content')
<div class="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                            <a href="/leave/pengajuan" type="button" class="btn btn-success">Ajukan Cuti</a>
                            <br/>
                    <div class="panel-heading">
                        <div>
                        </div>
                        <h3 class="panel-title">Daftar Cuti</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Nik</th>
                                    <th>Jabatan</th>
                                    <th>pt</th>
                                    <th>Direktorat</th>
                                    <th>Departement</th>
                                    <th>status</th>
                                </tr>
                            </thead>
                            @php
                            $i = 1
                            @endphp
                            @foreach($leave as $x)
                            <tbody>
                                <td>{{$i++}}</td>
                                <td>{{$x->nama}}</td>
                                <td>{{$x->nik}}</td>
                                <td>{{$x->jabatan->jabatan}}</td>
                                <td>{{$x->pt->pt}}</td>
                                <td>{{$x->direktorat->direktorat}}</td>
                                <td>{{$x->departement->departement}}</td>
                                <td>{{$x->status}}</td>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop