<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>List Saran</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table class="table table-hover datatable">
            	<thead>
            		<tr>
            			<th>Tanggal</th>
            			<th>Nama</th>
            			<th>Saran</th>
            		</tr>
            	</thead>
            	<tbody>
                <?php
                $query_saran = "select * from saran left join login on saran.id_user=login.id";
                $jalanquery = mysqli_query($konek,$query_saran);
                while($data=mysqli_fetch_array($jalanquery)){
                ?>
            		<tr>
            			<td width="100px"><?php echo date('d-m-Y',strtotime($data['tanggal'])) ?></td>
            			<td width="150px"><?php echo $data['name'] ?></td>
            			<td><?php echo $data['saran'] ?></td>
            		</tr>
                <?php
                }
                ?>
            	</tbody>
            </table>
        </div>
    </div>
</div>