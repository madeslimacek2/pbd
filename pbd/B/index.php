<?php
require 'function.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="asset">
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
      background-color: #000;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">CRUD 2 TIER</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a data-toggle="modal" data-target="#contact">Kontak Admin</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container" >    
  <div class="row row-centered">
    <div  class="col-sm-4 text-center col-centered">
      <div class="panel panel-primary">
        <div class="panel-heading">Dosen</div>
        <div class="panel-body"><img src="image/dosen.jpg" class="img-responsive" style="width:110%" alt="Image"></div>
        <div class="panel-footer"><a href="tabeldosen/index.php">Login Dosen</a></div>
      </div>
    </div>
    <div class="col-sm-4 text-center col-centered"> 
      <div class="panel panel-danger">
        <div class="panel-heading">Mahasiswa</div>
        <div class="panel-body"><img src="image/mhs.jpg" class="img-responsive" style="width:95%" alt="Image"></div>
        <div class="panel-footer"><a href="tabelmahasiswa/index.php">Login Mahasiswa</a></div>
      </div>
    </div>
    <div class="col-sm-4 text-center col-centered"> 
      <div class="panel panel-success">
        <div class="panel-heading">Admin</div>
        <div class="panel-body"><img src="image/admin.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a href="admin/index.php">Login Admin</a></div>
      </div>
    </div>
  </div>
</div>
    <br><br>
    
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Please Login First</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="username">Username:</label>
    <div class="col-sm-10">
      <input type="username" class="form-control" id="username" placeholder="Masukkan Username" name="username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="pwd" placeholder="Masukkan password" name="password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="login">Submit</button>
    </div>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="contact" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Informasi Kontak</h4>
      </div>
      <div class="modal-body">
        <p>Informasi, Kritik dan Saran Harap hubungi nomor dibawah:</p>
        <p>0853 7792 4611 an Made ( WA dan nomor handphone aktif )</p>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<br><br><br>


<footer class="container-fluid text-center">
  <p>  
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></footer> 
</footer>

</body>
</html>
