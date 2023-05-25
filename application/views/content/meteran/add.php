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
							<h1 class="m-0">Tambah Meteran Listrik</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Meteran Listrik</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
            <?php if($this->session->flashdata('error')){?>
                <div class="alert alert-danger alert-dismissible" id="gagal_popup">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Warning</h4>
                    Gagal menyimpan, data anda kurang lengkap!
                </div>
            <?php }?>

			<section class="content">
			<div class="container-fluid">
			<div class="row">
         <!-- col-md-12 -->
        <div class="col-md-12">
          <!-- card primary -->
          <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url("meteran/store");?>">
          <div class="card card-primary">
            <!-- card header -->
            <div class="card-header">
              <h3 class="card-title">Forms</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- card header -->

          

            <!-- card body -->
            <div class="card-body">

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="inputName">Nomor Pelanggan</label>
                    <input type="text" id="nomor_pelanggan" name="nomor_pelanggan" class="form-control" placeholder="contoh: 514010018113">
                  </div>
                </div>
              </div>
              
            </div>


            <!-- card body -->
            <!-- card footer -->
            <div class="card-footer">
             <div class="row">
              <div class="col-12">
                <a href="<?php echo base_url("meteran/index");?>" class="btn btn-secondary">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-success float-right">
              </div>
            </div>
            </div>

             <!-- card footer -->
             
          </div>
          <!-- card primary -->
        </form>

          
            
          </div>
          <!-- col-md-12 -->

        </div>
        <!-- div row -->
    
     

      
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
     //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    </script>
</body>

</html>