<!DOCTYPE html>
<html lang="en">

<head>
   <title>Senate Election</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
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
               <a href="#" class="navbar-brand">
                  <font color="#fff">SENATE</font>
                  <font color="#D9BF77">ELECTION</font>
               </a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="bs-menu">
               <ul class="nav navbar-nav">
                  <li><a href="#" class="home"></span> Home</a></li>
                  <li><a href="#" class="about">About</a></li>
                  <li><a href="#" class="contact">Contact</a></li>
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
               <img src="https://www.iiitdmj.ac.in/img/campus/cc.jpg" class="img-responsive">
            </div>
            <div class="item">
               <img src="https://www.iiitdmj.ac.in/img/campus/corelab.jpg" class="img-responsive">
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
            <div class="col-md-4 col-sm-4">
               <div class="box">
                  <h3 class="heading">admin</h3>
                  <p class="para"></p>
                  <center><button type="button" onclick="window.location.href='Admin.php';" class="btn">login</button>
                  </center>
               </div>
            </div>
            <div class="col-md-4 col-sm-4">
               <div class="box">
                  <h3 class="heading">Notification</h3>
                  <p class="para"></p>
                  <center><button type="button" onclick="window.location.href='Notification.php';" class="btn">more
                        info</button></center>
               </div>
            </div>
            <div class="col-md-4 col-sm-4">
               <div class="box">
                  <h3 class="heading">Student</h3>
                  <p class="para"></p>
                  <center><button type="button" onclick="window.location.href='Student.php';" class="btn">Login</button>
                  </center>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="abot" id="about">
      <div class="container">
         <div class="col-md-12">
            <div class="page-about">
               <h2 class="title">About Us</h2>
               <p class="desc">Online Voting is a web-based voting system that will help you manage your elections
                  easily
                  and securely. This voting system can be used for casting votes during the elections held
                  in colleges, etc. In this system the voter do not have to go to the polling booth to cast
                  their vote. They can use their personal computer to cast their votes.

                  There is a database which is maintained in which all the name of the voters with their
                  complete information is stored. The System Administrator registers the voters by simply
                  filling a registration form to register the voters. After registration, the voter is
                  assigned a secret voter ID with which he/she can use to login to the system and cast
                  his/her vote. If invalid/wrong details are submitted, then the person is not registered to
                  vote.

                  After the user successfully registers themselves, a link is sent on their respective
                  E-mail IDs. The link is a key for the activation of the account of the user. The account
                  is activated only after the user clicks on that link.The site will be activated only on
                  the day of voting. Once the user logs in, they will be provided with a One Time Password
                  (OTP) which has to be entered by the user before casting his/her vote. The password will
                  be destroyed after casting of their respective vote. A receipt of the vote will be sent to
                  the user on their respective E-mail IDs.

                  The advantage of online voting is that the voters have the choice of voting at their own
                  free time and there is reduced congestion. It also minimizes on errors of vote counting.
                  The individual votes are submitted in a database which can be queried to find out who of
                  the aspirants for a given post has the highest number of votes.</p>
            </div>
         </div>
         <div class="media-ab">
            <div class="row">
               <div class="col-lg-12">
                  <div class="col-md-6 col-sm-6">
                     <div class="media">
                        <div class="media-left media-middle">
                           <a href="#">
                              <img class="media-object" src="image/pic1.webp" alt="...">
                           </a>
                        </div>
                        <div class="media-body">
                           <h2 class="media-heading">About Election</h2>
                        </div>
                        <div class="media-detail text-justify">
                           <p>Online Voting is a web-based voting system that will help you manage your elections easily
                              and securely. This voting system can be used for casting votes during the elections held
                              in colleges, etc. In this system the voter do not have to go to the polling booth to cast
                              their vote. They can use their personal computer to cast their votes.

                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                     <div class="media">
                        <div class="media-left media-middle">
                           <a href="#">
                              <img class="media-object" src="image/pic3.webp" alt="...">
                           </a>
                        </div>
                        <div class="media-body">
                           <h2 class="media-heading">Rules and Regulation</h2>
                        </div>
                        <div class="media-detail text-justify">
                           <p> Every Registered Student Of The Institute Is By-Default Member
                              Of Student Gymkhana And Would Have Right To Vote. All Members Of The Student Gymkhana Who
                              Have Their CPI >= 6.5 Will Be Eligible To Make Their Candidature For The Student Senate.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                     <div class="media">
                        <div class="media-left media-middle">
                           <a href="#">
                              <img class="media-object" src="image/pic4.webp" alt="...">
                           </a>
                        </div>
                        <div class="media-body">
                           <h2 class="media-heading">Admin Instruction</h2>
                        </div>
                        <div class="media-detail text-justify">
                           <p>Each admin is provided with a unique Admin Id and password by the institution.

                              The admin uses the Admin Id and password for login and if incorrect Admin Id and password
                              is entered, the access is denied to the admin.

                              The task of the admin is to add the name of students and interested candidates in the
                              candidates list and assign them the suitable student Id and candidate Id respectively.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                     <div class="media">
                        <div class="media-left media-middle">
                           <a href="#">
                              <img class="media-object" src="image/pic2.webp" alt="...">
                           </a>
                        </div>
                        <div class="media-body">
                           <h2 class="media-heading">
                              Student Instruction</h4>
                        </div>
                        <div class="media-detail text-justify">
                           <p>Each voter is provided with a unique college Id and password manually by the
                              administrator.

                              The voter uses the college Id and password for login and can exercise the fundamental
                              right of voting.

                              If incorrect college Id and password is entered, the access is denied to the user. And
                              also the voter is allowed to vote only once. This is the security feature provided against
                              external
                              access to the system.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <footer class="cont" id="contact">
      <div class="container fot-cont">
         <h2 class="title">Contact Us</h2>
         <div class="col-md-12 col-sm-12">
            <div class="con-map">
               <iframe
                  src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=iiitdm jabalpur&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                  width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

         </div>
         <div class="col-md-12">
            <div class="col-md-4 col-sm-4">
               <div class="adrs-ft" style="position: relative;left: 121%;">
                  <h3><i class="fa fa-map-marker"></i> Our Location</h3>
                  <address>
                     Main Acadmic office , <br />
                     IIITDM JABALPUR <br />
                     Email: 123@xyz, Baker Street,
                     <br />xyz- 123456 <br />
                     <abbr title="phone">Mo:</abbr> 999-999-9999
                  </address>
                  <div class="social-ft">
                     <a href="#"><span class="fa fa-facebook"></span></a>
                     <a href="#"><span class="fa fa-twitter"></span></a>
                     <a href="#"><span class="fa fa-google-plus"></span></a>
                     <a href="#"><span class="fa fa-linkedin"></span></a>
                  </div>
               </div>
            </div>

         </div>
      </div>
      <br>
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