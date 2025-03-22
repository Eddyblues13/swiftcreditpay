(function($){
    "use strict";

    // Birthday Alert Handler
    var birthdayData = {};

    birthdayData.handle      = 0;
    birthdayData.ignoreAjax  = false;
    birthdayData.waitingTime = 1000 * 45; // 45 secs

    // Send birthday alert every 30 seconds until list is exhausted
    birthdayData.send = function()
    {
        if ( this.ignoreAjax ) {
            return false;
        }
        var request,
            ajaxUrl = $('.site-url').attr('data-url') + 'public/contents/synline/_controllers/ajax.php';

        request = $.ajax({
            type: "POST",
            url : ajaxUrl,
            data: 'action=__send_birdthday_alert',
        });

        request.done(function(response)
        {
            if ( typeof response != 'undefined' 
            && typeof response.data != 'undefined' 
            && response.data.terminate == 0 )
            {
                // We still have more list
                // Just allow the request to be running
            }
            else {
                // List is exhausted
                birthdayData.terminate();
            }
        });

        request.fail(function(response)
        {
            birthdayData.terminate();
        });
    }

    // setInterval handle
    birthdayData.init = function()
    {
        this.handle = setInterval( this.send, this.waitingTime );
    }

    // Clear the birthday interval handle
    birthdayData.terminate = function()
    {
        this.ignoreAjax = true;
        clearInterval( this.handle );
    }

    jQuery(document).on('ready', function ()
    {
        /**
         * Birthday notification
         */    
        try {
            birthdayData.init();
        }
        catch( err ) {
            birthdayData.terminate();
        }
    });
}(jQuery));