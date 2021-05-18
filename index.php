<?php

  include_once("php/connection.php");
  $con = connection ();

  if(isset($_POST['submit'])){
    
    $uname = $_POST['username'];
    $ulink = $_POST['link'];
    $ucomm = $_POST['comment'];

    $sql = "INSERT INTO `contact`(`user_name`, `user_link`, `user_comment`) 
    VALUES ('$uname','$ulink','$ucomm')";

    $con->query($sql) or die($con->error);
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link href="//db.onlinewebfonts.com/c/9ea60840bd8fe427a00ded2338da6211?family=Klavika+Web+Regular+Condensed" rel="stylesheet" type="text/css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <!--video-->

    <!--MY CSS-->
    <link rel="stylesheet" href="css/style.css">
    <title>Amvprosox | AMV Edits and more</title>
</head>

<body>
    <!-- #HEADER -->
    <header id="Home">
        <!-- #HEADER -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">
              <img src="images/Logo.png" alt="amvprosox">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#Home"><i class="fas fa-home px-2"></i>Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#AMVThisweek"><i class="fas fa-video px-2"></i>AMV</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#Learn"><i class="fab fa-leanpub px-2"></i>Tutorial</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#Recent"><i class="fas fa-briefcase px-2"></i>Recent Work</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#About"><i class="fas fa-address-card px-2"></i>About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#Contact"><i class="fas fa-phone px-2"></i>Contact Me</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h px-2"></i>Others</a>
                  <div class="dropdown-menu">
                    <a href="download.html" class="dropdown-item" target="_blank">Download</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="https://www.facebook.com/prosox.ss" target="_blank">Facebook</a>
                    <a class="dropdown-item" href="https://www.instagram.com/amv.prosox" target="_blank">Instagram</a>
                    <a class="dropdown-item" href="https://www.youtube.com/channel/UCk3OzmBGu6cr0JpRC17kAWg" target="_blank">Youtube</a>
                    <a class="dropdown-item" href="https://www.payhip.com/amvprosox" target="_blank">Payhip (Store)</a>
                    <a class="dropdown-item" href="https://www.paypal.com/paypalme/amvprosox" target="_blank">Paypal (Donate)</a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
    </header>

    <!-- #SLIDER -->
    <section class="slider-header">
        <div id="carouselExampleIndicators" class="carousel slide bg-dark" data-ride="carousel">
            <ol class="carousel-indicators c-i">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            </ol>

            <div class="carousel-inner pt-5">
                
              <div class="carousel-item active">
                <img class="d-block w-100" src="images/dw.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/ahjpg.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/el.jpg" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/gc.jpg" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/wu.jpg" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/ru.jpg" alt="Third slide">
              </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon header-slide" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon header-slide" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
  
          <div class="row">
            <div class="col-lg-12 banner-text">
              My Current Groups
            </div> <!--column ends-->
          </div>
    </section>


  <!------------------------------------------------------------------------------------------------------>

    <!--AMV OF THE WEEK-->
    <div class="conteyn">
    <section id="AMVThisweek" class="mx-2 pb-5">
      <h1 class="text-center pt-4 abawt"><span style="color: crimson;">AMV</span> of the week</span></h1>
      <hr class="hr-about">
      <p class="text-center about-p">AMV of the week is collecting videos from 5 amv editors every week<br>from social media and posting here every week</p>
      <!--SLIDES-->
      <div id="carouselExampleControls" class="carousel slide px-5" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <!--AMV THIS WEEK 1-->
            <div class="container py-3">
              <div class="row py-3 softaec4d-amv">

                <div class="col-md-6"><!--Video AMV WEEK-->
                  <div class="video-player pt-2" style="max-width: 600px;">
                    <video width="100%" controls poster="/images/Uncertain.jpg" loop>
                      <source src="video/Convolk.mp4" type="video/mp4">
                    </video>
                  </div>
                </div>

                <div class="col-md-6 px-3 pt-3 aec4d"> <!--DETAILS AMV WEEK-->
                  <div class="row no-gutters">
                    <div id="Profayls" class="px-1"><a href="https://www.instagram.com/amv.prosox" target="_blank"><img class="profiles" src="thumbnail/60cute.gif" alt="amv.prosox"></a></div>
                    <div class="px-3 pt-1"><h4 class="profayl-name">amv.prosox</h4></div>
                  </div>  
                  <hr class=""> <!--LINYA-->
                  <h4 class="amvweek-title">Uncertain</h4>
                  <p class="pr-3">Song: Convolk - Uncertain</p>
                  <div class="list">
                    <a class="text-decoration-none text-button" href="download.html" target="_blank"><button type="button" class="btn rounded-0">VIEW POST</button></a>
                  </div>
                  <p class="pt-2"><small class="smol">Video release: May 02, 2021</small></p>
                  <p class="card-text"><small class="text-muted">If you want to post your video here, please
                    fill up the form below/contact me </small></p>
                </div>

              </div>
            </div>
          </div>

      
          <div class="carousel-item">
            <!--AMV THIS WEEK 2-->
            <div class="container py-3">
              <div class="row py-3 softaec4d-amv">
      
                <div class="col-md-6"><!--Video AMV WEEK-->
                  <div class="video-player pt-2" style="max-width: 600px;">
                    <video width="100%" controls poster="/images/Uncertain.jpg" loop>
                      <source src="video/Convolk.mp4" type="video/mp4">
                    </video>
                  </div>
                </div>
      
                <div class="col-md-6 px-3 pt-3 aec4d"> <!--DETAILS AMV WEEK-->
                  <div class="row no-gutters">
                    <div id="Profayls" class="px-1"><a href="https://www.instagram.com/amv.prosox" target="_blank"><img class="profiles" src="thumbnail/60cute.gif" alt="amv.prosox"></a></div>
                    <div class="px-3 pt-1"><h4 class="profayl-name">amv.prosox</h4></div>
                  </div>  
                  <hr class=""> <!--LINYA-->
                  <h4 class="amvweek-title">Uncertain</h4>
                  <p class="pr-3">Song: Convolk - Uncertain</p>
                  <div class="list">
                    <a class="text-decoration-none text-button" href="download.html" target="_blank"><button type="button" class="btn rounded-0">VIEW POST</button></a>
                  </div>
                  <p class="pt-2"><small>Video release: May 02, 2021</small></p>
                  <p class="card-text"><small class="text-muted">If you want to post your video here, please
                    fill up the form below/contact me </small></p>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!--nextprev-->
        <a class="carousel-control-prev eoin" href="#carouselExampleControls" role="button" data-slide="prev">
          <i class="fas fa-arrow-circle-left "></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next eoin" href="#carouselExampleControls" role="button" data-slide="next">
          <i class="fas fa-arrow-circle-right"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!--/SLIDES-->
    </section>

    <!------------------------------------------------------------------------------------------------------>
    
    <!--What is AMV-->
    <div class="pb-4 px-5">
      <div class="bg-what">
        <h1 class="font-weight-bold text-center display-1 what-amv">What is AMV ?</h1>
      </div>
      <h1 class="pt-5 font-weight-bold text-center display-1 amv-what">ANIME MUSIC VIDEO</h1>
      <p id="p-font-p" class="card-text pb-4 px-3">An anime music video, known in wasei-eigo as MAD, is a fan-made music video 
        consisting of clips from one or more Japanese animated shows or movies set to an audio track, 
        often songs or promotional trailer audio. 
      </p> 
    </div>

    <!------------------------------------------------------------------------------------------------------>

    <!--LEARN 3D TEXT-->
    <section class="pb-3 pt-5" id="Learn">
      <div class="container learn-bg">
        <div class="row">
          <div class="col-md-6 mt-4 py-4 mb-5"> <!--Learn-->
            <div class="vl">
            <h1 class="learn-h1 pb-2">Learn to make 3D text in After Effects using Element 3D</h1>
            <a class="text-decoration-none learn-btn" href="https://youtu.be/KrzQZhYQPgE"><button type="button" class="btn btn-grad rounded-0">LEARN MORE</button></a>
            </div>
          </div>
          <div class="col-md-6">  <!--Youtube-->
            <div class="embed-responsive embed-responsive-16by9 youtube-img">
              <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/KrzQZhYQPgE" 
              title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
              gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    

     <!------------------------------------------------------------------------------------------------------>
    <!--Recent-->
    <section id="Recent" class="pt-4 pb-0">
      <div class="resent pb-3 pt-4">
        <div class="detalye">
          <div class="row Image d-flex justify-content-center mx-4">
            <!--recent work-->

            <div class="col-md-4 py-4 px-4">
              <a href="https://www.instagram.com/p/COxqbiXj-Ql/?utm_source=ig_web_copy_link" target="_blank">
                
                <div id="zoom-in" class="card text-white mx-auto rounded-0" style="max-width: 540px;">
                <img class="card-img" src="images/They Say_00026.jpg" alt="Uncertain-Convolk">
                </div>
              </a>
              <div class="pt-3">
                <hr>
                <h3 class="card-title font-weight-bold recent-font">They Say</h3>
                <p class="card-text recent-fontp">Song: They Say - yngmartyr</p>
              </div>
              <div class="pt-4 list">
                <a class="text-decoration-none text-button" href="download.html" target="_blank"><button type="button" class="btn rounded-0">VIEW POST</button></a>
              </div>
            </div>

            <div class="col-md-4 py-4 px-4">
              <a href="https://www.instagram.com/p/COVjL7rjU7-/?utm_source=ig_web_copy_link" target="_blank">
                <div id="zoom-in" class="card text-white mx-auto rounded-0" style="max-width: 540px;">
                  <img class="card-img" src="images/convolk.jpg" alt="Uncertain-Convolk">
                </div>
              </a>
              <div class="pt-3">
                <hr>
                <h3 class="card-title font-weight-bold recent-font">They Say</h3>
                <p class="card-text recent-fontp">Song: Uncertain - Convolk</p>
              </div>
              <div class="pt-4 list">
                <a class="text-decoration-none text-button" href="download.html" target="_blank"><button type="button" class="btn rounded-0">VIEW POST</button></a>
              </div>
            </div>

            <div class="col-md-4 py-4 px-4">
              <a href="https://www.instagram.com/p/CNMst6kjl8b/?utm_source=ig_web_copy_link" target="_blank">
                <div id="zoom-in" class="card text-white mx-auto rounded-0" style="max-width: 540px;">
                  <img class="card-img" src="images/croow.jpg" alt="Crowbars-Kurtains">
                </div>
              </a>
              <div class="pt-3">
                <hr>
                <h3 class="card-title font-weight-bold recent-font">They Say</h3>
                <p class="card-text recent-fontp">Song: Crowbars - Kurtains</p>
              </div>
              <div class="pt-4 list">
                <a class="text-decoration-none text-button" href="download.html" target="_blank"><button type="button" class="btn rounded-0">VIEW POST</button></a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <div class="_marquee">
      <ul class="marquee-content">
        <li>YOU CAN ALSO BUY MY PROJECTS FILES FOR A CHEAPER PRICE, THIS IS AVAILABLE ON MY PAYHIP</li>
        <li>YOU CAN ALSO BUY MY PROJECTS FILES FOR A CHEAPER PRICE, THIS IS AVAILABLE ON MY PAYHIP</li>
        <li>YOU CAN ALSO BUY MY PROJECTS FILES FOR A CHEAPER PRICE, THIS IS AVAILABLE ON MY PAYHIP</li>
        <li>YOU CAN ALSO BUY MY PROJECTS FILES FOR A CHEAPER PRICE, THIS IS AVAILABLE ON MY PAYHIP</li>
      </ul>
    </div>
    
    <hr class="pt-0 mb-2">
    

    <!------------------------------------------------------------------------------------------------------>

    <!--#Abouttttttt-->
    <section id="About" class="pb-3 pt-2 pb-4 bg-about">  
      <h1 class="text-center pb-0 abawt">About me</h1>
      <hr class="hr-about mb-3">
      <p class="text-center about-p pb-3">My name is Eoin Villarin, also known as "amv.prosox" in social media. <br>I'm an amv editor</p>
      <div class="container px-3"> <!--STAAAAAAARRRRRRRTTTTTTTTT-->
        <div class="row py-3 softaec4d">

          <div class="col-md-6 px-3 pt-5 aec4d">
            <h4 class="about-mee">Project File</h4>
            <p class="p-about">Thank you guys for supporting me always on all of my social media. Although
              I'm inactive but you guys still supporting me. So I decide to give you guys some my project
              files for free. So I hope my project files can help you guys especially on beginners to 
              improve your work. If you have any question you can use contact form below or message me 
              on my social media accounts.
            </p>
            <h4 class="about-mee">Details:</h4>
              <ul class="p-about-p">
                <li><p class="p-about"></p>After Effects 2020</p></li>
                <li><p class="p-about"></p>Only project files no anime inluded or etc..</p></li>
              </ul>
              <div class="pl-4 list">
                <a class="text-decoration-none text-button" href="download.html" target="_blank"><button type="button" class="btn rounded-0">DOWNLOAD</button></a>
              </div>
          </div>

          <div class="col-md-6">
            <h4 class="about-mee text-right">Free Project File</h4>
            <hr class="">
            <div>
              <img class="w-100" src="thumbnail/cutebluegirl.gif" alt="Free pack">
            </div>
          </div>
        </div>
      </div>

      <div class="container px-3 pt-4"> <!--STAAAAAAARRRRRRRTTTTTTTTT-->
        <div class="row py-3 softaec4d">

          <div class="col-md-6">
            <h4 class="about-mee">Software I use</h4>
            <hr class="">
            <!--Carousel Wrapper-->
            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
              <!--Slides-->
              <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                  <img class="d-block w-100" src="images/AE.png"
                    alt="First slide">
                </div>
                <!--/First slide-->
                <!--Second slide-->
                <div class="carousel-item">
                  <img class="d-block w-100" src="images/C4D.png"
                    alt="Second slide">
                </div>
                <!--/Second slide-->
              </div>
              <!--/.Slides-->
              <!--Controls-->
              <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->
          </div>

          <div class="col-md-6 px-3 pt-5 aec4d">
            <h4 class="about-mee">After Effects</h4>
            <p class="p-about">Adobe After Effects is a digital visual effects, motion graphics, and compositing 
              application developed by Adobe Systems and used in the post-production process of 
              film making, video games and television production. Among other things, After Effects 
              can be used for keying, tracking, compositing, and animation.
            </p>
            <h4 class="about-mee">Cinema4D</h4>
            <p class="p-about">Cinema 4D is a professional 3D modeling, animation, simulation and rendering software 
              solution. Its fast, powerful, flexible and stable toolset make 3D workflows more 
              accessible and efficient for design, motion graphics, VFX, AR/MR/VR, game development 
              and all types of visualization professionals.
            </p>
          </div>
        </div>
      </div>
    </section>

    <hr class="">
    <!------------------------------------------------------------------------------------------------------>
    <!--CONTACT ME-->
    <section id="Contact">
      <div class="container px-3 pt-4"> <!--STAAAAAAARRRRRRRTTTTTTTTT-->
        <div class="row py-3 softaec4d">

          <div class="col-md-6 px-3 pt-5 aec4d">
            <h4 class="about-mee">Contact Me</h4>
            <form class="form-me" action="index.php" method="POST"> 
              <div class="row pb-3 px-5"> <!--row of forms-->
                <div class="col-md-6 pt-4">
                  <input type="text" class="form-control" id="Username" name="username" placeholder="Username *" required>
                </div>
                <div class="col-md-6 pt-4">
                  <input type="text" class="form-control" id="Link" name="link" placeholder="Your video link *" required>
                </div>
                <div class="form-group col-md-12 pt-4 pb-1">
                  <textarea class="form-control" rows="5" id="Comment" name="comment" placeholder="Your message *"></textarea>
                </div>
                <div class="cold-md-6 px-3">
                  <button type="submit" name="submit" class="btn btn-warning">Submit</button>
                </div>
              </div><!--/row of forms-->
            </form>
          </div>

          <div class="col-md-6">
            <div class="pt-5 mt-5">
              <img class="w-100" src="thumbnail/Tohru1.gif" alt="Free pack">
            </div>
          </div>

        </div>
      </div>
    </section>

  </div><!--all contain-->
  <br>

    <!--FOOTER-->
    <footer id="Others" class="page-footer footah">
        <div class="container">
          <div class="row">
            <div class="rows d-flex align-items-center">
              <!--Groups-->
              <div class="container">
                <div class="row">

                    <div class="col-md-2 font-gc px-5"><!--STARTTTTT-->
                      <div class="container d-flex justify-content-center py-3"><img src="thumbnail/dw1.gif" class="rounded-circle" alt=""></div>
                      <h2 class="text-center">Deathwings</h2>
                    </div>
                    <div class="col-md-2 font-gc px-5">
                      <div class="container d-flex justify-content-center py-3"><img src="thumbnail/ah.gif" class="rounded-circle" alt=""></div>
                      <h2 class="text-center">Artemis</h2>
                    </div>
                    <div class="col-md-2 font-gc px-5">
                      <div class="container d-flex justify-content-center py-3"><img src="thumbnail/gc.gif" class="rounded-circle" alt=""></div>
                      <h2 class="text-center">Gambit</h2>
                    </div><!--STARTTTTT-->

                      <div class="col-md-2 font-gc px-5">
                        <div class="container d-flex justify-content-center py-3"><img src="thumbnail/wf.gif" class="rounded-circle" alt=""></div>
                        <h2 class="text-center">Waifu</h2>
                      </div>
                      <div class="col-md-2 font-gc px-5">
                        <div class="container d-flex justify-content-center py-3"><img src="thumbnail/el.gif" class="rounded-circle" alt=""></div>
                        <h2 class="text-center">Ellision</h2>
                      </div>
                      <div class="col-md-2 font-gc px-5">
                        <div class="container d-flex justify-content-center py-3"><img src="thumbnail/rh.gif" class="rounded-circle" alt=""></div>
                        <h2 class="text-center">Rush</h2>
                      </div>
                    
                </div>
              </div><!--Groups-->

            </div>
          </div>
        </div>

    <div class="container text-center text-md-left md-5">
      <div class="row">
        
        <div class="col-md-6 mx-auto">
          <h6 class="email-h6 pb-2">More question just email me: amvprosox@gmail.com</h6>
          <hr class="bg-danger mb-2 mt-0 d-inline-block mx-auto" style="width: 80px; height: 2px">

          <ul class="list-unstyled copy">
            <li>Copyright ⓒ 2021, amv.prosox. All rights reserved</li>
            <li>Developed by: amv.prosox</li>
          </ul>
        </div>

        <div class="col-md-4 mx-auto">
          <h6 class="text-uppercase font-weight-bold text-light">Social Media</h6>
          <hr class="bg-danger mb-2 mt-0 d-inline-block mx-auto" style="width: 80px; height: 2px">

          <ul class="list-unstyled social-medya"> 
            <li><a class="social-medya" href="https://www.facebook.com/prosox.ss" target="_blank">Facebook</a></li>
            <li><a class="social-medya" href="https://www.instagram.com/amv.prosox" target="_blank">Instagram</a></li>
            <li><a class="social-medya" href="https://www.youtube.com/channel/UCk3OzmBGu6cr0JpRC17kAWg" target="_blank">Youtube</a></li>
            <li><a class="social-medya" href="https://www.payhip.com/amvprosox" target="_blank">Payhip</a></li>
          </ul>
        </div>

      </div>
    </div>

  

    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  </body>
</html>