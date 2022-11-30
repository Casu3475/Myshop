<?php
session_start();

require_once("configs/db_credentials.php");
require_once("functions/connect_to_db.php");
require_once("components/signin_style.php");


$erreur = "";

if (isset($_POST["email"]) && isset($_POST["password"]))
{
        
    
        $userEmail = $_POST['email'];
        $password = $_POST['password'];

        $rq = $pdo->prepare("SELECT * FROM users WHERE email = ? ");
        $rq->execute([$userEmail]);
        $res = $rq->fetchall(PDO::FETCH_ASSOC);

        // var_dump($res);

        if (empty($res)) {$erreur = "The given email address does not exist in the database.\n";}
        else 
        {

            $hash= $res[0]["password"];
            $hash = substr( $hash, 0, 60 );

            if (password_verify($password, $hash))
            {
                setcookie(
                    "id_user", 
                    $res[0]["id"],
                    [
                        'expires' => time() + 365*24*3600,
                        'secure' => true,
                        'httponly' => true,
                    ]);
                $_SESSION['user_name'] = $res[0]["username"];
                if ($res[0]["admin"] == 1) { 
                    header("Location: admin_user_options.php"); exit;
                }
                else {
                    header("Location: index.php"); exit;
                }
            }
            else 
            {
            $erreur = "Incorrect password.\n";
            }
        }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sign in page of Vinyl Paradise Music Shop">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinyl Paradise - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body">
    
        <?php
            echo $signin_form_1;
        ?>
        <?php
            if ($erreur) {
                echo "<br>";
                echo "<p class='rounded-lg bg-red-500 px-5 py-2 text-md text-gray-800 font-medium'>$erreur</p>";
                // $erreur = "";
            } 
        ?>
        <?php
            echo $signin_form_2;
        ?>
    

</body>
</html> 





