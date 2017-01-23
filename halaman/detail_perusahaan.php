<?php
$id = $_GET['id'];
$queryDetail = "select * from master_perusahaan where id_perusahaan=$id";
$detail = mysqli_fetch_array(mysqli_query($konek, $queryDetail));
?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Detail Perusahaan</h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="form-group">
                <form class="form-horizontal form-label-left">
                    <input type="hidden" value="<?php echo $id ?>">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Nama Perusahan</label>
                                        <input class="form-control" name="namaPerusahan" value="<?php echo $detail['nama_perusahaan'] ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>No Telepon</label>
                                        <input class="form-control" name="telepon" value="<?php echo $detail['telepon'] ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Bidang Usaha</label>
                                        <input class="form-control" name="bidangUsaha" value="<?php echo $detail['bidang_usaha'] ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>PIC</label>
                                        <input class="form-control" name="namaPic" value="<?php echo $detail['nama_pic'] ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>No Telepon PIC</label>
                                        <input class="form-control" name="tlp_pic" value="<?php echo $detail['tlp_pic'] ?>" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Alamat Kantor</label>
                                        <textarea name="alamat" id="" cols="30" rows="4"
                                                  class="form-control" disabled><?php echo $detail['alamat_perusahaan'] ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan Informasi Perusahaan</label>
                                        <textarea name="keterangan" id="" cols="30" rows="8" class="form-control" disabled><?php echo $detail['keterangan'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
