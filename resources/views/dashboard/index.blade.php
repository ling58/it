@extends('app.master')

@section('content')
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="">isi</h3>
                        {{Auth::user()->name}}
                        {{Auth::user()->id}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


