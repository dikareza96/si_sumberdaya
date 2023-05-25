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
							<h1 class="m-0">Tambah Pemakaian Listrik</h1>
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

          <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url("pemakaian_listrik/store");?>">
            <div class="card-body">

              <div class="row">
                <div class="col-md-6">

                 <!--  <div class="form-group">
                    <label for="inputName">ID pelanggan</label>
                    <input type="text" id="id_pelanggan" name="id_pelanggan" class="form-control" placeholder="contoh: 514010018113">
                  </div> -->

                  <div class="form-group">
                    <label for="inputName">ID Pelanggan</label>
                    <!-- <input type="text" id="bulan" name="bulan" class="form-control" placeholder="contoh: Januari" > -->
                      <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" id="id_pelanggan" name="id_pelanggan">
                        <?php foreach ($id_pelanggan as $row) { ?>
                                        <option value="<?php echo $row->id_meteran; ?>">
                                          <?php echo $row->nomor_pelanggan; ?></option>
                                        <?php } ?>
                       
                      </select>
                  </div>

                  <div class="form-group">
                    <label for="inputDescription">Tahun</label>
                    <input id="tahun" class="form-control" name="tahun" type="number" min="1900" max="2099" step="1" placeholder="contoh: 2023">
                  </div>

                 <!--   <div class="form-group">
                    <label for="inputName">Januari</label>
                    <input type="text" id="januari" name="januari" class="form-control" placeholder="contoh: 12000000">
                  </div>

                  <div class="form-group">
                    <label for="inputName">Februari</label>
                    <input type="text" id="februari" name="februari" class="form-control" placeholder="contoh: 12000000" >
                  </div>

                  <div class="form-group">
                    <label for="inputName">Maret</label>
                    <input type="text" id="maret" name="maret" class="form-control" placeholder="contoh: 12000000" >
                  </div>

                  <div class="form-group">
                    <label for="inputName">April</label>
                    <input type="text" id="april" name="april" class="form-control" placeholder="contoh: 12000000" >
                  </div>

                  <div class="form-group">
                    <label for="inputName">Mei</label>
                    <input type="text" id="mei" name="mei"class="form-control" placeholder="contoh: 12000000" >
                  </div>

                  <div class="form-group">
                    <label for="inputName">Juni</label>
                    <input type="text" id="juni" name="juni" class="form-control" placeholder="contoh: 12000000" >
                  </div> -->

                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputName">Bulan</label>
                    <!-- <input type="text" id="bulan" name="bulan" class="form-control" placeholder="contoh: Januari" > -->
                      <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" id="bulan" name="bulan">
                        <?php foreach($bulan as $row){?>
                        <option value="<?php echo $row->id_bulan?>"><?php echo $row->bulan?></option>
                       <?php }?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="inputName">Tagihan</label>
                    <input type="text" id="tagihan" name="tagihan" class="form-control" value=""  placeholder="1200000">
                  </div>
                 <!--  <div class="form-group">
                    <label for="inputName">September</label>
                    <input type="text" id="september" name="september" class="form-control" placeholder="contoh: 12000000" >
                  </div>
                  <div class="form-group">
                    <label for="inputName">Oktober</label>
                    <input type="text" id="oktober" name="oktober" class="form-control" placeholder="contoh: 12000000" >
                  </div>
                  <div class="form-group">
                    <label for="inputName">November</label>
                    <input type="text" id="november" name="november" class="form-control" placeholder="contoh: 12000000" >
                  </div>
                  <div class="form-group">
                    <label for="inputName">Desember</label>
                    <input type="text" id="desember" name="desember" class="form-control" placeholder="contoh: 12000000" >
                  </div> -->


                </div>
              </div>
              
            </div>
            <div class="card-footer">
             <div class="row">
              <div class="col-12">
                <a href="<?php echo base_url("pemakaian_listrik/index");?>" class="btn btn-secondary">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-success float-right">

                
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
     //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

$("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() { 
      formatCurrency($(this), "blur");
    }
});


function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  
  // get input value
  var input_val = input.val();
  
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(".") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }
    
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = "Rp" + left_side + "." + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = "Rp" + input_val;
    
    // final formatting
    if (blur === "blur") {
      input_val += ".00";
    }
  }
  
  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}

</script>
</body>

</html>