/*######################
    Loader Component
########################*/

/**
 * Toggle [ show and hide ] loading 
 * component based on given parameter options.
 * @param [Html_Element_Id] elementId
 * @param [String] options [ hide, show ]
 * 
 * @return void
 */
function LoadingComponent_ToggleLoading( elementId, options ){
    const LoaderComponent = $(`#loading-component_${elementId}`);

    if( options === 'show' ){
        LoaderComponent.removeClass('hide-loader_component');
    } else {
        LoaderComponent.addClass('hide-loader_component');
    }
}

/**
 * This method blow used to change the loading animation to check (done)
 */
// setTimeout( () => document.querySelector('.loader').classList.add('done'), 4000 );
