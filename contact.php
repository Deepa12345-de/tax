<?php 
include 'includes/header.php'; 
include 'includes/navbar.php'; 
?>

<style>
	.wpcf7-form-control {
  width: 100%;
  padding: 14px 18px;
  border: none;
  border-radius: 10px;
  background: #f0f2f5;
  font-size: 16px;
  color: #222;
  transition: all 0.3s ease;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.wpcf7-form-control:focus {
  background: #fff;
  outline: none;
  box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.2);
  border: 1px solid #007bff;
}

textarea.wpcf7-form-control {
  resize: vertical;
  min-height: 140px;
}

.wpcf7-submit.btn {
  background: linear-gradient(135deg, #007bff, #0056b3);
  color: #fff;
  border: none;
  padding: 14px 32px;
  border-radius: 50px;
  font-size: 17px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
  box-shadow: 0 4px 14px rgba(0, 123, 255, 0.3);
}

.wpcf7-submit.btn:hover {
  background: linear-gradient(135deg, #0056b3, #003d80);
  box-shadow: 0 6px 20px rgba(0, 123, 255, 0.4);
  transform: translateY(-2px);
}

.row {
  margin-bottom: 18px;
}

</style>

<body class="royal_preloader">
	

		<div id="content" class="site-content">
			<div class="page-header">
			    <div class="container">
			        <div class="breadc-box no-line">
			            <div class="row">
			                <div class="col-md-6">
			                    <h1 class="page-title">Contact Us</h1>
			                </div>
			                <div class="col-md-6 mobile-left text-right">
			                    <ul id="breadcrumbs" class="breadcrumbs none-style">
			                        <li><a href="index.php">Home</a></li>
			                        <li class="active">Contact Us</li>
			                    </ul>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>

			<div class="entry-content">
				<div class="container">
					<div class="boxed-content">
					
					
					

						<section class="wpb_row row-fluid section-padd">
						    <div class="container">
						        <div class="row">
						            <div class="wpb_column column_container col-sm-12 col-md-7">
						                <div class="column-inner">
						                    <div class="wpb_wrapper">
						                        <div class="section-head ">
						                            <h6><span>CONTACT FORM</span></h6>
						                            <h2 class="section-title">How can we help</h2>
						                        </div>

						                        <div class="empty_space_12"><span class="empty_space_inner"></span></div>
						                        <div role="form" class="wpcf7" id="wpcf7-f1989-p967-o1" lang="en-US" dir="ltr">
						                            <div class="screen-reader-response"></div>
						                            <form action="#" method="post" class="wpcf7-form">
						                                <div class="row">
						                                    <div class="col-md-6"><span class="wpcf7-form-control-wrap your-fname"><input type="text" name="your-fname" value="" size="40" class="wpcf7-form-control" required="" placeholder="First Name"></span></div>
						                                    <div class="col-md-6"><span class="wpcf7-form-control-wrap your-lname"><input type="text" name="your-lname" value="" size="40" class="wpcf7-form-control" required="" placeholder="Last Name"></span></div>
						                                </div>
						                                <div class="row">
						                                    <div class="col-md-6"><span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control" placeholder="Phone Number"></span></div>
						                                    <div class="col-md-6"><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control" required="" placeholder="Email Address"></span></div>
						                                </div>
						                                <div class="row">
						                                    <div class="col-md-6"><span class="wpcf7-form-control-wrap your-company"><input type="text" name="your-company" value="" size="40" class="wpcf7-form-control" placeholder="Your Company"></span></div>
						                                    <div class="col-md-6"><span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control" placeholder="Subject"></span></div>
						                                </div>
						                                <div class="contact-mess"><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control" required="" placeholder="Messenger"></textarea></span></div>
						                                <p>
						                                    <input type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit btn">
						                                </p>
						                            </form>
						                        </div>
						                        <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
						                    </div>
						                </div>
						            </div>
						            <div class="wpb_column column_container col-sm-12 col-md-5">
						                <div class="column-inner">
						                    <div class="wpb_wrapper">
						                        <div class="wpb_single_image wpb_content_element align_center">
						                            <figure class="wpb_wrapper figure">
						                                <div class="single_image-wrapper box_border_grey"><img src="images/contact-new.jpg" class="single_image-img attachment-full" alt=""></div>
						                            </figure>
						                        </div>
						                    </div>
						                </div>
						            </div>
						        </div>
						    </div>
						</section>
								
					

					
					</div>
			    </div>
			</div>


		</div>
	    

	   
	</div>

</body>

</html>
<?php
include 'includes/footer.php'; 
?>