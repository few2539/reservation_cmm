<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav" style="overflow-y: hidden; box-shadow: 2px 0px rgba(0,0,0,0.2);">
        <li>
            <img src="<?=base_url();?>assets/backend/img/logo1.png" style="width: 100%;"/>
        </li>
        <li>
            <img src="<?=base_url();?>assets/backend/img/logo2.png" style="width: 100%;"/>
        </li>
        <li>
            <img src="<?=base_url();?>assets/backend/img/logo3.png" style="width: 100%;margin-top:-30px;"/>
        </li>
        <li class="<?php echo activate_menu('vspp'); ?>">
            <a href="<?= site_url('vspp/section1'); ?>"><i class="fa fa-fw fa-home"></i> หน้าแรก</a>
        </li>

        <li class="<?php echo activate_menu('search'); ?>">
            <a href="<?= site_url('search/index'); ?>"><i class="fa fa-fw fa-search"></i> ระบบค้นหาข้อมูล</a>
        </li>

        <li>
            <a href="<?= site_url('login/logout'); ?>"><i class="fa fa-fw fa-sign-out"></i> ออกจากระบบ</a>
        </li>

        <li class="<?php echo activate_menu('data'); ?>">
            <a href="<?= site_url('data/password'); ?>"><i class="fa fa-fw fa-edit"></i> เพิ่มเติมแก้ไข</a>
        </li>
    </ul>
</div>
<!-- /.navbar-collapse -->