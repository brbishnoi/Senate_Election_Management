<?php
       //Connect to mysql server 
       $link = mysqli_connect('localhost', 'root', '','election'); 
       //Check link to the mysql server 
       if(!$link) { 
       die('Failed to connect to server: '); 
       } 
       //Create query (if you have a Logins table the you can select login id and password from there)
       $qry='SELECT title,detail FROM notification'; 
       //Execute query 
       $result=mysqli_query($link, $qry) ;
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Notification</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900" rel="stylesheet">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <link rel="icon" type="image/png" href="image/icon1.png">
      <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
      <![endif]-->
   </head>
   <body>
      <header id="header">
         <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-menu">
                  <span class="sr-only"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a href="#" class="navbar-brand"><font color="#fff">SENATE</font> <font color="#D9BF77">ELECTION</font></a>
               </div>
               <div class="collapse navbar-collapse navbar-right" id="bs-menu">
                  <ul class="nav navbar-nav">
                     
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <section>
         <div id="myCarousel" class="carousel slide home-slider">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <div class="item active">
                  <img src="https://www.iiitdmj.ac.in/img/campus/LHTC1.jpg" class="img-responsive">
               </div>
               <div class="item">
                  <img src="image/mountain.jpg" class="img-responsive">
               </div>
               <div class="item">
                  <img src="image/mountain2.jpg" class="img-responsive">
               </div>
            </div>
            <a class="left carousel-control left-aerrow" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control right-aerrow" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
         </div>
      </section>
      <section class="home">
         <div class="container">
            <div class="row">
            <?php
                  while ($row = mysqli_fetch_assoc($result))
                  {
                ?>
               <div class="col-md-4 col-sm-4">
                  <div class="box">
                     <h3 class="heading"><?php echo $row['title']; ?></h3>
                     <p class="para"><?php echo $row['detail']; ?></p>
                     
                  
                  </div>
               </div>
               <?php
                  }
            ?>   
            </div>
            
         </div>
      </section>
      <footer class="cont" id="contact">
         	
         <div class="container-fluid tx-copy">
            <div class="txt-copyright">
               Copyright &copy; 2021 All right reserved.Designed by Budh Ram Bishnoi,Bharagvi Chetule,Sumit Yadav
            </div>
         </div>
      </footer>
      <script type=text/javascript>
         $(document).ready(function() {
            	$('.carousel').carousel({
         		interval: 2000
         	})
         
           //animate navbar scroll menu
         	$(".home").click(function(){
         		$("html, body").animate({
         			scrollTop: $("#header").position().top -50}, 1000);
         	});
         
         	$('.about').click(function() {
         		$("html, body").animate({
         			scrollTop: $('#about').position().top -50}, 1000);
         	});
         	
         	$(".service").click(function(){
         		$("html, body").animate({
         			scrollTop: $("#service").position() .top -50}, 1000);
         	});
         
         	$(".project").click(function(){
         		$("html, body").animate({
         			scrollTop: $("#project").position() .top -50}, 1000);
         	});
         
         	$(".client").click(function(){
         		$("html, body").animate({
         			scrollTop: $("#client").position() .top -50}, 1000);
         	});
         
         	$(".contact").click(function(){
         		$("html, body").animate({
         			scrollTop: $("#contact").position() .top -50}, 1000);
         	});
         
         
           //Portfolio
                $(".filter-button").click(function(){
                    var value = $(this).attr('data-filter');
                    if(value == "all")
                    {
                        $('.filter').show('1000');
                    }
                    else
                    {
                        $(".filter").not('.'+value).hide('3000');
                        $('.filter').filter('.'+value).show('3000');
                    }
                    if ($(".filter-button").removeClass("active")) {
                        $(this).removeClass("active");
                    }
                        $(this).addClass("active");
                });
            });
      </script>
   </body>
</html>