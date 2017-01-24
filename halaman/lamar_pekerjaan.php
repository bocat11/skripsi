<?php
$id = $_GET['id'];
$data = mysqli_fetch_array(mysqli_query($konek,"select * from loker where id_loker='$id'"));
?>
<div class="col-md-8 col-md-offset-2">
  <div class="x_panel">
    <form class="form-horizontal" method="post">
      <div class="x_title">
          <button type="button" class="btn btn-info btn-block" name="button">Lamar Pekerjaan</button>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <div class="form-group">
          <label for="">Nama Perusahaan</label>
          <input type="text" class="form-control" value="<?php echo $data['nama_perusahaan'] ?>" readonly="">
        </div>
        <div class="form-group">
          <label for="">Alamat</label>
          <textarea name="name" rows="4" cols="80" class="form-control" readonly=""><?php echo $data['alamat'] ?></textarea>
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="text" class="form-control" value="<?php echo $data['email'] ?>" readonly="">
        </div>
        <div class="form-group">
          <label for="">Posisi Yang Dibutuhkan</label>
          <input type="text" class="form-control" value="<?php echo $data['posisi'] ?>" readonly="">
        </div>
        <div class="form-group">
          <label for="">Aktiv Sampai Tanggal</label>
          <input type="text" class="form-control" value="<?php echo $data['batas_waktu'] ?>" readonly="">
        </div>
        <div class="form-group">
          <label for="">Keterangan</label>
          <textarea name="name" rows="4" cols="80" class="form-control" readonly="">
          The Indonesia-based PT Mitra Integrasi Informatika ( MII ), was founded on May 1,  1996 as a subsiadiary of the publicly listed PT. Metrodata Elektronics, TBK . Widely recoqnized for its consisten dedication to both enterprise and corporate segments.
          </textarea>
        </div>
      </div>
    </form>
  </div>
</div>
