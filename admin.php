<?php
require_once("configs/db_credentials.php");
require_once("functions/connect_to_db.php");
require_once("functions/admin_functions.php");
require_once("components/admin_menus.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Administrator panel page of Vinyl Paradise Music Shop">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinyl Paradise - Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="shadow-sm">
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-900">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="index.php" class="flex items-center ">
        <!-- <img src="dist/images/logo/logo-white.png" class="mr-3 w-14 h-14" alt="Flowbite Logo" /> -->
        <span class="self-center text-4xl font-semibold whitespace-nowrap dark:text-white">Vinyl Paradise</span>
    </a>
    
    <div>
        <a href="index.php">
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 -ml-1 w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>

                Go to Shop
            </button>
        </a>
    </div>


    <?php
      if (!isset($_COOKIE['id_user'])){
        header('Location: index.php'); exit;
      } else { 
    ?>

    
    <?php
        session_start(); 
        // echo "<p>Welcome home, ". $_SESSION['user_name'] . "</p>"; 
    ?>
    

    
    <div class="flow-root">
      <div class="float-left px-3 py-1 text-sm text-gray-100">
        <?php
          // session_start();  // Call to session start in previous php code (that way there is no issue with session variable)
          echo "<p>Welcome home,<br> ". $_SESSION['user_name'] . "</p>"; 
        ?>
      </div>
      <a href="user_config_page.php">
          <button class="hidden md:block float-left h-11 w-11 mr-3 rounded-full overflow-hidden border-2 border-gray-500 focus:outline-none focus:border-white">
                <img class = "h-full w-full object-cover" src="dist/images/signup/signup-bg-bruce-springsteen-2.jpeg" alt="User avatar">
          </button>
        </a>
      <form method="post" class="float-right w-5 h-5">
                <input type="submit" name="logout" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        value="Logout"/>
      </form>
    </div>
    
    <?php
                $rq = $pdo->prepare("SELECT * FROM users WHERE id = ? ");
                $rq->execute([$_COOKIE['id_user']]);
                $res = $rq->fetchall(PDO::FETCH_ASSOC);
                $is_admin = $res[0]["admin"];
                if ($is_admin == 0) {
                    header('Location: index.php'); exit;
                }
                if (isset($_POST['logout'])) {
                  if (isset($_SERVER['HTTP_COOKIE'])) {
                    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
                    foreach($cookies as $cookie) {
                        $parts = explode('=', $cookie);
                        $name = trim($parts[0]);
                        setcookie($name, '', time()-1000);
                        setcookie($name, '', time()-1000, '/');
                    }
                  }
                  header('Location: index.php'); exit;
                }
              ?>
      
    

    <?php
      }
    ?>

    
  </div>
</nav>
      
      </header>
      
      
      <div class="grid overflow-hidden grid-cols-4 grid-rows-1 gap-2 border h-screen divide-x">
        <div class="box">
            <nav aria-label="Main Nav" class="flex flex-col space-y-1 mt-4">
                <button
                    name="Users"
                    type="submit"
                    formmethod="post"
                    class="flex items-center rounded-lg px-4 py-2 text-gray-700"
                >
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 opacity-75"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                    >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
                    />
                    </svg>

                    <span class="ml-3 text-sm font-medium"> Users </span>
                </button>
                <form method="post" class="flex flex-col space-y-1 ml-7">
                    <button
                        name="display_users"
                        type="submit"
                        formmethod="post"
                        class="flex items-center rounded-lg px-4 py-2 text-gray-700 hover:bg-gray-100"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 opacity-75"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                            >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4 6h16M4 10h16M4 14h16M4 18h16"
                            />
                        </svg>

                        <span class="ml-3 text-sm font-medium"> Display all users </span>
                    </button>
                </form>
                <form method="post" class="flex flex-col space-y-1 ml-7">
                    <button
                        name="delete_user"
                        type="submit"
                        formmethod="post"
                        class="flex items-center rounded-lg px-4 py-2 text-gray-700 hover:bg-gray-100"
                    >
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 opacity-75"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M13 7a4 4 0 11-8 0 4 4 0 018 0zM9 14a6 6 0 00-6 6v1h12v-1a6 6 0 00-6-6zM21 12h-6"
                        />
                        </svg>

                        <span class="ml-3 text-sm font-medium"> Delete user </span>
                    </button>
                </form>
                <form method="post" class="flex flex-col space-y-1 ml-7">
                    <button
                        name="edit_user"
                        type="submit"
                        formmethod="post"
                        class="flex items-center rounded-lg px-4 py-2 text-gray-700 hover:bg-gray-100"
                    >
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 opacity-75"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"
                        />
                        </svg>

                        <span class="ml-3 text-sm font-medium"> Edit user </span>
                    </button>
                </form>
                <button
                    name="Albums"
                    type="submit"
                    formmethod="post"
                    class="flex items-center rounded-lg px-4 py-2 text-gray-700"
                >
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 opacity-75"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                    >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
                    />
                    </svg>

                    <span class="ml-3 text-sm font-medium"> Albums </span>
                </button>
                <form method="post" class="flex flex-col space-y-1 ml-7">
                    <button
                        name="display_products"
                        type="submit"
                        formmethod="post"
                        class="flex items-center rounded-lg px-4 py-2 text-gray-700 hover:bg-gray-100"
                    >
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 opacity-75"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4 6h16M4 10h16M4 14h16M4 18h16"
                        />
                        </svg>

                        <span class="ml-3 text-sm font-medium"> Display all albums </span>
                    </button>
                </form>
                <form method="post" class="flex flex-col space-y-1 ml-7">
                    <button
                        name="add_product"
                        type="submit"
                        formmethod="post"
                        class="flex items-center rounded-lg px-4 py-2 text-gray-700 hover:bg-gray-100"
                    >
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 opacity-75"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 4v16m8-8H4"
                        />
                        </svg>

                        <span class="ml-3 text-sm font-medium"> Add album </span>
                    </button>
                </form>
                <form method="post" class="flex flex-col space-y-1 ml-7">
                    <button
                        name="delete_product"
                        type="submit"
                        formmethod="post"
                        class="flex items-center rounded-lg px-4 py-2 text-gray-700 hover:bg-gray-100"
                    >
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 opacity-75"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 13h6m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                        />
                        </svg>

                        <span class="ml-3 text-sm font-medium"> Delete album </span>
                    </button>
                </form>
                <form method="post" class="flex flex-col space-y-1 ml-7">
                    <button
                        name="edit_product"
                        type="submit"
                        formmethod="post"
                        class="flex items-center rounded-lg px-4 py-2 text-gray-700 hover:bg-gray-100"
                    >
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 opacity-75"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"
                        />
                        </svg>

                        <span class="ml-3 text-sm font-medium"> Edit album </span>
                    </button>
                </form>
                <button
                    name="Categories"
                    type="submit"
                    formmethod="post"
                    class="flex items-center rounded-lg px-4 py-2 text-gray-700"
                >
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 opacity-75"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                    >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"
                    />
                    </svg>

                    <span class="ml-3 text-sm font-medium"> Categories </span>
                </button>
                <form method="post" class="flex flex-col space-y-1 ml-7">
                    <button
                        name="display_categories"
                        type="submit"
                        formmethod="post"
                        class="flex items-center rounded-lg px-4 py-2 text-gray-700 hover:bg-gray-100"
                    >
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 opacity-75"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4 6h16M4 10h16M4 14h16M4 18h16"
                        />
                        </svg>

                        <span class="ml-3 text-sm font-medium"> Display all categories </span>
                    </button>
                </form>
                <form method="post" class="flex flex-col space-y-1 ml-7">
                    <button
                        name="display_products_by_category"
                        type="submit"
                        formmethod="post"
                        class="flex items-center rounded-lg px-4 py-2 text-gray-700 hover:bg-gray-100"
                    >
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 opacity-75"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M4 6h16M4 10h16M4 14h16M4 18h16"
                        />
                        </svg>

                        <span class="ml-3 text-sm font-medium"> Display products by category </span>
                    </button>
                </form>
                <form method="post" class="flex flex-col space-y-1 ml-7">
                    <button
                        name="add_category"
                        type="submit"
                        formmethod="post"
                        class="flex items-center rounded-lg px-4 py-2 text-gray-700 hover:bg-gray-100"
                    >
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 opacity-75"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 4v16m8-8H4"
                        />
                        </svg>

                        <span class="ml-3 text-sm font-medium"> Add category </span>
                    </button>
                </form>
                <form method="post" class="flex flex-col space-y-1 ml-7">
                    <button
                        name="delete_category"
                        type="submit"
                        formmethod="post"
                        class="flex items-center rounded-lg px-4 py-2 text-gray-700 hover:bg-gray-100"
                    >
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 opacity-75"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 13h6m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                        />
                        </svg>

                        <span class="ml-3 text-sm font-medium"> Delete category </span>
                    </button>
                </form>
                <form method="post" class="flex flex-col space-y-1 ml-7">
                    <button
                        name="edit_category"
                        type="submit"
                        formmethod="post"
                        class="flex items-center rounded-lg px-4 py-2 text-gray-700 hover:bg-gray-100"
                    >
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 opacity-75"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"
                        />
                        </svg>

                        <span class="ml-3 text-sm font-medium"> Edit category </span>
                    </button>
                </form>

        </div>
        <div class="box col-start-2 col-end-5 h-screen">

            <section class="h-4/6">
                <div class=" px-4 py-3 overflow-scroll sm:px-6 lg:px-8">
                    
                    <?php
                        if (isset($_POST['display_users'])){
                            display_users($pdo);
                        } elseif (isset($_POST['edit_user'])) {
                            echo $user_edit_menu_1;
                            display_users_aux($pdo);
                        } elseif (isset($_POST['delete_user'])) {
                            echo $user_delete_menu;
                            display_users_aux($pdo);
                        } elseif (isset($_POST['display_products'])) {
                            display_products($pdo);
                        } elseif (isset($_POST['delete_product'])) {
                            echo $product_delete_menu;
                            display_products_aux($pdo);
                        } elseif (isset($_POST['add_product'])) {
                            echo $product_add_menu;
                        } elseif (isset($_POST['edit_product'])) {
                            echo $product_edit_menu_1;
                            display_products_aux($pdo);
                        } elseif (isset($_POST['display_categories'])) {
                            display_categories(0, $pdo);
                        } elseif (isset($_POST['display_products_by_category'])) {
                            display_products_by_category(0, $pdo);
                        } elseif (isset($_POST['add_category'])) {
                            echo $category_add_menu;
                        } elseif (isset($_POST['delete_category'])) {
                            echo $category_delete_menu;
                        } elseif (isset($_POST['edit_category'])) {
                            echo $category_edit_menu;
                        }
                        else {
                            if (isset($_POST['username_to_edit'])) {
                                $rq = $pdo->prepare("SELECT * FROM users WHERE username = ? ");
                                $rq->execute([$_POST['username_to_edit']]);
                                $res = $rq->fetchall(PDO::FETCH_ASSOC);
                                $user_name = $res[0]['username'];
                                $is_admin = $res[0]['admin'];
                                if (empty($res)) {
                                    echo $user_edit_menu_1;
                                    echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-72 px-5 py-2 text-md text-gray-800 font-medium'>This user does not exist in the database.</p></div>";
                                    echo "<br>";
                                    display_users_aux($pdo);
                                } else {
                                    if ($is_admin == 1){
                                        echo $user_edit_menu_1;
                                        echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-80 px-5 py-2 text-md text-gray-800 font-medium'>User ".$user_name." is already an administrator of this site.</p></div>";
                                        echo "<br>";
                                        display_users_aux($pdo);
                                    } else {
                                        edit_user($pdo, $_POST['username_to_edit']);
                                        echo $user_edit_menu_1;
                                        echo "<div class='flex justify-center'><p class='rounded-lg bg-indigo-300 w-80 px-5 py-2 text-md text-gray-800 font-medium'>User ".$user_name." is now an administrator of this site.</p></div>";
                                        echo "<br>";
                                        display_users_aux($pdo);
                                    }
                                    
                                }
                            } 
                            elseif (isset($_POST['username_to_delete'])) {
                                $rq = $pdo->prepare("SELECT * FROM users WHERE username = ? ");
                                $rq->execute([$_POST['username_to_delete']]);
                                $res = $rq->fetchall(PDO::FETCH_ASSOC);
                                $user_name = $res[0]['username'];
                                $user_email = $res[0]['email'];
                                if (empty($res)) {
                                    echo $user_delete_menu;
                                    echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-72 px-5 py-2 text-md text-gray-800 font-medium'>This user does not exist in the database.</p></div>";
                                    echo "<br>";
                                    display_users_aux($pdo);
                                } else {
                                    delete_user($pdo, $_POST['username_to_delete']);
                                    echo $user_delete_menu;
                                    echo "<div class='flex justify-center'><p class='rounded-lg bg-indigo-300 w-80 px-5 py-2 text-md text-gray-800 font-medium'>User ".$user_name." with email '".$user_email."' was successfully removed from the database.</p></div>";
                                    echo "<br>";
                                    display_users_aux($pdo);
                                }
                            } 
                            elseif (isset($_POST['product_to_delete'])) {
                                $rq = $pdo->prepare("SELECT * FROM products WHERE id = ? ");
                                $rq->execute([$_POST['product_to_delete']]);
                                $res = $rq->fetchall(PDO::FETCH_ASSOC);
                                $album_name = $res[0]['name'];
                                $artist_name = $res[0]['artist'];
                                if (empty($res)) {
                                    echo $product_delete_menu;
                                    echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-72 px-5 py-2 text-md text-gray-800 font-medium'>The album id does not exist in the database.</p></div>";
                                    echo "<br>";
                                    display_products_aux($pdo);
                                } else {
                                    delete_product($pdo, $_POST['product_to_delete']);
                                    echo $product_delete_menu;
                                    echo "<div class='flex justify-center'><p class='rounded-lg bg-indigo-300 w-80 px-5 py-2 text-md text-gray-800 font-medium'>".$artist_name."'s album '".$album_name."' was successfully removed from the database.</p></div>";
                                    echo "<br>";
                                    display_products_aux($pdo);
                                }
                            } 
                            elseif (isset($_POST['submit_new_album'])) {
                                $rq = $pdo->prepare("SELECT * FROM products WHERE name = ?");
                                $rq->execute([$_POST['album_name']]);
                                $res_name = $rq->fetchall(PDO::FETCH_ASSOC);
                                $rq = $pdo->prepare("SELECT * FROM products WHERE picture = ?");
                                $rq->execute([$_POST['picture']]);
                                $res_picture = $rq->fetchall(PDO::FETCH_ASSOC);
                                $rq = $pdo->prepare("SELECT * FROM categories WHERE id = ?");
                                $rq->execute([$_POST['category_id']]);
                                $res_category_id = $rq->fetchall(PDO::FETCH_ASSOC);
                                echo $product_add_menu;

                                $error_count = 0;
                                if (!empty($res_name)) {
                                    echo "<div class='flex justify-center'><p class=' border rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>This album is already in the database. Please check if its details are correct.</p></div>";
                                    $error_count += 1;
                                }
                                if (!empty($res_picture)) {
                                    echo "<div class='flex justify-center'><p class=' border rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The picture link you want to add is already in the database. Please double check.</p></div>";
                                    $error_count += 1;
                                }
                                if (!is_numeric($_POST['price'])) {
                                    echo "<div class='flex justify-center'><p class=' border rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The price given is not a number. Please double check.</p></div>";
                                    $error_count += 1;
                                }
                                if (!is_numeric($_POST['category_id'])) {
                                    echo "<div class='flex justify-center'><p class=' border rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The category id given is not a number. Please double check.</p></div>";
                                    $error_count += 1;
                                }
                                if (empty($res_category_id)) {
                                    echo "<div class='flex justify-center'><p class=' border rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The category id you provided does not exist in the categories table. Please double check.</p></div>";
                                    $error_count += 1;
                                }
                                // if (!str_starts_with('https://images.roughtrade.com/product/images/files',$_POST['picture'])) {
                                //     echo "<div class='flex justify-center'><p class=' border rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The picture like link does not have the correct format. Please double check the source.</p></div>";
                                //     $error_count += 1;
                                // }
                                if (filter_var($_POST['picture'], FILTER_VALIDATE_URL) == false) {
                                    echo "<div class='flex justify-center'><p class=' border rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>Link to picture is no a valid URL. Please double check.</p></div>";
                                    $error_count += 1;
                                }
                                if ($error_count != 0) {
                                    echo "<br>";
                                    echo "<div class='flex justify-center'><p class=' border rounded-lg bg-red-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>The album was not added to the database due to the issues above. Please check the details and try again.</p></div>";
                                    exit;
                                }
                                
                                add_product ($pdo, $_POST['album_name'], $_POST['artist_name'], $_POST['price'], 
                                            $_POST['category_id'], $_POST['picture'], $_POST['description']);
                                
                                echo "<div class='flex justify-center'><p class='rounded-lg bg-indigo-300 w-3/5 px-5 py-2 text-md text-gray-800 font-medium'>".$_POST['artist_name']."'s album '".$_POST['album_name']."' was successfully added to database.</p></div>";
                                echo "<br>";
                            } 
                            elseif (isset($_POST['product_to_edit'])) {
                                $rq = $pdo->prepare("SELECT * FROM products WHERE id = ? ");
                                $rq->execute([$_POST['product_to_edit']]);
                                $res = $rq->fetchall(PDO::FETCH_ASSOC);
                                $album_name = $res[0]['name'];
                                $artist_name = $res[0]['artist'];
                                $_SESSION['album_id'] = $res[0]["id"];
                                
                                if (empty($res)) {
                                    echo $product_edit_menu_1;
                                    echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-72 px-5 py-2 text-md text-gray-800 font-medium'>The album id does not exist in the database.</p></div>";
                                    echo "<br>";
                                    display_products_aux($pdo);
                                } else {
                                    echo $product_edit_menu_2;
                                    echo '<p> Album to be modified: </p>';
                                    echo "<br>";
                                    display_products_filter_id ($pdo, $_POST['product_to_edit']);
                                }
                            } 
                            elseif (isset($_POST['submit_new_category'])) {
                                echo $category_add_menu;
                                add_category($_POST['parent_id'], $_POST['category_name'], $pdo);  
                            } 
                            elseif (isset($_POST['select_for_deleting'])) {
                                echo $category_delete_menu;
                                delete_category($_POST['category_to_delete'], $pdo);
                            }
                            elseif (isset($_POST['select_for_editing'])) {
                                echo $category_edit_menu;
                                if (isset($_POST['aim_child']) && $_POST['aim_child'] != "" ) {
                                    edit_category_aim_parent_and_aim_child($_POST['id_to_edit'], $_POST['aim_parent'], $_POST['aim_child'], $pdo);
                                } else {
                                    edit_category_only_aim_parent($_POST['id_to_edit'], $_POST['aim_parent'], $pdo);
                                }
                            }
                            else {
                                if (isset($_POST['edit_album'])){
                                    $rq = $pdo->prepare("SELECT * FROM products WHERE id = ? ");
                                    $rq->execute([$_SESSION['album_id']]);
                                    $res = $rq->fetchall(PDO::FETCH_ASSOC);
                                    $album_name = $res[0]['name'];
                                    $artist_name = $res[0]['artist'];
                                    if (empty($res)) {
                                        echo $user_edit_menu_1;
                                        echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-72 px-5 py-2 text-md text-gray-800 font-medium'>This album does not exist in the database.</p></div>";
                                        echo "<br>";
                                        display_users_aux($pdo);
                                    } else {
                                        $id = $_SESSION['album_id'];
                                        $album = $_POST['album_name'];
                                        $artist = $_POST['artist_name'];
                                        $price = $_POST['price'];
                                        $category_id = $_POST['category_id'];
                                        $picture = $_POST['picture'];
                                        $description = $_POST['description'];

                                        echo $product_edit_menu_1;
                                        $count_modifs = edit_product($pdo, $id, $album, $artist, $price, $category_id, $picture, $description);
                                        if ($count_modifs == 0) {
                                            echo "<div class='flex justify-center'><p class='rounded-lg bg-red-300 w-80 px-5 py-2 text-md text-gray-800 font-medium'>No data was passed. Please fill in the form again in order to modify this album.</p></div>";
                                            echo "<br>";
                                        } 
                                        
                                        display_products_filter_id ($pdo, $_SESSION['album_id']);
                                    }        
                                } 
                                else {
                                    echo '<div class="h-full p-8 md:p-12 lg:px-16 lg:py-24">
                                        <div class="mx-auto max-w-xl text-center">
                                        <h2 class="text-2xl font-bold text-grey-400 md:text-3xl">
                                            Welcome to the admin panel
                                            <br><br>
                                        </h2>
        
                                        <p class="hidden text-grey-300 sm:mt-4 sm:block">
                                            To start managing your database, please select an option from the menu on the left bar 
                                        </p>
        
                                        </div>
                                    </div>';
                                }
                            }    
                        }

                        
                    ?>                    
                    
                </div>
            </section>
            
        </div>
    </div>

    
      
    
    
      
</body>
</html>