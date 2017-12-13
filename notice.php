<?php 
    include 'database.php';
 ?>  


<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>News  - Study</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- favicon -->		
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    
    <!-- Bootstrap CSS -->		
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="font-awesome/css/font-awesome.css">

      <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="css/plugins.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Modernizr JS -->		
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>

<!-- Header Area Start -->
<header class="header-area section">
    <!-- Header Top -->
    <div class="header-top section">
        <div class="container">
            <div class="row">
                <!-- Header Top Left -->
                <div class="header-top-left text-left col-sm-6">
                    <p>Have any question?call to- +880-1704-557252</p>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Header Bottom -->
    <div class="header-bottom bg-white sticker section sticker">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                       <!-- Header Logo -->
                    <div class="header-logo float-left">
                        <a href="index.html"><img src="img/logo2.png" alt="logo"></a>
                    </div>
                    
                    <!-- Main Menu -->
                    <div class="main-menu float-right hidden-xs">
                        <nav>
                            <ul>
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="courses.php">Courses</a></li>
                                <li><a href="event.php">event</a></li>
                                <li><a href="gallery.php">gallery</a></li>
                                <li class="info-edit"><a href="#">Information</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.php">About Us</a></li>
                                        <li><a href="courses.php">Courses Page</a></li>
                                        <li><a href="event.php">Event Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="notice.php">Notice</a></li>
                                <li><a href="#contact" class="smoth-scroll">Contact</a></li>
                              
                            </ul>
                        </nav>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>   
</header>
<!-- End of Header Area -->


<!-- Page Banner Area Start -->
<div class="page-banner-area overlay section">
    <div class="container">
        <div class="row">
            <!-- Page Banner -->
            <div class="page-banner text-center col-xs-12">
                <h1>Notice Board</h1>
                <!-- Breadcrumb -->
                <ul class="breadcrumb">
                    <li style="text-align=center"><a href="index.php">Home</a></li>
               
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End of Page Banner Area -->

<!-- notice Start --> 
<div class="news-area bg-white section pt-120 pb-90">
    <div class="container">
        
        <div class="row">

                <?php
                    $st ="Select * from noticeinfo;";
                    $result = ShowData($st);
                    while($row = mysqli_fetch_assoc($result)){
                        
                ?>


 
                    <div class="col-md-4 col-sm-6 col-xs-12 mb-30">
                            <div class="news-item">
                                  
                                <div class="content">
                                     
                                        <div 
                                        class="news-meta fix">
                                        </div>
                                     <?php
                                        echo '<img src="'.$row['Picture'].'" class="img-responsive">'."<br>";
                                        echo ''.$row['NoticeTitle']."<br>";  
                                        
                                        echo ''.$row['Dateandtime']."<br>"; 

                                        echo $row['Description']."";  
                                                   

                                     
                                    echo'</div>

                                       <a href="notice-details.php?value='.$row['id'].'">LEARN Now</a>';
                                   ?>
                                </div>
                            </div> 

                         <?php } ?>   
                    </div>

    </div>
</div>
</div>
<!-- End notice Area -->

<!-- Footer Top Area Start -->
<?php
    include 'footer.php';
?>