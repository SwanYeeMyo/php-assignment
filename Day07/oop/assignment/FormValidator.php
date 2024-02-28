<?php
class FormValidator{
    function validateName($name, &$nameErr) { // Pass $nameErr by reference
    if (!preg_match("/^[a-zA-Z- ']*$/", $name)) {
        $nameErr = "Only letters and white space allowed";
        return false; // Return false if validation fails
    }
    return true; // Return true if validation succeeds
}
public function validateEmail($email,&$emailErr){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            return false;
        }
         return true;
}
function validateWebsite($website, &$websiteErr) {
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
            $websiteErr = "Invalid URL";
             return false;
        }
         return true;
    
}

}
?>
