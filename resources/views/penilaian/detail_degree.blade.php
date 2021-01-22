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
                            <div class="container">
                                <li>
                                    <span>Nik : {{$detail->nik}}</span>
                                </li>
                                <li>
                                    <span>Nama : {{$detail->nama}}</span>
                                </li>
                                <li>
                                    <span>Jabatan : {{$detail->jabatan}}</span>
                                </li>
                                <li>
                                    <span>Penilai : {{$detail->penilai}}</span>
                                </li>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Pertanyaan</th>
                                            <th>Nilai</th>
                                            <th>Komentar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Keterampilan Teknis</td>
                                            <td>{{$detail->ks1}}</td>
                                            <td>{{$detail->km1}}</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Kreativitas kerja</td>
                                            <td>{{$detail->ks2}}</td>
                                            <td>{{$detail->km2}}</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>kemampuan berkomunikasi</td>
                                            <td>{{$detail->ks3}}</td>
                                            <td>{{$detail->km3}}</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Pedekatan baru terhadap masalah</td>
                                            <td>{{$detail->ks4}}</td>
                                            <td>{{$detail->km4}}</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Menerima tanggunb jawab</td>
                                            <td>{{$detail->ks5}}</td>
                                            <td>{{$detail->km5}}</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Berpikir ke depan</td>
                                            <td>{{$detail->ks6}}</td>
                                            <td>{{$detail->km6}}</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Belajar dan perbaikan berkelanjutan</td>
                                            <td>{{$detail->ks7}}</td>
                                            <td>{{$detail->km7}}</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Pemenuhan tenggat waktu</td>
                                            <td>{{$detail->ks8}}</td>
                                            <td>{{$detail->km8}}</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Konsisten sebagai pekerja keras</td>
                                            <td>{{$detail->ks9}}</td>
                                            <td>{{$detail->km9}}</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Perencanaan / manajemen waktu</td>
                                            <td>{{$detail->ks10}}</td>
                                            <td>{{$detail->km10}}</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Memecahkan masalah orang</td>
                                            <td>{{$detail->ks11}}</td>
                                            <td>{{$detail->km11}}</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Pengaruh positif</td>
                                            <td>{{$detail->ks12}}</td>
                                            <td>{{$detail->km12}}</td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>Hubungan kerja di dalam perusahaan</td>
                                            <td>{{$detail->ks13}}</td>
                                            <td>{{$detail->km13}}</td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td>Kepemimpinan diperusahaan</td>
                                            <td>{{$detail->ks14}}</td>
                                            <td>{{$detail->km14}}</td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>Memberi informasi dan saran kepada orang lain</td>
                                            <td>{{$detail->ks15}}</td>
                                            <td>{{$detail->km15}}</td>
                                        </tr>
                                        <tr>
                                            <td>16</td>
                                            <td>Hubungan kerja di luar perusahaan</td>
                                            <td>{{$detail->ks16}}</td>
                                            <td>{{$detail->km16}}</td>
                                        </tr>
                                        <tr>
                                            <td>17</td>
                                            <td>Partisipasi dalam rapat</td>
                                            <td>{{$detail->ks17}}</td>
                                            <td>{{$detail->km17}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div>
                                    <span>Komentar Umum :</span>
                                    {{$detail->komentar}}
                                </div>
                                <div>
                                            <td><a href="/penilaian/laporandegree" class="btn btn-success">Kembali</a></td>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection