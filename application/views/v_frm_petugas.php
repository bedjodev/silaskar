<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>Moltran - Responsive Admin Dashboard Template</title>

        <!-- Base Css Files -->
        <link href="../template/moltran/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="../template/moltran/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="../template/moltran/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="../template/moltran/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="../template/moltran/css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="../template/moltran/css/waves-effect.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="../template/moltran/css/helper.css" rel="stylesheet" type="text/css" />
        <link href="../template/moltran/css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="template/moltran/js/modernizr.min.js"></script>
        
    </head>



    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
			<?php 
				$this->load->view('top_bar');
				$this->load->view('side_bar');
			?>
             <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Blank Page</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Pages</a></li>
                                    <li class="active">Blank Page</li>
                                </ol>
                            </div>
                        </div>
					<?php 
						$tambah=$this->input->get()
					?>
						<div class="row">
							<div class="col-md-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><h3 class="panel-title">Form Tambah Petugas</h3></div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('dashboard_petugas/tambah_petugas_aksi');?>">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Nama</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="nama" placeholder="Nama">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Kontak</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="kontak" placeholder="Kontak">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Username</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="username" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Password</label>
                                                <div class="col-sm-9">
                                                  <input type="password" class="form-control" name="password" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Level</label>
                                                <div class="col-sm-9">
                                                  <select class="form-control" name="level">
													<option value="1">Admin</option>
													<option value="2">Petugas</option>
												  </select>
                                                </div>
                                            </div>
                                            <div class="form-group m-b-0">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                  <button type="submit" class="btn btn-info waves-effect waves-light">Sign in</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
						</div>
						</div>
                        <!-- Pls Remove -->
                        <div style="height:600px;"></div>


                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © Moltran.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            


        </div>
        <!-- END wrapper -->
    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="../template/moltran/js/jquery.min.js"></script>
        <script src="../template/moltran/js/bootstrap.min.js"></script>
        <script src="../template/moltran/js/waves.js"></script>
        <script src="../template/moltran/js/wow.min.js"></script>
        <script src="../template/moltran/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="../template/moltran/js/jquery.scrollTo.min.js"></script>
        <script src="../template/moltran/assets/jquery-detectmobile/detect.js"></script>
        <script src="../template/moltran/assets/fastclick/fastclick.js"></script>
        <script src="../template/moltran/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="../template/moltran/assets/jquery-blockui/jquery.blockUI.js"></script>


        <!-- CUSTOM JS -->
        <script src="../template/moltran/js/jquery.app.js"></script>
	
	</body>
</html>