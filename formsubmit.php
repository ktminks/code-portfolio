<?php

  $sender = $_POST["contact-name"];
  $recipient="katie.minckler@gmail.com";
  $subject=$_POST["contact-subject"];
  $senderEmail=$_POST["contact-email"];
  $message=$_POST["contact-message"];
  $headers="From: $sender <$senderEmail>";

  $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

  mail($recipient, $subject, $mailBody, $headers);

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>

   <!-- Basic Page Needs
   ----------------------------------------------------- -->
   <meta charset="utf-8">
   <title>Thank you!</title>

   <!-- Mobile Specific Metas
   -------------------------------------------------- -->
   <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
   ------------------------------------------------------ -->
   <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">

   <!-- CSS
   -------------------------------------------------- -->
   <link rel="stylesheet" href="css/home.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
   <!-- Favicon
   -------------------------------------------------- -->
   <link rel="icon" type="image/png" href="illustration/images/favicon.png">

   <!---Scripts------------------------------------------->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

 </head>
   <body>

     <!------------------ Navigation bar -------------------------->
     <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top transparent">
       <div class="container">
     <!------------------ Button to expand appears when viewport is too small ------------->
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" id="nav-links-button">
           <span class="navbar-toggler-icon"></span>
         </button>
     <!------------------ Icon or brand ---------------------->
         <a class="navbar-brand" id="logo" href="index.html">KTMinks</a>
     <!------------------ Collapsible links ----------------->
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
           <div class="navbar-nav navbar-toggler-right" id="nav-links">
             <a class="nav-item nav-link active" href="index.html#home">Home <span class="sr-only">(current)</span></a>
             <a class="nav-item nav-link" href="index.html#portfolio">Portfolio</a>
             <a class="nav-item nav-link" href="index.html#about">About</a>
             <a class="nav-item nav-link" href="index.html#contact">Contact</a>
           </div>
         </div>
       </div>
     </nav>

     <!---------------------- Home splash ------------------->

     <div class="container-fluid px-0">
       <div id="home" class="text-center">
         <h1 style="color: white; font-family: 'shadows into light'; padding: 20px; margin-top: 7vh;">Thanks! Your message has been sent.</h1>
       </div>

     <!------------- Footer ---------->
     <div class="navbar navbar-fixed-bottom transparent">
       <div class="container">
         <div class="row footer text-center">
           <div class="col-md-6">
             <p class="text-muted">&copy; KT Minckler 2017</p>
           </div>
           <div class="col-md-6">
             <p>
      <!--------- Social icons ----------->
               <a href="https://www.facebook.com/ktminks" target="_blank"><i class="fa fa-facebook"></i></a>
               <a href="https://kminckler.deviantart.com" target="_blank"><i class="fa fa-deviantart"></i></a>
               <a href="https://plus.google.com/u/0/+KatieMinckler" target="_blank"><i class="fa fa-google-plus"></i></a>
               <a href="https://www.linkedin.com/in/ktminks" target="_blank"><i class="fa fa-linkedin"></i></a>
               <a href="https://github.com/ktminks" target="_blank"><i class="fa fa-github"></i></a>
             </p>
           </div>
         </div>
       </div>
     </div>
   </div>
 </body>
 </html>
