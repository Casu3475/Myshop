<?php


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
  
  header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Home page of Vinyl Paradise Music Shop">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Vinyl Paradise - Home</title>
</head>
<body>

<header>

<nav class="hidden lg:block bg-white border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-900">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="index.php" class="flex items-center ">
        <!-- <img src="dist/images/logo/logo-white.png" class="mr-3 w-14 h-14" alt="Vinyl Paradise Logo" /> -->
        <span class="self-center text-4xl font-semibold whitespace-nowrap dark:text-white">Vinyl Paradise</span>
    </a>
    
    <!-- <div class="hidden w-full lg:block md:w-auto" id="navbar-default">
      <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="index.php" class="block py-2 pr-4 pl-3 text-white bg-gray-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
        </li>
        <li>
          <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
        </li>
      </ul>
    </div> -->

    <div>
      <form class="flex items-center" action="results.php" method="get">   
          <label for="simple-search" class="sr-only">Search</label>
          <div class="relative w-full">
              <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
              </div>
              <input type="text" name="q" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
          </div>
          <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
              <span class="sr-only">Search</span>
          </button>
      </form>
    </div>

    <?php
      if (!isset($_COOKIE['id_user'])){
    ?>

    <div>

      <a href="signin.php">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 -ml-1 w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
        </svg>

          Sign in
        </button>
      </a>
      <a href="signup.php">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 -ml-1 w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
        </svg>

          Sign up
        </button>
      </a>
    </div>

    <?php
      } else { 
    ?>

    
    <?php
        session_start(); 
        // echo "<p>Welcome home, ". $_SESSION['user_name'] . "</p>"; 
    ?>
    


    <div>
      
      <a href="cart.php">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
          </svg>
          
        </button>
      </a>
      
      <a href="admin.php">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>          
        </button>
      </a>
      
    </div>
    
    <div class="flow-root">
      <div class="hidden md:block float-left px-3 py-1 text-sm text-gray-100">
        <?php
          // session_start();  // Call to session start in previous php code (that way there is no issue with session variable)
          echo "<p>Welcome, <br> ". $_SESSION['user_name'] . "</p>"; 
        ?>
      </div>
      <a href="user_config_page.php">
          <button class="hidden md:block float-left h-11 w-11 mr-3 rounded-full overflow-hidden border-2 border-gray-500 focus:outline-none focus:border-white">
                <img class = "h-full w-full object-cover" src="dist/images/signup/signup-bg-bruce-springsteen-2.jpeg" alt="User avatar">
          </button>
        </a>
      
      <form method="post" class="hidden md:block float-right w-5 h-5">
                <input type="submit" name="logout" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        value="Logout"/>
      </form>
    </div>
      

    <?php
      }
    ?>

  </div>
</nav>


<nav class="bg-white border-gray-200 px-2 px-4 py-2.5 dark:bg-gray-900 lg:hidden">
  <div class="grid overflow-hidden grid-cols-1 grid-rows-3 gap-2">
    <div class="box">
      <a href="index.php" class="flex items-center ">
          <!-- <img src="dist/images/logo/logo-white.png" class="mr-3 w-14 h-14" alt="Vinyl Paradise Logo" /> -->
          <span class="self-center text-4xl font-semibold whitespace-nowrap dark:text-white">Vinyl Paradise</span>
      </a>
    </div>
    <div class="box">
      <div>
        <form class="flex items-center" action="results.php" method="get">   
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" name="q" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
            </div>
            <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <span class="sr-only">Search</span>
            </button>
        </form>
      </div>
    </div>
    <div class="box">

      <?php
        if (!isset($_COOKIE['id_user'])){
      ?>

      <div>

        <a href="signin.php">
          <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 -ml-1 w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
          </svg>

            Sign in
          </button>
        </a>
        <a href="signup.php">
          <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 -ml-1 w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
          </svg>

            Sign up
          </button>
        </a>
      </div>

      <?php
        } else { 
      ?>

      <div class="flow-root">
        <a href="user_config_page.php">
          <button class="hidden md:block float-left h-11 w-11 mr-3 rounded-full overflow-hidden border-2 border-gray-500 focus:outline-none focus:border-white">
                <img class = "h-full w-full object-cover" src="dist/images/signup/signup-bg-bruce-springsteen-2.jpeg" alt="User avatar">
          </button>
        </a>
        <form method="post" class="float-left w-5 h-5 lg:hidden">
                  <input type="submit" name="logout" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                          value="Logout"/>
        </form>
        <a href="cart.php" class="float-right">
          <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
            </svg>
            
          </button>
        </a>
      </div>
      
      
    

    <?php
      }
    ?>

    </div>
  </div>
</nav>


</header>



<?php
use PDO;

require_once("configs/db_credentials.php");
require_once("functions/connect_to_db.php");
require_once("functions/getCategories.php");
require_once("functions/getCatChildren.php");


    //connexion
    $con = connect_db($host, $username, $userpassword, $port, $db_name); 
    
    //je récupère les id des products pour pouvoir les compter
    //et en déduire le nombre de pages que cela prendra pour les afficher
    //je commence la session en fixant le numéro de page à 1 (ligne 29)
    $req3 = $con->prepare("SELECT id from products");
    $req3->execute();
    $res3 = $req3->fetchall(PDO::FETCH_ASSOC);
    $products = count($res3);
    $pages = intdiv(count($res3),8) + 1;
?>
<!-- Création du container qui aura la partie filtre (1 colonne) et la partie cards (4 colonnes) -->
<div class=" grid grid-cols-5 gap-1 place-items-start mt-4">

    <!-- Création de la partie filtre -->
<div class="hidden sm:block col-start-1 col-span-1 mt-4">
<form  class="relative max-w-xs mw-auto divide-y divide-gray-100 overflow-auto rounded-lg border border-gray-100 bg-white shadow-lg" method="POST" action = "index.php">
  <header class="px-6 py-4" aria-label="Filter Vynil">
    <strong class="text-lg font-medium text-gray-900">
      Add filters 
    </strong>

    <p class="mt-1.5 text-sm text-gray-500">
    use filters to improve your search
    </p>
  </header>

  <div class="px-3">

  <div class="py-2">
        <fieldset>
          <legend class="font-medium text-gray-900 mb-2">Music Categories</legend>

          <?php getCategories(0, $con); ?>
        </fieldset>

      </div>

    <div class="divide-y divide-gray-100">
      <div class="py-4">
        <fieldset>
          <legend class="font-medium text-gray-900">Price</legend>

          <ul class="mt-3 grid grid-cols-1 gap-2">
            <li>
              <label class="flex items-center gap-3">
                <input
                  type="checkbox"
                  name="a"
                  class="h-4 w-4 rounded-md border-gray-200"
                />

                <span class="text-sm font-medium text-gray-700">
                  < $10
                </span>
              </label>
            </li>

            <li>
              <label class="flex items-center gap-3">
                <input
                  type="checkbox"
                  name="b"
                  class="h-4 w-4 rounded-md border-gray-200"
                />

                <span class="text-sm font-medium text-gray-700">
                  between $10 and $20
                </span>
              </label>
            </li>

            <li>
              <label class="flex items-center gap-3">
                <input
                  type="checkbox"
                  name="c"
                  class="h-4 w-4 rounded-md border-gray-200"
                />

                <span class="text-sm font-medium text-gray-700">
                  Between $20 and $30
                </span>
              </label>
            </li>

            <li>
              <label class="flex items-center gap-3">
                <input
                  type="checkbox"
                  name="d"
                  class="h-4 w-4 rounded-md border-gray-200"
                />

                <span class="text-sm font-medium text-gray-700"> > $30 </span>
              </label>
            </li>
          </ul>
        </fieldset>
      </div>
    </div>
  </div>
  <button class="bg-gray hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-600 rounded shadow">
    Apply filters 
  </button>
</form>

</div>

    <?php
// Prise en compte des filtres
    if (!empty($_POST))
    { unset($_GET);
      $filtered_products = [];
      $range = 0;
      // La valeur range va représenter le filtre des prix 
      foreach ($_POST as $k => $n)
      {
        $id = $k;
        if($id == "a") {$range = $range + 1;}
        elseif($id == "b") {$range = $range + 10;}
        elseif($id == "c") {$range = $range + 100;}
        elseif($id == "d") {$range = $range + 1000;}
      }
      // Avec un switch, une requête sql est préparée en tenant compte du filtre des prix
            switch ($range) { 

            case 1:
              $req5 = $con->prepare("SELECT * from products WHERE category_id = ? AND price < 10");
              $affRange = "price < $10";
              break;              
            case 10:
              $req5 = $con->prepare("SELECT * from products WHERE category_id = ? AND price BETWEEN 10 AND 20");
              $affRange = "price between $10 and $20";
              break;  
            case 100:
              $req5 = $con->prepare("SELECT * from products WHERE category_id = ? AND price BETWEEN 20 AND 30");
              $affRange = "price between $20 and $30";
              break;
            case 1000:
              $req5 = $con->prepare("SELECT * from products WHERE category_id = ? AND price > 30");
              $affRange = "price > $30";
              break;              
            case 11:
              $req5 = $con->prepare("SELECT * from products WHERE category_id = ? AND price <= 20");
              $affRange = "price <= $20";
              break;  
            case 101:
              $req5 = $con->prepare("SELECT * from products WHERE category_id = ? AND (price < 10 OR price BETWEEN 20 AND 30)");
              $affRange = "price < $10 or price between $20 and $30";
              break;
            case 1001:
              $req5 = $con->prepare("SELECT * from products WHERE category_id = ? AND (price < 10 OR price > 30 )");
              $affRange = "price < $10 or price > $30";
              break;              
            case 110:
              $req5 = $con->prepare("SELECT * from products WHERE category_id = ? AND price BETWEEN 10 AND 30");
              $affRange = "price between $10 and $30";
              break;  
            case 1010:
              $req5 = $con->prepare("SELECT * from products WHERE category_id = ? AND (price > 30 OR price BETWEEN 10 AND 20 )");
              $affRange = "price > $30 or between $10 and $20";
              break;
            case 1100:
              $req5 = $con->prepare("SELECT * from products WHERE category_id = ? AND price >= 20");
              $affRange = "price >= $20";
              break;              
            case 111:
              $req5 = $con->prepare("SELECT * from products WHERE category_id = ? AND price <= 30");
              $affRange = "price <= $30";
              break;  
            case 1101:
              $req5 = $con->prepare("SELECT * from products WHERE category_id = ? AND (price < 10 OR price >= 20)");
              $affRange = "price < $10 or price >= $20";
              break;
            case 1110:
              $req5 = $con->prepare("SELECT * from products WHERE category_id = ? AND price >= 10");
              $affRange = "price >= $10";
              break;
            default:
              $req5 = $con->prepare("SELECT * from products WHERE category_id = ? ");
            }

            //maintenant on va récupérer les category_id (parents et enfants) des filtres
            $id_filter = [];
            $id_choosen =[]; //ce tableau va servir à l'affichage des catégories choisies par le user
            foreach ($_POST as $k => $n)
            {
              if ($n == "on"){
                $id = $k;
                if (is_int($id)) {array_push($id_choosen, $id);}
              }}

            foreach ($_POST as $k => $n)
            {
              if ($n == "on"){
                $id = $k;
                if (is_int($id)) {
                  array_push($id_filter, $id);
                  $child = [];
                  getCatChildren($id, $child, $con);
                  foreach ($child as $n)
                    {
                      $int = $n;
                      array_push($id_filter, $int);
                    }
                }
              }
            }
              $clean_filter = array_unique($id_filter);
              if (empty($clean_filter)) {
                  $child = [];
                  getCatChildren(0, $child, $con);
                  foreach ($child as $n)
                  {
                    $int = $n;
                    array_push($id_filter, $int);
                  }
                  $clean_filter = array_unique($id_filter);
                }
              
              //Ici, on va lancer les requête sql pour récupérer l'ensemble des products correspondants aux category_id
              foreach ($clean_filter as $cid)
              {
                $req5->execute([$cid]);
                $res5 = $req5->fetchall(PDO::FETCH_ASSOC);
                array_push($filtered_products, $res5);
                $filtered_products = array_filter($filtered_products);
              }
              
              ?>
              <!-- Création de la div container qui contiendra une grille de 8 cards (4 colonnes sur 2 rangées). Elle occupe les colonnes 2 à 5 de la div qui la contient -->
    
              <div class="container col-start-2 col-span-4 mb-2 mr-2 ">
                <div class= "inline-flex">
                  <?php if (strlen($affRange) > 1 ) {?>
                  <strong class="inline-flex items-center gap-2 rounded-full bg-gray-100 px-4 py-2" >
                      <span class="text-xs font-medium text-gray-900"><?php echo $affRange; ?> </span>
                  </strong>
                  <?php }
                  foreach ($id_choosen as $n){
                  $req7 = $con->prepare("SELECT name from categories WHERE id = ? ");
                  $req7->execute([$n]);
                  $res7 = $req7->fetchall(PDO::FETCH_ASSOC);
                  ?>
                  <strong class="inline-flex items-center gap-2 rounded-full bg-gray-100 px-4 py-2" >
                      <span class="text-xs font-medium text-gray-900"><?php echo $res7[0]["name"]; ?> </span>
                  </strong> <?php } ?>
                  <strong class="inline-flex items-center rounded-full border border-gray-500 border-current px-5 py-1.5 text-[10px] uppercase tracking-wide text-gray-800">
                    Reset filters
                    <form action="<?php unset($_POST); ?>index.php">
                    <button class="ml-2.5 -mr-2.5 rounded-full bg-gray-100 p-1 transition-opacity hover:opacity-75 focus:outline-none focus:ring" type="submit">
                      <span class="sr-only"> Close </span>
                        <svg class="h-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" >
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd"/>
                        </svg>
                    </button></form>
                  </strong>
                </div>
              <div class="container grid grid-cols-4 gap-4 grid-rows-2 mr-2">
              <?php
              // On gère l'affichage sur le site
              $products = count($filtered_products[0]);
              $pages = intdiv($products,8) + 1;
              if (isset($_GET["page"]))
              {   
                  // On vérifie que l'utilisateur ne change pas le get dans l'url vers une page non définie
                  if ($_GET["page"] > $pages || $_GET["page"] < 1) { $page = 1;} else {$page = $_GET["page"];} 
          
                  $debut = ($page * 8) - 8;                  
                  foreach ($filtered_products as $item)
                  {  $nmbr = count($item);
                    for ($i = 0; $i < $nmbr; $i++)
                    {
                    $req2 = $con->prepare("SELECT name from categories WHERE id = ? ");
                    $req2->execute([$item[$i]["category_id"]]);
                    $res2 = $req2->fetchall(PDO::FETCH_ASSOC);
                    
                    
                    ?>
          
                          <div class="bg-white p-5 max-w-sm shadow">
                              <a href="detail.php?id=<?php echo $item[$i]["id"];?>">
                              <img src="<?php echo $item[$i]["picture"]; ?>" class = "min-w-full" alt="<?php echo $item[$i]["name"]; ?>"></a>
                              <div class="p-4">
                                  <div class="flex mb-1">
                                      <a href="detail.php?id=<?php echo $item[$i]["id"];?>">
                                      <h3 class="text-l text-gray-900 font-bold">
                                          <?php echo $item[$i]["name"]; ?>
                                      </h3></a>
                                      <p class="ml-auto text-2l font-light text-gray-900">$<?php echo $item[$i]["price"]; ?></p>
                                  </div>
                                  <div class="flex m-1">
                                      <h3 class="text-l font-semibold text-gray-600">
                                      <?php echo $item[$i]["artist"]; ?> <br> 
                                      <form method="POST">
                                    <input type="text" value="on" name=" <?php echo $item[$i]["category_id"];?>" hidden ><button type="submit">
                                    <?php echo $res2[0]["name"]; ?></button></form>
                                      </h3>
                                      <a href="detail.php?id=<?php echo $item[$i]["id"];?>" class="ml-auto mt-4 inline.flex items center justify between">
                                          <img src="dist/images/Cart Button.png" alt="">
                                      </a>
                                  </div>
          
                              </div>
                          </div>
                      <?php
                    }
                  }
              }
              else
              {              
                  foreach ($filtered_products as $item)
                  {  $nmbr = count($item);
              
                    for ($i = 0; $i < $nmbr; $i++)
                    {
                    $req2 = $con->prepare("SELECT name from categories WHERE id = ? ");
                    $req2->execute([$item[$i]["category_id"]]);
                    $res2 = $req2->fetchall(PDO::FETCH_ASSOC);
                    
                    
                    ?>
          
                          <div class="bg-white p-5 max-w-sm shadow">
                              <a href="detail.php?id=<?php echo $item[$i]["id"];?>">
                              <img src="<?php echo $item[$i]["picture"]; ?>" class = "min-w-full" alt="<?php echo $item[$i]["name"]; ?>"></a>
                              <div class="p-4">
                                  <div class="flex mb-1">
                                      <a href="detail.php?id=<?php echo $item[$i]["id"];?>">
                                      <h3 class="text-l text-gray-900 font-bold">
                                          <?php echo $item[$i]["name"]; ?>
                                      </h3></a>
                                      <p class="ml-auto text-2l font-light text-gray-900">$<?php echo $item[$i]["price"]; ?></p>
                                  </div>
                                  <div class="flex m-1">
                                      <h3 class="text-l font-semibold text-gray-600">
                                      <?php echo $item[$i]["artist"]; ?> <br> 
                                      <form method="POST">
                                    <input type="text" value="on" name=" <?php echo $item[$i]["category_id"];?>" hidden ><button type="submit">
                                    <?php echo $res2[0]["name"]; ?></button></form>
                                      </h3>
                                      <a href="detail.php?id=<?php echo $item[$i]["id"];?>" class="ml-auto mt-4 inline.flex items center justify between">
                                          <img src="dist/images/Cart Button.png" alt="">
                                      </a>
                                  </div>
          
                              </div>
                          </div>
                      <?php
                    }
                  }
              }
              ?>
          </div>
        </div>
        </div>
              
          <?php 
            }

    else {
    // à l'aide d'un foreach, je répartis les 12 cartes en fonction de la page choisie. La variable $debut me donne le départ 
    // et j'affiche les 12 qui suivent. $debut est à 0 pour la page1, 12 pour la page 2, 24 pour la page 3, etc...
    // Il y a un if dans le cas où $_GET["page"] est défini, sinon, le else n'affiche que les 12 premiers items comme si c'était la page 1.
      ?>
      <div class="container gap-4 sm:grid grid-cols-2 grid-rows-4 col-start-2 col-span-4 md:grid md:grid-cols-4 gap-4 md:grid-rows-2 col-start-2 col-span-4 mb-2 mr-2">
      <!-- <div class="container col-start-2 col-span-4 grid grid-cols-4 gap-4 grid-rows-2 mb-2 mr-2 "> -->
        <?php
    if (isset($_GET["page"]))
    {   
        // On vérifie que l'utilisateur ne change pas le get dans l'url vers une page non définie
        if ($_GET["page"] > $pages || $_GET["page"] < 1) { $page = 1;} else {$page = $_GET["page"];} 

        $debut = ($page * 8) - 8;
        $req = $con->prepare("SELECT * from products LIMIT $debut, 8");
        $req->execute();
        $res = $req->fetchall(PDO::FETCH_ASSOC);
        
        foreach ($res as $item)
        { 
            $req2 = $con->prepare("SELECT name from categories WHERE id = ? ");
            $req2->execute([$item["category_id"]]);
            $res2 = $req2->fetchall(PDO::FETCH_ASSOC);
            ?>
    
                <div class="bg-white p-5 max-w-sm shadow ">
                    <a href="detail.php?id=<?php echo $item["id"];?>">
                    <img src="<?php echo $item["picture"]; ?>" class = "min-w-full" alt="<?php echo $item["name"]; ?>"></a>
                    <div class="p-4 ">
                        <div class="flex mb-1">
                        <a href="detail.php?id=<?php echo $item["id"];?>">
                            <h3 class="text-l text-gray-900 font-bold">
                                <?php echo $item["name"]; ?>
                            </h3></a>
                            <p class="ml-auto text-2l font-light text-gray-900">$<?php echo $item["price"]; ?></p>
                        </div>
                        <div class="flex m-1">
                            <h3 class="text-l font-semibold text-gray-600">
                            <?php echo $item["artist"]; ?> <br> 
                            <form method="POST" action = "index.php">
                            <input type="text" value="on" name=" <?php echo $item["category_id"];?>" hidden ><button type="submit">
                            <?php echo $res2[0]["name"]; ?></button></form>
                            </h3>
                            <a href="detail.php?id=<?php echo $item["id"];?>" class="ml-auto mt-4 inline.flex items center justify between">
                                <img src="dist/images/Cart Button.png" alt="purchase">
                            </a>
                        </div>

                    </div>
                </div>
            <?php
        }
    }
    else
    {
        $req = $con->prepare("SELECT * from products LIMIT 8");
        $req->execute();
        $res = $req->fetchall(PDO::FETCH_ASSOC);
        
        foreach ($res as $item)
        { 
            $req2 = $con->prepare("SELECT name from categories WHERE id = ? ");
            $req2->execute([$item["category_id"]]);
            $res2 = $req2->fetchall(PDO::FETCH_ASSOC);
            ?>

                <div class="bg-white p-5 max-w-sm shadow">
                    <a href="detail.php?id=<?php echo $item["id"];?>">
                    <img src="<?php echo $item["picture"]; ?>" class = "min-w-full" alt="<?php echo $item["name"]; ?>"></a>
                    <div class="p-4">
                        <div class="flex mb-1">
                            <a href="detail.php?id=<?php echo $item["id"];?>">
                            <h3 class="text-l text-gray-900 font-bold">
                                <?php echo $item["name"]; ?>
                            </h3></a>
                            <p class="ml-auto text-2l font-light text-gray-900">$<?php echo $item["price"]; ?></p>
                        </div>
                        <div class="flex m-1">
                            <h3 class="text-l font-semibold text-gray-600">
                            <?php echo $item["artist"]; ?> <br> 
                            <form method="POST" action = "index.php">
                            <input type="text" value="on" name=" <?php echo $item["category_id"];?>" hidden ><button type="submit">
                            <?php echo $res2[0]["name"]; ?></button></form> 
                            </h3>
                            <a href="detail.php?id=<?php echo $item["id"];?>" class="ml-auto mt-4 inline.flex items center justify between">
                                <img src="dist/images/Cart Button.png" alt="">
                            </a>
                        </div>

                    </div>
                </div>
            <?php
        }
    }
  
?>
</div>
</div>
    <!-- Pour le navbar, j'utilise un for qui va créer un numéro de page par page nécessaire (le compte du nombre de page 
    nécessaire a été fait à la ligne 27). Les boutons "précédent" et "suivant" ont un code php à part qui tient compte de $_GET.
    Le clic sur une page va afficher la page dans l'url qui ensuite récupéré par $_GET au niveau de la ligne 40-->
<div class=" grid grid-col-1 place-content-center mx-auto">
    <nav aria-label="Pagination" >
  <ul class="inline-flex items-center -space-x-px">

    <li>
      <a href="?page=<?php if (!isset($_GET["page"]) || $_GET["page"] <= 1) {echo "1";} else {$p = $_GET["page"] - 1; echo $p;}?>" class="block py-2 px-2 md:px-10 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
        <span class="sr-only">Previous</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
      </a>
    </li>

    <?php
    if ($pages < 5){
    for ($i = 1; $i <= $pages; $i++)
    { ?>

    <li>
      <a href="?page=<?php echo $i; ?>" class="py-2 px-4 md:px-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><?php echo $i; ?></a>
    <?php }}
    // au-dessus (if), le cas où le nombre de pages <=5 et en-dessous (else) le cas où le nombre de pages >= 5
    else {
        for ($i = 1; $i <= 3; $i++)
    { ?>

    <li>
      <a href="?page=<?php echo $i; ?>" class="py-2 px-4 md:px-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><?php echo $i; ?></a>
    <?php }
    ?> <li>
        <a class="py-2 px-6 md:px-16 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
    </li>
    <?php
    for ($i = ($pages - 1); $i <= $pages; $i++)
    { ?>

    <li>
      <a href="?page=<?php echo $i; ?>" class="py-2 px-4 md:px-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><?php echo $i; ?></a>
    <?php }
    }
    ?>
    <li>
      <a href="?page=<?php if ( $_GET["page"] >= $pages) {echo $pages;} elseif (!isset($_GET["page"])){echo "2";} else {$p = $_GET["page"] + 1; echo $p;}?>" class="block py-2 px-2 md:px-10 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
        <span class="sr-only">Next</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
      </a>
    </li>
  </ul>
</nav>
</div>
<?php } ?>
</body>
</html>