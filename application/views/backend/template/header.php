<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand hidden-xs hidden-sm" href="<?=site_url();?>" target="_blank"> Reservation system CMM</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav hidden-xs hidden-sm">
     
     
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('fname') ?> <?php echo $this->session->userdata('lname') ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="<?=site_url('admin/profile');?>"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="<?=site_url('admin/logout');?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <?php $this->load->view('backend/template/sidebar');?>
</nav>