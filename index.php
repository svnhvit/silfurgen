<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Silfurgen
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


				<!-- Intro Section -->
		    <section id="intro" class="page-section intro-background">
		        <div class="container">
		            <div class="row">
		                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		                    <h1>OVER 30 YEARS OF EXPERIENCE IN AQUACULTURE, BIO TECH AND INNOVATION and all</h1>
		                    <a class="btn btn-default page-scroll" href="#about">READ MORE</a>
		                </div>
		            </div>
		        </div>
		    </section>

		    <!-- About Section -->
		    <section id="about" class="page-section">
		        <div class="container">
		            <div class="row">
		                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		                    <h1>ABOUT US</h1>
		                </div>
		                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                    <img src="<?php echo get_template_directory_uri(); ?>/images/headshot.png" alt="JuliusKristinsson">
		                </div>
		                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                    <p>Consultation of Silfurgen is based on Júlíus Kristinsons' over 30 years of experience in research, innovation and general business management of companies in the field of aquaculture and biotechnology.
		                    Subsequently he served for ten year as the CEO of an aquaculture company in Iceland that produced millions of juvenile Atlantic salmon which were released for ocean ranching on the west coast of Iceland.  Upon return from the ocean fully grown salmon were trapped, harvested and processed for marketing in the European market.  The operation was conducted in seven different locations.   At the same time Julius initiated and managed the buildup of a fish farm for selective breeding of Atlantic salmon and developed a technology to control the time of spawning of the salmon. The selective breeding operation and production and sale of live salmon ova was transferred through joint venture into which is still the only company in the world that sells live salmon ova in every week of the year.
		                    During years 1996 to 2000 Júlíus operated as an independent consultant for life science based business operation and a research director at the Agricultural Research Institute which is now is a part of the Agricultural University in Iceland. Julius was one of three founders of ORF Genetics hf. in 2001 where he serves now as CFO and Director of Human Resources.  ORF Genetics has developed a technology to make gene modified plants and uses the technology to produce bioactive recombinant proteins (“molecular farming”).  Daughter-company of ORF Genetics, Bioeffect ehf., produces skin care products containing bioactive proteins which it markets under the trade mark BIOEFFECT in thirty countries worldwide.
		                    </p>
		                </div>    
		            </div>
		        </div>
		    </section>

		    <!-- Services Section -->
		    <section id="services" class="page-section services-background">
		        <div class="container">
		            <div class="row">
		                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		                    <h1>SERVICES</h1>
		                </div>
		                <div class="services-section col-xs-12 col-sm-12 col-md-4 col-lg-4">
		                	<img src="<?php echo get_template_directory_uri(); ?>/images/service-icon-bulb.png" alt="service-icon-calc">
		                	<h4>Consultation on the connection between life sciences and business, estimation of business models based on development in the field of bio technology.</h4>
		                </div>
		                <div class="services-section col-xs-12 col-sm-12 col-md-4 col-lg-4">
		                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon-board.png" alt="service-icon">
		                    <h4>Consultation for founding and building up start-ups in the field of biotechnology.</h4>
		                </div>
		                <div class="services-section col-xs-12 col-sm-12 col-md-4 col-lg-4">
		                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon-fish.png" alt="service-icon">
		                    <h4>Consultation for companies in the of aquaculture: business management, policy making and technological approaches.</h4>
		                </div>
		            </div>
		        </div>
		    </section>

		    <!-- Contact Section -->
		    <section id="contact" class="page-section">
		        <div class="container">
		            <div class="row">
		                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		                    <h1>CONTACT</h1>
		                </div>
		                <div class="contact-info-wrapper col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                	<div class="contact-info">
			                	<p id="address-info">Address</p>
			                	<p>Melgerði 17, 108 Reykjavík, Iceland</p>
			                </div>
			                <div class="contact-info">
			                	<p id="phone-info">Phone</p>
			                	<p>+354-821-1571</p>
			                </div>
			                <div class="contact-info">
			                	<p id="email-info">E-mail</p>
			                	<p>silfurgen@silfurgen.com</p>
			                </div>
		                </div>

		                <div class="contact-form-wrapper col-xs-12 col-sm-12 col-md-6 col-lg-6">
			                <form id="contact-form" method="post" action="ajaxcontact">
			                	<div class="form-group"> <!-- Name field -->
									<label class="control-label requiredField" for="name">Name:<span class="asteriskField">*</span></label>
									<input class="form-control" id="name" name="your-name" type="text" value="<?php echo htmlspecialchars($_POST['your-name']); ?>"/>
									<p id='errName' class="text-danger"></p>

								</div>
								<div class="form-group"> <!-- Email field -->
									<label class="control-label requiredField" for="email">Email:<span class="asteriskField">*</span></label>
									<input class="form-control" id="email" name="your-email" type="text" value="<?php echo htmlspecialchars($_POST['your-email']); ?>"/>
									<p id='errEmail' class="text-danger"></p>
								</div>
								
								<div class="form-group"> <!-- Subject field -->
									<label class="control-label" for="subject">Subject:</label>
									<input class="form-control" id="subject" name="your-subject" type="text" value="<?php
									echo htmlspecialchars($_POST['your-subject']); ?>"/>
									<!--just for the whitespace-->
									<p></p>
								</div>
								
								<div class="form-group"> <!-- Message field -->
									<label class="control-label requiredField" for="message">Message:<span class="asteriskField">*</span></label>
									<textarea class="form-control" cols="40" id="message" name="your-message" rows="6"><?php echo htmlspecialchars($_POST['your-message']);?></textarea>
									<p id='errMessage' class="text-danger"></p>
								</div>
			                	<div class='form-group'>
									<button class="btn btn-primary" name="submit" type="submit" value="Send">Send</button>
									<!--just for the whitespace-->
									<p></p>
			                	</div>

			                	<div class="form-group messages">
								</div>
			                </form>

						</div>	
		            </div>
		        </div>
		    </section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

