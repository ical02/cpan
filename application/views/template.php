<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Panel | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo config_item('assets'); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- DATA TABLES -->
    <link href="<?php echo config_item('assets'); ?>plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?php echo config_item('assets'); ?>plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?php echo config_item('assets'); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="<?php echo config_item('assets'); ?>plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo config_item('assets'); ?>dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo config_item('assets'); ?>dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-purple">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo"><b>Admin</b>Panel</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo config_item('assets'); ?>dist/img/user6-128x128.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $this->session->userdata('username');?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo config_item('assets'); ?>dist/img/user6-128x128.jpg" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $this->session->userdata('username');?> sign in as <?php echo $this->session->userdata('levelname');?>
                      <small>Today is <?php echo date('D, m - Y'); ?></small>
                    </p>
                  </li>
                  </li>
                  <!-- Menu Body 
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>-->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat" data-toggle="modal" data-target="#Profile">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo site_url('base/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel 
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>-->
          <!-- search form 
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>-->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?php echo (($this->uri->segment(1) == 'base') ? 'active' : null); ?>">
              <a href="<?php echo site_url('base'); ?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
              </a>
            </li>
			<li class="<?php echo ((($this->uri->segment(1) == 'users')||($this->uri->segment(1) == 'privilege')) ? 'active' : null); ?> treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span> Users</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo (($this->uri->segment(1) == 'users') ? 'active' : null); ?>"><a href="<?php echo site_url('users'); ?>"><i class="fa fa-circle-o"></i> User List</a></li>
                <li class="<?php echo (($this->uri->segment(1) == 'privilege') ? 'active' : null); ?>"><a href="<?php echo site_url('users'); ?>"><a href="<?php echo site_url('privilege'); ?>"><i class="fa fa-circle-o"></i> Privilege</a></li>
              </ul>
            </li>
            <li class="<?php echo (($this->uri->segment(1) == 'help') ? 'active' : null); ?>"><a href="<?php echo site_url('help'); ?>"><i class="fa fa-book"></i> Help</a></li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-danger"></i> Important</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-warning"></i> Warning</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-info"></i> Information</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
	  
	  <!-- Modal -->
		<div class="modal fade" id="Profile" tabindex="-1" role="dialog" aria-labelledby="profile" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="profileModalLabel">Profile</h4>
			  </div>
			  
			  <div class="modal-body">
			    <div class="box-group" id="accordion">
                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                    <div class="panel box box-primary">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            Edit Profile
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="box-body">
                          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('base/do_upload'); ?>" >
							 <div class="container-fluid">
								<div class="row">
								  <div class="col-md-4">
									<img src="<?php echo config_item('assets'); ?>userspic/<?php echo $this->session->userdata('picture');?>" class="img-thumbnail center-block" alt="User Image" />
									<br>
									  
								  </div>
								  <div class="col-md-8">
									  <div class="form-group">
										<label for="profileName">Name</label>
										<input type="text" class="form-control" id="profileName" name="profileName" placeholder="Enter Name" value="<?php echo $this->session->userdata('username');?>" required>
									  </div>
									  <div class="form-group">
										<label for="profileEmail">Email address</label>
										<input type="email" class="form-control" id="profileEmail" name="profileEmail" placeholder="Enter email" value="<?php echo $this->session->userdata('email');?>" required>
									  </div>
									  <div class="form-group">
										<label for="inputPicture">Profile picture</label>
										<input type="file" id="inputPicture" name="userfile">
										<p class="help-block">image type *.jpg</p>
									  </div>
									  <button type="submit" class="btn btn-primary btn-flat pull-right">Save changes</button>
								  </div>
								</div>
							  </div>
							</form>
                        </div>
                      </div>
                    </div>
                    <div class="panel box box-danger">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            Change Password
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="box-body">
                          <form method="post" action="<?php echo site_url('base/newpass'); ?>">
							 <div class="container-fluid">
								<div class="row">
								  <div class="col-md-12">
									  <div class="form-group">
										<label for="profile_pass0">Current Password</label>
										<input type="password" class="form-control" id="profile_pass0" name="profile_pass0" placeholder="Current Password" required>
									  </div>
									  <div class="form-group">
										<label for="profile_pass1">New Password</label>
										<input type="password" class="form-control" id="profile_pass1" name="profile_pass1" placeholder="Password" required>
									  </div>
									  <div class="form-group">
										<label for="profile_pass2">Confirm New Password</label>
										<input type="password" class="form-control" id="profile_pass2" name="profile_pass2" placeholder="Confirm Password" required>
									  </div>
									  <button type="submit" class="btn btn-primary btn-flat pull-right">Save changes</button>
								  </div>
								</div>
							  </div>
							</form>
                        </div>
                      </div>
                    </div>
                  </div>
				  
			    
				
				
			  </div>
			  <div class="modal-footer">
				
			  </div>
			  
			</div>
		  </div>
		</div>
        <?php 
			if(isset($content))
			{
				echo $content;
			}
		?>
          
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> x.x
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="#">Panel</a>.</strong> All rights reserved.
      </footer>

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="<?php echo config_item('assets'); ?>plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo config_item('assets'); ?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo config_item('assets'); ?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo config_item('assets'); ?>dist/js/app.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="<?php echo config_item('assets'); ?>plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="<?php echo config_item('assets'); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="<?php echo config_item('assets'); ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="<?php echo config_item('assets'); ?>plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="<?php echo config_item('assets'); ?>plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?php echo config_item('assets'); ?>plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="<?php echo config_item('assets'); ?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="<?php echo config_item('assets'); ?>plugins/chartjs/Chart.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) 
    <script src="dist/js/pages/dashboard2.js" type="text/javascript"></script>
	-->
    <!-- AdminLTE for demo purposes 
    <script src="dist/js/demo.js" type="text/javascript"></script>
	-->
	<?php 
		if(isset($jscript))
		{
			echo $jscript;
		}
	?>
  </body>
</html>