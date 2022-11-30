
<?php

require_once("configs/db_credentials.php");
require_once("functions/connect_to_db.php");

function getCategories($parent_id, $pdo) {

    $req = $pdo->prepare("SELECT * FROM categories WHERE parent_id = ? ");
    $req->execute([$parent_id]);
    $res = $req->fetchAll(PDO::FETCH_ASSOC);
    if($res!=NULL)
    { ?>
        <ul class="list-inside ml-8"> <?php
        foreach($res as $row)
        { ?>
        <li>
        
                <input
                  type="checkbox"
                  name="<?php echo $row["id"];?>"
                  class="h-4 w-4 rounded-md border-gray-200"
                />

                <span class="text-sm font-medium text-gray-700">
            <?php echo $row["name"];?>
            </span>
              </li>
            <?php getCategories($row["id"], $pdo);}?>
        </ul>
        <?php
    } 
}

?>
