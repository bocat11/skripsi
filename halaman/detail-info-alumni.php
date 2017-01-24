<?php
$nim = $_SESSION['nim'];
$query = "select * from cohort_pdpt where nim=$nim LIMIT 1";
$data = mysqli_fetch_array(mysqli_query($konek,$query));
?>
<div class="col-md-6 col-md-offset-3 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Detail Informasi Alumni</h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="text-center">
                <img src="images/user_avatar/<?php echo $_SESSION['avatar'] ?>" alt="" style="max-height: 150px;">
            </div>
            <hr />
            <form action="" class="form-horizontal form-label-left">
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Nim</label>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="text" class="form-control" value="<?php echo $nim ?>" readonly>
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama</label>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="text" class="form-control" value="<?php echo $data['nama'] ?>" readonly>
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Email</label>

                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="text" class="form-control" value="<?php echo $data['email'] ?>">
                        <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Tempat Lahir</label>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="text" class="form-control"
                               data-inputmask="'mask' : '****-****-****-****-****-***'">
                        <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Tanggal Lahir</label>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="text" class="form-control"
                               data-inputmask="'mask' : '****-****-****-****-****-***'">
                        <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Alamat</label>

                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <textarea name="name"  class="form-control" rows="4" cols="80"><?php echo $data['alamat'] ?></textarea>
                        <span class="fa fa-map-marker form-control-feedback right" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tahun masuk <span class="required">*</span>
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required"
                               type="text">
                    </div>
                    <div class="col-md-3">Tahun Keluar</div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <input id="" class="date-picker form-control col-md-7 col-xs-12" required="required"
                               type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Upload CV</label>

                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <input type="file" class="form-control" placeholder="Upload Cv Terbaru">
                        <span class="fa fa-paperclip form-control-feedback right" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group">
                        <button class="btn btn-success btn-block">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
