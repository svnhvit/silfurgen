<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
		                    <h1>YFIR 30 ÁRA REYNSLA AF FISKELDI, LÍFTÆKNI OG NÝSKÖPUN</h1>
		                    <a class="btn btn-default page-scroll" href="#about">LESA MEIRA</a>
		                </div>
		            </div>
		        </div>
		    </section>

		    <!-- About Section -->
		    <section id="about" class="page-section">
		        <div class="container">
		            <div class="row">
		                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		                    <h1>UM SILFURGEN</h1>
		                </div>
		                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                    <img src="<?php echo get_template_directory_uri(); ?>/images/headshot.png" alt="JuliusKristinsson">
		                </div>
		                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                    <p>Ráðgjöf Silfurgen byggir á yfir 30 ára reynslu Júlíusar Kristinssonar í rannsóknum, nýsköpun og almennum rekstri fyrirtækja í fiskeldi og líftækni. 

							Júlíus lauk doktorsgráðu við líffræðideild University of New Brunsvick, Kanada árið 1984 þar sem hann vann að rannsóknum á lífeðlisfræði laxa. 
							Í beinu framhaldi af náminu starfaði hann í áratug sem framkvæmdastjóri Silfurlax við umfangsmikið eldi á laxaseiðum og hafbeit á Atlantshafslaxi, ásamt vinnslu og sölu á erlendum mörkuðum á sjö starfsstöðum á Suður- og Vesturlandi. Innann vébanda Silfurlax stýrði Júlíus upphafi og uppbyggingu á kynbótum á Atlantshafslaxi og þróaði tækni til að stýra tímasetningu hrygningar laxins. Kynbótastarfsemin og framleiðsla lifandi hrogna var flutt árið 1991 yfir í Stofnfisk hf. sem enn í dag er eina fyrirtækið í heiminum sem framleiðir og selur lifandi kynbætt hrogn í hverri einustu viku ársins.

							Á árunum 1998 - 2000 starfaði Júlíus sem rannsóknastjóri Rannsóknastofnunar Landbúnaðarins, sem nú er hluti af Landbúnaðarháskóla Íslands. Árið 2001 stofnaði hann ORF Líftækni hf. og starfar í dag sem fjármála- og starfsmannastjóri þess.
							Dótturfélag ORF Líftækni, Bioeffect ehf.,framleiðir húðvörur, sem innihalda lífvirk protein,  undir samnefndu vörumerki og markaðssetur í 30 löndum víðsvegar um heiminn.

							Júlíus hefur á starfsferli sínum tekið þátt í margvíslegri atvinnutengdri félagsstarfsemi og m.a. setið í stjórnum eftirfarandi félagasamtaka: Landsamband Fiskeldis- og Hafbeitarstöðva (LFH), Samtök Sprotafyrirtækja (SSP) og Skelrækt.
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
		                    <h1>ÞJÓNUSTA</h1>
		                </div>
		                <div class="services-section col-xs-12 col-sm-12 col-md-4 col-lg-4">
		                	<img src="<?php echo get_template_directory_uri(); ?>/images/service-icon-bulb.png" alt="service-icon-calc">
		                	<h4>Ráðgjöf við tengingu milli vísinda og atvinnurekstrar, mat á viðskiptaáætlunum sem byggja á tækniþróun á lífvísindasviði.</h4>
		                </div>
		                <div class="services-section col-xs-12 col-sm-12 col-md-4 col-lg-4">
		                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon-board.png" alt="service-icon">
		                    <h4>Ráðgjöf við stofnun og uppbyggingu sprotafyrirtækja á lífvísindasviði.</h4>
		                </div>
		                <div class="services-section col-xs-12 col-sm-12 col-md-4 col-lg-4">
		                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon-fish.png" alt="service-icon">
		                    <h4>Ráðgjöf til fyrirtækja í fiskeldi, bæði við rekstur og stefnumótun auk tækni.</h4>
		                </div>
		            </div>
		        </div>
		    </section>

		    <!-- Contact Section -->
		    <section id="contact" class="page-section">
		        <div class="container">
		            <div class="row">
		                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		                    <h1>HAFA SAMBAND</h1>
		                </div>
		                <div class="contact-info-wrapper col-xs-12 col-sm-12 col-md-6 col-lg-6">
		                	<div class="contact-info">
			                	<p id="address-info">Heimilisfang</p>
			                	<p>Melgerði 17, 108 Reykjavík, Ísland</p>
			                </div>
			                <div class="contact-info">
			                	<p id="phone-info">Sími</p>
			                	<p>+354-821-1571</p>
			                </div>
			                <div class="contact-info">
			                	<p id="email-info">Tölvupóstfang</p>
			                	<p>silfurgen@silfurgen.com</p>
			                </div>
		                </div>
		                <div class="contact-form-wrapper col-xs-12 col-sm-12 col-md-6 col-lg-6">
			                <form id="contact-form" method="post" action="ajaxcontact">
			                	<div class="form-group"> <!-- Name field -->
									<label class="control-label requiredField" for="name">Nafn:<span class="asteriskField">*</span></label>
									<input class="form-control" id="name" name="your-name" type="text" value="<?php echo htmlspecialchars($_POST['your-name']); ?>"/>
									<p id='errName' class="text-danger"></p>

								</div>
								<div class="form-group"> <!-- Email field -->
									<label class="control-label requiredField" for="email">Tölvupóstfang:<span class="asteriskField">*</span></label>
									<input class="form-control" id="email" name="your-email" type="text" value="<?php echo htmlspecialchars($_POST['your-email']); ?>"/>
									<p id='errEmail' class="text-danger"></p>
								</div>
								
								<div class="form-group"> <!-- Subject field -->
									<label class="control-label" for="subject">Efni:</label>
									<input class="form-control" id="subject" name="your-subject" type="text" value="<?php
									echo htmlspecialchars($_POST['your-subject']); ?>"/>
									<!--just for the whitespace-->
									<p></p>
								</div>
								
								<div class="form-group"> <!-- Message field -->
									<label class="control-label requiredField" for="message">Skilaboð:<span class="asteriskField">*</span></label>
									<textarea class="form-control" cols="40" id="message" name="your-message" rows="6"><?php echo htmlspecialchars($_POST['your-message']);?></textarea>
									<p id='errMessage' class="text-danger"></p>
								</div>
			                	<div class='form-group'>
									<button class="btn btn-primary" name="submit" type="submit" value="Send">Senda</button>
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
