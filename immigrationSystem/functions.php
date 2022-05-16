<?php
    function test_input($data){
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);
    return $data;
}

function isLoggedIn(){

    if(isset($_SESSION['email']) && $_SESSION['password']){
        return true;
    }else{
        return false;
    }
}

?>