@extends('app.master')

@section('content')

    <div class="container">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><center>Daftar yang harus di nilai</center></h3>
                            </div>
                            <div class="form-group">
                                <span>Nama {{$detail->nama}}</span>
                            </div>
                            <div class="form-group">
                                <span>Penilai {{$detail->penilai}}</span>
                            </div>
                            <div class="form-group">
                                <span>Penilai {{$detail->nik}}</span>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Pertanyaan</th>
                                            <th>Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Pengetahuan profesi</td>
                                            <td>{{$detail->p1}}</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Penerapan pengetahun teknis profesi</td>
                                            <td>{{$detail->p2}}</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Daya analisa & logika</td>
                                            <td>{{$detail->p3}}</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Penyajian Laporan</td>
                                            <td>{{$detail->p4}}</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Kreatifitas</td>
                                            <td>{{$detail->p5}}</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Berpikir rasional</td>
                                            <td>{{$detail->p6}}</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Tanggung jawab</td>
                                            <td>{{$detail->p7}}</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Disiplin kerja</td>
                                            <td>{{$detail->p8}}</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Fleksibilitas</td>
                                            <td>{{$detail->p9}}</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Kerja sama</td>
                                            <td>{{$detail->p10}}</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Komitmen terhadap tugas</td>
                                            <td>{{$detail->p11}}</td>
                                        </tr><tr>
                                            <td>12</td>
                                            <td>Semangat</td>
                                            <td>{{$detail->p12}}</td>
                                        </tr><tr>
                                            <td>13</td>
                                            <td>Kematangan pribadi</td>
                                            <td>{{$detail->p13}}</td>
                                        </tr><tr>
                                            <td>14</td>
                                            <td>Kekuatan/Kelebihan karyawan</td>
                                            <td>{{$detail->kekuatan}}</td>
                                        </tr><tr>
                                            <td>15</td>
                                            <td>Kelemanah/hal-hal yang perlu di perbaiki</td>
                                            <td>{{$detail->kelemahan}}</td>
                                        </tr><tr>
                                            <td>16</td>
                                            <td>langkah apa yang anda rencanakan untuk mengembangkan karyawan ini</td>
                                            <td>{{$detail->rencana}}</td>
                                        </tr>
                                        <tr>
                                            <td><a href="/penilaian/laporansenstaff" class="btn btn-success">Kembali</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection