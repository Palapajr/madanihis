<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">MadaniHIS</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="">MHIS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="<?php if ($menu == "dashboard") {
                            echo "active";
                        } ?>">
                <a class="nav-link" href="<?php echo base_url(); ?>"><i class="fas fa-th"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Master</li>

            <li class="<?php if ($menu == "user") {
                            echo "active";
                        } ?>">
                <a class="nav-link" href="<?php echo base_url(); ?>user"><i class="far fa-user"></i> <span>Master User</span></a>
            </li>

            <!-- <li class="<?php if ($menu == "unit") {
                                echo "active";
                            } ?>">
                <a class="nav-link" href="<?php echo base_url(); ?>unit"><i class="far fa-square"></i> <span>Master Unit</span></a>
            </li> -->

        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://wa.me/+6282287735072" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-phone"></i> Hubungi Saya
            </a>
        </div>
    </aside>
</div>