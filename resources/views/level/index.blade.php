@extends('app.master')


@section('content')
<div class="main">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Data level Karyawan</h3>
            </div>
            <div>
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#createDirektorat">
                    Tambah
            </button>
            </div>
            <div class="panel-body">
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="col-md-3">level</th>
                        <th class="col-md-1">Aksi</th>
                    </tr>
                </thead>
                @foreach($level as $level)
                        <tbody>
                            <tr>
                                <td>{{$level->level}}</td>
                                <td>
                                    <a href="/level/{{$level->id}}/delete" class="btn btn-danger fa fa-trash-o" type="button" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"> Hapus</a>
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
<div class="modal fade" id="createDirektorat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">level karyawan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form action="/level/create" method="POST">
                {{csrf_field()}}
            <div class="form-group">
                <label for="level">level</label>
                <input type="text" class="form-control" id="level" name="level" placeholder="Masukan Direktorat">
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