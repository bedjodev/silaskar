<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>SILASKAR - Sign In Petugas</title>

        <!-- Base Css Files -->
        <link href="template/moltran/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="template/moltran/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="template/moltran/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="template/moltran/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="template/moltran/css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="template/moltran/css/waves-effect.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="template/moltran/css/helper.css" rel="stylesheet" type="text/css" />
        <link href="template/moltran/css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="template/moltran/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="template/moltran/https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="template/moltran/js/modernizr.min.js"></script>
        
    </head>
    <body style="background: url('template/home/images/img.jpg')">
        <div class="wrapper-page">

        <center><img src="template/home/images/header.png" style="width: 400px; height: auto; padding-bottom: 20px"></center>
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                    <h3 class="text-center m-t-10 text-white"> Sign In <strong>SILASKAR</strong> </h3>
                </div> 


                <div class="panel-body">
                <form class="form-horizontal m-t-20" method="post" action=<?php echo base_url("login_petugas/aksi_login");?>>
                    
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control input-lg " name="username" type="text" required="" placeholder="Username">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" name="password" type="password" required="" placeholder="Password">
                        </div>
                    </div>
                    
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>
                </form> 
                </div>                                 
                
            </div>
        </div>

        
    	<script>
            var resizefunc = [];
        </script>
    	<script src="template/moltran/js/jquery.min.js"></script>
        <script src="template/moltran/js/bootstrap.min.js"></script>
        <script src="template/moltran/js/waves.js"></script>
        <script src="template/moltran/js/wow.min.js"></script>
        <script src="template/moltran/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="template/moltran/js/jquery.scrollTo.min.js"></script>
        <script src="template/moltran/assets/jquery-detectmobile/detect.js"></script>
        <script src="template/moltran/assets/fastclick/fastclick.js"></script>
        <script src="template/moltran/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="template/moltran/assets/jquery-blockui/jquery.blockUI.js"></script>


        <!-- CUSTOM JS -->
        <script src="template/moltran/js/jquery.app.js"></script>
	
	</body>
</html>