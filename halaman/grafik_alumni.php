<div class="row">
  <div class="col-md-8 col-md-offset-2 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Presentase <small>Data Alumni</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>

          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <canvas id="mybarChart"></canvas>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="x_panel">
      <div class="x_title">
        <h2>Alumni Terdaftar Aplikasi</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
        <canvas id="pieChart"></canvas>
      </div>
    </div>
  </div>
</div>

<!-- Chart.js -->
<script src="../vendors/Chart.js/dist/Chart.min.js"></script>

<script type="text/javascript">
var ctx = document.getElementById("mybarChart");
var mybarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Sudah Bekerja", "Wiraswasta", "Bekerja Luar Negeri", "Pengguran", "Tidak Diketahui"],
    datasets: [{
      label: 'Presentase Alumni',
      backgroundColor: "#26B99A",
      data: [50, 15, 5, 10,20]
    }]
  },

  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true,
          max:100
        }
      }]
    }
  }
});

// Pie chart
var ctx = document.getElementById("pieChart");
var data = {
  datasets: [{
    data: [70, 30],
    backgroundColor: [
      "#455C73",
      "#9B59B6",
    ],
    label: 'My dataset' // for legend
  }],
  labels: [
    "Belum Terdaftar",
    "Sudah Terdaftar"
  ]
};

var pieChart = new Chart(ctx, {
  data: data,
  type: 'pie',
  otpions: {
    legend: false
  }
});
</script>
