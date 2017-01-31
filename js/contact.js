

jQuery(document).ready(function() {

   jQuery("#contact-form").on('submit', function(e) {
      e.preventDefault();

      var yourname = jQuery('#contact-form #name').val();
      var youremail = jQuery('#contact-form #email').val();
      var yourmessage = jQuery('#contact-form #message').val();
      var currenturl = window.location.href;
      
      //checing wether on english site or icelandic
      if (currenturl == 'http://silfurgen.com/') {

        var errName = 'Please enter your name';
        var errEmail = 'Please enter a valid email address';
        var errMessage = 'Please enter your message';

      }
      else {

        var errName = 'Vinsalegast sláið inn nafn';
        var errEmail = 'Vinsalegast sláið inn gilt tölvupóstfang';
        var errMessage = 'Vinsalegast sláið inn skilaboð';
      }

      
      if (yourname == '') {

      var  api='ape' 
      jQuery('#contact-form').find('#errName').html(errName);
      
      }

      function isValidEmailAddress(emailAddress) {
      var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
      return pattern.test(emailAddress);
      };

      if (youremail == '' ||  !isValidEmailAddress(youremail)) {

      var  bjorn='bear'
      jQuery('#contact-form').find('#errEmail').html(errEmail);
      
      } 

      if (yourmessage == '') {

      var  david='sloth'
      jQuery('#contact-form').find('#errMessage').html(errMessage);
      
      } 

      if (!api && !bjorn && !david) { 

        jQuery('#contact-form').find('.text-danger').html('');  
      
        jQuery.ajax({
           url : ajax_contact_object.ajaxurl,
           type : 'POST',
           dataType : 'json',
           
           data: { 
                  'action': 'ajaxcontact', //calls wp_ajax_nopriv_ajaxcontact
                  'your-name': yourname, 
                  'your-email': youremail, 
                  'your-message': yourmessage
           },
          success : function( response ) {
          //error: function(req, err, errT){ console.log(err +' '+ errT); }

           	var messageAlert = 'alert-' + response.type;
            var messageText = response.message;

            var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
           	if (messageAlert && messageText) {
               	jQuery('#contact-form').find('.messages').html(alertBox);
               	jQuery('#contact-form')[0].reset();
           	}  
          }
        }); 
      } 
  })
});

