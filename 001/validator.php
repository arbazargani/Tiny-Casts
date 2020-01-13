<?php
if(isset($_POST['password'])) {

    $score = 0;
    $pass = $_POST['password'];

    // validate length
    if (strlen($pass) > $minLength ) {
        $score += 1;
    }
        
    // validate alphabets
    foreach($alphabets as $role) {

        // validate alphabets
        if (strpos($pass, $role) !== false) {
            $score += 1;
        }
        // validate captital alphabets
        if (strpos($pass, strtoupper($role)) !== false) {
            $score += 1;
        }
    }

    // validate characters
    foreach($characters as $role) {
        if (strpos($pass, $role) !== false) {
            $score += 1;
        }
    }

    // validate numbers
    foreach($numbers as $role) {
        if (strpos($pass, $role) !== false) {
            $score += 1;
        }
    }
}
?>