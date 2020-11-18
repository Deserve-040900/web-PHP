<?php
include_once('./libraries/function.php');

class config{
    public $mail_user = "nkoxkiu2k@gmail.com";
    public $mail_pass = "01665017740";

    function password_email(){
        return decrypt_custom($this->mail_pass);
    }
}
?>