/*###################################
    Magi1 Dashboard Layout Script
#####################################*/

$(document).ready(function(){
    toggleDropdownSidebarItems();
});

/**
 * ### PROTOTYPE CODE ### 
 * Toggle dropdown sidebar items.
 * @return void
 */
function toggleDropdownSidebarItems(){
    $('.sidebar-dropdown-btn').on('click', function(){
        const State = $(this),
              div_childWrapperId = State.attr('dropdown-target');

        if( div_childWrapperId ){
            const div_childWrapper = $(div_childWrapperId);

            // we need to know number of child items to set 
            // correct height.
            `${div_childWrapper} a`
            div_childWrapper.css('height', '50px');
            div_childWrapper.removeClass('hide-dropdown-item');
            // alert(div_childWrapperId);
        }
    });
}