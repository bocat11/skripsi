    <div class="row clearfix">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tambah Loker</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false"><i class="fa fa-wrench"></i></a>
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

                    include "koneksi.php";
                    $no = 1;
                    $sql = "SELECT * FROM `kuesioner` ";
                    $hasil = mysqli_query($konek, $sql);
                    while ($data = mysqli_fetch_array($hasil)) {

                        echo "
	  <table id='datatable' class='table table-striped table-bordered'>
                      <thead>
                        <tr>
                          <th> No. </th>
						   <th> NIM </th>
						  <th> " . $data['q1'] . "</th>
			              <th>" . $data['q2'] . "</th>
						<th>" . $data['q3'] . "</th>
						<th>" . $data['q4'] . "</th>
						<th>" . $data['q5'] . "</th>
						<th>" . $data['q6'] . "</th>
						<th>" . $data['q7'] . "</th>
					   <th>" . $data['q8'] . "</th>
						<th> " . $data['q9'] . "
						  </th>

                          <th>action</th>
                        </tr>
                      </thead>



	  <td>" . $data['id_kuesioner'] . "</td>
	  <td>" . $data['nim'] . "</td>

	    <td>" . $data['a1'] . "</td>

	    <td>" . $data['a2'] . "</td>

	    <td>" . $data['a3'] . "</td>

	    <td>" . $data['a4'] . "</td>

	    <td>" . $data['a5'] . "</td>

	    <td>" . $data['a6'] . "</td>

	    <td>" . $data['a7'] . "</td>

	    <td>" . $data['a8'] . "</td>

	    <td>" . $data['a9'] . "</td>


			";
                        $no++;
                    }

                    ?>

                    </table>
                </div>
            </div>
        </div>


