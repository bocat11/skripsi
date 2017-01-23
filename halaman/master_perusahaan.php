<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Master Perusahaan</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table class="table table-hover datatable table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Perusahaan</th>
                    <th>Bidang Usaha</th>
                    <th>Alamat</th>
                    <th>Details</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no=1;
                $query = "select * from master_perusahaan";
                $jalanquery = mysqli_query($konek,$query);
                while($data=mysqli_fetch_array($jalanquery)){
                    ?>
                    <tr>
                        <td width="50px"><?php echo $no ?></td>
                        <td><?php echo $data['nama_perusahaan'] ?></td>
                        <td><?php echo $data['bidang_usaha'] ?></td>
                        <td><?php echo $data['alamat_perusahaan'] ?></td>
                        <td width="150px"><a href="index.php?hal=detail-perusahaan&id=<?php echo $data['id_perusahaan'] ?>" class="btn btn-info">Detail</a><a href="#" class="btn btn-danger">Hapus</a></td>
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