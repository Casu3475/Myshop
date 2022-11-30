<?php

function edit_username($name, $newname, $pdo) {
    
    $req = $pdo->prepare("SELECT * FROM users WHERE username = ? ");
    $req->execute([$newname]);
    $res = $req->fetchAll(PDO::FETCH_ASSOC);

    if($res!=NULL)
    {
        echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The name you provided is already taken.</p></div>";
    } else{
        if ($newname == ""){
            echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>You cannot enter an empty name.</p></div>";
        }
        $stmt = $pdo->prepare("UPDATE users SET username = ? WHERE username = ?");
        $stmt->execute([$newname, $name]);
        $_SESSION['user_name'] = $newname;
        echo "<div class='flex justify-center'><p class='rounded-lg bg-indigo-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'> Your username is now '".$newname."'.</p></div>";
    }

}


function edit_password($username, $password, $password_conf, $pdo){
    $errors=0;

    if(empty($password)){
        echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>You cannot enter an empty password.</p></div>";
        $errors += 1;
    }

    if($password != $password_conf){         
        echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>Password and password confirmation do not match.</p></div>";     
        $errors += 1;
    }

    if(strlen($password) < 8){                                                     
        echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>You must enter a password with at least 8 caracters.</p></div>";     
        $errors += 1;
    }

    if ($errors == 0){
        $password_hash = password_hash($password,PASSWORD_BCRYPT);   
        $stmt = $pdo->prepare("UPDATE users SET password = ? WHERE username = ?");
        $stmt->execute([$password_hash, $username]);
        echo "<div class='flex justify-center'><p class='rounded-lg bg-indigo-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'> Your password was successfully modified.</p></div>";
    }
}


function edit_email($username, $email, $email_conf, $pdo){
    $errors=0;

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){      //format mail
        echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The email is not valid.</p></div>";
        $errors += 1;
    } else {
        $req = $pdo->prepare('SELECT * FROM users WHERE email = ?');
        $req->execute([$email]);
        $user = $req->fetch();
    
        if($user){
            echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The email is already taken.</p></div>";
            $errors += 1;
        }
    }

    $req = $pdo->prepare('SELECT * FROM users WHERE email = ?');
    $req->execute([$email]);
    $user = $req->fetch();

    if($user){
        echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The email is already taken.</p></div>";
        $errors += 1;
    }

    if(empty($email)){
        echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>You cannot enter an empty email.</p></div>";
        $errors += 1;
    }

    if($email != $email_conf){         
        echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>Email and email confirmation do not match.</p></div>";     
        $errors += 1;
    }

    if ($errors == 0){  
        $stmt = $pdo->prepare("UPDATE users SET email = ? WHERE username = ?");
        $stmt->execute([$email, $username]);
        echo "<div class='flex justify-center'><p class='rounded-lg bg-indigo-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'> Your email was successfully modified.</p></div>";
    }
}