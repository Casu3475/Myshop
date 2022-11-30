
<?php
require_once("configs/db_credentials.php");
require_once("functions/connect_to_db.php");


function getCatChildren($parent_id, &$array, $pdo) {


$req = $pdo->prepare("SELECT id FROM categories WHERE parent_id = ? ");
$req->execute([$parent_id]);
$res = $req->fetchAll(PDO::FETCH_ASSOC);
if($res!=NULL)
{
    foreach($res as $id)
    {  
        array_push($array, intval($id["id"]));
        getCatChildren($id["id"], $array, $pdo);}
} else {}
}

?>
