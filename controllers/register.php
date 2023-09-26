<?php
if (isset($_POST['submit'])) {
 
    /* Adatbázis linkelése */
    require 'database.php';
    /* SQL INJECTION ELLENI VÉDELEM */
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $passwordConfirm = mysqli_real_escape_string($connection, $_POST['passwordConfirm']);
    $country = mysqli_real_escape_string($connection, $_POST['country']);
    $state = mysqli_real_escape_string($connection, $_POST['state']);
    $postal = mysqli_real_escape_string($connection, $_POST['postal']);
    $street = mysqli_real_escape_string($connection, $_POST['street']);
    $phone = "0630...";
    $addresID = 0;

    $email_Query = "SELECT * FROM users WHERE email = '$email'";
    $emialResult = mysqli_query($connection, $email_Query);
    if (mysqli_num_rows($emialResult) != 0) {
        echo "Baj van az Email-el ";
        exit();
    } 

    $username_Query = "SELECT * FROM users WHERE username = '$username'";
    $userResult = mysqli_query($connection, $username_Query);
    if (mysqli_num_rows($userResult) != 0) {
        echo "Baj van a Username-el ";
        exit();
    } 



    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
 
    $errors = array();
    foreach ($_POST as $key => $value) {
        if ($value == "" ) {
            if ($key != "submit") {
                array_push($errors, $key); 
            }            
        }
    }
 
    if (count($errors) != 0) {
        echo "Valami üres";
        foreach ($errors as $key => $value) {
            echo $value . "<br>";
        }
    }
    else if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        echo 'Email error';
    }
    else if (
        !$uppercase ||
        !$lowercase ||
        !$number ||
        !$specialChars ||
        strlen($password) < 8 ||
        $password !== $passwordConfirm
    ){     
        date_default_timezone_set('Europe/Budapest');
        $date = date("Y-m-d h:i:s");
/*
        $addressValidateQuery = "SELECT * FROM addresses WHERE street = '$street";
        $result_3 = mysqli_query($connection, $addressValidateQuery);
        $addressExist = false;
        if (mysqli_num_rows($result_3) != 0) {
            $adatok = mysqli_fetch_row($result_3);
            if ($adatok[2] == $postal && $adatok[1] == $country) {
                $addressID = $adatok[0];
                $addressExist = true;
            }
        }

        if (!$addressExist) {
            # code...
        }
*/
        $address_Query = "INSERT INTO `addresses`(`country_id`, `postal`, `street`, `created_at`) VALUES (?,?,?,?)";
        $addressStatement = mysqli_stmt_init($connection);
        if (mysqli_stmt_prepare($addressStatement, $address_Query)) {
            mysqli_stmt_bind_param($addressStatement, 'isss', $country, $postal, $street, $date);
            mysqli_stmt_execute($addressStatement);
        }
        else{
            echo 'address_stmt_error';
        }

        $idQuery = "SELECT MAX(id) FROM addresses";
        $result = mysqli_query($connection,$idQuery);
        $addressID = mysqli_fetch_row($result)[0];

        #psswrd
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);



        $sql_query ="INSERT INTO `users`( `username`, `password`, `email`, `phone`, `address_id`, `created_at`) 
        VALUES (?,?,?,?,?,?)";
        $statement = mysqli_stmt_init($connection);
        if (mysqli_stmt_prepare($statement, $sql_query)) {
            mysqli_stmt_bind_param($statement, 'ssssis', $username,$hashedPassword, $email, $phone, $addressID, $date);
            mysqli_stmt_execute($statement);
        }
        else {
            echo 'Statement error. ';
        }
    }
}
else {
    echo "Nem lett megnyomva a gomb";
}