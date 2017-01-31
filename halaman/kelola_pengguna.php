<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <a href="index.php?hal=tambah-pertanyaan" class="btn btn-success"><h2>Tambah Pertanyaan</h2></a>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Username</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no=1;
              $query = "select * from login";
              $jalankan = mysqli_query($konek,$query);
              while ($data=mysqli_fetch_array($jalankan)) {
                ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $data['nim']?></td>
                  <td><?php echo $data['username']?></td>
                  <td><a href="index.php?hal=kelola-detail-alumni&id=<?php echo $data['id'] ?>" class="btn btn-info">Kelola</a></td>
                </tr>
                <?php
                $no++;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
</div>
