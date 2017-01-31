

jQuery(document).ready(function() {

        var $language_link = jQuery('.language-link');
        var $flag = jQuery('.flag');
        var $about_link = jQuery("#about-link");
        var $services_link = jQuery("#services-link");
        var $contact_link = jQuery("#contact-link");

        var url = window.location.href;

        console.log(url);

        if (url == 'http://silfurgen.com/') {
        
            $flag.attr('lang', 'is');
            $about_link.text('ABOUT');
            $services_link.text('SERVICES');
            $contact_link.text('CONTACT');
            $language_link.attr("href", "http://silfurgen.com/is/");
        
        }

        else if (url == 'http://silfurgen.com/is/') {
            $flag.attr('lang', 'en');
            $about_link.text('UM SILFURGEN');
            $services_link.text('ÞJÓNUSTA');    
            $contact_link.text('HAFA SAMBAND');
            $language_link.attr("href", "http://silfurgen.com/");
        }

});







      
            
            //$this.attr("href", "http://localhost/silfurgen/is/")        
        // } else {
        //     
        // }


    // jQuery('.hamburger').click(function () {

    //     jQuery(".hamburger").toggleClass("is-active");
    //     jQuery("nav").slideToggle('600');

    //     sessionStorage.setItem('nav-display', jQuery("nav").css('display'));
    //     sessionStorage.setItem('hamburger-state', jQuery(".hamburger").hasClass('is-active'));
    // });


    // var button = sessionStorage.getItem('hamburger-state');
    // if (button == 'true') {
    //     jQuery('.hamburger').addClass("is-active");
    //     jQuery('nav').show();
    // }




// when button is clicked

//     if on english page / flag is english

//         go to iceland page

//         translate links to icelandic

//         change flag to english

//     else

//         go to english page

//         translate links to english

//         change flag to icelandic











