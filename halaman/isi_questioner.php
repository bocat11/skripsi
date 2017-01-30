<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Isi Questioner</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="halaman/doIsiQuestioner.php" method="POST">

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama perusahaan</label>

                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="text" class="form-control" data-inputmask="'mask': '99/99/9999'"name="nama_perusahaan">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Status pekerjaan</label>

                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <div class="radio">
                            <label>
                                <input type="radio" class="flat" name="status_pekerjaan" value="PNS"> PNS
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" class="flat" name="status_pekerjaan" value="Karyawan Swasta"> Karyawan swasta
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" class="flat" name="status_pekerjaan" value="Wirausaha"> Wirausaha
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" class="flat" name="status_pekerjaan" value="Tidak bekerja"> Tidak bekerja
                            </label>
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Bidang pekerjaan</label>

                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <div class="radio">
                            <label>
                                <input type="radio" class="flat" name="bidang_pekerjaan" value="IT"> IT
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" class="flat" name="bidang_pekerjaan" value="Admin"> Admin
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" class="flat" name="bidang_pekerjaan" value="Buruh"> Buruh
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" class="flat" name="bidang_pekerjaan" value="Lain-lain"> Lain-lain
                            </label>
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Sub bidang</label>

                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <div class="radio">
                            <label>
                                <input type="radio" class="flat" name="sub_bidang" value="jaringan"> jaringan
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" class="flat" name="sub_bidang" value="programer"> programer
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" class="flat" name="sub_bidang" value="teknik"> teknisi
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" class="flat" name="sub_bidang" value="lain-lain"> lain-lain
                            </label>
                        </div>

                    </div>
                </div>

                <div class="col-md-8 center-margin">
                    <form class="form-horizontal form-label-left">
                        <div class="form-group">
                            <label>Apakah materi perkuliahan dapat diimplementasikan di tempat kerja?</label>

                            <p>
                                Ya:<input type="radio" class="flat" name="materi" id="genderM" value="M"
                                          required/>
                                Tidak:<input type="radio" class="flat" name="materi" id="genderF" value="F"/>
                                Sebagian:<input type="radio" class="flat" name="materi" id="genderM" value="M"
                                                required/>
                                Tidak tahu:<input type="radio" class="flat" name="materi" id="genderM" value="M"
                                                 required/>
                            </p>
                        </div>
                        <div class="form-group">
                            <label>Apakah anda bekerja sesuai bidang perkuliahan?</label>

                            <p>
                                Ya:<input type="radio" class="flat" name="bidang" id="genderM" value="Ya"
                                          required/>
                                Tidak:<input type="radio" class="flat" name="bidang" id="genderF" value="Tidak"/>
                                Sebagian:<input type="radio" class="flat" name="bidang" id="genderM" value="Sebagian"
                                                required/>
                                Tidak tahu:<input type="radio" class="flat" name="bidang" id="genderM" value="Tidak tahu"
                                                  required/>
                            </p>
                        </div>
                        <div class="form-group">
                            <label>Apakah pengalaman organisasi bermanfaat di dunia kerja?</label>

                            <p>
                                Ya:<input type="radio" class="flat" name="organisasi" id="genderM" value="Ya"
                                          required/>
                                Tidak:<input type="radio" class="flat" name="organisasi" id="genderF" value="Tidak"/>
                                Sebagian:<input type="radio" class="flat" name="organisasi" id="genderM" value="Sebagian" required/>
                                Tidak tahu:<input type="radio" class="flat" name="organisasi" id="genderM" value="Tidak tahu"
                                                  required/>
                            </p>
                        </div>
                        <div class="form-group">
                            <label>Apakah nilai IPK dan mata kuliah berpengaruh dalam mencari pekerjaan?</label>

                            <p>
                                Sangat:<input type="radio" class="flat" name="ipk" id="genderM" value="Sangat"
                                              required/>
                                Biasa saja:<input type="radio" class="flat" name="ipk" id="genderF" value="Biasa saja"/>
                                Tidak berpengaruh:<input type="radio" class="flat" name="ipk" id="genderM" value="Tidak berpengaruh"
                                                         required/>
                                Tidak tahu:<input type="radio" class="flat" name="ipk" id="genderM" value="Tidak tahu"
                                                  required/>
                            </p>
                        </div>
                        <div class="form-group">
                            <label>Apakah atituted berpengaruh di dunia kerja?</label>

                            <p>
                                Ya:<input type="radio" class="flat" name="attitude" id="genderM" value="Ya"
                                          required/>
                                Tidak:<input type="radio" class="flat" name="attitude" id="genderF" value="Tidak"/>
                                Sebagian:<input type="radio" class="flat" name="attitude" id="genderM" value="Sebagian"
                                                required/>
                                Tidak tahu:<input type="radio" class="flat" name="attitude" id="genderM" value="Tidak tahu"
                                                  required/>
                            </p>
                        </div>
                    
                </div>

                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Cancel</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
