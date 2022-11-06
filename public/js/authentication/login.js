/*#################
    Login Script
###################*/

/**
 * Completed set of methods that control login feature, 
 * this method including fields validation, loading animation 
 * and more feature that is process during the login.
 * @return void
 */
function loginFeatureMethods(){
    validateInputFieldsBeforeSubmit();
}

/**
 * Validate all required fields before 
 * process the login to the backend.
 * @return void
 */
function validateInputFieldsBeforeSubmit(){
    $('.login-form').on('submit', function(event){
        // start the loading animation by calling the component
    
        // validate username
        let usernameResult = validateHtmlInputValue('#username');
        if( !usernameResult.data ){
            event.preventDefault();
            return alert('Process denied, username value is required!');
        }

        // validate passsword
        let passwordResult = validateHtmlInputValue('#password');
        if( !passwordResult.data ){
            event.preventDefault();
            return alert('Process denied, password value is required!');
        }
    
        // end the loading animation by calling the component
    });
}
