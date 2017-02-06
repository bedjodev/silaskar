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

        <!--Form Wizard-->
        <link rel="stylesheet" type="text/css" href="../template/moltran/assets/form-wizard/jquery.steps.css" />

        <!-- Custom Files -->
        <link href="../template/moltran/css/helper.css" rel="stylesheet" type="text/css" />
        <link href="../template/moltran/css/style.css" rel="stylesheet" type="text/css" />



        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="../template/moltran/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="../template/moltran/https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="../template/moltran/js/modernizr.min.js"></script>
        
    </head>



    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        <a href="">
            <center>
                <img src="../template/home/images/header.png" style="width: 50%; height: auto;padding-top: 10px">
            </center>            
        </a>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->     
                <!-- Start content -->
                    <!-- Basic Form Wizard -->
                        <div class="row" style="padding-left: 20px;padding-right: 20px; padding-top: 10px">
                            <div class="col-md-12">

                                <div class="panel panel-primary">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Status Pengaduan</h3> 
                                        <h3 class="panel-title"></h3> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <div class="col-lg-12">
                                            <div class="col-md-6">
												<div class="panel panel-primary">
													<div class="panel-heading">
														<h3 class="panel-title">Data Diri Pelapor</h3>
													</div>
													<div class="panel-body">
														<div class="row">
															<div class="col-md-12 col-sm-12 col-xs-12">
																<table class="table table-hover">
																	<tbody>
																		<tr>
																			<td><b>Nomor Pengaduan</b></td>
																			<td>:</td>
																			<td><?php echo $no_peng;?></td>
																		</tr>
																		<tr>
																			<td><b>Nama Pelapor</b></td>
																			<td>:</td>
																			<td>Bedjo Developer</td>
																		</tr>
																		<tr>
																			<td><b>Jenis Kelamin</b></td>
																			<td>:</td>
																			<td>laki - laki</td>
																		</tr>
																		<tr>
																			<td><b>Alamat Rumah</b></td>
																			<td>:</td>
																			<td>Pondok Cabe, Pamulang</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
                                            <div class="col-md-6">
												<div class="panel panel-primary">
													<div class="panel-heading">
														<h3 class="panel-title">Data Ciri Korban</h3>
													</div>
													<div class="panel-body">
														<div class="row">
															<div class="col-md-12 col-sm-12 col-xs-12">
																<table class="table table-hover">
																	<tbody>
																		<tr>
																			<td><b>Nomor Pengaduan</b></td>
																			<td>:</td>
																			<td><?php echo $_POST['nomor_pengaduan'];?></td>
																		</tr>
																		<tr>
																			<td><b>Nama Pelapor</b></td>
																			<td>:</td>
																			<td>Bedjo Developer</td>
																		</tr>
																		<tr>
																			<td><b>Jenis Kelamin</b></td>
																			<td>:</td>
																			<td>laki - laki</td>
																		</tr>
																		<tr>
																			<td><b>Alamat Rumah</b></td>
																			<td>:</td>
																			<td>Pondok Cabe, Pamulang</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
											</div>
                                           
                                        </div>
                                    </div>  <!-- End panel-body -->
                                </div> <!-- End panel -->

                            </div> <!-- end col -->

                            

                        </div> <!-- End row -->
                     <!-- container -->
                               
                 <!-- content -->
                 <footer>
                    <div class="row">
                        <div class="col-lg-12">
                            <p><center>Copyright &copy; SILASKAR BPMPPKB 2017</center></p>
                        </div>
                    </div>
                </footer>

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

        <!--Form Validation-->
        <script src="../template/moltran/assets/form-wizard/bootstrap-validator.min.js" type="text/javascript"></script>

        <!--Form Wizard-->
        <script src="../template/moltran/assets/form-wizard/jquery.steps.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="../template/moltran/assets/jquery.validate/jquery.validate.min.js"></script>

        <!--wizard initialization-->
        <script src="../template/moltran/assets/form-wizard/wizard-init.js" type="text/javascript"></script>

        <script src="../template/moltran/assets/tagsinput/jquery.tagsinput.min.js"></script>
        <script src="../template/moltran/assets/toggles/toggles.min.js"></script>
        <script src="../template/moltran/assets/timepicker/bootstrap-datepicker.js"></script>

         <script>
            jQuery(document).ready(function() {
                    
                // Tags Input
                jQuery('#tags').tagsInput({width:'auto'});

                // Form Toggles
                jQuery('.toggle').toggles({on: true});

                // Date Picker
                jQuery('#datepicker').datepicker();
                jQuery('#datepicker-inline').datepicker();
                jQuery('#datepicker-multiple').datepicker({
                    numberOfMonths: 3,
                    showButtonPanel: true
                });
            });
        </script>
    
    </body>
</html>