<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>purchase</title>
</head>
<body>
    
</body>
</html>
<?php

require_once("configs/db_credentials.php");
require_once("functions/connect_to_db.php");

if (isset($_COOKIE["id_user"]))
{
$pdo = connect_db($host, $username, $userpassword, $port, $db_name);

$id = $_COOKIE["id_user"];

$req = $pdo->prepare("SELECT * FROM carts WHERE user_id = ? ");
$req->execute([$id]);
$res = $req->fetchall(PDO::FETCH_ASSOC);

foreach ($res as $n)
{
    $req2 = $pdo->prepare("SELECT category_id FROM products WHERE id = ? ");
    $req2->execute([$n["product_id"]]);
    $res2 = $req2->fetchall(PDO::FETCH_ASSOC);
    $a = $n["product_id"];
    $b = intval($res2[0]["category_id"]);
    $c = intval($n["quantity"]);
    $d = $_COOKIE["id_user"];
    $e = date("Y-m-d");
    $req3 = $pdo->prepare("INSERT INTO purchased_history ( product_id, category_id, quantity, user_id, date) VALUES ('$a', '$b', '$c', '$d', '$e') ");
    $req3->execute();
    $req4 = $pdo->prepare("DELETE FROM carts WHERE user_id = ? ");
    $req4->execute([$id]);
}
?>
<section class="rounded-3xl item-center shadow-2xl max-w-lg">
  <div class="p-8 text-center sm:p-12">
    <p class="text-sm font-semibold uppercase tracking-widest text-grey-800">
    
    </p>

    <h2 class="mt-6 text-3xl font-bold">
    Congratulations! Your purchase has been completed.
    </h2>

    <a
      class="mt-8 inline-block w-full rounded-full bg-green-600 py-4 text-sm font-bold text-white shadow-xl"
      href="index.php"
    >
      Return to shop
    </a>
  </div>
</section>
<?php }
else {
    ?>
    <section class="rounded-3xl item-center shadow-2xl max-w-lg">
      <div class="p-8 text-center sm:p-12">
        <p class="text-sm font-semibold uppercase tracking-widest text-pink-500">
        
        </p>
    
        <h2 class="mt-6 text-3xl font-bold">
        Sorry, you are not logged in
        </h2>
    
        <a
          class="mt-8 inline-block w-full rounded-full bg-pink-600 py-4 text-sm font-bold text-white shadow-xl"
          href="cart.php"
        >
          Return to your cart
        </a>
      </div>
    </section> 
<?php }?>
</body>
</html>