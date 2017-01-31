<?php

/**
 * Enqueue CUSTOM scripts and styles.
 */

function silfurgen_custom_scripts() {

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.1.1.min.js');

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');

	wp_enqueue_script( 'silfurgen-scrolling-nav', get_template_directory_uri() . '/js/scrolling-nav.js');

	wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/js/jquery.easing.min.js');

	wp_enqueue_script( 'jquery-language-button', get_template_directory_uri() . '/js/language-button.js');

}

add_action( 'wp_enqueue_scripts', 'silfurgen_custom_scripts' );


//debugging function

function debug_to_console( $data ) {
if ( is_array( $data ) )
 $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
 else
 $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";
echo $output;
}



//register and localize ajax script for contact form

function ajax_contact_init(){


	//loada javascriptinu
    wp_register_script('ajax-contact-script', get_template_directory_uri() . '/js/contact.js', array('jquery') ); 
    wp_enqueue_script('ajax-contact-script');
    
    wp_localize_script( 'ajax-contact-script', 'ajax_contact_object', array( 
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'redirecturl' => home_url(),
    ));

    // Enable the user with no privileges to run ajax_login() in AJAX
    add_action( 'wp_ajax_nopriv_ajaxcontact', 'ajaxcontact' );
    add_action( 'wp_ajax_ajaxcontact', 'ajaxcontact' );
}



add_action('init', 'ajax_contact_init');


//create json object with contact form response 


function ajaxcontact() {


		// $currurl ='oj';

		// $output = "<script>console.log( 'Debug Objects: " . $currurl . "' );</script>";
		// echo $output;


		$name = $_POST['your-name'];
		$email = $_POST['your-email'];
		$message = $_POST['your-message'];
		$from = 'Silfurgen'; 
		$to = 'svanhvitj@gmail.com'; 
		$subject = 'Message from Silfurgen.is';
		$body = "From: $name\nE-Mail: $email\nMessage:\n $message";

		//gæti sett if hér með hvaða tungumál er í gangi $_SERVER['REQUEST_URI']

		//$currurl=$_SERVER['REQUESTs_URI'];




		if ($_SERVER['HTTP_REFERER'] == 'http://silfurgen.com/is/') {

			$okMessage = "Takk fyrir að senda skilaboð! Ég verð í sambandi.";
			$errorMessage = "Það kom upp villa við að senda skilaboðin. Vinsamlegast reynið aftur síðar.";

		}
		else {
			$okMessage = "Thank you for your message! I will be in touch.";
			$errorMessage = "Sorry there was an error sending your message. Please try again.";
		}



 
		//If there are no errors, send the email
		if ($name && $email && $message) {
		
			if (mail ($to, $subject, $body ,$from)) {
			
			$responseArray = array('type' => 'success', 'message' => $okMessage);

			}

			else {
			
			$responseArray = array('type' => 'danger', 'message' => $errorMessage);

			}
		} 
		else {
			
			$responseArray = array('type' => 'danger', 'message' => $errorMessage);
		}


		if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    	$encoded = json_encode($responseArray);
    
    	//header('Content-Type: application/json');
    
    	echo $encoded;
		}
		
		else {
		    echo $responseArray['message'];
		}

	
		die();


}




?>