<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?php echo base_url("dashboard/index");?>" class="brand-link">
		<img src="<?= site_url('assets/img/logo-icon-2.jpg') ?>" alt="<?= $this->config->item('site_name') ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
		<!-- <span class="brand-text font-weight-light"><?= $this->config->item('site_name') ?></span> -->
		<span class="brand-text font-weight-light">SIMASDA</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

				<!-- <li class="nav-item has-treeview menu-open">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Active Page</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Inactive Page</p>
							</a>
						</li>
					</ul>
				</li> -->

				<li class="nav-item">
					<a href="<?php echo base_url("dashboard/index");?>" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
							
						</p>
					</a>
				</li>
				<!-- <li class="nav-item">
					<a href="<?php echo base_url("template/index");?>" class="nav-link">
						<i class="nav-icon fas fa-th"></i>
						<p>
							Input Data
							
						</p>
					</a>
				</li> -->
				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-th"></i>
						<p>
							Input Data
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url("pemakaian_listrik/index");?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Pemakain listrik</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url("Meteran/index");?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Master Meteran </p>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>