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


        <link href="../template/moltran/assets/timepicker/bootstrap-datepicker.min.css" rel="stylesheet" />



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
                                        <h3 class="panel-title">FORMULIR REGISTER PELAYANAN BAGI KORBAN KEKERASAN</h3> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <div class="col-lg-12">
                                            <div class="alert alert-info">
                                                Berikut terdapat 4 label menu: Data Diri Pelapor, Data Ciri Korban, Ciri Pelaku dan Laporkan. Silahkan diisi dengan data-data yang signifikan:
                                            </div>
                                            <ul class="nav nav-tabs navtab-bg"> 
                                                <li class="active"> 
                                                    <a href="#pelapor" data-toggle="tab" aria-expanded="false"> 
                                                        <span class="visible-xs"><i class="fa fa-user"></i></span> 
                                                        <span class="hidden-xs">1. Data Diri Pelapor</span> 
                                                    </a> 
                                                </li> 
                                                <li class=""> 
                                                    <a href="#home" data-toggle="tab" aria-expanded="false"> 
                                                        <span class="visible-xs"><i class="fa fa-user"></i></span> 
                                                        <span class="hidden-xs">2. Ciri Korban</span> 
                                                    </a> 
                                                </li> 
                                                <li class=""> 
                                                    <a href="#profile" data-toggle="tab" aria-expanded="true"> 
                                                        <span class="visible-xs"><i class="fa fa-user"></i></span> 
                                                        <span class="hidden-xs">3. Ciri Pelaku</span> 
                                                    </a> 
                                                </li> 
                                                <li class=""> 
                                                    <a href="#messages" data-toggle="tab" aria-expanded="false"> 
                                                        <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> 
                                                        <span class="hidden-xs">4. Laporkan</span> 
                                                    </a> 
                                                </li> 
                                            </ul>
                                            <form action="<?php echo base_url('home/tambah_kasus_online');?>" method = "post"> 
                                            <div class="tab-content" style="padding-bottom: -200px"> 
                                                 <div class="tab-pane active" id="pelapor">
                                                    <h3 style="padding-bottom: 10px">Data Diri Pelapor</h3>
                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-3 control-label " for="userName">Nama Pelapor *</label>
                                                        <div class="col-lg-9">
                                                            <input class="form-control required" id=" " name="nama_pelapor" type="text" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-3 control-label " for="userName">NIK *</label>
                                                        <div class="col-lg-9">
                                                            <input class="form-control required" id=" " name="nik_pelapor" type="text" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-3 control-label " for="password">Jenis Kelamin *</label>
                                                        <div class="col-lg-9">
                                                            <select class="form-control" name="jk_pelapor" required>
                                                                <option>-</option>
                                                                <option value="0">Laki-Laki</option>
                                                                <option value="1">Perempuan</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-3 control-label " for="confirm">Alamat Rumah *</label>
                                                        <div class="col-lg-9">
                                                            <input id="confirm" name="alamat_rumah" type="text" class="required form-control" required>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-3 control-label " for="confirm">No Telp *</label>
                                                        <div class="col-lg-9">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                                <input type="text" id="example-input1-group1" name="nomor_telp" class="form-control" placeholder="contoh: 081123456789" required>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-3 control-label " for="confirm">Email *</label>
                                                        <div class="col-lg-9">
                                                            <div class="input-group m-t-10">
                                                                <input type="email" id="example-input2-group1" name="email" class="form-control" placeholder="Email" required>
                                                                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div> 
                                                <div class="tab-pane" id="home">
                                                    <h3 style="padding-bottom: 10px">Data Ciri Korban Kekerasan</h3>
                                                    <div class="col-md-6">
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-3 control-label " for="">NIK Korban</label>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="" name="nik_korban" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-3 control-label " for="">Nama</label>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="" name="nama_korban" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-3 control-label " for="password">Jenis Kelamin</label>
                                                            <div class="col-lg-9">
                                                                <select name="jk_korban" class="form-control">
                                                                    <option>-</option>
                                                                    <option value="0">Laki-Laki</option>
                                                                    <option value="1">Perempuan</option>
                                                                </select>

                                                            </div>
                                                        </div>

                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-3 control-label " for="confirm">Tanggal Kejadian</label>
                                                            <div class="col-lg-9">
                                                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" name="tanggal_kejadian">
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-3 control-label " for=" ">Kecamatan</label>
                                                            <div class="col-lg-9">
                                                                <select class="form-control" name="kecamatan_id" id="kecamatan_id">
                                                                    <option value="">- Pilih Kecamatan -</option>  
                                                                    <?php
                                                                        foreach($kecamatan as $kc){
                                                                    ?>
                                                                        <option value="<?php echo $kc->id_kecamatan ?>"
                                                                        <?php if (isset($id_kecamatan) AND $id_kecamatan==$kc->id_kecamatan) echo " selected";?>>
                                                                        <?php echo $kc->nama_kecamatan ?>
                                                                        </option>
                                                                    <?php
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-3 control-label " for=" ">Kelurahan</label>
                                                            <div class="col-lg-9">
                                                                
                                                                <select class="form-control" name="kelurahan_id" id="id_kelurahan">
                                                                    <?php
                                                                        $id_kelurahan = isset($_REQUEST["id_kelurahan"])?$_REQUEST["id_kelurahan"]:'';


                                                                    ?>
                                                                     <?php
                                                                        foreach($kelurahan as $kl){
                                                                    ?>
                                                                        <option value="<?php echo $kl->id_kelurahan ?>"
                                                                        <?php if (isset($id_kelurahan) AND $id_kelurahan==$kl->id_kelurahan) echo " selected";?>>
                                                                        <?php echo $kl->nama_kelurahan ?>
                                                                        </option>
                                                                    <?php
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-3 control-label " for="confirm">Alamat Rumah</label>
                                                            <div class="col-lg-9">
                                                                <input id="confirm" name="alamat_korban" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <div class="col-md-6">
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-3 control-label " for=" ">Usia Korban</label>
                                                            <div class="col-lg-9">
                                                                <select name="usia_korban" id="usia" class="form-control">
                                                                    <option value="1">0 Tahun</option>
                                                                    <option value="2">1 Tahun</option>
                                                                    <option value="3">2 Tahun</option>
                                                                    <option value="4">3 Tahun</option>
                                                                    <option value="5">4 Tahun</option>
                                                                    <option value="6">5 Tahun</option>
                                                                    <option value="7">6 Tahun</option>
                                                                    <option value="8">7 Tahun</option>
                                                                    <option value="9">8 Tahun</option>
                                                                    <option value="10">9 Tahun</option>
                                                                    <option value="11">10 Tahun</option>
                                                                    <option value="12">11 Tahun</option>
                                                                    <option value="13">12 Tahun</option>
                                                                    <option value="14">13 Tahun</option>
                                                                    <option value="15">14 Tahun</option>
                                                                    <option value="16">15 Tahun</option>
                                                                    <option value="17">16 Tahun</option>
                                                                    <option value="18">17 Tahun</option>
                                                                    <option value="19">18 Tahun</option>
                                                                    <option value="20">19 Tahun</option>
                                                                    <option value="21">20 Tahun</option>
                                                                    <option value="22">21 Tahun</option>
                                                                    <option value="23">22 Tahun</option>
                                                                    <option value="24">23 Tahun</option>
                                                                    <option value="25">24 Tahun</option>
                                                                    <option value="26">25 Tahun</option>
                                                                    <option value="27">26 Tahun</option>
                                                                    <option value="28">27 Tahun</option>
                                                                    <option value="29">28 Tahun</option>
                                                                    <option value="30">29 Tahun</option>
                                                                    <option value="31">30 Tahun</option>
                                                                    <option value="32">31 Tahun</option>
                                                                    <option value="33">32 Tahun</option>
                                                                    <option value="34">33 Tahun</option>
                                                                    <option value="35">34 Tahun</option>
                                                                    <option value="36">35 Tahun</option>
                                                                    <option value="37">36 Tahun</option>
                                                                    <option value="38">37 Tahun</option>
                                                                    <option value="39">38 Tahun</option>
                                                                    <option value="40">39 Tahun</option>
                                                                    <option value="41">40 Tahun</option>
                                                                    <option value="42">41 Tahun</option>
                                                                    <option value="43">42 Tahun</option>
                                                                    <option value="44">43 Tahun</option>
                                                                    <option value="45">44 Tahun</option>
                                                                    <option value="46">45 Tahun</option>
                                                                    <option value="47">46 Tahun</option>
                                                                    <option value="48">47 Tahun</option>
                                                                    <option value="49">48 Tahun</option>
                                                                    <option value="50">49 Tahun</option>
                                                                    <option value="51">50 Tahun</option>
                                                                    <option value="52">51 Tahun</option>
                                                                    <option value="53">52 Tahun</option>
                                                                    <option value="54">53 Tahun</option>
                                                                    <option value="55">54 Tahun</option>
                                                                    <option value="56">55 Tahun</option>
                                                                    <option value="57">56 Tahun</option>
                                                                    <option value="58">57 Tahun</option>
                                                                    <option value="59">58 Tahun</option>
                                                                    <option value="60">59 Tahun</option>
                                                                    <option value="61">60 Tahun</option>
                                                                    <option value="62">61 Tahun</option>
                                                                    <option value="63">62 Tahun</option>
                                                                    <option value="64">63 Tahun</option>
                                                                    <option value="65">64 Tahun</option>
                                                                    <option value="66">65 Tahun</option>
                                                                    <option value="67">66 Tahun</option>
                                                                    <option value="68">67 Tahun</option>
                                                                    <option value="69">68 Tahun</option>
                                                                    <option value="70">69 Tahun</option>
                                                                    <option value="71">70 Tahun</option>
                                                                    <option value="72">71 Tahun</option>
                                                                    <option value="73">72 Tahun</option>
                                                                    <option value="74">73 Tahun</option>
                                                                    <option value="75">74 Tahun</option>
                                                                    <option value="76">75 Tahun</option>
                                                                    <option value="77">76 Tahun</option>
                                                                    <option value="78">77 Tahun</option>
                                                                    <option value="79">78 Tahun</option>
                                                                    <option value="80">79 Tahun</option>
                                                                    <option value="81">80 Tahun</option>
                                                                    <option value="82">81 Tahun</option>
                                                                    <option value="83">82 Tahun</option>
                                                                    <option value="84">83 Tahun</option>
                                                                    <option value="85">84 Tahun</option>
                                                                    <option value="86">85 Tahun</option>
                                                                    <option value="87">86 Tahun</option>
                                                                    <option value="88">87 Tahun</option>
                                                                    <option value="89">88 Tahun</option>
                                                                    <option value="90">89 Tahun</option>
                                                                    <option value="91">90 Tahun</option>
                                                                    <option value="92">91 Tahun</option>
                                                                    <option value="93">92 Tahun</option>
                                                                    <option value="94">93 Tahun</option>
                                                                    <option value="95">94 Tahun</option>
                                                                    <option value="96">95 Tahun</option>
                                                                    <option value="97">96 Tahun</option>
                                                                    <option value="98">97 Tahun</option>
                                                                    <option value="99">98 Tahun</option>
                                                                    <option value="100">99 Tahun</option>
                                                                    <option value="101">&gt;=100 Tahun</option>
                                                                    <option value="102">Tidak Diketahui Tahun</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-3 control-label " for="password"> Pendidikan Korban</label>
                                                            <div class="col-lg-9">
                                                                <select name="pendidikan_korban" id="pendidikan" class="form-control">                              
                                                                    <option value="0">Tidak Sekolah</option>
                                                                    <option value="1">SD</option>
                                                                    <option value="2">SMP</option>
                                                                    <option value="3">SMA</option>
                                                                    <option value="4">Perguruan Tinggi</option>
                                                                    <option value="5">Tidak diketahui</option>
                                                                </select>

                                                            </div>
                                                        </div>

                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-3 control-label " for="confirm">Pekerjaan</label>
                                                            <div class="col-lg-9">
                                                                <select name="pekerjaan" id="pekerjaan" class="form-control">
                                                                    <option value="">--Pilih Salah Satu--</option>
                                                                    <option value="0">Bekerja</option>
                                                                    <option value="1">Belum Bekerja</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-3 control-label " for="userName">Status Perkawinan</label>
                                                            <div class="col-lg-9">
                                                                <select name="perkawinan_korban" id="perkawinan_id" class="form-control">                               
                                                                    <option value="1">Belum Kawin</option>
                                                                    <option value="2">Kawin</option>
                                                                    <option value="3">Cerai</option>
                                                                    <option value="4">Tidak diketahui</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-3 control-label " for="password">Bentuk Kekerasan</label>
                                                            <div class="col-lg-9">
                                                                <li class="list-group-item">
                                                                    <div class="checkbox checkbox-primary">
                                                                    <?php
                                                                        foreach($kekerasan as $k){
                                                                    ?>
                                                                        <input class="todo-done" id="1" type="checkbox" name='item[]' nid='item[]' value="<?php echo $k->id_kekerasan ?>"><label for="1"><?php echo $k->kategori_kekerasan ?></label><p style="padding-bottom: 5px"></p>
                                                                    <?php
                                                                        }
                                                                    ?>
                                                                    </div>
                                                                </li>

                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-3 control-label " for="confirm">Tempat Kejadian</label>
                                                            <div class="col-lg-9">
                                                                <select name="tempat_kejadian" id="" class="form-control">                               
                                                                    <option value="0">Rumah Tangga</option>
                                                                    <option value="1">Tempat Kerja</option>
                                                                    <option value="2">Sekolah</option>
                                                                    <option value="3">Kampus</option>
                                                                    <option value="4">Lainnya</option>
                                                                </select>
                                                            </div>
                                                        </div>                                                        
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-3 control-label " for="confirm">Difabel?</label>
                                                            <div class="col-lg-9">
                                                                <select name="difabel" id="difabel" class="form-control">                               
                                                                    <option>-</option>
                                                                    <option value="0">Tidak</option>
                                                                    <option value="1">Ya</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p align="right">
                                                        &nbsp;
                                                    </p>                                                   
                                                </div> 
                                                <div class="tab-pane" id="profile"> 
                                                    <h3 style="padding-bottom: 10px">Data Ciri Pelaku Kekerasan</h3>
                                                    <div class="col-md-6">
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-3 control-label " for="">NIK Pelaku</label>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="" name="nik_pelaku" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-3 control-label " for="">Nama</label>
                                                            <div class="col-lg-9">
                                                                <input class="form-control required" id="" name="nama_pelaku" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-3 control-label " for="password">Jenis Kelamin</label>
                                                            <div class="col-lg-9">
                                                                <select class="form-control" name="jk_pelaku">
                                                                    <option>-</option>
                                                                    <option value="0">Laki-Laki</option>
                                                                    <option value="1">Perempuan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-3 control-label " for="userName">Usia Pelaku</label>
                                                            <div class="col-lg-9">
                                                                <select name="usia_id" id="usia" class="form-control">
                                                                    <option value="1">0 Tahun</option>
                                                                    <option value="2">1 Tahun</option>
                                                                    <option value="3">2 Tahun</option>
                                                                    <option value="4">3 Tahun</option>
                                                                    <option value="5">4 Tahun</option>
                                                                    <option value="6">5 Tahun</option>
                                                                    <option value="7">6 Tahun</option>
                                                                    <option value="8">7 Tahun</option>
                                                                    <option value="9">8 Tahun</option>
                                                                    <option value="10">9 Tahun</option>
                                                                    <option value="11">10 Tahun</option>
                                                                    <option value="12">11 Tahun</option>
                                                                    <option value="13">12 Tahun</option>
                                                                    <option value="14">13 Tahun</option>
                                                                    <option value="15">14 Tahun</option>
                                                                    <option value="16">15 Tahun</option>
                                                                    <option value="17">16 Tahun</option>
                                                                    <option value="18">17 Tahun</option>
                                                                    <option value="19">18 Tahun</option>
                                                                    <option value="20">19 Tahun</option>
                                                                    <option value="21">20 Tahun</option>
                                                                    <option value="22">21 Tahun</option>
                                                                    <option value="23">22 Tahun</option>
                                                                    <option value="24">23 Tahun</option>
                                                                    <option value="25">24 Tahun</option>
                                                                    <option value="26">25 Tahun</option>
                                                                    <option value="27">26 Tahun</option>
                                                                    <option value="28">27 Tahun</option>
                                                                    <option value="29">28 Tahun</option>
                                                                    <option value="30">29 Tahun</option>
                                                                    <option value="31">30 Tahun</option>
                                                                    <option value="32">31 Tahun</option>
                                                                    <option value="33">32 Tahun</option>
                                                                    <option value="34">33 Tahun</option>
                                                                    <option value="35">34 Tahun</option>
                                                                    <option value="36">35 Tahun</option>
                                                                    <option value="37">36 Tahun</option>
                                                                    <option value="38">37 Tahun</option>
                                                                    <option value="39">38 Tahun</option>
                                                                    <option value="40">39 Tahun</option>
                                                                    <option value="41">40 Tahun</option>
                                                                    <option value="42">41 Tahun</option>
                                                                    <option value="43">42 Tahun</option>
                                                                    <option value="44">43 Tahun</option>
                                                                    <option value="45">44 Tahun</option>
                                                                    <option value="46">45 Tahun</option>
                                                                    <option value="47">46 Tahun</option>
                                                                    <option value="48">47 Tahun</option>
                                                                    <option value="49">48 Tahun</option>
                                                                    <option value="50">49 Tahun</option>
                                                                    <option value="51">50 Tahun</option>
                                                                    <option value="52">51 Tahun</option>
                                                                    <option value="53">52 Tahun</option>
                                                                    <option value="54">53 Tahun</option>
                                                                    <option value="55">54 Tahun</option>
                                                                    <option value="56">55 Tahun</option>
                                                                    <option value="57">56 Tahun</option>
                                                                    <option value="58">57 Tahun</option>
                                                                    <option value="59">58 Tahun</option>
                                                                    <option value="60">59 Tahun</option>
                                                                    <option value="61">60 Tahun</option>
                                                                    <option value="62">61 Tahun</option>
                                                                    <option value="63">62 Tahun</option>
                                                                    <option value="64">63 Tahun</option>
                                                                    <option value="65">64 Tahun</option>
                                                                    <option value="66">65 Tahun</option>
                                                                    <option value="67">66 Tahun</option>
                                                                    <option value="68">67 Tahun</option>
                                                                    <option value="69">68 Tahun</option>
                                                                    <option value="70">69 Tahun</option>
                                                                    <option value="71">70 Tahun</option>
                                                                    <option value="72">71 Tahun</option>
                                                                    <option value="73">72 Tahun</option>
                                                                    <option value="74">73 Tahun</option>
                                                                    <option value="75">74 Tahun</option>
                                                                    <option value="76">75 Tahun</option>
                                                                    <option value="77">76 Tahun</option>
                                                                    <option value="78">77 Tahun</option>
                                                                    <option value="79">78 Tahun</option>
                                                                    <option value="80">79 Tahun</option>
                                                                    <option value="81">80 Tahun</option>
                                                                    <option value="82">81 Tahun</option>
                                                                    <option value="83">82 Tahun</option>
                                                                    <option value="84">83 Tahun</option>
                                                                    <option value="85">84 Tahun</option>
                                                                    <option value="86">85 Tahun</option>
                                                                    <option value="87">86 Tahun</option>
                                                                    <option value="88">87 Tahun</option>
                                                                    <option value="89">88 Tahun</option>
                                                                    <option value="90">89 Tahun</option>
                                                                    <option value="91">90 Tahun</option>
                                                                    <option value="92">91 Tahun</option>
                                                                    <option value="93">92 Tahun</option>
                                                                    <option value="94">93 Tahun</option>
                                                                    <option value="95">94 Tahun</option>
                                                                    <option value="96">95 Tahun</option>
                                                                    <option value="97">96 Tahun</option>
                                                                    <option value="98">97 Tahun</option>
                                                                    <option value="99">98 Tahun</option>
                                                                    <option value="100">99 Tahun</option>
                                                                    <option value="101">&gt;=100 Tahun</option>
                                                                    <option value="102">Tidak Diketahui Tahun</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-3 control-label " for="password"> Pendidikan</label>
                                                            <div class="col-lg-9">
                                                                <select name="pendidikan_pelaku" id="pendidikan" class="form-control">                              
                                                                    <option value="0">Tidak Sekolah</option>
                                                                    <option value="1">SD</option>
                                                                    <option value="2">SMP</option>
                                                                    <option value="3">SMA</option>
                                                                    <option value="4">Perguruan Tinggi</option>
                                                                    <option value="5">Tidak diketahui</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-3 control-label " for="confirm">Pekerjaan</label>
                                                            <div class="col-lg-9">
                                                                <select name="pekerjaan_pelaku" id="" class="form-control">
                                                                    <option value="">- Pilih Salah Satu -</option>
                                                                    <option value="0">Bekerja</option>
                                                                    <option value="1">Belum Bekerja</option>
                                                                    <option value="2">Tidak Diketahui</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-3 control-label " for="confirm">Hubungan Dengan Korban</label>
                                                            <div class="col-lg-9">
                                                                <select name="hubungan_pelaku" id="" class="form-control">
                                                                    <option value="">- Pilih Salah Satu -</option>
                                                                    <option value="0">Orang Tua</option>
                                                                    <option value="1">Keluarga</option>
                                                                    <option value="2">Suami/Istri</option>
                                                                    <option value="3">Teman</option>
                                                                    <option value="4">Lainnya</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label class="col-lg-3 control-label " for="confirm">Kebangsaan</label>
                                                            <div class="col-lg-9">
                                                                <select name="kebangsaan" id="kebangsaan" class="form-control">
                                                                    <option value="">- Pilih Salah Satu -</option>
                                                                    <option value="0">WNI</option>
                                                                    <option value="1">WNA</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <p>&nbsp;</p>
                                                </div> 
                                                <div class="tab-pane" id="messages">    
                                                    <h3 style="padding-bottom: 10px">Laporkan Data Kekerasan</h3>
                                                    <div class="form-group clearfix">
                                                            <label class="col-lg-3 control-label " for="confirm">Jenis&nbsp;Kasus</label>
                                                            <div class="col-lg-9">
                                                                <select class="form-control" name="jenis_kasus">
                                                                    <option>-</option>
                                                                    <option value="0">Baru</option>
                                                                    <option value="1">Ulang</option>
                                                                    <option value="2">Rujukan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-3 control-label " for=" ">Keterangan</label>
                                                        <div class="col-lg-9">
                                                            <textarea class="form-control" rows="5" name="ket"></textarea>
                                                            <small>Tambahkan keterangan lain jika ada.</small>
                                                        </div>
                                                    </div>                                                    
                                                    <div class="alert alert-danger">
                                                        Pastikan data diri pelapor, data ciri korban dan data ciri pelaku kekerasan sudah di isi dengan benar.
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-12">
                                                            <div class="checkbox checkbox-primary">
                                                                <input class="todo-done" id="1" type="checkbox" required=""><label for="1">Dengan ini saya pelapor mengajukan pengaduan kekerasan, dan saya siap menanggung bila laporan ini tidak benar dan dikenai sanksi sesuai dengan peraturan yang berlaku.</label><p style="padding-bottom: 5px"></p>
                                                           </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <p align="right">
                                                            <input type="submit" name="submit" class="btn btn-primary waves-effect waves-light m-b-5" value="Laporkan">
                                                        </p>
                                                    </div> 
                                                </div> 
                                            </div>
                                             </form>
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