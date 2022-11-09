/*######################
    Loader Component
########################*/

/**
 * On flash message close button clicked, hide flash message component,
 * the reason I wrote it this way without using the function declaration 
 * is becuase I don't want to called this function on the main as a standby function.
 */
$('.flash_message_component-close-tab-btn').on('click', function(){
    $('#fmc-message-wrapper').prop('hidden', true);
});
