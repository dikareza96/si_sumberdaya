<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
	<?php $this->load->view('_partials/head') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Navbar -->
		<?php $this->load->view('_partials/navbar') ?>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<?php $this->load->view('_partials/sidebar_main.php') ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">

			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">Dashboard Pemantauan Proses Efisiensi Penggunaan Sumber Daya Tahun 2022</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Dashboard</li>
							</ol>
						</div>
					</div>
				</div>
			</div>


			<section class="content">
				<div class="container-fluid">

					<!-- <div class="row">
						<div class="col-lg-3 col-6">

							<div class="small-box bg-info">
								<div class="inner">
									<h3>150</h3>
									<p>New Orders</p>
								</div>
								<div class="icon">
									<i class="ion ion-bag"></i>
								</div>
								<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>

						<div class="col-lg-3 col-6">

							<div class="small-box bg-success">
								<div class="inner">
									<h3>53<sup style="font-size: 20px">%</sup></h3>
									<p>Bounce Rate</p>
								</div>
								<div class="icon">
									<i class="ion ion-stats-bars"></i>
								</div>
								<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>

						<div class="col-lg-3 col-6">

							<div class="small-box bg-warning">
								<div class="inner">
									<h3>44</h3>
									<p>User Registrations</p>
								</div>
								<div class="icon">
									<i class="ion ion-person-add"></i>
								</div>
								<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>

						<div class="col-lg-3 col-6">

							<div class="small-box bg-danger">
								<div class="inner">
									<h3>65</h3>
									<p>Unique Visitors</p>
								</div>
								<div class="icon">
									<i class="ion ion-pie-graph"></i>
								</div>
								<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>

					</div> -->


					<div class="row">

						<section class="col-lg-12 connectedSortable">

							<div class="card" style="display: none">
								<div class="card-header">
									<h3 class="card-title">
										<i class="fas fa-chart-pie mr-1"></i>
										Pemakaian Listrik
									</h3>
									<div class="card-tools">
										<ul class="nav nav-pills ml-auto">
											<li class="nav-item">
												<a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
											</li>
											<li class="nav-item" style="display: none">
												<a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="card-body">
									<div class="tab-content p-0">

										<div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
											<canvas id="areaChart" height="300" style="height: 300px;"></canvas>
										</div>
										<div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
											<canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
										</div>
									</div>
								</div>
							</div>

                           <!-- BAR CHART -->
                           <div class="card card-success" style="display: none">
                              <div class="card-header">
                                <div class="row">
                                  <div class="col-md-8">
                                <h3 class="card-title">Total semua per bulan</h3>
                                </div>
                                <div class="col-md-3">
                                <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" id="tahun" name="tahun">
                    
                                        <option value=""> Pilih Tahun </option>
                                        <?php foreach ($tahun as $row) {?>
                                        <option value="<?php echo $row->tahun?>"> <?php echo $row->tahun?> </option>
                                        <?php }?>
                                    </select>
                                    </div>
                                    <div class="col-md-1">
                                      <div class="card-tools">
                                   
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                                      
                                    </div>
                                </div> 

                             
                                

                                
                        </div>
                        <div class="card-body">
                            <div class="chart">
                              <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                          </div>
                      </div>
                      <!-- /.card-body -->
                  </div>
                  <!-- /.card -->

                      <!-- BAR CHART 1 -->
                           <div class="card card-success">
                              <div class="card-header">
                                <h3 class="card-title">Total tagihan semua meteran</h3>

                                <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button> -->
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                              <canvas id="ctx_1" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                          </div>
                      </div>
                      <!-- /.card-body -->
                  </div>
                  <!-- /.card -->

                   <!-- BAR CHART 2 -->
                           <div class="card card-success">
                              <div class="card-header">
                                <h3 class="card-title">Total tagihan meteran 1</h3>

                                <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button> -->
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                              <canvas id="ctx_2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                          </div>
                      </div>
                      <!-- /.card-body -->
                  </div>
                  <!-- /.card -->

                   


                 <!-- BAR CHART 2 -->
                 <div class="card card-success">
                              <div class="card-header">
                                <h3 class="card-title">Total tagihan meteran 2</h3>

                                <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button> -->
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                              <canvas id="ctx_3" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                          </div>
                      </div>
                      <!-- /.card-body -->
                  </div>
                  <!-- /.card -->

                  <!-- BAR CHART -->
                           <div class="card card-success">
                              <div class="card-header">
                                <h3 class="card-title">Total ID PELANGGAN 4 (514010733050)</h3>

                                <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                              <canvas id="barChart4" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                          </div>
                      </div>
                      <!-- /.card-body -->
                  </div>
                  <!-- /.card -->

                  <!-- BAR CHART -->
                           <div class="card card-success">
                              <div class="card-header">
                                <h3 class="card-title">Total ID PELANGGAN 5 (514010438935)</h3>

                                <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                              <canvas id="barChart5" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                          </div>
                      </div>
                      <!-- /.card-body -->
                  </div>
                  <!-- /.card -->

                  

                  <!-- LINE CHART -->
                  <div class="card card-info" style="display: none">
                      <div class="card-header">
                        <h3 class="card-title">Line Chart</h3>

                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart">
                      <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  </div>
                </div>
              <!-- /.card-body -->
          </div>
          <!-- /.card -->


      </section>


						<!-- <section class="col-lg-5 connectedSortable">




							<div class="card bg-gradient-info">
								<div class="card-header border-0">
									<h3 class="card-title">
										<i class="fas fa-th mr-1"></i>
										Sales Graph
									</h3>
									<div class="card-tools">
										<button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
											<i class="fas fa-minus"></i>
										</button>
										<button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
											<i class="fas fa-times"></i>
										</button>
									</div>
								</div>
								<div class="card-body">
									<canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
								</div>

								<div class="card-footer bg-transparent">
									<div class="row">
										<div class="col-4 text-center">
											<input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">
											<div class="text-white">Mail-Orders</div>
										</div>

										<div class="col-4 text-center">
											<input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">
											<div class="text-white">Online</div>
										</div>

										<div class="col-4 text-center">
											<input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">
											<div class="text-white">In-Store</div>
										</div>

									</div>

								</div>

							</div>




						</section> -->

					</div>

				</div>
			</section>

		</div>
		<!-- /.content-wrapper -->

		<?php $this->load->view('_partials/footer.php') ?>

		<!-- Control Sidebar -->
		<?php $this->load->view('_partials/sidebar_control.php') ?>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<?php $this->load->view('_partials/js.php') ?>
  <script>
    
$(document).ready(function(){
    $('#tahun').change(function(){
        var year = $(this).val();
        if(year != '')
        {
            load_monthwise_data(year);
        }
    });
});

</script>
	<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */



    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
        labels  : ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober','November', 'Desember'],
        datasets: [
        {
            label               : 'Tagihan (Rp)',
            backgroundColor     : 'rgba(60,141,188,0.9)',
            borderColor         : 'rgba(60,141,188,0.8)',
            pointRadius          : false,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [  157392412 ,  150106996, 132084197, 159053053, 154063013, 162204486, 156722899,158393667,169911650,177456650,169535450,167305450 ]
        }
        ,{
            label               : 'Electronics',
            backgroundColor     : 'rgba(210, 214, 222, 1)',
            borderColor         : 'rgba(210, 214, 222, 1)',
            pointRadius         : false,
            pointColor          : 'rgba(210, 214, 222, 1)',
            pointStrokeColor    : '#c1c7d1',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data                : [65, 59, 80, 81, 56, 55, 40, 77,55,44,66,33]
        }
        ,
        ]
    }

var totalData = {
        labels  : ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober','November', 'Desember'],
        datasets: [
        {
            label               : '2022',
            backgroundColor     : 'rgba(60,141,188,0.9)',
            borderColor         : 'rgba(60,141,188,0.8)',
            pointRadius          : false,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [  
19647100
,  17785000
, 14708800
, 3780000
, 3780000
, 3780000
, 3780000
,3780000
,3780000
,3780000
,3780000
,3780000
 ]
        }
       
        ]
    }
    

    var totalData1 = {
        labels  : ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober','November', 'Desember'],
        datasets: [
        {
            label               : 'Tagihan (Rp)',
            backgroundColor     : 'rgba(60,141,188,0.9)',
            borderColor         : 'rgba(60,141,188,0.8)',
            pointRadius          : false,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [  
19647100
,  17785000
, 14708800
, 3780000
, 3780000
, 3780000
, 3780000
,3780000
,3780000
,3780000
,3780000
,3780000
 ]
        }
       
        ]
    }

    var totalData2 = {
        labels  : ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober','November', 'Desember'],
        datasets: [
        {
            label               : 'Tagihan (Rp)',
            backgroundColor     : 'rgba(60,141,188,0.9)',
            borderColor         : 'rgba(60,141,188,0.8)',
            pointRadius          : false,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [  
735352
,  668896
, 641447
, 394403
, 609663
, 548986
, 654449
,226467
,0
,0
,0
,0
 ]
        }
        
        ]
    }

    var totalData3 = {
        labels  : ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober','November', 'Desember'],
        datasets: [
        {
            label               : 'Tagihan (Rp)',
            backgroundColor     : 'rgba(60,141,188,0.9)',
            borderColor         : 'rgba(60,141,188,0.8)',
            pointRadius          : false,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [  
1062900
,  826200
, 1014300
, 1293300
, 1367100
, 1292400
, 1667700
,1998000
,1865700
,1587600
,1602000
,1642500
 ]
        }
       
        ]
    }

    var totalData4 = {
        labels  : ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober','November', 'Desember'],
        datasets: [
        {
            label               : 'Tagihan (Rp)',
            backgroundColor     : 'rgba(60,141,188,0.9)',
            borderColor         : 'rgba(60,141,188,0.8)',
            pointRadius          : false,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [  
126191860
,  121329100
, 106915750
, 143959750
, 138417850
, 146245600
, 141225550
,143871500
,154823050
,163966450
,157028050
,157395550

 ]
        }
         
        ]
    }

    var totalData5 = {
        labels  : ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober','November', 'Desember'],
        datasets: [
        {
            label               : 'Tagihan (Rp)',
            backgroundColor     : 'rgba(60,141,188,0.9)',
            borderColor         : 'rgba(60,141,188,0.8)',
            pointRadius          : false,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [  
9755200
,  9497800
, 8803900
, 9625600
, 9888400
, 10337500
, 9395200
,8517700
,9442900
,8122600
,7125400
,4487400

 ]
        }
       
        ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
      type: 'line',
      data: areaChartData,
      options: areaChartOptions
    })

    //-------------
    //- BAR CHART TOTAL-
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, totalData)
    // var temp0 = totalData.datasets[0]
    // var temp1 = totalData.datasets[1]
    // barChartData.datasets[0] = temp1
    // barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false,
      plugins: {
        datalabels: {
          anchor: 'end',
          align: 'end',
          color: '#333',
          font: {
            weight: 'bold'
        },
        formatter: function(value) {
            return value.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
        }
    }
}
    // ,
    //     scales: {
    //     yAxes: [{
    //         display: true,
    //         ticks: {
    //             suggestedMin: 0,    // minimum will be 0, unless there is a lower value.
    //             // OR //
    //             beginAtZero: true   // minimum value will be 0.
    //         }
    //     }]
    // }
}


    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

     //-------------
    //- BAR CHART TOTAL 1-
    //-------------
    var barChartCanvas = $('#barChart1').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, totalData1)
    // var temp0 = totalData1.datasets[0]
    // var temp1 = totalData1.datasets[1]
    // barChartData.datasets[0] = temp1
    // barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //-------------
    //- BAR CHART TOTAL 2-
    //-------------
    var barChartCanvas = $('#barChart2').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, totalData2)
    // var temp0 = totalData2.datasets[0]
    // var temp1 = totalData2.datasets[1]
    // barChartData.datasets[0] = temp1
    // barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //-------------
    //- BAR CHART TOTAL 3-
    //-------------
    var barChartCanvas = $('#barChart3').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, totalData3)
    // var temp0 = totalData3.datasets[0]
    // var temp1 = totalData3.datasets[1]
    // barChartData.datasets[0] = temp1
    // barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //-------------
    //- BAR CHART TOTAL 4-
    //-------------
    var barChartCanvas = $('#barChart4').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, totalData4)
    // var temp0 = totalData4.datasets[0]
    // var temp1 = totalData4.datasets[1]
    // barChartData.datasets[0] = temp1
    // barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //-------------
    //- BAR CHART TOTAL 5-
    //-------------
    var barChartCanvas = $('#barChart5').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, totalData5)
    // var temp0 = totalData5.datasets[0]
    // var temp1 = totalData5.datasets[1]
    // barChartData.datasets[0] = temp1
    // barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    


    
    
  })
</script>
<script type="text/javascript">

       var warna = {
          'Aqua'       : "#C0CCFF",
          'Aquamarine' : "#7FFFD4",
          'Blue'       : "#0000FF",
          'BlueViolet' : "#8A2BE2",
          'Brown'      : "#A52A2A",
          'CadetBlue'  : "#5F9EA0",
          'Chartreuse' : "#7FFF00",
          'Chocolate'  : "#D2691E",
          'Yellow'     : "#FFFF00",
          'Turquoise'  : "#40E0D0",
          'Red'        : "#FF0000",
          'Gray'       : "#D3D3D3",
          'Green'      : "#ADFF2F",
          'White'      :"#ffffff"
      };
        // var ctx_asal      = document.getElementById('ctx_asal').getContext('2d');

        $.post( "<?= $this->config->item('base_url'); ?>Dashboard/fetch_data_test", function( data ) {
          // var datasets = [];
          var labels = [];
          var jumlah    = [];
          var nama_bulan    = [];
          // var dataJumlah = [];
          // $.each( data, function( key, item ) {
          //   dataJumlah.push(item.jumlah);
          // });
          $.each( data, function( key, value ) {
            // var setData = {
            //   // label : value.periode+'-'+value.nama,
            //   backgroundColor : '#ADFF2F',
            //   data : [value.jumlah]
            // }
            nama_bulan.push([value.bulan]);
            jumlah.push(value.tagihan);
          });
           console.log(jumlah,nama_bulan);
          //  var config_chart = {
          //     labels: nama_bulan,
          //     datasets: [{
          //         label:'2022',
          //         backgroundColor: warna.BlueViolet,
          //         data: jumlah+','
          //     }]
          // };

          var total_test = {
        labels  :nama_bulan,
        datasets: [
        {
            label               : '2022',
            backgroundColor     : 'rgba(54, 162, 235, 0.2)',
            borderColor         : 'rgb(54, 162, 235)',
             borderWidth: 1,
            pointRadius          : false,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : jumlah,
            datalabels          :{
             backgroundColor: function(context) {
          return context.hovered ? context.dataset.borderColor : 'white';
        },
        borderColor: function(context) {
          return context.dataset.borderColor;
        },
             
              anchor:'end',
              align: 'end',
             borderRadius: 16,
               borderWidth: 1,
        color: function(context) {
          return context.hovered ? 'white' : context.dataset.borderColor;
        },
              offset: 8,
        formatter: Math.round,
        listeners: {
          enter: function(context) {
            context.hovered = true;
            return true;
          },
          leave: function(context) {
            context.hovered = false;
            return true;
          }
        },
              labels: {
                title: {
                  font: function(context) {
          var w = context.chart.width;
          return {
            size: w < 512 ? 11 : 13,
            weight: 'bold',
          };
        },
                }
              }
            }//datalabels
        }
       ]
    };
  

    // setting
    var canvas_test = $('#ctx_1').get(0).getContext('2d');
    var barChartData = $.extend(true, {}, total_test);


    // setting option
    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false,

      scales: {
                    xAxes: [{
                        stacked: false,
                        scaleLabel:{
                            display:true,
                            labelString:"Bulan"
                        }
                    }],
                    yAxes: [{
                        stacked: false,
                        scaleLabel:{
                            display:true,
                            labelString:"Tagihan (Rp)"
                        }
                    }]
                }
    }
    
    //initialization
          new Chart(canvas_test, {
            type: 'bar',
            data: barChartData,
             plugins: [ChartDataLabels],
            options: barChartOptions
          });
          // blockUI(false,'#panel-bulan');
          // if(total_kejadian == 0)canvasblockUi('#panel-satu');
        }, "json");

        // fetch data from meteran 2
        $.post( "<?= $this->config->item('base_url'); ?>Dashboard/fetch_data_meteran_2", function( data ) {
       
          var labels = [];
          var jumlah    = [];
          var nama_bulan    = [];
      
          $.each( data, function( key, value ) {
            nama_bulan.push([value.bulan]);
            jumlah.push(value.tagihan);
          });
           
          var total_test = {
        labels  :nama_bulan,
        datasets: [
        {
            label               : '2022',
            backgroundColor     : 'rgba(54, 162, 235, 0.2)',
            borderColor         : 'rgb(54, 162, 235)',
             borderWidth: 1,
            pointRadius          : false,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : jumlah,
            datalabels          :{
             backgroundColor: function(context) {
          return context.hovered ? context.dataset.borderColor : 'white';
        },
        borderColor: function(context) {
          return context.dataset.borderColor;
        },
             
              anchor:'end',
              align: 'end',
             borderRadius: 16,
               borderWidth: 1,
        color: function(context) {
          return context.hovered ? 'white' : context.dataset.borderColor;
        },
              offset: 8,
        formatter: Math.round,
        listeners: {
          enter: function(context) {
            context.hovered = true;
            return true;
          },
          leave: function(context) {
            context.hovered = false;
            return true;
          }
        },
              labels: {
                title: {
                  font: function(context) {
          var w = context.chart.width;
          return {
            size: w < 512 ? 11 : 13,
            weight: 'bold',
          };
        },
                }
              }
            }//datalabels
        }
       ]
    };

    // setting
    var canvas_test = $('#ctx_2').get(0).getContext('2d');
    var barChartData = $.extend(true, {}, total_test);

    // setting option
    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false,

      scales: {
                    xAxes: [{
                        stacked: false,
                        scaleLabel:{
                            display:true,
                            labelString:"Bulan"
                        }
                    }],
                    yAxes: [{
                        stacked: false,
                        scaleLabel:{
                            display:true,
                            labelString:"Tagihan (Rp)"
                        }
                    }]
                }
    }
    
    //initialization
          new Chart(canvas_test, {
            type: 'bar',
            data: barChartData,
             plugins: [ChartDataLabels],
            options: barChartOptions
          });
          // blockUI(false,'#panel-bulan');
          // if(total_kejadian == 0)canvasblockUi('#panel-satu');
        }, "json");

        // fetch data from meteran 3
        $.post( "<?= $this->config->item('base_url'); ?>Dashboard/fetch_data_meteran_3", function( data ) {
       
       var labels = [];
       var jumlah    = [];
       var nama_bulan    = [];
   
       $.each( data, function( key, value ) {
         nama_bulan.push([value.bulan]);
         jumlah.push(value.tagihan);
       });
        
       var total_test = {
     labels  :nama_bulan,
     datasets: [
     {
         label               : '2022',
         backgroundColor     : 'rgba(54, 162, 235, 0.2)',
         borderColor         : 'rgb(54, 162, 235)',
          borderWidth: 1,
         pointRadius          : false,
         pointColor          : '#3b8bba',
         pointStrokeColor    : 'rgba(60,141,188,1)',
         pointHighlightFill  : '#fff',
         pointHighlightStroke: 'rgba(60,141,188,1)',
         data                : jumlah,
         datalabels          :{
          backgroundColor: function(context) {
       return context.hovered ? context.dataset.borderColor : 'white';
     },
     borderColor: function(context) {
       return context.dataset.borderColor;
     },
          
           anchor:'end',
           align: 'end',
          borderRadius: 16,
            borderWidth: 1,
     color: function(context) {
       return context.hovered ? 'white' : context.dataset.borderColor;
     },
           offset: 8,
     formatter: Math.round,
     listeners: {
       enter: function(context) {
         context.hovered = true;
         return true;
       },
       leave: function(context) {
         context.hovered = false;
         return true;
       }
     },
           labels: {
             title: {
               font: function(context) {
       var w = context.chart.width;
       return {
         size: w < 512 ? 11 : 13,
         weight: 'bold',
       };
     },
             }
           }
         }//datalabels
     }
    ]
 };

 // setting
 var canvas_test = $('#ctx_3').get(0).getContext('2d');
 var barChartData = $.extend(true, {}, total_test);

 // setting option
 var barChartOptions = {
   responsive              : true,
   maintainAspectRatio     : false,
   datasetFill             : false,

   scales: {
                 xAxes: [{
                     stacked: false,
                     scaleLabel:{
                         display:true,
                         labelString:"Bulan"
                     }
                 }],
                 yAxes: [{
                     stacked: false,
                     scaleLabel:{
                         display:true,
                         labelString:"Tagihan (Rp)"
                     }
                 }]
             }
 }
 
 //initialization
       new Chart(canvas_test, {
         type: 'bar',
         data: barChartData,
          plugins: [ChartDataLabels],
         options: barChartOptions
       });
       // blockUI(false,'#panel-bulan');
       // if(total_kejadian == 0)canvasblockUi('#panel-satu');
     }, "json");
     
</script>
</body>

</html>