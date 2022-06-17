<?php require('header.php');?>
			<!-- PAGE HERO
			============================================= -->	
			<section id="enquiry-page" class="bg-fixed page-hero-section division">
				<div class="container">	


					<!-- PAGE HERO TEXT -->
					<div class="row justify-content-center">	
						<div class="col-md-10 col-xl-8">
							<div class="hero-txt text-center white--color">
								<h2 class="h2-xl">Enquiry</h2>	
							</div>	
						</div>
					</div>
					<!-- BREADCRUMB -->
					<div id="breadcrumb">
						<div class="row d-flex align-items-center">					
							<div class="col">
								<div class="breadcrumb-nav">
									<nav aria-label="breadcrumb">
									  	<ol class="breadcrumb">
									    	<li class="breadcrumb-item"><a href="demo-1.html">Home</a></li>
									    	<li class="breadcrumb-item active" aria-current="page">Enquiry</li>
									  	</ol>
									</nav>
								</div>
							</div>
						</div> 
					</div>	<!-- END BREADCRUMB -->

				</div>	   <!-- End container --> 
			</section>	<!-- END PAGE HERO -->
			<!-- BOOKING-1
			============================================= -->
			<section id="booking-1" class="booking-section division pt-100">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- BOOKING-1 IMAGE -->
						<div class="col-md-5 col-lg-6">
							<div class="booking-1-img">
								<img class="img-fluid" src="images/nailpolish.png" alt="booking-image">
							</div>
						</div>


						<!-- BOOKING-1 WRAPPER -->
						<div class="col-md-7 col-lg-6">
					 		<div class="booking-1-wrapper bg--alice-blue">
								<div class="form-holder">

									<!-- Section ID -->	
					 				<span class="section-id"></span>	

									<!-- Title -->
									<h4 class="h4-xl">Make An Enquiry</h4>

									<!-- Booking Form -->
									<form name="bookinkform" class="row booking-form" method="POST">

										<!-- Form Input -->
						                <div class="col-md-6">
						                	<input type="text" name="firstname" class="form-control firstname" placeholder="First Name*" required>
						                </div>

						                <!-- Form Input -->
						                <div class="col-md-6">
						                	<input type="text" name="lastname" class="form-control lastname" placeholder="Last Name*" required>
						                </div>
						                  
						                <!-- Form Input -->        
						                <div class="col-md-6">
						                	<input type="email" name="email" class="form-control email" placeholder="Email Address*" required> 
						                </div>

						                <!-- Form Input -->   
						                <div class="col-md-6">
						                	<input type="tel" name="phone" class="form-control phone" placeholder="Phone Number*" required> 
						                </div>

						                <!-- Form Select -->
						                <!-- <div class="col-md-6">
						                	<select name="service" class="form-select service" aria-label="Service Select">
						                		<option selected>Select Service</option>
						                      	<option>Classic Manicure</option>
						                      	<option>Spa Manicure</option>
						                      	<option>Gel Manicure</option>
						                      	<option>Classic Pedicure</option>
						                      	<option>Spa Pedicure</option>
						                      	<option>Nail Art</option>
						                      	<option>French Polish</option>
						                      	<option>Paraffin Mask</option>
						                      	<option>Gel Applications</option>
						                      	<option>Callus Treatment</option>
						                    </select>
						                </div> -->

						                <!-- Form Select -->
						                <!-- <div class="col-md-6">
						                	<select name="staff" class="form-select staff" aria-label="Staff Select">
						                		<option selected>Select Staff</option>
						                      	<option>Veronica Aaron</option>
						                      	<option>Olivia Grosh</option>
						                      	<option>Eva Anderson</option>
						                      	<option>Jessica Priston</option>
						                      	<option>Evelyn Sanchez</option>
						                      	<option>Kristin Cortes</option>
						                      	<option>Any Available Staff</option>
						                    </select>
						                </div> -->

						                <!-- Form Input -->
						                <!-- <div class="col-md-12">
						                	<input id="datetimepicker" type="text" name="date" class="form-control date" placeholder="Appointment Date*" required>
						                </div> -->
						                <div class="col-md-12">
						                	<textarea id="subject" type="text" name="subject" class="form-control" placeholder="Describe your query here" required></textarea>
						                </div>
						                                            
						                <!-- Form Button -->
						                <div class="col-md-12 mt-10 text-end">  
						                	<button type="submit" class="btn rose--btn tra-black--hover submit" name="submit">Submit</button> 
						                </div>
						                                                              
						                <!-- Form Message -->
						                <div class="col-md-12 booking-form-msg">
						                	<div class="sending-msg"><span class="loading"></span></div>
						                </div>	
																								
									</form>	<!-- End Booking Form -->	

					 			</div>	
							</div>
						</div>	<!-- END BOOKING-1 WRAPPER -->


					</div>    <!-- End row -->
				</div>     <!-- End container -->
			</section>	<!-- END BOOKING-1 -->

<?php require('footer.php');?>
