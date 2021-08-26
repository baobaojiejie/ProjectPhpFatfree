<?php
////////////////////////// ADRIAN START HERE ///////////////////////////////////////////////////
// Validation of user entries for AddItem
//*************************************************** */
// setError
function setError($error, $f){
    $f->set("error", $error);
}

// set input variable for default
function setDefaultValue($variableName, $value, $f){
    //$f->set("auction_expiration_date", $f->get('POST.description') );
    $f->set($variableName, $value);
}

//************************************************** */
// End date must be greater than today's date
function isEndDateValid($input, $f){

    $isValid = false;

    // Converting string to Unix Timestamp
    $tomorrow = strtotime("tomorrow");
    $endDate = strtotime($input);

    if($endDate >= $tomorrow && $input != ""){
        $isValid = true;
    }else{
        setError("The end date must be greater than today's date", $f);
    }
    return $isValid;    
}// end function isEndDateValid

//************************************************** */
// StartingBid must be greater than zero and integer
function isStartingBidValid($input, $f){

    $isValid = false;

    if($input > 0 && filter_var($input, FILTER_VALIDATE_INT) ){
        $isValid = true;
    }else{  
        setError("Starting bid must be  a integer and greater than zero", $f);
    }

    return $isValid;
}

//************************************************** */


////////////////////////// ADRIAN END HERE ///////////////////////////////////////////////////



?>