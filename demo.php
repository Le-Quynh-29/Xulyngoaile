<?php
/* create function with an exception */
//function checkNum($number) {
//    if($number>1) {
//        throw new Exception("Value must be 1 or below");
//    }
//    return false;
//}
//
///* trigger exception in a "try" block */
//try {
//    checkNum(2);
//    /* If the exception is thrown, this text will not be shown */
//    echo 'If you see this, the number is 1 or below';
//}
//
//    /* catch exception */
//catch(Exception $e) {
//    echo 'Message: ' .$e->getMessage();
//}
class CustomException extends Exception {
    public function errorMessage() {
        /* error message */
        $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
            .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
        return $errorMsg;
    }
}

 $email = "someone@example.com";

try {
    try {
        /* check for "example" in mail address */
        if(strpos($email, "example") !== FALSE) {
            /* throw exception if email is not valid */
            throw new Exception($email);
        }
    }
    catch(Exception $e) {
        /* re-throw exception */
        throw new CustomException($email);
    }
}

catch (CustomException $e) {
    /* display custom message */
    echo $e->errorMessage();
}
?>
