/*==============================================================*/
// Luvion Contact Form  JS
/*==============================================================*/
(function ($) {
    "use strict"; // Start of use strict
    $("#contactForm").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            // handle the invalid form...
            formError();
            submitMSG(false, "Did you fill in the form properly?");
        } else {
            // everything looks good!
            event.preventDefault();
            submitForm();
        }
    });


    function submitForm(){
        // Initiate Variables With Form Content
        var request, info, 
            formElem     = $('#contactForm'),
            contactNonce = formElem.find('.contact-nonce input');

        var name = $("#name").val();
        var email = $("#email").val();
        var msg_subject = $("#msg_subject").val();
        var phone_number = $("#phone_number").val();
        var message = $("#message").val();


        request = $.ajax({
            type: "POST",
            url : formElem.attr('data-url') + 'public/contents/synline/_controllers/ajax.php',
            data: "action=__send_contact_msg&name=" + name + "&email=" + email + "&msg_subject=" + msg_subject + "&phone_number=" + phone_number + "&message=" + message + '&' + contactNonce.attr('name') +'='+ contactNonce.val(),
        });

        request.done(function(response)
        {
            info = typeof response != 'undefined' ? response.data.msg : '';

            if ( typeof response != 'undefined' 
            && response.success == true ) {
                info = info == '' ? info : 'Message sent successfully!';
                formSuccess( info );
            } else {
                info = info == '' ? info : 'Unable to submit message';
                formError();
                submitMSG(false, info );
            }
        });

        request.fail(function(response)
        {
            formError();
            submitMSG(false, 'Unable to submit message');
        });
    }

    function formSuccess( msg ){
        $("#contactForm").html( '<h5 class="contact-msg-sent mt-3 mb-4 alert alert-success text-success"><i class="fas fa-check-circle"></i> '+ msg + '</h5>' );
        submitMSG(true, msg )
    }

    function formError(){
        $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            $(this).removeClass();
        });
    }

    function submitMSG(valid, msg){
        if(valid){
            var msgClasses = "h4 text-center tada animated text-success";
        } else {
            var msgClasses = "h4 text-center text-danger";
        }
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }
}(jQuery)); // End of use strict