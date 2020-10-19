<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?= base_url(); ?>">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="<?= base_url(); ?>">St</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="<?php echo $this->uri->segment(1) == '' ? 'active' : ''; ?>">
        <a href="<?= base_url(); ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
      </li>
      <!-- <li class="menu-header">Starter</li>
      <li class="dropdown <?php echo $this->uri->segment(2) == 'layout_default' || $this->uri->segment(2) == 'layout_transparent' || $this->uri->segment(2) == 'layout_top_navigation' ? 'active' : ''; ?>">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
        <ul class="dropdown-menu">
          <li class="<?php echo $this->uri->segment(2) == 'layout_default' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/layout_default">Default Layout</a></li>
          <li><a class="nav-link" href="<?php echo base_url(); ?>dist/layout_transparent">Transparent Sidebar</a></li>
          <li><a class="nav-link" href="<?php echo base_url(); ?>dist/layout_top_navigation">Top Navigation</a></li>
        </ul>
      </li> -->
      <li class="<?php echo $this->uri->segment(1) == 'tagihan' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url('tagihan'); ?>"><i class="far fa-square"></i> <span>Tagihan</span></a></li>
    </ul>
  </aside>
</div>