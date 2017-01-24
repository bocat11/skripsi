<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <?php if($_SESSION['level'] == "admin"){
                echo "<a href=\"index.php?hal=tambah-lowongan\" class=\"btn btn-success\"><h2>Tambah Loker</h2></a>";
            } else {
                echo "<h2>List Lowongan Kerja</h2>";
            }
            ?>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <?php
            $no = 1;
            $sql = "SELECT * FROM `loker` ";
            $hasil = mysqli_query($konek, $sql);
            ?>
            <table id='datatable' class='table table-striped '>
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Perusahaan</th>
                    <th>Posisi</th>
                    <th>Alamat</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($data = mysqli_fetch_array($hasil)) {
                ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $data['nama_perusahaan'] ?></td>
                  <td><?php echo $data['posisi'] ?></td>
                  <td><?php echo $data['alamat'] ?></td>
                  <td class="text-center" width="150px">
                    <a href="index.php?hal=lamar-pekerjaan&id=<?php echo $data['id_loker'] ?>" class="btn btn-info">Kirim Lamaran</a>
                  </td>
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
