<?php
require('connection.inc.php');
require('functions.inc.php');
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

}else{
	header('location:login.php');
	die();
}
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Dashboard Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'> -->
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Sail&display=swap" rel="stylesheet">
      <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="../images/icons/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="../images/icons/favicon-16x16.png">
      <link rel="manifest" href="/site.webmanifest">
</head>
   <body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default bg-dark">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title text-white">Menu</li>
                  
				  <li class="menu-item-has-children dropdown">
                     <a class="text-white" href="product.php" > Product Master</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <?php 
					 if($_SESSION['ADMIN_ROLE']==1){
						echo '<a class="text-white" href="order_master_vendor.php" > Order Master</a>';
					 }else{
						echo '<a class="text-white" href="order_master.php" > Order Master</a>';
					 }
					 ?>
					 
					 
                  </li>
				  <?php if($_SESSION['ADMIN_ROLE']!=1){?>
				  <li class="menu-item-has-children dropdown">
                     <a class="text-white" href="product_review.php" > Product Review</a>
                     
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a class="text-white" href="color.php" > Color Master</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a class="text-white" href="size.php" > Size Master</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a class="text-white" href="banner.php" > Banner</a>
                  </li>
				   <li class="menu-item-has-children dropdown">
                     <a class="text-white" href="vendor_management.php" > Vendor Management</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a class="text-white" href="categories.php" > Categories Master</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a class="text-white" href="sub_categories.php" > Sub Categories Master</a>
                  </li>
                  
				  <li class="menu-item-has-children dropdown">
                     <a class="text-white" href="users.php" > User Master</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a class="text-white" href="coupon_master.php" > Coupon Master</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a class="text-white" href="contact_us.php" > Contact Us</a>
                  </li>
				   
				  <?php } ?>
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header bg-dark">
            <div class="top-left  ">
               <div class="navbar-header bg-dark">
                  <a class="navbar-brand text-white" href="index.php">Obessed Dashboard</a>
                  <a class="navbar-brand hidden" href="index.php"><h3>O</h3></a>
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars text-white"></i></a>
              </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle active text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome <?php echo $_SESSION['ADMIN_USERNAME']?></a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                     </div>
                  </div>
               </div>
            </div>
         </header>

