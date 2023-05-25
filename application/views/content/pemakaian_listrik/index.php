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
							<h1 class="m-0">Pemakaian Listrik</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Pemakaian Listrik</li>
							</ol>
						</div>
					</div>
				</div>
			</div>


			<section class="content">
				<div class="container-fluid">

					


					<div class="row">

						<section class="col-lg-12 connectedSortable">

              <div class="card">
     
                <div class="card-header">
                  <h3 class="card-title">Data id pelanggan per pebulan</h3>
              

                </div>

                <div class="card-body row">  
                  <div class="col-md-10">

          <!-- <h3 class="box-title">Rumah sakit telah melakukan pelayanan dan asuhan yang terintegrasi serta terkoordinasi kepada setiap pasien.  </h3>
            <br> -->

                  </div>

                  <div class="col-md-2">
                    <a href="<?php echo base_url("pemakaian_listrik/create");?>" class="btn btn-block bg-gradient-primary"> <i class="fas fa-plus"></i>Tambah</a>
                  </div>
                </div>  
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="datatable" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>ID Pelanggan</th>
                        <th>Tahun</th>
                        <th>Bulan</th>
                        <th>Tagihan</th>
                        <th>AKSI</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php $no=1; 
                     foreach ($pemakaian_listrik as $row) {
                      ?>
                      <tr>
                        <td><?php echo $no++?></td>
                        <td><?php echo $row->nomor_pelanggan?></td>
                        <td><?php echo $row->tahun?></td>
                        <td><?php echo $row->bulan?></td>
                        <td>Rp. <?php echo  number_format($row->tagihan,2,",",".")?></td>
                        <td>
                      <form method="POST" action="<?php echo base_url("pemakaian_listrik/hapus/$row->id_listrik") ?>" accept-charset="UTF-8">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-primary btn-sm" href="<?php echo base_url("pemakaian_listrik/detail/$row->id_listrik") ?>">
                              <i class="fas fa-folder">
                              </i>
                              Lihat
                            </a>

                             <a class="btn btn-warning btn-sm" href="<?php echo base_url("pemakaian_listrik/edit/$row->id_listrik") ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Ubah
                            </a>
                            <input name="_method" type="hidden" value="DELETE">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data ini?');">
                            <i class="fas fa-trash"></i> Hapus
                          </button>
                            <!-- <a class="btn btn-danger btn-sm" href="#">
                                  <i class="fas fa-trash"></i>
                                  Hapus
                            </a> -->


                          </div>
                        </form>
                        </td>
                      </tr>
                       <?php } ?>


                    </tbody>
                    <tfoot>
                      <tr>
                       <th>No.</th>
                        <th>ID Pelanggan</th>
                        <th>Tahun</th>
                        <th>Bulan</th>
                        <th>Tagihan</th>
                        <th>AKSI</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>

            </section>

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
		 $(function () {
    $("#datatable").DataTable({
      "responsive": true, 
      "lengthChange": false, 
      "autoWidth": false,
      'paging'      : true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
  });
    </script>
</body>

</html>