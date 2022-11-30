<?php

require_once("configs/db_credentials.php");
require_once("connect_to_db.php");


// function display_users ($connection){

//     $rq = $connection->prepare("SELECT * FROM users");
//     $rq->execute();
//     $res = $rq->fetchall(PDO::FETCH_ASSOC);
//     // print_r($res);
//     echo '<div class="overflow-hidden overflow-x-auto rounded-lg border border-gray-200">
//             <table class="min-w-full divide-y divide-gray-200 text-sm">
//                 <thead class="bg-blue-100">
//                     <tr>
//                     <th
//                         class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
//                     >
//                         id
//                     </th>
//                     <th
//                         class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
//                     >
//                         username
//                     </th>
//                     <th
//                         class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
//                     >
//                         password
//                     </th>
//                     <th
//                         class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
//                     >
//                         email
//                     </th>
//                     <th
//                         class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
//                     >
//                         admin
//                     </th>
//                     </tr>
//                 </thead>
        
//                 <tbody class="divide-y divide-gray-200">';
    
//     foreach ($res as $user) {
//         echo '<tr>';
//         foreach ($user as $key => $value) {
//             echo '<td class="whitespace-normal px-4 py-2 font-medium text-gray-700 break-all">';
//             echo $value;
//             echo '</td>';
//         }
//         echo '</tr>';
//     }

//     echo '</tbody>
//           </table>
//           </div>';

// }

function display_users ($connection){

    $rq = $connection->prepare("SELECT * FROM users");
    $rq->execute();
    $res = $rq->fetchall(PDO::FETCH_ASSOC);
    // print_r($res);
    echo '<div class="h-96">
                <div class="rounded-lg border border-gray-200">
                        <table class="min-w-full divide-y divide-gray-200 text-sm">
                            <thead class="bg-blue-100">
                                <tr>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    id
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    username
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    password
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    email
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    admin
                                </th>
                                </tr>
                            </thead>
                    
                            <tbody class="divide-y divide-gray-200">';
    
    foreach ($res as $user) {
        echo '<tr>';
        foreach ($user as $key => $value) {
            echo '<td class="whitespace-normal px-4 py-2 font-medium text-gray-700 break-all">';
            echo $value;
            echo '</td>';
        }
        echo '</tr>';
    }

    echo '</tbody>
          </table>
          </div>
          </div>';

}


function display_users_aux ($connection){

    $rq = $connection->prepare("SELECT * FROM users");
    $rq->execute();
    $res = $rq->fetchall(PDO::FETCH_ASSOC);
    // print_r($res);
    echo '<div class="h-56">
                <div class="rounded-lg border border-gray-200">
                        <table class="min-w-full divide-y divide-gray-200 text-sm">
                            <thead class="bg-blue-100">
                                <tr>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    id
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    username
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    password
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    email
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    admin
                                </th>
                                </tr>
                            </thead>
                    
                            <tbody class="divide-y divide-gray-200">';
    
    foreach ($res as $user) {
        echo '<tr>';
        foreach ($user as $key => $value) {
            echo '<td class="whitespace-normal px-4 py-2 font-medium text-gray-700 break-all">';
            echo $value;
            echo '</td>';
        }
        echo '</tr>';
    }

    echo '</tbody>
          </table>
          </div>
          </div>';

}


function edit_user($connection, $username) {
    $stmt = $connection->prepare("UPDATE users SET admin = 1 WHERE username = ?");
    $stmt->execute([$username]);
}


function delete_user ($connection, $username){
    $stmt = $connection->prepare("DELETE FROM users WHERE username = ?");
    $stmt->execute([$username]);
}

function delete_product ($connection, $id){
    $stmt = $connection->prepare("DELETE FROM products WHERE id = ?");
    $stmt->execute([$id]);
}


// function display_products ($connection){

//     $rq = $connection->prepare("SELECT * FROM products");
//     $rq->execute();
//     $res = $rq->fetchall(PDO::FETCH_ASSOC);
//     // print_r($res);
//     echo '<div class="h-auto">
//             <div class="rounded-lg border border-gray-200 ">
//                     <table class="divide-y divide-gray-200 text-sm ">
//                         <thead class="bg-green-100">
//                             <tr>
//                                 <th
//                                     class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
//                                 >
//                                     id
//                                 </th>
//                                 <th
//                                     class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
//                                 >
//                                     name
//                                 </th>
//                                 <th
//                                     class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
//                                 >
//                                     artist
//                                 </th>
//                                 <th
//                                     class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
//                                 >
//                                     price
//                                 </th>
//                                 <th
//                                     class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
//                                 >
//                                     category_id
//                                 </th>
//                                 <th
//                                     class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
//                                 >
//                                     picture
//                                 </th>
//                                 <th
//                                     class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
//                                 >
//                                     description
//                                 </th>
//                                 <th
//                                     class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
//                                 >
//                                     visit
//                                 </th>
//                             </tr>
//                         </thead>
                
//                         <tbody class="divide-y divide-gray-200">
//                         </div>';
            
//     foreach ($res as $prod) {
//         echo '<tr>';
//         foreach ($prod as $key => $value) {
//                 echo '<td class="whitespace-nowrap px-4 py-2 font-medium text-gray-700 break-all">';
//                 echo $value;
//                 echo '</td>';
//         }
//         echo '</tr>';
//     }

//     echo '</tbody>
//           </table>
//           </div>';

// }

function display_products ($connection){

    $rq = $connection->prepare("SELECT * FROM products");
    $rq->execute();
    $res = $rq->fetchall(PDO::FETCH_ASSOC);
    // print_r($res);
    echo '<div class="h-96">
            <div class="rounded-lg border border-gray-200 ">
                    <table class="divide-y divide-gray-200 text-sm overflow-y-scroll">
                        <thead class="bg-green-100">
                            <tr>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    id
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    name
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    artist
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    price
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    category_id
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    picture
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    description
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    visit
                                </th>
                            </tr>
                        </thead>
                
                        <tbody class="divide-y divide-gray-200">
                        ';
            
    foreach ($res as $prod) {
        echo '<tr>';
        foreach ($prod as $key => $value) {
                echo '<td class="whitespace-nowrap px-4 py-2 font-medium text-gray-700 break-all">';
                echo $value;
                echo '</td>';
        }
        echo '</tr>';
    }

    echo '</tbody>
          </table>
          </div>
          </div>';

}


function display_products_aux ($connection){

    $rq = $connection->prepare("SELECT * FROM products");
    $rq->execute();
    $res = $rq->fetchall(PDO::FETCH_ASSOC);
    // print_r($res);
    echo '<div class="h-56 relative">
            <div class="rounded-lg border border-gray-200 ">
                    <table class="divide-y divide-gray-200 text-sm overflow-y-scroll">
                        <thead class="bg-green-100">
                            <tr>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    id
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    name
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    artist
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    price
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    category_id
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    picture
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    description
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    visit
                                </th>
                            </tr>
                        </thead>
                
                        <tbody class="divide-y divide-gray-200">
                        ';
            
    foreach ($res as $prod) {
        echo '<tr>';
        foreach ($prod as $key => $value) {
                echo '<td class="whitespace-nowrap px-4 py-2 font-medium text-gray-700 break-all">';
                echo $value;
                echo '</td>';
        }
        echo '</tr>';
    }

    echo '</tbody>
          </table>
          </div>
          </div>';

}

function display_products_filter_id ($connection, $id){

    $rq = $connection->prepare("SELECT * FROM products WHERE id = ?");
    $rq->execute([$id]);
    $res = $rq->fetchall(PDO::FETCH_ASSOC);
    // print_r($res);
    echo '<div class="h-56 relative">
            <div class="rounded-lg border border-gray-200 ">
                    <table class="divide-y divide-gray-200 text-sm overflow-y-scroll">
                        <thead class="bg-green-100">
                            <tr>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    id
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    name
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    artist
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    price
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    category_id
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    picture
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    description
                                </th>
                                <th
                                    class="whitespace-normal px-4 py-2 text-left font-medium text-gray-900"
                                >
                                    visit
                                </th>
                            </tr>
                        </thead>
                
                        <tbody class="divide-y divide-gray-200">
                        ';
            
    foreach ($res as $prod) {
        echo '<tr>';
        foreach ($prod as $key => $value) {
                echo '<td class="whitespace-nowrap px-4 py-2 font-medium text-gray-700 break-all">';
                echo $value;
                echo '</td>';
        }
        echo '</tr>';
    }

    echo '</tbody>
          </table>
          </div>
          </div>';

}


function add_product ($connection, $prod_name, $artist, $price, $category_id, $picture, $description){
    $stmt = $connection->prepare("INSERT INTO products VALUES (NULL,?,?,?,?,?,?,NULL)");
    $stmt->execute([$prod_name, $artist, $price, $category_id, $picture, $description]);
}


// function edit_product ($connection, $id, $alb_name, $artist, $price, $category_id, $picture, $description){
//     $count_modifs = 0;
//     if (isset($alb_name) && $alb_name != "") {
//         $stmt = $connection->prepare("UPDATE products SET name = ? WHERE id = ?");
//         $stmt->execute([$alb_name, $id]);
//         $count_modifs += 1;
//     }
//     if (isset($artist) && $artist != "") {
//         $stmt = $connection->prepare("UPDATE products SET artist = ? WHERE id = ?");
//         $stmt->execute([$artist, $id]);
//         $count_modifs += 1;
//     }
//     if (isset($price) && $price != "") {
//         $stmt = $connection->prepare("UPDATE products SET price = ? WHERE id = ?");
//         $stmt->execute([$price, $id]);
//         $count_modifs += 1;
//     }
//     if (isset($category_id) && $category_id != "") {
//         $stmt = $connection->prepare("UPDATE products SET category_id = ? WHERE id = ?");
//         $stmt->execute([$category_id, $id]);
//         $count_modifs += 1;
//     }
//     if (isset($picture) && $picture != "") {
//         $stmt = $connection->prepare("UPDATE products SET picture = ? WHERE id = ?");
//         $stmt->execute([$picture, $id]);
//         $count_modifs += 1;
//     }
//     if (isset($description) && $description != "") {
//         $stmt = $connection->prepare("UPDATE products SET description = ? WHERE id = ?");
//         $stmt->execute([$description, $id]);
//         $count_modifs += 1;
//     }

//     return $count_modifs;
// }


function edit_product ($pdo, $id, $alb_name, $artist, $price, $category_id, $picture, $description){
    $count_modifs = 0;
    
    if (isset($alb_name) && $alb_name != "") {
        $error_count = 0;
        $rq = $pdo->prepare("SELECT * FROM products WHERE name = ?");
        $rq->execute([$_POST['album_name']]);
        $res_name = $rq->fetchall(PDO::FETCH_ASSOC);
        
        $count_modifs += 1;
        if (!empty($res_name)) {
            echo "<div class='flex justify-center'><p class=' border rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The album name you provided is already in the database. Please double check.</p></div>";
            $error_count += 1;
        }
        if ($error_count == 0){
            $stmt = $pdo->prepare("UPDATE products SET name = ? WHERE id = ?");
            $stmt->execute([$alb_name, $id]);
            echo "<div class='flex justify-center'><p class=' border rounded-lg bg-blue-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>Album's name was successfully modified.</p></div>";
            
        }

    }
    if (isset($artist) && $artist != "") {
        $error_count = 0;

        
        $count_modifs += 1;
        if ($error_count == 0){
            $stmt = $pdo->prepare("UPDATE products SET artist = ? WHERE id = ?");
            $stmt->execute([$artist, $id]);
            echo "<div class='flex justify-center'><p class=' border rounded-lg bg-blue-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>Artist's name was successfully modified.</p></div>";
            
        }
    }
    if (isset($price) && $price != "") {
        $error_count = 0;

        
        $count_modifs += 1;
        if (!is_numeric($_POST['price'])) {
            echo "<div class='flex justify-center'><p class=' border rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The price given is not a number. Please double check.</p></div>";
            $error_count += 1;
        }
        if ($error_count == 0){
            $stmt = $pdo->prepare("UPDATE products SET price = ? WHERE id = ?");
            $stmt->execute([$price, $id]);
            echo "<div class='flex justify-center'><p class=' border rounded-lg bg-blue-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>Album's price was successfully modified.</p></div>";
            
        }
    }
    if (isset($category_id) && $category_id != "") {
        $error_count = 0;
        
        $rq = $pdo->prepare("SELECT * FROM categories WHERE id = ?");
        $rq->execute([$_POST['category_id']]);
        $res_category_id = $rq->fetchall(PDO::FETCH_ASSOC);
        
        $count_modifs += 1;
        if (!is_numeric($_POST['category_id'])) {
            echo "<div class='flex justify-center'><p class=' border rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The category id given is not a number. Please double check.</p></div>";
            $error_count += 1;
        }
        if (empty($res_category_id)) {
            echo "<div class='flex justify-center'><p class=' border rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The category id you provided does not exist in the categories table. Please double check.</p></div>";
            $error_count += 1;
        }
        if ($error_count == 0){
            $stmt = $pdo->prepare("UPDATE products SET category_id = ? WHERE id = ?");
            $stmt->execute([$category_id, $id]);
            echo "<div class='flex justify-center'><p class=' border rounded-lg bg-blue-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>Album's category ID was successfully modified.</p></div>";
            
        }
    }
    if (isset($picture) && $picture != "") {
        $error_count = 0;

        $rq = $pdo->prepare("SELECT * FROM products WHERE picture = ?");
        $rq->execute([$_POST['picture']]);
        $res_picture = $rq->fetchall(PDO::FETCH_ASSOC);
        
        $count_modifs += 1;
        if (!empty($res_picture)) {
            echo "<div class='flex justify-center'><p class=' border rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The picture link you want to add is already in the database. Please double check.</p></div>";
            $error_count += 1;
        }
        if (filter_var($_POST['picture'], FILTER_VALIDATE_URL) == false) {
            echo "<div class='flex justify-center'><p class=' border rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>Link to picture is no a valid URL. Please double check.</p></div>";
            $error_count += 1;
        }
        if ($error_count == 0){
            $stmt = $pdo->prepare("UPDATE products SET picture = ? WHERE id = ?");
            $stmt->execute([$picture, $id]);
            echo "<div class='flex justify-center'><p class=' border rounded-lg bg-blue-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>Album's picture was successfully modified.</p></div>";
        }
    }
    if (isset($description) && $description != "") {
        $error_count = 0;

        
        $count_modifs += 1;
        if ($error_count == 0){
            $stmt = $pdo->prepare("UPDATE products SET description = ? WHERE id = ?");
            $stmt->execute([$description, $id]);
            echo "<div class='flex justify-center'><p class=' border rounded-lg bg-blue-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>Album's description was successfully modified.</p></div>";
            echo "<br>";
        }
    }

    return $count_modifs;
}




function display_categories($parent_id, $pdo) {

    $req = $pdo->prepare("SELECT * FROM categories WHERE parent_id = ? ");
    $req->execute([$parent_id]);
    $res = $req->fetchAll(PDO::FETCH_ASSOC);

    if($res!=NULL)
    {
        echo '<ul class="list-disc list-inside ml-8">';
        foreach($res as $row)
        {
            echo '<li>' . $row["parent_id"] .'-<b>'. $row["name"] . ' (id: ' . $row["id"] . ')</b></li>';
            display_categories($row["id"], $pdo);
        }

        echo '</ul>';
    } else{}

}





function display_products_by_category($parent_id, $pdo) {

    $req = $pdo->prepare("SELECT * FROM categories WHERE parent_id = ? ");
    $req->execute([$parent_id]);
    $res = $req->fetchAll(PDO::FETCH_ASSOC);

    if($res!=NULL)
    {
        echo '<ul class="list-disc list-inside ml-8">';
        foreach($res as $row)
        {
            $req = $pdo->prepare("SELECT name FROM categories WHERE id = ? ");
            $req->execute([$row["id"]]);
            $res_cat = $req->fetchAll(PDO::FETCH_ASSOC);
            $parent_name = $res_cat[0]['name'];

            $req = $pdo->prepare("SELECT name, artist, category_id FROM products WHERE category_id = ? ");
            $req->execute([$row["id"]]);
            $res_prod = $req->fetchAll(PDO::FETCH_ASSOC);

            // $array = [];
            // foreach ($res_prod as $prod) {
            //     $array[] = $prod['name'];
            // }
            
            echo '<li>' . $row["parent_id"] .'-<b>'. $row["name"] . ' (id: ' . $row["id"] . ')</b>&nbsp&nbsp&nbsp --> &nbsp&nbsp&nbspAlbums: ';
            foreach ($res_prod as $prod) {
                echo $prod['name']." (". $prod['artist'] ."), ";
            }
            echo '</li>';


            display_products_by_category($row["id"], $pdo);

            
        }

        echo '</ul>';
    } else{}

}



function add_category($parent_id, $name, $pdo){

    $req = $pdo->prepare("SELECT * FROM categories WHERE id = ? ");
    $req->execute([$parent_id]);
    $res_id = $req->fetchAll(PDO::FETCH_ASSOC);

    $req = $pdo->prepare("SELECT * FROM categories WHERE name = ? ");
    $req->execute([$name]);
    $res_name = $req->fetchAll(PDO::FETCH_ASSOC);

    $parent_name = $res_id[0]['name'];

    $count_modifs = 0;

    if ($res_name!=NULL) {
        echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-72 px-5 py-2 text-md text-gray-800 font-medium'>The category name you provided is already included in the database.</p></div>";
        echo "<br>";
        $count_modifs += 1;
    }
    if($res_id==NULL){
        echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-72 px-5 py-2 text-md text-gray-800 font-medium'>The parent category you provided does not exist in the database.</p></div>";
        echo "<br>";
        $count_modifs += 1;
    } 
    if ($count_modifs > 0) {
        exit;
    }

    $stmt = $pdo->prepare("INSERT INTO categories VALUES (NULL,?,?)");
    $stmt->execute([$name, $parent_id]);

    echo "<div class='flex justify-center'><p class='rounded-lg bg-indigo-300 w-80 px-5 py-2 text-md text-gray-800 font-medium'> The category ".$name." was successfully included in the database under parent category ".$parent_name." (id: ".$parent_id.").</p></div>";
    echo "<br>";
}



function delete_category($id, $pdo){

    $req = $pdo->prepare("SELECT * FROM categories WHERE id = ? ");
    $req->execute([$id]);
    $res_id = $req->fetchAll(PDO::FETCH_ASSOC);
    $cat_name = $res_id[0]['name'];

    $req = $pdo->prepare("SELECT * FROM categories WHERE parent_id = ? ");
    $req->execute([$id]);
    $res_parent = $req->fetchAll(PDO::FETCH_ASSOC);

    $req = $pdo->prepare("SELECT * FROM products WHERE category_id = ? ");
    $req->execute([$id]);
    $res_product = $req->fetchAll(PDO::FETCH_ASSOC);


    $count_errors = 0;

    if ($res_id==NULL) {
        echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The category id you provided is not included in the database. Please double check the id.</p></div>";
        echo "<br>";
        $count_errors += 1;
    } else {
        if($res_parent!=NULL){
            echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The category you want to remove (". $cat_name .") has child categories associated to it. Please make sure to reassign all of them by making use of the 'Edit category' function before deleting the category .</p></div>";
            echo "<br>";
            $count_errors += 1;
        } 
        if($res_product!=NULL){
            echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The category you want to remove (". $cat_name .") has albums associated to it. Please make sure to reassign all of the albums by making use of the 'Edit category' function before deleting the category.</p></div>";
            echo "<br>";
            $count_errors += 1;
        } 
    }
    

    if ($count_errors == 0) {
        $stmt = $pdo->prepare("DELETE FROM categories WHERE id = ?");
        $stmt->execute([$id]);

        echo "<div class='flex justify-center'><p class='rounded-lg bg-indigo-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'> The category ".$cat_name." (id: ".$id.") was successfully removed from the database.</p></div>";
        echo "<br>";
    } else {
        echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The category ".$cat_name." was not removed from the database due to the errors above. Please double check.</p></div>";
        echo "<br>";
    }
}



function edit_category_only_aim_parent($id, $aim_parent_id, $pdo){

    $req = $pdo->prepare("SELECT * FROM categories WHERE id = ? ");
    $req->execute([$id]);
    $res_id = $req->fetchAll(PDO::FETCH_ASSOC);

    $cat_name = $res_id[0]['name'];

    $req = $pdo->prepare("SELECT * FROM categories WHERE id = ? ");
    $req->execute([$aim_parent_id]);
    $res_aim_parent_id = $req->fetchAll(PDO::FETCH_ASSOC);

    $cat_aim_parent_name = $res_aim_parent_id[0]['name'];

    $req = $pdo->prepare("SELECT * FROM categories WHERE parent_id = ? ");
    $req->execute([$id]);
    $res_parent = $req->fetchAll(PDO::FETCH_ASSOC);


    $count_errors = 0;

    if ($res_id==NULL) {
        echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The category id you want to modify is not included in the database. Please double check the id.</p></div>";
        echo "<br>";
        $count_errors += 1;
    } 
    if ($res_aim_parent_id==NULL) {
        echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The given objective parent category id is not included in the database. Please double check the id.</p></div>";
        echo "<br>";
        $count_errors += 1;
    }
    // if($res_parent!=NULL){
    //     echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The category you want to move/modify (". $cat_name .") has child categories associated to it. Please make sure to reassign all of them by making use of the 'Edit category' function before deleting the category .</p></div>";
    //     echo "<br>";
    //     $count_errors += 1;
    // } 

    if ($count_errors == 0) {
        $stmt = $pdo->prepare("UPDATE categories SET parent_id = ? WHERE id = ?");
        $stmt->execute([$aim_parent_id, $id]);

        echo "<div class='flex justify-center'><p class='rounded-lg bg-indigo-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'> The category ".$cat_name." (id: ".$id.") was successfully modified and is now under the ".$cat_aim_parent_name." (id: ".$aim_parent_id.").</p></div>";
        echo "<br>";
    } else {
        echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The category ".$cat_name." was not moved/modified due to the errors above. Please double check.</p></div>";
        echo "<br>";
    }
}



function edit_category_aim_parent_and_aim_child($id, $aim_parent_id, $aim_child_id, $pdo){

    $req = $pdo->prepare("SELECT * FROM categories WHERE id = ? ");
    $req->execute([$id]);
    $res_id = $req->fetchAll(PDO::FETCH_ASSOC);

    $cat_name = $res_id[0]['name'];

    $req = $pdo->prepare("SELECT * FROM categories WHERE id = ? ");
    $req->execute([$aim_parent_id]);
    $res_aim_parent_id = $req->fetchAll(PDO::FETCH_ASSOC);

    $cat_aim_parent_name = $res_aim_parent_id[0]['name'];

    $req = $pdo->prepare("SELECT * FROM categories WHERE id = ? ");
    $req->execute([$aim_child_id]);
    $res_aim_child_id = $req->fetchAll(PDO::FETCH_ASSOC);

    $cat_aim_child_name = $res_aim_child_id[0]['name'];

    $req = $pdo->prepare("SELECT * FROM categories WHERE id = ? AND parent_id = ? ");
    $req->execute([$aim_child_id, $aim_parent_id]);
    $res_aim_parent_child = $req->fetchAll(PDO::FETCH_ASSOC);


    $count_errors = 0;

    if ($res_id==NULL) {
        echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The category id you want to modify is not included in the database. Please double check the id.</p></div>";
        echo "<br>";
        $count_errors += 1;
    } 
    if ($res_aim_parent_id==NULL) {
        echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The given aim parent category id is not included in the database. Please double check the id.</p></div>";
        echo "<br>";
        $count_errors += 1;
    }
    if ($res_aim_child_id==NULL) {
        echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The given aim child category id is not included in the database. Please double check the id.</p></div>";
        echo "<br>";
        $count_errors += 1;
    }
    if($res_aim_parent_child==NULL){
        echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The aim child category (". $cat_aim_child_name .") is not a direct descendant of the aim parent category (". $cat_aim_parent_name ."). Please make sure they have a parent-child relationship before editing.</p></div>";
        echo "<br>";
        $count_errors += 1;
    } 

    if ($count_errors == 0) {
        $stmt = $pdo->prepare("UPDATE categories SET parent_id = ? WHERE id = ?");
        $stmt->execute([$aim_parent_id, $id]);

        $stmt = $pdo->prepare("UPDATE categories SET parent_id = ? WHERE id = ?");
        $stmt->execute([$id, $aim_child_id]);

        echo "<div class='flex justify-center'><p class='rounded-lg bg-indigo-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'> The category ".$cat_name." (id: ".$id.") was successfully modified and is now between ".$cat_aim_parent_name." (id: ".$aim_parent_id.") and ".$cat_aim_child_name." (id: ".$aim_child_id.").</p></div>";
        echo "<br>";
    } else {
        echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The category ".$cat_name." was not moved/modified due to the errors above. Please double check.</p></div>";
        echo "<br>";
    }
}