<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>			
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="contianer">
        <div class="col-md-12">
            <div class="card">
                <div class="card-title">
                    <h5>
                        Penilaian senior staff
                    </h5>
                    <form action="/penilaian/{{$senstaff->id}}/update" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="status" value="approve">
                    <div class="card-body">
                        <div class="form-group">
                            <div>
                                <label for="">Nama : </label>
                                {{$senstaff->nama}}
                            </div>
                            <div>
                                <label for="">Nik :</label>
                                {{$senstaff->nik}}
                            </div>
                            <div>
                                <label for="">jabatan :</label>
                                {{$senstaff->jabatan}}
                            </div>
                            <div>
                                <label for="">Departement :</label>
                                {{$senstaff->departement}}
                            </div>
                            <div>
                                <label for="">Status :</label>
                                {{$senstaff->status}}
                            </div>
                        </div>
                        <table class="table">
                            <thead class="thead light">
                                <tr>
                                    <th>No</th>
                                    <th>Pertanyaan</th>
                                    <th>Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Pengetahuan Teknis Profesi</td>
                                    <td>{{$senstaff->p1}}</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Penerapan pengetahuan teknis profesi</td>
                                    <td>{{$senstaff->p2}}</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Daya Analisa & Logika</td>
                                    <td>{{$senstaff->p3}}</td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Penyajian Laporan</td>
                                    <td>{{$senstaff->p4}}</td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Kreatifitas</td>
                                    <td>{{$senstaff->p5}}</td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>Berpikir Rasional</td>
                                    <td>{{$senstaff->p6}}</td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>Tanggung Jawab</td>
                                    <td>{{$senstaff->p7}}</td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>Disiplin Kerja</td>
                                    <td>{{$senstaff->p8}}</td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>Fleksibiltas</td>
                                    <td>{{$senstaff->p9}}</td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>Kerja Sama</td>
                                    <td>{{$senstaff->p10}}</td>
                                </tr>
                                <tr>
                                    <td>11.</td>
                                    <td>Kerja Sama</td>
                                    <td>{{$senstaff->p11}}</td>
                                </tr>
                                <tr>
                                    <td>12.</td>
                                    <td>Semangat</td>
                                    <td>{{$senstaff->p12}}</td>
                                </tr>
                                <tr>
                                    <td>13.</td>
                                    <td>Kematangan Pribadi</td>
                                    <td>{{$senstaff->p13}}</td>
                                </tr>
                                <tr>
                                    <td>14. </td>
                                    <td>Kekuatan/Kelebihan Karyawan ini</td>
                                    <td>{{$senstaff->kekuatan}}</td>
                                </tr>
                                <tr>
                                    <td>15. </td>
                                    <td>Kelemahan/Hal-Hal yang perlu di perbaiki</td>
                                    <td>{{$senstaff->kelemahan}}</td>
                                </tr>
                                <tr>
                                    <td>16. </td>
                                    <td>Langkah apa yang anda rencanakan untuk mengembangkan karyawan ini?</td>
                                    <td>{{$senstaff->rencana}}</td>
                                </tr>
                                <tr>
                                </tr>
                            </tbody>
                        </table>
                        <div>
                            <button class="btn btn-success" type="submit" onclick="return confirm('Apakah anda menyetujui hasil penilaian ini?')">Simpan</button>
                        </div>
                    </div>
                    </form>
                </div>                
            </div>
        </div>
    </div>
</body>
</html>