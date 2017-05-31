<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>College Management System</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
<link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />    
  <!-- Google	Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
</head>
<body >
   <?php session_start(); if(!isset($_SESSION['username'])) header("Location: index.php"); ?>
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="logo-custom" src="assets/img/logo180-50.png" alt=""  /></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="student_data.php">STUDENTS</a></li>
                    <li><a href="faculty_data.php">FACULTY</a></li>
                     
                     
                </ul>
            </div>
           
        </div>
    </div>
      <!--NAVBAR SECTION END-->
<br><br>
    <div id="contact-sec"   >
           <div class="overlay">
 <div class="container set-pad">
      <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line" >STUDENT DATA  </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                     		Search for student details or add new students
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->
           <div class="row set-row-pad"  data-scroll-reveal="enter from the bottom after 0.5s" >
           
               
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                 <div id="student_details" data-id=<?php echo $_SESSION['roll_number'] ?>></div>
                 <button class="btn btn-info btn-block btn-lg" onclick="student_details()"  >REQUEST LEAVE</button><br><br>
                   
                </div>
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">


                    <input type="text" name="search" id="search" class="form-control input-lg" placeholder=" Enter Roll-Number" ><br>
                   <button type="button" class="btn btn-info btn-lg" onclick="search_student()" >SEARCH BY ROLL-NUMBER</button><br><br>
                    <div id="searchresult" ></div>
            
              
                </div>
               </div>
                </div>
          </div> 
       </div>
     <div class="container">
             <div class="row set-row-pad"  >
    <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">

                    <h2 ><strong>Our Location </strong></h2>
        <hr />
                    <div >
                        <h4>ABV-IIITM, Morena Link Road</h4>
                        <h4>Gwalior</h4>
                        <h4><strong>Call:</strong>  +919910011990 </h4>
                        <h4><strong>Email: </strong>director@iiitm.ac.in</h4>
                    </div>


                </div>
                 <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">

                    <h2 ><strong>Social Conectivity </strong></h2>
        <hr />
                    <div >
                        <a href="#">  <img src="assets/img/Social/facebook.png" alt="" /> </a>
                     <a href="#"> <img src="assets/img/Social/google-plus.png" alt="" /></a>
                     <a href="#"> <img src="assets/img/Social/twitter.png" alt="" /></a>
                    </div>
                    </div>


                </div>
                 </div>
     <!-- CONTACT SECTION END-->
    <div id="footer">
            <a href="http://binarytheme.com" style="color: #fff" target="_blank">Created for: DBMS Project </a>
    </div>
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
    <script  src="assets/js/jquery-3.2.0.min.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
    
	<script type="text/javascript" src="assets/js/main.js"></script>
         
</body>
</html>
