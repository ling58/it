@extends('app.master')

@section('content')
    <div class="container">
        <div class="main">
            <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><center>Daftar Penilaian Senior Staff</center></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @php $x = 1 @endphp   
                                    @foreach ($persetujuan as $i)                                                      
                                    <tbody>
                                        <tr>
                                            <td>{{$x++}}</td>
                                            <td>{{$i->nama}}</td>
                                            <td>{{$i->status}}</td>
                                            <td>
                                                <a href="/penilaian/{{$i->id}}/approvesenstaff" class="btn btn-danger">Approve</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                                <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @php $c = 1 @endphp   
                                    @foreach ($status as $a)                                                      
                                    <tbody>
                                        <tr>
                                            <td>{{$c++}}</td>
                                            <td>{{$a->nama}}</td>
                                            <td>{{$a->status}}</td>
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

