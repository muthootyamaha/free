<?php include("header.php");?>
 <!-- Start All Page Banner -->
 <section class="all-page-banner item-one">
            <div class="d-table">
                <div class="d-tablecell">
                    <div class="container">
                        <div class="banner-text text-center">
                            <h1>Contact Us</h1>
                            <ul>
                                <li>
                                    <a href="index.php">home</a>
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </li>
                                <li>contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End All Page Banner -->

        <!-- Start Contact -->
        <div class="contact-section pt-100">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Contact us</h2>
                    <p>Need any information drop us a message</p>
                   
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h3>Address</h3>
                            <p>Penta City Towers Killipalam, Trivandrum</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <h3>Email</h3>
                            <a href="#"><p><span class="__cf_email__" data-cfemail="2c47454d5e436c4b414d4540024f4341">biju@muthootyamaha.com</span></p></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                        <div class="single-contact">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h3>Phone</h3>
                            <a href="tel:9349322113"><p>9349322113</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact -->

        <!-- Start Contact Form -->
        <div class="contact-form-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-map">
                            <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d125689.90981031049!2d76.27927468037629!3d10.11465914858404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d10.1849102!2d76.3753041!4m5!1s0x3b080dcb2aae77bd%3A0x48890d2d5c45a8b!2sIndel%20Yamaha%20Showroom%2C%20Indel%20House%2C%20Changampuzha%20nagar%20Rd%2C%20Changampuzha%20Nagar%2C%20Alfiya%20Nagar%2C%20South%20Kalamassery%2C%20Kalamassery%2C%20Kochi%2C%20Kerala%20682033!3m2!1d10.0429544!2d76.317362!5e0!3m2!1sen!2sin!4v1674129014092!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <form id="contactForm">
								<div class="row">
									<div class="col-lg-12 col-sm-6">
										<div class="form-group">
											<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name*">
											<div class="help-block with-errors"></div>
										</div>
									</div>
		
									<div class="col-lg-12 col-sm-6">
										<div class="form-group">
											<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email*">
											<div class="help-block with-errors"></div>
										</div>
									</div>
		
									<div class="col-lg-12 col-sm-6">
										<div class="form-group">
											<input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone*">
											<div class="help-block with-errors"></div>
										</div>
									</div>
		
									<div class="col-lg-12 col-sm-6">
										<div class="form-group">
											<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your suggestions" placeholder="Your Suggestions*">
											<div class="help-block with-errors"></div>
										</div>
									</div>
		
									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message*"></textarea>
											<div class="help-block with-errors"></div>
										</div>
									</div>
		
									<div class="col-lg-12 col-md-12">
										<button type="submit" class="custom-btn2 page-btn">
											Send
										</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div>
										<div class="clearfix"></div>
									</div>
								</div>
							</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Form -->

<?php include("footer.php");?>