<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>delete</title>
</head>
<body>
    
</body>
</html>
<?php

require_once("configs/db_credentials.php");
require_once("functions/connect_to_db.php");

$pdo = connect_db($host, $username, $userpassword, $port, $db_name);
if (isset($_COOKIE["id_user"]))
    {
        $id = $_COOKIE["id_user"];

    }
    else
    {
        $id= 0;
    }

$req = $pdo->prepare("DELETE FROM carts WHERE product_id = ? AND user_id = ? ");
$req->execute([$_POST["product_id"], $id]);
?>
<section class="rounded-3xl item-center shadow-2xl max-w-lg">
  <div class="p-8 text-center sm:p-12">
    <p class="text-sm font-semibold uppercase tracking-widest text-pink-500">
    
    </p>

    <h2 class="mt-6 text-3xl font-bold">
    The selected item has been removed from your cart.
    </h2>

    <a
      class="mt-8 inline-block w-full rounded-full bg-pink-600 py-4 text-sm font-bold text-white shadow-xl"
      href="cart.php"
    >
      Return to your cart
    </a>
  </div>
</section>


</body>
</html>