
<?php
session_start();
if(!isset($_SESSION['theatre']))
{
  header('location:../index.php');
}
date_default_timezone_set('Asia/Dhaka');
include('../../config.php');
$th=mysqli_query($con,"select * from tbl_theatre where id='".$_SESSION['theatre']."'");
$theatre=mysqli_fetch_array($th);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Theatre Assistance</title>

  <script type="text/javascript" src="../validation/vendor/jquery/jquery-1.10.2.min.js"></script>
  <link rel="stylesheet" href="../validation/dist/css/bootstrapValidator.css"/> 
  <script type="text/javascript" src="../validation/dist/js/bootstrapValidator.js"></script>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">



</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <header class="main-header">
   
    <a href="index.php" class="logo">
      
      <span class="logo-mini"><b>T</b>A</span>
      
      <span class="logo-lg"><b>Theatre</b> Assistant</span>
    </a>
    
    <nav class="navbar navbar-static-top">


      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="cinema1.png" class="user-image" alt="User Image"> 
              <span class="hidden-xs"><?php echo $theatre['name'];?></span>
            </a>
            <ul class="dropdown-menu">
           
              <li class="user-header">
                 <!-- <img src="cinema.png" class="img-circle" alt="User Image">  -->

                <p>
                  Theatre Assistance
                </p>
              </li>
            </ul>
          </li>
         
        </ul>
      </div>
    </nav>
  </header>

  
  <aside class="main-sidebar">
    
    <section class="sidebar">
      
      <div class="user-panel">
        <div class="pull-left image">
           <img src="cinema1.png" class="img-circle" alt="User Image"> 
        </div>
        <div class="pull-left info">
          <p><?php echo $theatre['name'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      
      <ul class="sidebar-menu">
        <li class="treeview">
          <a href="index.php">
            <i class="fa fa-home"></i> <span>Home</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        
          <li class="treeview">
          <a href="add_movie.php">
            <i class="fa fa-plus"></i> <span>Add Movie</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="view_movie.php">
            <i class="fa fa-list-alt"></i> <span>View Movies</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="add_show.php">
            <i class="fa fa-ticket"></i> <span>Add Show</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>


        <li class="treeview">
          <a href="view_shows.php">
            <i class="fa fa-eye"></i> <span>View Show</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="logout.php">
          <i class="fa fa-sign-out"></i> <span>Log-Out</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
      </ul>
    </section>

  </aside>