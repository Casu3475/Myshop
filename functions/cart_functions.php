<?php

function total($pdo, $cart)
{
  if (isset($_COOKIE["id_user"]))
    {
        $id = $_COOKIE["id_user"];

    }
    else
    {
        $id= 0;
    }

    $cart = "carts";

  $total = 0;
  $req = $pdo->prepare("SELECT * from $cart WHERE user_id = ? ");
  $req->execute([$id]);
  $res = $req->fetchall(PDO::FETCH_ASSOC);

  if (empty($res)) {return $total;}
  else
  {
    foreach ($res as $n)
    {
      $req2 = $pdo->prepare("SELECT price FROM products WHERE id = ? ");
      $req2->execute([$n['product_id']]);
      $res2 = $req2->fetchall(PDO::FETCH_ASSOC);
      $total = $total + (intval($res2[0]["price"]) * intval($n['quantity']));
    }
    return $total;
  }
}
