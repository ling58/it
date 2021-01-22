    @extends('app.master')

    @section('content')
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Setting Atasan dan Bawahan
                            </h3>
                        </div>
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#createSetting">
                                Tambah
                        </button>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Penilai</th>
                                        <th>Ternilai</th>
                                        <th>Atasan ternilai</th>
                                        <th>Aksi</th>
                                        
                                    </tr>
                                </thead>
                                @php $x = 1 @endphp
                                @foreach ($setting as $i)
                                <tbody>
                                    <tr>
                                        <td>{{$x++}}</td>
                                        <td>{{$i->user['name']}}</td>
                                        <td>{{$i->karyawan['nama']}}</td>
                                        
                                        <td>
                                        <a href="/setting/{{$i->id}}/hapus" class="btn btn-danger fa fa-trash-o" type="button" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"> Hapus</a>
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
        <div class="modal fade" id="createSetting" tabindex="-1" role="dialog" aria-labeledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Penilai dan ternilai</h5>
                        <buttton type="button" class="close" data-dismis="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </buttton>
                    </div>
                    <div class="form-group">
                    <form action="/setting/new" method="POST">
                            {{csrf_field()}}
                        <div class="form-group">
                            <label for="">Nama Penilai</label>
                            <select class="form-control" name="user_id" id="">
                            @foreach ($user as $x)
                                <option value="{{$x->id}}">{{$x->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Dinilai</label>
                            <select class="form-control" name="karyawan_id" id="">
                            @foreach ($karyawan as $c)
                                <option value="{{$c->id}}">{{$c->nama}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Atasan</label>
                            <select class="form-control" name="id_approval" id="">
                            @foreach ($user as $c)
                                <option value="{{$c->id}}">{{$c->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div>
                            <button type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>


    @stop