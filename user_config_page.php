<?php
require_once("configs/db_credentials.php");
require_once("functions/connect_to_db.php");
require_once("functions/user_config_functions.php");
require_once("components/user_config_menus.php");

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
          echo "<p>Welcome, <br> ". $_SESSION['user_name'] . "</p>"; 
        ?>
      </div>
      <button class="float-left h-11 w-11 mr-3 rounded-full overflow-hidden border-2 border-gray-500 focus:outline-none focus:border-white">
            <img class = "h-full w-full object-cover" src="dist/images/signup/signup-bg-bruce-springsteen-2.jpeg" alt="User avatar">
      </button>
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

                    <span class="ml-3 text-sm font-medium"> User </span>
                </button>
                <form method="post" class="flex flex-col space-y-1 ml-7">
                    <button
                        name="username"
                        type="submit"
                        formmethod="post"
                        class="flex items-center rounded-lg px-4 py-2 text-gray-700 hover:bg-gray-100"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>


                        <span class="ml-3 text-sm font-medium"> Edit username </span>
                    </button>
                </form>
                <form method="post" class="flex flex-col space-y-1 ml-7">
                    <button
                        name="password"
                        type="submit"
                        formmethod="post"
                        class="flex items-center rounded-lg px-4 py-2 text-gray-700 hover:bg-gray-100"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                    </svg>


                        <span class="ml-3 text-sm font-medium"> Edit password </span>
                    </button>
                </form>
                <form method="post" class="flex flex-col space-y-1 ml-7">
                    <button
                        name="email"
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
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                        />
                        </svg>

                        <span class="ml-3 text-sm font-medium"> &nbspEdit email </span>
                    </button>
                </form>
                <form method="post" class="flex flex-col space-y-1 ml-7">
                    <button
                        name="history"
                        type="submit"
                        formmethod="post"
                        class="flex items-center rounded-lg px-4 py-2 text-gray-700 hover:bg-gray-100"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>


                        <span class="ml-3 text-sm font-medium"> History </span>
                    </button>
                </form>
                
                
               

        </div>
        <div class="box col-start-2 col-end-5 h-screen">

            <section class="h-4/6">
                <div class=" px-4 py-3 overflow-scroll sm:px-6 lg:px-8">
                    
                    <?php
                        if (isset($_POST['username'])){
                            echo $user_edit_menu;
                        } elseif (isset($_POST['password'])) {
                            echo $password_edit_menu;
                        } elseif (isset($_POST['email'])) {
                            echo $email_edit_menu;
                        } elseif (isset($_POST['avatar'])) {
                            echo $avatar_edit_menu;
                            require_once("upload.php");
                        } elseif (isset($_POST['history'])) {
                            require_once("history.php");
                        } 
                        else {
                            if (isset($_POST['name_edit'])) {
                                echo $user_edit_menu;
                                edit_username($_SESSION['user_name'], $_POST['username_to_edit'], $pdo);
                            } elseif (isset($_POST['password_edit'])) {
                                echo $password_edit_menu;
                                edit_password($_SESSION['user_name'], $_POST['password_to_edit'], $_POST['password_confirmation'], $pdo);
                            } elseif (isset($_POST['email_edit'])) {
                                echo $email_edit_menu;
                                edit_email($_SESSION['user_name'], $_POST['email_to_edit'], $_POST['email_confirmation'], $pdo);
                            }
                      
                        }

                        
                    ?>                    
                    
                </div>
            </section>
            
        </div>
    </div>

    
      
    
    
      
</body>
</html>