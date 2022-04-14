<?php

if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($date){
        $date = trim($date);
        $date = stripslashes($date);
        $date = htmlspecialchars($date);
        return $date;
    }
    
    $_uname = validate($_POST['uname']);
    $_pass =  validate($_POST['password']);

    if (empty($uname)){
        header("location: index.php?error-User Name Is required");
        exit();

    }else if (empty($pass)){
        header("location: index.php?error-Password Is required");
        
    }else{
        echo "valid input";
    }
}else{
    header("location: index.php");
    exit();
}

?>