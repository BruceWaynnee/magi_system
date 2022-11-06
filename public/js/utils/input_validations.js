/*###################################
    HTML Custom Input Validations
####################################*/

/**
 * Validate empty input value based on given element id name,
 * parameter that passed a long must be having a # prefix (JQuery way).
 * @param [Html_Element_Id] input_elementId (ex: #data, #name ...)
 * @return [ObjectRespond] [ data: data_result, message: result_message ]
 */
 function validateHtmlInputValue(input_elementId){
    let respond = {
        data    : true,
        message : 'Succesfully validate the input element and everything is ok',
    };

    const Value = $(input_elementId).val();

    // validate if element even exist
    if( Value.length <= 0 ){
        return {
            data    : false,
            message : `[${input_elementId}] input element not found in the form, validate process denied!`,
        }
    }

    // validate value
    if( !Value ){
        respond.data    = false;
        respond.message = 'Input element is null or empty!';
    }

    return respond;
}
