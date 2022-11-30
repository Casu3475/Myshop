<?php


require_once("components/signin_style.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    <?php
        session_start();
        echo $user_admin_option_1;
        echo "<h1 class='text-3xl text-gray-100 font-extrabold sm:text-5xl'> Welcome onboard, " . $_SESSION['user_name'] . "</h1>";
        echo $user_admin_option_2;
    ?>

</body>
</html> 

