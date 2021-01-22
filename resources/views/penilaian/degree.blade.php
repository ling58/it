<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>

    <title>Silahkan di isi..  </title>

    <meta charset="utf-8">

    <title></title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>



  <body>

<form action="/penilaian/input" method="post">
		{{csrf_field()}}
    <input type="hidden" name="nik" value="{{$data->nik}}">
    <input type="hidden" name="nama" value="{{$data->nama}}">
    <input type="hidden" name="jabatan" value="{{$data->jabatan->jabatan}}">
    <input type="hidden" name="penilai" value="{{Auth::user()->name}}">
    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
    <input type="hidden" name="karyawan_id" value="{{$data->id}}">
    

    <center><h3> PENILAIAN PRESTASI </h3></center>

    <center><h4> Supervisor / Ass. Manager / Manager / Sr. Manager</h4></center>

    <div class="container">

      <table class="col-md-12">

        <tr>

          <!-- <td><center>Periode:  s/d </center></td> -->

        </tr>

      </table>

    </div>

    <div class="container">

        <table clas="col-md-2">

          <tr>

            <td>NIK</td>
            
            <td> : {{$data->nik}}</td>

          </tr>

          <tr>

            <td>Nama</td>

            <td> : {{$data->nama}} </td>

          </tr>

          <tr>

            <td>Jabatan</td>

            <td> : {{$data->jabatan->jabatan}}</td>

          </tr>
        </table>

    </div>

    <br/>

    <br/>



  <div class="container">

    <table class="table table-bordered">

      <div class="row">

        <thead>

          <tr>

            <th class="col-sm-1"><center>No.</center></th>

            <th class="col-sm-5"><center>Kualitas Kerja</center></th>

            <th class="col-sm-1"><center>1 - 5</center></th>

            <th class="col-sm-3"><center>Komentar</center></th>

          </tr>

        </thead>

          <tbody>

            <input type="hidden" name="id_ternilai" value=""></input>

            <tr>

              <td><center>1.</center></td>

              <td>Keterampilan teknis</td>

              <!-- <td><input type="text" class="form-control" name="rangekualitas_satu" placeholder="Nilai 1-5"></td> -->

              <td><select name="ks1" class="form-control" id="sel1">

                  <option>1</option>

                  <option>2</option>

                  <option>3</option>

                  <option>4</option>

                  <option>5</option>

              </select></td>

              <td><input type="text" class="form-control" name="km1" placeholder="Komentar" required></td>

            </tr>

            <tr>

              <td><center>2.</center></td>

              <td>Kreativitas kerja</td>

              <td><select name="ks2" class="form-control" id="sel1">

                  <option>1</option>

                  <option>2</option>

                  <option>3</option>

                  <option>4</option>

                  <option>5</option>

              </select></td>

              <!-- <td><input type="text" class="form-control" name="rangekualitas_dua" placeholder="Nilai 1-5"></td> -->

              <td><input type="text" class="form-control" name="km2" placeholder="Komentar" required></td>

            </tr>

            <tr>

              <td><center>3.</center></td>

              <td>Kemampuan berkomunikasi</td>

              <td><select name="ks3" class="form-control" id="sel1">

                  <option>1</option>

                  <option>2</option>

                  <option>3</option>

                  <option>4</option>

                  <option>5</option>

              </select></td>

              <!-- <td><input type="text" class="form-control" name="rangekualitas_tiga" placeholder="Nilai 1-5"></td> -->

              <td><input type="text" class="form-control" name="km3" placeholder="Komentar" required></td>

            </tr>

            <tr>

              <td><center>4.</center></td>

              <td>Pendekatan baru terhadap masalah</td>

              <td><select name="ks4" class="form-control" id="sel1">

                  <option>1</option>

                  <option>2</option>

                  <option>3</option>

                  <option>4</option>

                  <option>5</option>

              </select></td>

              <!-- <td><input type="text" class="form-control" name="rangekualitas_empat" placeholder="Nilai 1-5"></td> -->

              <td><input type="text" class="form-control" name="km4" placeholder="Komentar" required></td>

            </tr>

            <tr>

              <td><center>5.</center></td>

              <td>Menerima tanggung jawab</td>

              <!-- <td><input type="text" class="form-control" name="rangekualitas_lima" placeholder="Nilai 1-5"></td> -->

              <td><select name="ks5" class="form-control" id="sel1">

                  <option>1</option>

                  <option>2</option>

                  <option>3</option>

                  <option>4</option>

                  <option>5</option>

              </select></td>

              <td><input type="text" class="form-control" name="km5" placeholder="Komentar" required></td>

            </tr>

            <tr>

              <td><center>6.</center></td>

              <td>Berpikir ke depan</td>

              <!-- <td><input type="text" class="form-control" name="rangekualitas_enam" placeholder="Nilai 1-5"></td> -->

              <td><select name="ks6" class="form-control" id="sel1">

                  <option>1</option>

                  <option>2</option>

                  <option>3</option>

                  <option>4</option>

                  <option>5</option>

              </select></td>

              <td><input type="text" class="form-control" name="km6" placeholder="Komentar" required></td>

            </tr>

            <tr>

              <td><center>7.</center></td>

              <td>Belajar dan perbaikan berkelanjutan</td>

              <!-- <td><input type="text" class="form-control" name="rangekualitas_tujuh" placeholder="Nilai 1-5"></td> -->

              <td><select name="ks7" class="form-control" id="sel1">

                  <option>1</option>

                  <option>2</option>

                  <option>3</option>

                  <option>4</option>

                  <option>5</option>

              </select></td>

              <td><input type="text" class="form-control" name="km7" placeholder="Komentar" required></td>

            </tr>

          </tbody>

        </div>

    </table>

    </div>

    <div class="container">

    <table class="table table-bordered">

      <div class="row">

        <thead>

          <tr>

            <th class="col-sm-1"><center>No.</center></th>

            <th class="col-sm-5"><center>Kuantitas Kerja</center></th>

            <th class="col-sm-1"><center>1 - 5</center></th>

            <th class="col-sm-3"><center>Komentar</center></th>

          </tr>

        </thead>

        <tbody>

          <tr>

            <td><center>1.</center></td>

            <td>Pemenuhan tenggat waktu</td>

            <!-- <td><input type="text" class="form-control" name="rangekuantitas_satu" placeholder="Nilai 1-5"></td> -->

            <td><select name="ks8" class="form-control" id="sel1">

                  <option>1</option>

                  <option>2</option>

                  <option>3</option>

                  <option>4</option>

                  <option>5</option>

              </select></td>

            <td><input type="text" class="form-control" name="km8" placeholder="Komentar" required></td>

          </tr>

          <tr>

            <td><center>2.</center></td>

            <td>Konsisten sebagai pekerja keras</td>

            <!-- <td><input type="text" class="form-control" name="rangekuantitas_dua" placeholder="Nilai 1-5"></td> -->

            <td><select name="ks9" class="form-control" id="sel1">

                  <option>1</option>

                  <option>2</option>

                  <option>3</option>

                  <option>4</option>

                  <option>5</option>

              </select></td>

            <td><input type="text" class="form-control" name="km9" placeholder="Komentar" required></td>

          </tr>

          <tr>

            <td><center>3.</center></td>

            <td>Perencanaan/manajemen waktu</td>

            <!-- <td><input type="text" class="form-control" name="rangekuantitas_tiga" placeholder="Nilai 1-5"></td> -->

            <td><select name="ks10" class="form-control" id="sel1">

                  <option>1</option>

                  <option>2</option>

                  <option>3</option>

                  <option>4</option>

                  <option>5</option>

              </select></td>

            <td><input type="text" class="form-control" name="km10" placeholder="Komentar" required></td>

          </tr>

        </tbody>

      </div>

    </table>

    </div>

    <div class="container">

    <table class="table table-bordered">

      <div class="row">

        <thead>

          <tr>

            <th class="col-sm-1"><center>No.</center></th>

            <th class="col-sm-5"><center>Persoalan orang/kerja sama tim</center></th>

            <th class="col-sm-1"><center>1 - 5</center></th>

            <th class="col-sm-3"><center>Komentar</center></th>

          </tr>

        </thead>

          <tbody>

            <tr>

              <td><center>1.</center></td>

              <td>Memecahkan masalah orang</td>

              <!-- <td><input type="text" class="form-control" name="rangepersoalan_satu" placeholder="Nilai 1-5"></td> -->

              <td><select name="ks11" class="form-control" id="sel1">

                  <option>1</option>

                  <option>2</option>

                  <option>3</option>

                  <option>4</option>

                  <option>5</option>

              </select></td>

              <td><input type="text" class="form-control" name="km11" placeholder="Komentar" required></td>

            </tr>

            <tr>

              <td><center>2.</center></td>

              <td>Pengaruh positif</td>

              <!-- <td><input type="text" class="form-control" name="rangepersoalan_dua" placeholder="Nilai 1-5"></td> -->

              <td><select name="ks12" class="form-control" id="sel1">

                  <option>1</option>

                  <option>2</option>

                  <option>3</option>

                  <option>4</option>

                  <option>5</option>

              </select></td>

              <td><input type="text" class="form-control" name="km12" placeholder="Komentar" required></td>

            </tr>

            <tr>

              <td><center>3.</center></td>

              <td>Hubungan kerja di dalam perusahaan</td>

              <!-- <td><input type="text" class="form-control" name="rangepersoalan_tiga" placeholder="Nilai 1-5"></td> -->

              <td><select name="ks13" class="form-control" id="sel1">

                  <option>1</option>

                  <option>2</option>

                  <option>3</option>

                  <option>4</option>

                  <option>5</option>

              </select></td>

              <td><input type="text" class="form-control" name="km13" placeholder="Komentar" required></td>

            </tr>

            <tr>

              <td><center>4.</center></td>

              <td>Kepemimpinan diperusahaan</td>

              <!-- <td><input type="text" class="form-control" name="rangepersoalan_empat" placeholder="Nilai 1-5"></td> -->

              <td><select name="ks14" class="form-control" id="sel1">

                  <option>1</option>

                  <option>2</option>

                  <option>3</option>

                  <option>4</option>

                  <option>5</option>

              </select></td>

              <td><input type="text" class="form-control" name="km14" placeholder="Komentar" required></td>

            </tr>

            <tr>

              <td><center>5.</center></td>

              <td>Memberi informasi dan saran kepada orang lain</td>

              <!-- <td><input type="text" class="form-control" name="rangepersoalan_lima" placeholder="Nilai 1-5"></td> -->

              <td><select name="ks15" class="form-control" id="sel1">

                  <option>1</option>

                  <option>2</option>

                  <option>3</option>

                  <option>4</option>

                  <option>5</option>

              </select></td>

              <td><input type="text" class="form-control" name="km15" placeholder="Komentar" required></td>

            </tr>

            <tr>

              <td><center>6.</center></td>

              <td>Hubungan kerja di luar perusahaan</td>

              <!-- <td><input type="text" class="form-control" name="rangepersoalan_enam" placeholder="Nilai 1-5"></td> -->

              <td><select name="ks16" class="form-control" id="sel1">

                  <option>1</option>

                  <option>2</option>

                  <option>3</option>

                  <option>4</option>

                  <option>5</option>

              </select></td>

              <td><input type="text" class="form-control" name="km16" placeholder="Komentar" required></td>

            </tr>

            <tr>

              <td><center>7.</center></td>

              <td>Partisipasi dalam rapat</td>

              <!-- <td><input type="text" class="form-control" name="rangepersoalan_tujuh" placeholder="Nilai 1-5"></td> -->

              <td><select name="ks17" class="form-control" id="sel1">

                  <option>1</option>

                  <option>2</option>

                  <option>3</option>

                  <option>4</option>

                  <option>5</option>

              </select></td>

              <td><input type="text" class="form-control" name="km17" placeholder="Komentar" required></td>

            </tr>

          </tbody>

        </div>

      </div>

      </table>

      <div class="form-group">

         <label for="comment">Komentar Umum:</label>

         <textarea class="form-control" rows="5" name="komentar" value="komentar" placeholder="Komentar harap diisi" required></textarea>

      </div>

      <button style="margin-bottom:20px" type="submit" class="btn btn-info col-md-2">Simpan</button>
      <a style="margin-bottom:20px" href="/penilaian/laporandegree" class="btn btn-warning">Kembali</a>

      <br/>

   </form>

  </body>

</html>

