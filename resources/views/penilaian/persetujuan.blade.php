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
                    <div class="card-body">
                        <div class="form-group">
                            <div>
                                <label for="">Nama</label>
                            </div>
                            <div>
                                <label for="">Nik</label>
                            </div>
                            <div>
                                <label for="">jabatan</label>
                            </div>
                            <div>
                                <label for="">Departement</label>
                            </div>
                            <div>
                                <label for="">Lokasi</label>
                            </div>
                            <div>
                                <label for="">Golongan</label>
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
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Penerapan pengetahuan teknis profesi</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Daya Analisa & Logika</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Penyajian Laporan</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Kreatifitas</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>Berpikir Rasional</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>Tanggung Jawab</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>Disiplin Kerja</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>Fleksibiltas</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>Kerja Sama</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>11.</td>
                                    <td>Kerja Sama</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>12.</td>
                                    <td>Semangat</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>13.</td>
                                    <td>Kematangan Pribadi</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>14. </td>
                                    <td>Kekuatan/Kelebihan Karyawan ini</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>15. </td>
                                    <td>Kelemahan/Hal-Hal yang perlu di perbaiki</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>16. </td>
                                    <td>Langkah apa yang anda rencanakan untuk mengembangkan karyawan ini?</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <div>
                            <button class="btn btn-warning" type="submit">Simpan</button>
                            <a href="/penilaian/laporansenstaff" class="btn btn-success" type="button">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>                
            </div>
        </div>
    </div>
</body>
</html>