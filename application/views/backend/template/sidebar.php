<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="<?php echo activate_menu('admin'); ?>">
            <a href="<?= site_url('admin/add_email'); ?>"><i class="fa fa-fw fa-dashboard"></i> Add teacher email </a>
        </li>
        <li class="<?php echo activate_menu('product'); ?>">
            <a href="<?= site_url('product/admin'); ?>"><i class="fa fa-fw fa-plus"></i> Add / Edit device </a>
        </li>

         <li class="<?php echo activate_menu('repatriate'); ?>">
            <a href="<?= site_url('repatriate/index'); ?>"><i class="fa fa-fw fa-refresh"></i> Devices of Repatriation</a>
        </li>


        <li class="<?php echo activate_menu('waiting'); ?>">
            <a href="<?= site_url('waiting/index'); ?>"><i class="fa fa-fw fa-envelope-o"></i> Waiting for approval</a>
        </li>

         <li class="<?php echo activate_menu('backon'); ?>">
            <a href="<?= site_url('backon/index'); ?>"><i class="fa fa-fw fa-exchange"></i> History of reservation</a>
        </li>

    </ul>
</div>
<!-- /.navbar-collapse -->