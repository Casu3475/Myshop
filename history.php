<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="mt-12">
            <div class="flow-root">
              <ul class="-my-4 divide-y divide-gray-200">
                <?php
                $req = $pdo->prepare("SELECT * from purchased_history WHERE user_id = ? ");
                $req->execute([$_COOKIE['id_user']]);
                $res = $req->fetchall(PDO::FETCH_ASSOC);
                foreach ($res as $n)
                { 
                        $req2 = $pdo->prepare("SELECT * from products WHERE id = ? ");
                        $req2->execute([$n["product_id"]]);
                        $res2 = $req2->fetchall(PDO::FETCH_ASSOC);?>
            
                        <li class="flex items-center justify-between py-4">
                        <div class="flex items-start">
                          <img
                            alt="Vynil"
                            src="<?php echo $res2[0]["picture"]; ?>"
                            class="h-16 w-16 flex-shrink-0 rounded-lg object-cover"
                          />
            
                          <div class="ml-4">
                            <p class="text-sm"><?php echo $res2[0]["name"]; ?></p>
            
                            <dl class="mt-1 space-y-1 text-xs text-gray-500">
                              <div>
                                <dt class="inline">Artist:</dt>
                                <dd class="inline"><?php echo $res2[0]["artist"];?></dd>
                              </div>
                            </dl>
                          </div>
                        </div>
            
                        <div >
                          <p class="text-sm">
                            $<?php echo $res2[0]["price"];?>
                            <small class="text-gray-500">x<?php echo $n["quantity"];?></small>
                            <?php echo '<p>Bought in: '. $res[0]["date"]. '</p>';?>
                          </p>
                        </div>
                      </li>
                      <?php
                    }
                ?>

              </ul>
            </div>
          </div>
        </div>
      </div>
</body>
</html>

