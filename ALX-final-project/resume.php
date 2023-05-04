  <!-- ======= Resume Section ======= -->
  <?php require('include/db.php')?>
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title" style="text-align: center;font-family:'Times New Roman', Times, serif">
        <h2 style="color: #008080;font-family:'Times New Roman', Times, serif">Resume</h2>
        <p style="color: #008080;font-family:'Times New Roman', Times, serif">Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
         
          

          <h3 class="resume-title" style="color: #008080;font-family:'Times New Roman', Times, serif">Education</h3>
<?php
  
  $query4 = "SELECT * FROM resume";
  $run4 = mysqli_query($db,$query4);
  
  while($resume = mysqli_fetch_array($run4)){
    if($resume['type']=='e'){

    
    ?>


          <div class="resume-item">
            <h4 style="color: #008080;font-family:'Times New Roman', Times, serif"><?=$resume['title']?></h4>
            <h5 style="color: #008080;font-family:'Times New Roman', Times, serif"><?=$resume['time']?></h5>
            <p style="color: #008080;font-family:'Times New Roman', Times, serif"><em><?=$resume['org']?></em></p>
            <p style="color: #008080;font-family:'Times New Roman', Times, serif"><?=$resume['about_exp']?></p>
          </div>
 <?php
 }
  }
 ?>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title" style="color: #008080;font-family:'Times New Roman', Times, serif">Professional Experience</h3>

          
   <?php   
   $query4 = "SELECT * FROM resume";
   $run4 = mysqli_query($db,$query4);    
          while($resume = mysqli_fetch_array($run4)){
    if($resume['type']=='p'){

    
    ?>


<div class="resume-item" >
            <h4 style="color: black;font-family:'Times New Roman', Times, serif"><?=$resume['title']?></h4>
            <h5 style="color: black;font-family:'Times New Roman', Times, serif"><?=$resume['time']?></h5>
            <p style="color: black;font-family:'Times New Roman', Times, serif"><em><?=$resume['org']?></em></p>
            <p style="color: black;font-family:'Times New Roman', Times, serif"><?=$resume['about_exp']?></p>
          </div>
 <?php
 }
  }
 ?>
         
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->