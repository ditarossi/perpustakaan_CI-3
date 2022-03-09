<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="<?php echo base_url('Dashboard')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li><a href="<?php echo base_url('Anggota')?>"><i class="fa fa-user"></i> Data Anggota </a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-desktop"></i>
            <span>Master Buku</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Pengarang')?>"><i class="fa fa-circle-o"></i> Pengarang </a></li>
            <li><a href="<?php echo base_url('Penerbit')?>"><i class="fa fa-circle-o"></i> Penerbit</a></li>
            <li><a href="<?php echo base_url('Buku')?>"><i class="fa fa-circle-o"></i> Buku</a></li>
          </ul>
        </li>
        <hr>
        <li><a href="<?php echo base_url('Auth/logout')?>"><i class="fa fa-sign-out"></i> Logout</a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>