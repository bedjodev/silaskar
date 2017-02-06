<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SILASKAR - BPMPPKB</title>

    <!-- Bootstrap Core CSS -->
    <link href="template/home/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="template/home/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="template/home/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- Plugins css -->
    <link href="template/moltran/assets/modal-effect/css/component.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="template/home/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="template/home/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        
    #slider {
      position: relative;
      overflow: hidden;
      border-radius: 4px;
    }

    #slider ul {
      position: relative;
      margin: 0;
      padding: 0;
      width: auto;
      height: 200px;
      list-style: none;
    }

    #slider ul li {
      position: relative;
      display: block;
      float: left;
      margin: 0;
      padding: 0;
      width: 360px;
      height: 230px;
      background: #ccc;
      text-align: center;
      line-height: 300px;
    }

    a.control_prev, a.control_next {
      position: absolute;
      top: 40%;
      z-index: 999;
      display: block;
      padding: 4% 3%;
      width: auto;
      height: auto;
      background: #2a2a2a;
      color: #fff;
      text-decoration: none;
      font-weight: 600;
      font-size: 18px;
      opacity: 0.8;
      cursor: pointer;
    }

    a.control_prev:hover, a.control_next:hover {
      opacity: 1;
      -webkit-transition: all 0.2s ease;
    }

    a.control_prev {
      border-radius: 0 2px 2px 0;
    }

    a.control_next {
      right: 0;
      border-radius: 2px 0 0 2px;
    }


    </style>
</head>

<body style="background: url('template/home/images/img.jpg')">

    <!-- Navigation -->
     <center><img src="template/home/images/header.png" style="width: 50%; height: auto;"></center>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Pengaduan Baru</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="home/pengaduan_baru" class="btn btn-primary">Masuk</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel">
                    <div id="slider">
                      <a href="#" class="control_next">>></a>
                      <a href="#" class="control_prev"><<</a>
                      <ul><!-- 
                        <li>SLIDE 1</li>
                        <li style="background: #aaa;">SLIDE 2</li>
                        <li>SLIDE 3</li>
                        <li style="background: #aaa;">SLIDE 4</li> -->

                        <li><img src="http://flexslider.woothemes.com/images/kitchen_adventurer_cheesecake_brownie.jpg"></li>
                        <li><img src="http://flexslider.woothemes.com/images/kitchen_adventurer_lemon.jpg"></li>
                        <li><img src="http://flexslider.woothemes.com/images/kitchen_adventurer_donut.jpg"></li>
                        <li><img src="http://flexslider.woothemes.com/images/kitchen_adventurer_caramel.jpg"></li>

                      </ul>  
                    </div>
                </div>
                
            </div>
            <div class="col-md-4">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h4>Panduan Pengaduan</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-warning">Masuk</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4>Status Pengaduan</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#status-pengaduan">Masuk</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4>Tentang BPMPPKB</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-info">Masuk</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>F.A.Q</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Masuk</a>
                    </div>
                </div>
            </div>

            <p style="padding-top: 20px">&nbsp;</p>
            <p><center>Copyright &copy; SILASKAR BPMPPKB 2017</center></p>
        </div>


    </div>
	<div id="status-pengaduan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog"> 
			<div class="modal-content"> 
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
					<h4 class="modal-title">Status Pengaduan</h4> 
				</div> 
				<form method="post" action="home/lihat_status">
				<div class="modal-body"> 
					<div class="row"> 
						<div class="col-md-12">
							<div class="form-group"> 
								<label for="field-1" class="control-label">Masukkan Nomor Pengaduan</label> 
								<input type="text" class="form-control" name="nomor_pengaduan" placeholder="Nomor Pengaduan"> 
							</div> 
						</div> 
					</div>
					<div class="modal-footer"> 
						<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Tutup</button> 
						<button type="submit" name="btnCek" class="btn btn-info waves-effect waves-light">Cek</button> 
					</div>
				</div>
				</form>
			</div> 
		</div>
	</div><!-- /.modal -->
    <!-- /.container -->

    <!-- jQuery -->
    <script src="template/home/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="template/home/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    <script>
        jQuery(document).ready(function ($) {

    setInterval(function () {
        moveRight();
    }, 4000);
    var slideCount = $('#slider ul li').length;
    var slideWidth = $('#slider ul li').width();
    var slideHeight = $('#slider ul li').height();
    var sliderUlWidth = slideCount * slideWidth;
    
    $('#slider').css({ width: slideWidth, height: slideHeight });
    
    $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
    
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

});    

    </script>

</body>

<!-- Modal-Effect -->
<script src="template/moltran/assets/modal-effect/js/classie.js"></script>
<script src="template/moltran/assets/modal-effect/js/modalEffects.js"></script>
</html>
