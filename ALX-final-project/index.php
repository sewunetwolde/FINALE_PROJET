<?php
require('include/db.php');
$query = "SELECT * FROM home,section_control,social_media,about,contact,site_background,seo";
$run = mysqli_query($db,$query);
$user_data = mysqli_fetch_array($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>A@Y</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Meyawo main styles -->
	
    <link rel="stylesheet" href="assets/css/meyawo.css">

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
<!-- style="background-color:#54b9c1" -->

    <!-- Page Navbar -->
    <nav class="custom-navbar" data-spy="affix" data-offset-top="20">
        <div class="container">
        <h1><a href="index.php"><?=$user_data['title']?></a></h1>
            <ul class="nav">
            <?php
           if($user_data['home_section']){
            ?>
          <li class="item"><a class="active" class="link" href="#home">Home</a></li>
               <?php 
                }
               if($user_data['about_section']){
                ?>
                 <li class="item"> <a class="link" href="#about">About</a></li>
                         
                <?php 
                }
                if($user_data['service_section']){
                ?>
                 <li class="item">
                    <a class="link" href="#service">Service</a>
                </li>
                <?php 
                }
                
                if($user_data['skill_section']){
                    ?>
                     <li class="item">
                        <a class="link" href="#skill">Skill</a>
                    </li>
                    <?php 
                    }
                if($user_data['resume_section']){
                    ?>
                     <li class="item">
                        <a class="link" href="#resume">Services</a>
                    </li>
                    <?php 
                    }
                if($user_data['resume_section']){
                ?>
                 <li class="item">
                    <a class="link" href="#testmonial">Testimonial</a>
                </li>
                  <?php 
                        }

                        if($user_data['portfolio_section']){
                        ?>
                                <li class="item"> <a class="link" href="#portfolio">Portfolio</a></li>
                                <?php 
                        }
                        if($user_data['contact_section']){
                        ?>
                                <li class="item">
                                    <a class="link" href="#footer">Contact</a>
                                </li>
                                <?php 
                        }
        ?>          
               
            </ul>
            <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
                <div class="hamburger-box">
                  <div class="hamburger-inner"></div>
                </div>
            </a>
        </div>          
    </nav><!-- End of Page Navbar -->

    <!-- page header -->
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content container">
            <h1 class="header-title">
                <span class="up"style="color:#145c4d;font-size:50px;font-family:'Times New Roman', Times, serif">Hello!
                I am <h2 style="color:#34aa59;font-size:40px;font-family:'Times New Roman', Times, serif"><?=$user_data['title']?></span></h1>
                
                <h2 style="color;#0c3d1f;font-size:40px;font-family:'Times New Roman', Times, serif"><?=$user_data['subtitle']?></h2></span>
               
            
            <!-- <p class="header-subtitle">& Electrical Engineer</p>             -->

            <button class="btn btn-primary" style="background-color: green;"><a href="#portfolio"><span style="color:white;font-family:'Times New Roman', Times, serif">Visit my works</span></a></button>
        </div> 
        <div class="about-img-holder">
                <img src="images/<?=$user_data['profile_pic']?>" class="img-fluid" alt="">
                </div>             
    </header><!-- end of page header -->

    <!-- about section -->
    <section class="section pt-0" id="about" style="background-color:#C4e3e6 ;">
        <!-- container -->
        <div class="container text-center">
            <!-- about wrapper -->
            <div class="about">
                <div class="about-img-holder">
                <img src="images/<?=$user_data['profile_pic']?>" class="img-fluid" alt="">
                </div>
               
                <div class="about-caption">
                    <p class="section-subtitle" style="color:#008080;font-size:40px;font-family:'Times New Roman', Times, serif">About Me</p>
                    <p style="color:blue;opacity:0.3;font-size:20px;font-family:'Times New Roman', Times, serif">Learn more about me</p>
                    <h2 class="section-title mb-3" style="color:green;font-size:30px;font-family:'Times New Roman', Times, serif"> </h2>
                  
                    <p style="color:#145c4d;font-size:20px;text-align:left;font-family:'Times New Roman', Times, serif">
                    <?=$user_data['about_desc']?>
                    </p>
                    <div class="row col-lg-12">
                <!-- <div class="col-lg-6">
               
            </div> -->
            
          </div>
       
          <a href="/images/cv.pdf" download>
            <button class="btn-rounded btn btn-outline-primary mt-4"style="color:#145c4d;font-size:20px;font-family:'Times New Roman', Times, serif">Download CV</button>
            </a>
                   
                </div> 
                             
            </div><!-- end of about wrapper -->
            
        </div><!-- end of container -->
        
 
    </section> <!-- end of about section -->
<!-- Skill section -->
 <!-- Experience section -->
 <section class="section" id="skill" style="background-color:#C4e3e6 ;">
        <div class="container text-center">
            <p class="section-subtitle" style="color:blue;opacity:0.3;font-size:20px;font-family:'Times New Roman', Times, serif">What Experience & Skills I have?</p>
            <h6 class="section-title mb-6"style="color:#008080;font-size:40px;font-family:'Times New Roman', Times, serif">Experience & Skills</h6><hr>
            <!-- row -->
            <div class="row">
            <?php
                $query2 = "SELECT * FROM skills";
                $run2 = mysqli_query($db,$query2);

                while($skilledata = mysqli_fetch_array($run2)){
                ?>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">               
                   <div class="body">
                          
                            <h6 class="title"><?=$skilledata['skill_name']?></h6><hr>
                            <br>  <br>
                            <p  style="font-size: 20px;text-align:left; color:#008080; font-family:'Times New Roman', Times, serif"><?=$skilledata['skilldesc']?>.</p>
                        </div>                   
                    </div>
                </div>
                <?php
                }
                ?>
             
            </div><!-- end of row -->
        </div>
    </section><!-- end of experience section -->
    <!-- service section -->
    <section class="section" id="resume" style="background-color:#C4e3e6 ;">
    <?php include("resumee.php");?> 
    </section>
    <section class="section" id="service" style="background-color:#C4e3e6 ;">
        <div class="container text-center">
        <p class="section-subtitle" style="color:blue;opacity:0.3;font-size:20px;font-family:'Times New Roman', Times, serif">What Services I offer?</p>
            <h6 class="section-title mb-6"style="color:#008080;font-size:40px;font-family:'Times New Roman', Times, serif">Services<hr></h6>
            <!-- row -->
            <div class="row">
                
            <?php
                $query2 = "SELECT * FROM service";
                $run2 = mysqli_query($db,$query2);

                while($servicedata = mysqli_fetch_array($run2)){
                ?>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="body">
                          
                            <h4 class="title" style="padding-bottom: -40px;font-family:'Times New Roman', Times, serif;font-weight:800"><?=$servicedata['service_title']?></h4><br>
                            <p  style="font-size: 18px; text-align:left; color:green; font-family:'Times New Roman', Times, serif"><?=$servicedata['service_desc']?></p>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
               
            </div><!-- end of row -->
        </div>
    </section><!-- end of service section -->
 
    <!-- portfolio section -->
    <section class="section" id="portfolio" style="background-color:#C4e3e6 ;">
        <div class="container text-center">
             <p class="section-subtitle"style="font-size:18px;opacity:0.7;text-align:center;color:white;font-family:'Times New Roman', Times, serif;font-weight:800" >What I Did ?</p>
            <h6 class="section-title mb-6"style="padding-bottom: -20px;text-align:center;color:#008080;font-family:'Times New Roman', Times, serif;font-weight:800">Portfolio</h6><hr>
            <!-- row -->
            <div class="row">
                        <?php   
                    $query5 = "SELECT * FROM portfolio";
                    $run5 = mysqli_query($db,$query5);    
                 while($portfolio = mysqli_fetch_array($run5)){

                        ?>
                <div class="col-md-4"><br>
                        <a href="#" class="portfolio-card" style="border-radius: 10px;opacity:0.8">
                        <img src="images/<?=$portfolio['project_pic']?>" class="portfolio-card-img" alt="">    
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                            <h4><?=$portfolio['project_name']?></h4>
                            <p><?=$portfolio['project_type']?></p>                                           
                    </a>
                    <br>
                   <button class="btn btn-success" style="border-radius: 40px;"> <a href="<?=$portfolio['project_link']?>" ><span style="color: green;">Live Demo</span></a></button><br>
                </div>
                <?php
                }
                ?>
                
            </div>
            
<!-- end of row -->
        </div><!-- end of container -->
    </section> <!-- end of portfolio section -->
   
    <!-- section -->
    <section class="section-sm bg-primary" style="background-color:#C4e3e6 ;">
        <!-- container -->
        <div class="container text-center text-sm-left">
            <!-- row -->
            <div class="row align-items-center">
                <div class="col-sm offset-md-1 mb-4 mb-md-0">
                    <h6 class="title text-light" style="font-size:18px;opacity:0.7;text-align:center;color:white;font-family:'Times New Roman', Times, serif">Want to work with me?</h6>
                    <p class="m-0 text-light" style="font-size:18px;opacity:0.7;text-align:center;color:white;font-family:'Times New Roman', Times, serif">Always feel Free to Contact & Hire me</p>
                </div>
                <div class="col-sm offset-sm-2 offset-md-3">
                    <button class="btn btn-lg my-font btn-light rounded">Hire Me</button>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of section -->

    <!-- testimonial section -->
    <section class="section" id="testmonial" style="background-color:#C4e3e6 ;">
   
        <div class="container text-center">
            
        <p class="section-subtitle"style="font-size:18px;opacity:0.7;text-align:center;color:white;font-family:'Times New Roman', Times, serif;font-weight:800" >What Think Client About Me ?</p>
            <h6 class="section-title mb-6"style="text-align:center;color:#008080;font-family:'Times New Roman', Times, serif;font-weight:800">Testimonials</h6><hr>
            <!-- <p class="section-subtitle">What Think Client About Me ?</p>
            <h6 class="section-title mb-6">Testmonial</h6> -->

            <!-- row -->
          
            <!-- <div class="row" >
                <div class="col-md-6">
                
                           <div class="testimonial-card"style="display: flex;">
                        <div class="testimonial-card-img-holder">
                            <img src="images/" class="testimonial-card-img" alt="">                           
                        </div>
                        <div class="testimonial-card-body">
                            <p class="testimonial-card-subtitle"></p>
                            <h6 class="testimonial-card-title"></h6>
                           
                        </div>
                          </div>
                        
                                        
                  
                </div>
              
                </div> -->
              
        </div> 
       <!-- end of container -->
    </section> <!-- end of testimonial section -->
    <section class="section" id="testmonial" style="background-color:#C4e3e6 ;">
    <style>
        .containerr {
  border: 2px solid #ccc;
  background-color: #eee;
  border-radius: 5px;
  padding: 16px;
  margin: 16px 0;
}

/* Clear floats after containers */
.containerr::after {
  content: "";
  clear: both;
  display: table;
}

/* Float images inside the container to the left. Add a right margin, and style the image as a circle */
.containerr img {
  float: left;
  margin-right: 20px;
  border-radius: 50%;
  
}

/* Increase the font-size of a span element */
.containerr span {
  font-size: 20px;
  margin-right: 15px;
}

/* Add media queries for responsiveness. This will center both the text and the image inside the container */
@media (max-width: 500px) {
  .containerr {
    text-align: center;
  }

  .containerr img {
    margin: auto;
    float: none;
    display: block;
  }
}
    </style>
      <?php   
                    $query5 = "SELECT * FROM testimonial";
                    $run5 = mysqli_query($db,$query5);    
                    while($testimonial = mysqli_fetch_array($run5)){

                        ?>
    <div class="containerr" style="padding-bottom:30px;margin-left:300px;margin-right:300px;margin-top:-100px;background-color:#C4e3e6;border-radius:10px">
  <img src="images/<?=$testimonial['img']?>" alt="" style="width:90px">

  <p style="font-weight: 800;color:green; font-family:'Times New Roman', Times, serif"><span><?=$testimonial['full_name']?></span> </p>
  <p style="font-weight: 300;color:0F1818; font-family:'Times New Roman', Times, serif"><?=$testimonial['suggestion']?></p>
</div>
<br><br><br><br><br><br>
<?php
}
?>
    </section> 
   
    <!-- contact section -->
     <!-- ======= Contact Section ======= -->
     <section class="section" id="footer" style="margin-top: -69px">
     <?php include("footer.php");?> 
 
     </section>
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Meyawo js -->
    <script src="assets/js/meyawo.js"></script>

</body>
</html>
