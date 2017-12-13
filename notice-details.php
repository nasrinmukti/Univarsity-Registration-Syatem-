<?php 
    include 'database.php';
 ?>  


<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Event Details - Study</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- favicon -->		
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    
    <!-- Bootstrap CSS -->		
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
     <link rel="stylesheet" href="font-awesome/css/font-awesome.css">

      <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
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
                <!-- Header Top Right -->
                
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
                        <a href="index.php"><img src="img/logo2.png" alt="logo"></a>
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
                <span><h1 style="color:white;">Notice Details</h1></span>
                <ul class="breadcrumb">
                    <li style="text-align=center"><a href="index.php">Home</a></li>
               
                </ul>
               
            </div>
        </div>
    </div>
</div>
<!-- End of Page Banner Area -->
       
<!-- Event Area Start -->
<div class="event-area bg-white section pt-120 pb-70">
    <div class="container">
        <div class="row">
           <!--single event start -->
         

                <!-- Single notice Details -->
                      <div class="single-event-details">
                         <span class="date"> 
                            <span>N
                                <?php 
                                if(isset($_GET["value"]))
                                    {

                                        $id=$_GET['value'] ;
                                        echo $id;
                                    }

                                ?>
                            </span>
                          </span>

                  <!--single notice start -->
                    <div class="content">

                            <?php 
                                if(isset($_GET["value"]))
                                {

                                $id=$_GET['value'] ;
                              $st="SELECT * FROM `noticeinfo` WHERE id = '$id'";
                               $result = ShowData($st);
                                 }

                            while($row = mysqli_fetch_assoc($result)){
                                
                            ?>


                            <?php
                             echo '<img src="'.$row['Picture'].'" class="img-responsive">'."<br>";
                             echo ''.$row['NoticeTitle']."<br>";  
                                                
                             echo ''.$row['Dateandtime']."<br>"; 

                             echo $row['Description']."";  
                                                           

                                             
                                 
                            ?>
                    </div>
                 </div> 

                         <?php 
                         } 
                         ?>   

             </div>
         </div>
                 <!--single notice end -->



                         <br>
                         <br>
            
            </div>
    </div>
</div>
<!--End of Event Area-->
        
<!-- Footer Top Area Start -->
<?php
    include 'footer.php';
?>