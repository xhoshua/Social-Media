<?php
include('../connection.php');

if (isset($_POST['Submit_Register'])) {
    session_start();
    $_SESSION['validate_errors'] = [];

    $firstName = $_POST['first_name'];
    if (empty($firstName)) {
        $_SESSION['validate_errors']['first_name'] = 'Emri duhet te vendoset';
    } else if (!preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
        $_SESSION['validate_errors']['first_name'] = 'Emri duhet vetem me shkronja dhe hapsira';
    }
 $lastName = $_POST['last_name'];
    if (empty($lastName)) {
        $_SESSION['validate_errors']['last_name'] = 'Mbiemri duhet te vendoset';
    } else if (!preg_match("/^[a-zA-Z-' ]*$/", $lastName)) {
        $_SESSION['validate_errors']['last_name'] = 'Mbiemri duhet vetem me shkronja dhe hapsira';
    }
 $email = $_POST['email'];
    if (empty($email)) {
        $_SESSION['validate_errors']['email'] = 'Email duhet te vendoset';
    } else if(!filter_input(INPUT_POST,"email", FILTER_VALIDATE_EMAIL)){
        $_SESSION['validate_errors']['email'] = 'Email nuk esht i valid';
    }else {
        $query="select * from users where email=:email limit 1";
        $stmt= $db->prepare($query);
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch();
        if ($user) {
            $_SESSION['validate_errors']['email'] = 'Ky email regjistruar me pare!';
        }
        }
    $password = $_POST['password'];
    if(empty($password)) {
        $_SESSION['validate_errors']['password'] = 'Password-i duhet te vendoset';
    }else if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password)) {
        $_SESSION['validate_errors']['password'] = 'Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character>';
    }
    $confirm_password = $_POST['confirm_password'];
    if(empty($confirm_password)){
        $_SESSION['validate_errors']['confirm_password'] = 'Confirm password-i duhet te vendoset';
    }else if ($_POST["password"] != $_POST["confirm_password"]) {
        $_SESSION['validate_errors']['confirm_password'] = 'Passwordi nuk esht i njejte';
    }
    if (count($_SESSION['validate_errors'])) {
        header('Location: register.php');
    } else {
        $hashedPassword = md5($password);
        $moment = date('Y-m-d H:i:s');
        $query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at) 
                    VALUE (:first_name, :last_name, :email, :password, :created_at, :updated_at)";
        $stmt= $db->prepare($query);
        if ($stmt->execute([
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email,
            'password' =>  $hashedPassword,
            'created_at' => $moment,
            'updated_at' => $moment,
        ])) {
            $_SESSION['auth_user'] = [
                'first_name' => $firstName,
                'last_name' => $lastName,
                'email' => $email,
                'password' =>  $hashedPassword,
                'created_at' => $moment,
                'updated_at' => $moment,
            ];
            header("Location: ../portal/home.php");
        }
    }
}

if (isset($_POST['Submit_Logout'])) {
    session_start();
    session_destroy();
    //TODO: redirect to login
}