<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="<?php echo activate_menu('admin'); ?>">
            <a href="<?= site_url('admin/dashboard'); ?>"><i class="fa fa-fw fa-dashboard"></i> หนัาหลัก/ภาพรวม</a>
        </li>
        <li class="<?php echo activate_menu('aboutus'); ?>">
            <a href="<?= site_url('aboutus/admin'); ?>"><i class="fa fa-fw fa-plus"></i> เพิ่ม / แก้ไข อุปกรณ์</a>
        </li>
        <li class="hidden-md hidden-lg">
            <a href="<?php site_url('admin/user/profile'); ?>"><i class="fa fa-fw fa-desktop"></i> Profile</a>
        </li>
        <li>
            <a href="<?= site_url('admin/logout'); ?>"><i class="fa fa-fw fa-dashboard"></i> ออกจากระบบ</a>
        </li>
    </ul>
</div>
<!-- /.navbar-collapse -->