<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <?php if($_SESSION['level'] == "admin"){
                echo "<a href=\"index.php?hal=tambah-lowongan\" class=\"btn btn-success\"><h2>Tambah Loker</h2></a>";
            } else {
                echo "<h2>Data Lowongan Kerja</h2>";
            }
            ?>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                            class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <?php
            $no = 1;
            $sql = "SELECT * FROM `loker` ";
            $hasil = mysqli_query($konek, $sql);
            while ($data = mysqli_fetch_array($hasil)) {
            ?>
            <table id='datatable' class='table table-striped table-bordered'>
                <thead>
                <tr>
                    <th> No.</th>
                    <th> Nama_perusahaan</th>
                    <th>Posisi</th>
                    <th>Batas_waktu</th>
                    <th>Alamat</th>
                    <th>No_telp</th>
                    <th>Email</th>
                    <th>action</th>
                </tr>
                </thead>
                <tbody>
                <td><?php echo $no ?></td>
                <td><?php echo $data['nama_perusahaan'] ?></td>
                <td><?php echo $data['posisi'] ?></td>
                <td><?php echo $data['batas_waktu'] ?></td>
                <td><?php echo $data['alamat'] ?></td>
                <td><?php echo $data['no_telp'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td></td>
                <?php
                $no++;
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>