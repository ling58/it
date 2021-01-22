@extends('app.master')

@section('content')

    <div class="container">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><center>Daftar Senior Staff yang harus di nilai</center></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Detail</th>
                                        </tr>
                                    </thead>
                                    @php $x = 1 @endphp
                                    @foreach($data as $i)                                        
                                    <tbody>
                                        <tr>
                                            <td>{{$x++}}</td>
                                            <td>{{$i->nama}}</td>
                                            <td>
                                                <a href="/penilaian/{{$i->id}}/senstaff" class="btn btn-warning">Nilai</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            <div class="panel-heading">
                                <h3 class="panel-title"><center>Daftar yang telah di nilai</center></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Karyawan</th>
                                            <th>Status</th>
                                            <th>Detail</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    @php $c = 1 @endphp
                                    @foreach ($hasil as $has)
                                    <tbody>
                                        <tr>
                                            <td>{{$c++}}</td>
                                            <td>{{$has->nama}}</td>
                                            <td>{{$has->status}}</td>
                                            <td>{{$has->penilai}}</td>
                                            <td>
                                                <a href="/penilaian/{{$has->id}}/detail" class="btn btn-danger">Cek Hasil</a>
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
    </div>


@endsection