<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-0">
        <span class="logo-mini"><b>SP</b></span>
    </div>
    <div class="sidebar-brand-text mx-3"> Padi </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?php echo base_url()."index.php/ctrl"?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Menu
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="<?php echo base_url()."index.php/ctrl/diagnosa"?>">
        <i class="fas fa-fw fa-search-plus"></i>
        <span>Diagnosa</span></a>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="<?php echo base_url()."index.php/ctrl/histori"?>">
        <i class="fas fa-fw fa-history"></i>
        <span>History</span></a>
</li>

<!-- Nav Item - Pages Collapse Menu -->

<?php 
    // print_r($user);
    if($user){
        echo '
        <li class="nav-item">
            <a class="nav-link" href="'.base_url()."index.php/ctrl/admin".'">
                <i class="fas fa-fw fa-users"></i>
                <span>User</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="'.base_url()."index.php/ctrl/inputPenyakit".'">
                <i class="fas fa-fw fa-bug"></i>
                <span>Penyakit</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="'.base_url()."index.php/ctrl/gejala".'">
                <i class="fas fa-fw fa-flask"></i>
                <span>Gejala</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="'.base_url()."index.php/ctrl/aturan".'">
                <i class="fas fa-fw fa-compress text"></i>
                <span>Aturan</span>
            </a>
        </li>';
    }else{
        echo '
            <li class="nav-item">
                <a class="nav-link" href="'.base_url()."index.php/ctrl/keterangan".'">
                    <i class="fas fa-fw fa-comment"></i>
                    <span>Keterangan</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="'.base_url()."index.php/ctrl/login".'">
                    <i class="fas fa-fw fa-key"></i>
                    <span>login</span></a>
            </li>

        ';
    }
?>
 <!-- Nav Item - User Collapse Menu -->


<!-- Nav Item - Gejala Collapse Menu -->


<!-- Nav Item - Login -->

<!-- Nav Item - Tentang -->
<li class="nav-item">
    <a class="nav-link" href="<?php echo base_url()."index.php/ctrl/tentang"?>">
        <i class="fa fa-info-circle"></i>
        <span>Tentang</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
</ul>
<!-- End of Sidebar -->