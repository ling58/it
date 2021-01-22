@extends('app.master')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-body">
                            
                        </div>
                        <div>
                            <a href="/user" class="btn btn-success lnr lnr-undo" type="button"> Kembali</a>
                        </div>
                        <div class="card col-md-10">
                        <form action="/user/{{$user->id}}/update" method="POST">
                            {{csrf_field()}}
                            <div class="card-header">
                                <h4 class="card-title">Edit User</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input class="form-control" type="text" name="name" value="{{$user->name}}" readonly>
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" value="{{$user->email}}" readonly>
                                    <label for="">Level</label>
                                    <select class="form-control" name="role">
                                        <option value="user">user</option>
                                        <option value="admin">admin</option>
                                        <option value="hrd">hrd</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>    
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop