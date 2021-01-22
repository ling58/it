@extends('app.master')

@section('content')
    <div class="container">
        <div class="main">
            <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Penilaian</h3>
                            </div>
                            <h5>Daftar yang harus di nilai</h5>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Yang harus dinilai</th>
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
                                                <a href="/penilaian/{{$i->id}}/degree" class="btn btn-warning">Nilai</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <h5>Karyawan yang telah di nilai</h5>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Karyawan</th>
                                            <th>Detail</th>
                                        </tr>
                                    </thead>
                                    @php $c = 1 @endphp
                                    @foreach ($hasil as $has)
                                    <tbody>
                                        <tr>
                                            <td>{{$c++}}</td>
                                            <td>{{$has->nama}}</td>
                                            <td>
                                                <a href="/penilaian/{{$has->id}}/detail_degree" class="btn btn-danger">Cek Hasil</a>
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

