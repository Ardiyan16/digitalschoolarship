<?php
$koneksi = mysqli_connect("localhost", "root", "", "digital_schoolarship");
?>
<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("Location: http://localhost/digitalschoolarship/admin/login/loginadmin.php");
    exit;
} else {
    $SESSION = $_SESSION['email'];
    $result = mysqli_query($koneksi, "SELECT * FROM admin WHERE email = '$SESSION'");
    $show = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Input Data</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="icon" href="../../img/icon.png" type="image/png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>D</b>TS</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Digital</b>Kominfo</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../../img/profile.png" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $_SESSION['email']; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="../../img/profile.png" class="img-circle" alt="User Image">
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="../login/logout.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="../../img/profile.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?php echo $_SESSION['email']; ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Menu</li>
                    <li class="active treeview">
                        <a href="#">
                            <i class="fa fa-file-text-o"></i> <span>Data Perguruan Tinggi</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="inputperti.php"><i class="fa fa-file-text-o"></i> Input Data Perti</a></li>
                            <li><a href="../tabeldata/viewdataperti.php"><i class="fa fa-tv"></i> View Data Perti</a></li>
                        </ul>
                    </li>
                    <li class="active treeview">
                        <a href="#">
                            <i class="fa fa-file-text-o"></i> <span>Data Merk</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="inputdata.php"><i class="fa fa-file-text-o"></i> Input Data Merk</a></li>
                            <li><a href="../tabeldata/viewdatamerk.php"><i class="fa fa-tv"></i> View Data Merk</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header connectedSortable">
                <div class="idp mb-5">
                    <h3 class="mb-5">
                        Input Data Perti
                    </h3>
                </div>
                <div class="box box-info mt-5">
                    <div class="box-header">
                        <i class="fa fa-document"></i>

                        <h3 class="box-title">Data Perguruan Tinggi</h3>
                        <!-- tools box -->
                        <!-- /. tools -->
                    </div>
                    <div class="box-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>nama merk</label>
                                <input type="text" class="form-control" name="nama_merk" placeholder="Nama merk">
                            </div>
                            <div class="form-group">
                                <label>warna</label>
                                <input type="text" class="form-control" name="warna" placeholder="Warna">
                            </div>
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input type="text" class="form-control" name="jumlah" placeholder="Jumlah">
                            </div>
                            <div class="box-footer clearfix">
                                <button type="submit" class="pull-left btn btn-primary" name="simpan" value="simpan">Simpan</button>
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['simpan'])) {
                            $nama_merk = $_POST['nama_merk'];
                            $warna = $_POST['warna'];
                            $jumlah = $_POST['jumlah'];

                            $insert = mysqli_query($koneksi, "INSERT INTO data VALUES (NULL, 
                            '$nama_merk', 
                            '$warna', 
                            '$jumlah')");
                            if ($insert) {
                                echo "Data berhasil di simpan";
                            } else {
                                echo "Data Gagal disimpan";
                            }
                        }

                        ?>
                    </div>
                </div>
            </section>
        </div>



        <!-- /.content-wrapper -->
        <footer class="main-footer bg-dark">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.13
            </div>
            <strong>Copyright &copy; 2019 <a href="https://adminlte.io">Kemenkominfo</a>.</strong>Ardiyan_Ramadhan
        </footer>
    </div>

    <!-- jQuery 3 -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="../bower_components/raphael/raphael.min.js"></script>
    <script src="../bower_components/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../bower_components/moment/min/moment.min.js"></script>
    <script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>

</body>

</html>