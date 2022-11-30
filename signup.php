<?php

require_once("configs/db_credentials.php");
require_once("functions/connect_to_db.php");
require_once("components/signup_style.php");

if(!empty($_POST)){                                   // si les données ont été remplies...
    $errors = array();                                 

    $pdo = connect_db($host,$username,$userpassword,$port,$db_name);


if(empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])){  //si le username est vide...
    $errors['username'] = "The username you provided is not valid.";                                 //format pseudo
} else{
    $req = $pdo->prepare("SELECT id FROM users WHERE username = ?");                    
    $req->execute([$_POST['username']]);
    $user = $req->fetch();
   
    if($user){
        $errors['username'] = "This username is already in use.";
    }
}

if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){      //format mail
    $errors['email'] = "The email address you provided is not valid";

} else {
    $req = $pdo->prepare('SELECT id FROM users WHERE email = ?');
    $req->execute([$_POST['email']]);
    $user = $req->fetch();

    if($user){
        $errors['email'] = "This email address is already in use.";
    }
}


if(empty($_POST['password']) || $_POST['password']!=$_POST['confirmPassword']){         
            $errors['password'] = "Password and password confirmation do not match.";       
        }

$password = $_POST['password'];

if(strlen($password) < 8){                                                     
            $errors['password'] = "You must enter a password with at least 8 caracters.";  

}


if(empty($errors)){
$req = $pdo->prepare("INSERT INTO users SET username = ?, password = ?, email= ?, admin=0");     // créer un nouvel utilisateur
$password = password_hash($_POST['password'],PASSWORD_BCRYPT);                          // Cryptage des mdp
$req->execute([$_POST['username'], $password, $_POST['email']]);
$exec = 1;
// die('Your account was been successfully created!');

}


}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sign up page of Vinyl Paradise Music Shop">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinyl Paradise - Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body">
    
        <?php
            echo $signup_form_1;
        ?>
        <?php
            if ($errors) {
                foreach ($errors as $error) {
                    echo "<br>";
                    echo "<p class='rounded-lg bg-red-500 px-5 py-2 text-md text-gray-800 font-medium'>$error</p>";
                } 
            } elseif ($exec) {
                echo "<br>";
                echo "<p class='rounded-lg bg-blue-500 px-5 py-2 text-md text-gray-800 font-medium'>Your account was created successfully</p>";
                
            } 
        ?>
        <?php
            echo $signup_form_2;
        ?>
    

</body>
</html> 







