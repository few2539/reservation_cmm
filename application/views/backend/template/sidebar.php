<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="<?php echo activate_menu('admin'); ?>">
            <a href="<?= site_url('admin/dashboard'); ?>"><i class="fa fa-fw fa-dashboard"></i> หนัาหลัก/ภาพรวม</a>
        </li>
        <li class="<?php echo activate_menu('aboutus'); ?>">
            <a href="<?= site_url('aboutus/admin'); ?>"><i class="fa fa-fw fa-plus"></i> About us/เกี่ยวกับเรา</a>
        </li>
        <li class="<?php echo activate_menu('activity'); ?>">
            <a href="<?= site_url('activity/admin'); ?>"><i class="fa fa-fw fa-bar-chart-o"></i> กิจกรรม / Activity</a>
        </li>
        <li class="<?php echo activate_menu('contact'); ?>">
            <a href="<?= site_url('contact/admin'); ?>"><i class="fa fa-fw fa-table"></i> Contact / ติดต่อเรา<br/><?=nbs(4);?>การทำงาน</a>
        </li>
        <li class="<?php echo activate_menu('course'); ?>">
            <a href="<?= site_url('course/admin'); ?>"><i class="fa fa-fw fa-edit"></i> Course / หลักสูตร</a>
        </li>
        <li class="<?php echo activate_menu('download'); ?>">
            <a href="<?= site_url('download/admin'); ?>"><i class="fa fa-fw fa-line-chart"></i> Download / บริการออนไลน์</a>
        </li>
        <li class="<?php echo activate_menu('news'); ?>">
            <a href="<?= site_url('news/admin'); ?>"><i class="fa fa-fw fa-line-chart"></i> News / ข่าวสาร</a>
        </li>
        <li class="<?php echo activate_menu('research'); ?>">
            <a href="<?= site_url('research/admin'); ?>"><i class="fa fa-fw fa-line-chart"></i> Research / งานวิจัย</a>
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