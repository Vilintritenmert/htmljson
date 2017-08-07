$(document).ready(function(){
    "use strict";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

/**
 * Send Notification
 * @param text
 */
function getNoty(text) {
    "use strict";
    noty({
        text:text
    });
}

