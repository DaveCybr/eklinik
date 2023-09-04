<?php

$uri1 = $this->uri->segment(1);

?>

<li class="nav-item <?php if($uri1 == 'Home') : ?> active <?php endif; ?>">
	<a class="nav-link" href="<?php echo base_url('Home') ?>">
		<i class="fas fa-fw fa-tachometer-alt"></i>
		<span>Dashboard</span></a
	>
</li>
<hr class="sidebar-divider" />
<div class="sidebar-heading">Master Data</div>
<li class="nav-item <?php if($uri1 == 'Departemen') : ?> active <?php endif; ?> active">
	<a
		class="nav-link collapsed"
		href="#"
		data-toggle="collapse"
		data-target="#collapseBootstrap"
		aria-expanded="true"
		aria-controls="collapseBootstrap"
	>
		<i class="far fa-fw fa-window-maximize"></i>
		<span>Master Data</span>	
	</a>
	<div
		id="collapseBootstrap"
		class="collapse <?php if($uri1) : ?> show <?php endif; ?>"
		aria-labelledby="headingBootstrap"
		data-parent="#accordionSidebar"
	>
		<div class="bg-white py-2 collapse-inner rounded ">
			<h6 class="collapse-header">Master Data</h6>
			<a class="collapse-item <?php if($uri1 == 'Departemen') : ?> active <?php endif; ?>" href="<?= base_url('Departemen'); ?>">Departemen</a>
			<a class="collapse-item <?php if($uri1 == 'Dokter') : ?> active <?php endif; ?>" href="<?= base_url('Dokter'); ?>">Dokter</a>
		</div>
	</div>
</li>
