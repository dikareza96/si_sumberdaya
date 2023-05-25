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
							<h1 class="m-0">Detail Pemakaian Listrik</h1>
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
<?php if($this->session->flashdata('error')){?>
                <div class="alert alert-danger alert-dismissible" id="gagal_popup">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Warning</h4>
                    Gagal menyimpan, data anda kurang lengkap!
                </div>
            <?php }?>

			<section class="content">
			
			<div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Forms</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>

         
            <div class="card-body">
               <?php foreach ($pemakaian_listrik as $row) {
            ?>
             <input id="id" name="id" required="required" type="hidden" value="<?php echo $row->id_listrik; ?>">
             <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputName">ID pelanggan</label>
                    <input type="text" id="id_pelanggan" name="id_pelanggan" class="form-control" placeholder="contoh: 514010018113" value="<?php echo $row->id_pelanggan; ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Tahun</label>
                    <input id="tahun" class="form-control" name="tahun" type="number" placeholder="contoh: 2023" value="<?php echo $row->tahun; ?>" disabled> 
                  </div>


                </div>

                <div class="col-md-6">
                   <div class="form-group">
                    <label for="inputName">Bulan</label>
                    <!-- <input type="text" id="bulan" name="bulan" class="form-control" placeholder="contoh: Januari" > -->
                   
                      <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" id="bulan" name="bulan" disabled>
                        <?php foreach($bulan as $row1){?>
                        <option value="<?php echo $row1->id_bulan?>" <?php echo ($row->bulan == $row1->bulan ? 'selected' : ''); ?>><?php echo $row1->bulan?></option>
                      <?php }?>
                     
                      </select>
                  </div>

                   <div class="form-group">
                    <label for="inputName">Tagihan</label>
                    <input type="text" id="tagihan" name="tagihan" class="form-control" value="<?php echo $row->tagihan; ?>"  placeholder="1200000" disabled>
                  </div>


                </div>
              </div>
            <?php }?>
              
            </div>

            <div class="card-footer" >
             <div class="row">
              <div class="col-12">
                <a href="<?php echo base_url("pemakaian_listrik/index");?>" class="btn btn-secondary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success float-right" style="display: none;">

                
              </div>
              

            </div>
            <br>
            <div class="row">
              
            </div>
            <div class="col-12">
                 
                
              </div>
            </div>
          </div>

          
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <!-- /.div -->
     

        

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