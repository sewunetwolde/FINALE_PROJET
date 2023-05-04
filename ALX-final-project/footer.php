
     <style>@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);

* {
  font-family: Open Sans;
}

/* section {
  width: 100%;
  display: inline-block;
  background: #333;
  height: 50vh;
  text-align: center;
  font-size: 22px;
  font-weight: 700;
  text-decoration: underline;
} */

.footer-distributed{
	background: #666;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 55px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Open Sans', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
  font-weight:400;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #222;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
  font-weight:400;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  lightseagreen;
	text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}
</style>
<footer class="footer-distributed" style="background-color: #2f3c4d;">
<!-- <section style="font-size: 30px; color:aqua; font-family:'Times New Roman', Times, serif;text-align:center">Contact me </section> -->

<p style="font-size: 20px; color:white; font-family:'Times New Roman', Times, serif">Useful Links</p>
			<div class="footer-left" >

			<!-- <h3>Company<span>logo</span></h3> -->

				<p class="footer-links">
        <ul class="nav" style="color:white"> <br>
            
        
         
            <?php
           if($user_data['home_section']){
            ?>
            <li class="item"><a class="active" class="link" href="#home">Home </a></li>  |
               <?php 
                } 
                
               if($user_data['about_section']){
                ?>
                 <li class="item"> <a class="link" href="#about">About</a></li>   |
                         
                <?php 
                }
                if($user_data['resume_section']){
                ?>
                 <li class="item">
                    <a class="link" href="#service">Service</a>   |
                </li>
                <?php 
                }
                if($user_data['skill_section']){
                ?>
                 <li class="item">
                    <a class="link" href="#skill">Skills</a>   |
                </li>
                <?php 
                }
                if($user_data['resume_section']){
                ?>
                 <li class="item">
                    <a class="link" href="#testmonial">Testimonial</a>   |
                </li>
                  <?php 
                        }

                        if($user_data['portfolio_section']){
                        ?>
                                <li class="item"> <a class="link" href="#portfolio">Portfolio</a></li>   |
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
				</p>

			</div>

			<div class="footer-center">
      
					<span style="color:white;font-size:20px; font-family:'Times New Roman', Times, serif">Address</span>
						
           
				<div >
					<i class="fa fa-map-marker"></i>
          <p><?=$user_data['address']?></p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
          <p><?=$user_data['mobile']?></p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
          <p><?=$user_data['email']?></p>
				</div>
    
			</div>

			<div class="footer-right">
				<p class="footer-company-about" style="color:white;font-size:14px; font-family:'Times New Roman', Times, serif">
					<span >About me </span>
				I am full stack web developer, Electrical Engineer, and Control Engineer, freelancer and entrepreneur.
				</p>
        <br><br>
        <div class="social-links text-right m-auto ml-sm-auto" >
                <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
                <!-- <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-google"></i></a> -->
                <!-- <a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a> -->
                <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a>
            </div>

			</div>
     
		</footer>
    <div style="background-color: #008080;opacity:0.5;width:100%; text-align:center;height:40px">
  
			  <p class="mb-0" style="color:white;font-family:'Times New Roman', Times, serif;padding-top:10px">Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a href="" style="color:black">atakilt yakob</a></p></div>
