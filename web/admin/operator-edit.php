<?php include "../session-start.php";?>
<?php
include ('../koneksi.php');
$id_admin=$_GET['id_admin'];
$edit=mysqli_query($koneksi,"select * from admin where level='Operator' and id_admin='$id_admin'");
$data=mysqli_fetch_assoc($edit);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard - Sistem Keamanan Pintu</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <!-- Add custom CSS here -->
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <script type="text/javascript" src="chartjs/Chart.js"></script>
  </head>
  <body>
  	<nav>
    <div id="wrapper">
      <?php include "menu.php"; ?>
        </div><!-- /.navbar-collapse -->
      </nav>
  <nav>
    <div id="wrapper">
        </div><!-- /.navbar-collapse -->
      </nav>
      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1>Dashboard <small><?php echo $_SESSION['nama']; ?></small></h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
              <li class="active"><i class="fa fa-pencil"></i> User</li>
            </ol> 
            <?php include "../notifikasi.php"?>
          </div>
        </div><!-- /.row -->
  		<div class="row">
  			<div class="col-lg-6">
          	<form method="post" action="operator-edit-proses.php?id_admin=<?php echo $data['id_admin']; ?>" role="form" 
              enctype="multipart/form-data">
              <div class="form-group">
                <label>Nama</label>
                <input class="form-control" type="text" name="nama" id="nama" value="<?php echo $data['nama']; ?>" required="">
              </div>
              <div class="form-group">
                <label>Username</label>
                <input class="form-control" type="text" name="username" id="username" value="<?php echo $data['username']; ?>" required="">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" name="password" id="password" value="<?php echo $data['password']; ?>" required="">
              </div>
              <button type="submit" name="edit" class="btn btn-success">Perbarui</button>
              <button type="reset" class="btn btn-warning">Reset</button>  
            </form>
            </div>
          </div>
        </div><!-- /.row -->
        <div class="row">
       <?php include "../copyright.php"?><br><br>
		</div>
<br><br>
      </div><!-- /#page-wrapper -->
    </div><!-- /#wrapper -->
    <!-- JavaScript -->
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/bootstrap.js"></script>
    <!-- Page Specific Plugins -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="../js/morris/chart-data-morris.js"></script>
    <script src="../js/tablesorter/jquery.tablesorter.js"></script>
    <script src="../js/tablesorter/tables.js"></script>
  </body>
</html>

<!--<?php 
if (isset($_POST['edit'])){
	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$password=md5($_POST['password']);

	$edit=mysqli_query($koneksi,"update admin set nama='$nama',username='$username',password='$password' where id_admin='$id_admin'");
	if ($edit){
		header("location:operator-tampil.php");
	}else{
		echo '<script language="javascript">alert("Gagal Edit Operator!"); window.history.back();</script>';
	}
}
?>-->