<div class="main">
        <div class="container">
            <div class="row">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">
                        <h2><label><center>Form Permintaan Tenaga Kerja</center></label></h2>
                        </div>
                    </div>
                    <div class="panel-body">
                    <form>
                        <div class="form-group">
                            <span for="">PT</span>
                            <select class="form-control">
                                <option value="bai">Batangalum</option>
                                <option value="imi">Indonesia Miki</option>
                                <option value="st">Sumbertex</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <span for="">Lokasi dan Nomor</span>
                            <input type="text" class="form-control" id="" aria-describedby="" placeholder="">
                        </div>
                        <div class="form-group">
                            <span for="">Tanggal diajukan</span>
                            <input type="date" class="form-control" id="" aria-describedby="" placeholder="">
                        </div>
                        <div class="form-group">
                            <span for="">DIREKTORAT</span>
                            <select class="form-control">
                                <option value="accounting">Accounting</option>
                                    <option value="cyclamate">Cyclamate</option>
                                    <option value="finance">Finance</option>
                                    <option value="hr">HR</option>
                                    <option value="inbound">Inbound Logistic</option>
                                    <option value="internal audit">Internal Audit</option>
                                    <option value="it">IT</option>
                                    <option value="legal">Legal & License</option>
                                    <option value="outbound">Outbound Logistic</option>
                                    <option value="packing bai">Packing BA</option>
                                    <option value="packing imi">Packing IMI</option>
                                    <option value="plastic">Plastic Rope</option>
                                    <option value="ppic">PPIC</option>
                                    <option value="procurement">Procurement</option>
                                    <option value="qclab">QC & Laboratory</option>
                                    <option value="qms&hse">QMS & HSE</option>
                                    <option value="rnd">RND</option>
                                    <option value="saccharine">Saccharine</option>
                                    <option value="taxation">Taxation</option>
                                    <option value="UE">Utility & Enggineering</option>
                            </select>
                        </div>
                        <div>
                            <h4><label>PEMOHON</label></h4>
                        </div>
                        <div class="form-group">
                            <span for="">DEPARTEMENT</span>
                            
                        </div>
                        <div class="form-group">
                            <span for="">PENEMPATAN</span>
                            <select class="form-control">
                                <option value="">Office</option>
                                <option value="">Branch</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <span for="">Jabatan / title yang akan di isi</span>
                            <input type="text" class="form-control" id="" aria-describedby="" placeholder="">
                        </div>
                        <div class="form-group">
                            <span for="">Golongan / Job Level</span>
                            <input type="text" class="form-control" id="" aria-describedby="" placeholder="">
                        </div>
                        <div class="form-group">
                            <span for="">Kebutuhan Tenaga kerja</span>
                            <input type="text" class="form-control" id="" aria-describedby="" placeholder="">
                        </div>
                        <div>
                            <h4><label>ALASAN PERMINTAAN TENAGA KERJA</label></h4>
                        </div>
                        <div>
                            <span>Terdapat dalam Perencanaan Tenaga Kerja</span>
                                <label class="fancy-checkbox">
										<input type="checkbox" name="alasan" value="yes">
										<span>Ya</span>
									</label>
                                <label class="fancy-checkbox">
										<input type="checkbox" name="alasan" value="no" data-toggle="collapse" data-target="#keterangan">
										<span>Tidak</span>
									</label>
                                <div class="collapse" id="keterangan">
                                    <div class="card card-body">
                                        <h5>Keterangan</h5>
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="baru" value="yes">
                                            <span>Posisi Baru</span>
                                            </label>
                                            <label class="fancy-checkbox">
                                            <input name="status" value="ganti" type="checkbox" data-toggle="collapse" data-target="#ganti">
                                                <span>Menggantikan Karyawan</span>
                                            </label>
                                                <div class="collapse" id="ganti">
                                                    <div class="card card-body">
                                                        <div>
                                                            <label class="fancy-checkbox col-sm-3">
                                                                <input type="checkbox" name="resign">
                                                                <span>Resign</span>
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label class="fancy-checkbox col-sm-3">
                                                                <input type="checkbox" name="pensiun">
                                                                <span>Pensiun</span>
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label class="fancy-checkbox col-sm-3">
                                                                <input type="checkbox" name="meninggal">
                                                                <span>Meninggal Dunia</span>
                                                            </label>
                                                        </div>
                                                        <div>
                                                            <label class="fancy-checkbox col-sm-3">
                                                                <input type="checkbox" name="phk">
                                                                <span>PHK</span>
                                                            </label>
                                                        </div>  
                                                    </div>
                                                </div>
                                            <label class="fancy-checkbox">
                                            <input name="status" value="lain" type="checkbox">
                                                <span>Lain-lain</span>
                                            </label>
                                            <div>
                                                <span>Penjelasan :</span>
                                                <textarea class="form-control" placeholder="Penjelasan" rows="4"></textarea>
                                            </div>
                                    </div>
                                </div>
                                <div>
                                    <span>URAIAN PEKERJAAN, TUGAS DAN BERTANGGUNG JAWAB :</span>
                                </div>
                                    <textarea class="form-control" placeholder="Uraian" rows="4"></textarea>
                        </div>
                        <div>
                            <h4><label>PERSYARATAN / KUALIFIKASI</label></h4>
                        </div>
                        <div class="form-group row">
                            <span for="staticEmail" class="col-sm-2 col-form-label">1. Pendidikan</span>
                            <div class="col-sm-10">
                            <div>
                                <label class="fancy-checkbox col-sm-2">
                                    <input type="checkbox" name="smp">
                                    <span>SMP</span>
                                </label>
                            </div>
                            <div>
                                <label class="fancy-checkbox col-sm-2">
                                    <input type="checkbox" name="sma">
                                    <span>SMA</span>
                                </label>
                            </div>
                            <div>
                                <label class="fancy-checkbox col-sm-2">
                                    <input type="checkbox" name="diploma">
                                    <span>DIPLOMA</span>
                                </label>
                            </div>
                            <div>
                                <label class="fancy-checkbox col-sm-2">
                                    <input type="checkbox" name="s1">
                                    <span>S1</span>
                                </label>
                            </div>
                            <div>
                                <label class="fancy-checkbox col-sm-2">
                                    <input type="checkbox" name="s2">
                                    <span>S2</span>
                                </label>
                            </div> 
                        </div>
                        </div>
                        <div class="form-group row">
                            <span for="staticEmail" class="col-sm-2 col-form-label">2. Keahlian</span>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <span for="staticEmail" class="col-sm-2 col-form-label">3. Pengalaman</span>
                            <div class="col-sm-1">
                                <input type="text" class="form-control">
                            </div>
                            <div>
                                <span>Tahun</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span for="staticEmail" class="col-sm-2 col-form-label">4. Usia</span>
                            <div class="col-sm-1">
                                <input type="text" class="form-control">
                            </div>
                            <div>
                                <span>Tahun</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span for="staticEmail" class="col-sm-2 col-form-label">5. Jenis Kelamin</span>
                            <div class="col-sm-10">
                            <div>
                                <label class="fancy-checkbox col-sm-2">
                                    <input type="checkbox" name="smp">
                                    <span>Laki-laki</span>
                                </label>
                            </div>
                            <div>
                                <label class="fancy-checkbox col-sm-2">
                                    <input type="checkbox" name="sma">
                                    <span>Perempuan</span>
                                </label>
                            </div>
                            <div>
                                <span>(Pilih keduanya jika tidak ada kekhususan)</span>
                            </div>
                        </div>
                        </div>
                        <div class="form-group row">
                            <span for="staticEmail" class="col-sm-2 col-form-label">6. Kondisi Fisik</span>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div>
                            <h4><label>CATATAN / JIKA ADA KANDIDAT YANG DIUSULKAN</label></h4>
                            <div class="col-sm-12">
                                <textarea class="form-control" placeholder="Catatan" rows="10"></textarea>
                            </div>
                        </div>
                        <br/>
                        <br/>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-primary">Ajukan</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>