<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Album detailled</title>
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
require_once("configs/db_credentials.php");
require_once("functions/connect_to_db.php");
$pdo = connect_db($host,$username,$userpassword,$port,$db_name);

// $cd = $pdo->query('SELECT name, CONCAT(name," ",price," ", artist, "", description, " ") AS concatenation FROM products ORDER BY id DESC');

$cd = $pdo->query('SELECT id, CONCAT(name," ",price," ", artist, "", description, " ") AS concatenation FROM products ORDER BY id DESC');

if(isset($_GET['q']) AND !empty($_GET['q'])){    
  $q = htmlspecialchars($_GET['q']);
  // $cd = $pdo->query('SELECT name, CONCAT(name," ",price," ", artist, " ", description, " ") AS concatenation  FROM products WHERE name LIKE "%'.$q.'%" ORDER BY id DESC');

  $cd = $pdo->query('SELECT id, CONCAT(name," ",price," ", artist, " ", description, " ", picture) AS concatenation  FROM products WHERE name LIKE "%'.$q.'%" ORDER BY id DESC');

  $q_array = explode(' ', $q);      // sépare une chaîne de caractères et retourne un tableau
                                    // tous les éléments séparés par le ' ' vont être mis dans le tableau
                                    // permet de faire des recherches plus vastes

                                    // retourne le nombre de colonnes relatives au dernier DELETE, INSERT...

                                   

  if($cd->rowCount() ==0) {                    
      $cd = $pdo->query('SELECT id, CONCAT(name," ",price," ", artist, " ", description, " ", picture) AS concatenation FROM products WHERE CONCAT(name, price, artist, picture) LIKE "%'.$q.'%" ORDER BY id DESC');  
 
      // $cd = $pdo->query('SELECT name, CONCAT(name," ",price," ", artist, " ", description, " ", picture) AS concatenation FROM products WHERE CONCAT(name, price, artist, picture) LIKE "%'.$q.'%" ORDER BY id DESC');  
                                                // s'il n'y a pas de résultat de requête, alors plus poussée
  }

    $req4 = $pdo->prepare('SELECT id from categories WHERE name LIKE "%'.$q.'%"');
    $req4->execute();
    $res4 = $req4->fetchall(PDO::FETCH_ASSOC);

    $req3 = $pdo->prepare("SELECT id from products WHERE category_id = ? ");
    $req3->execute([$res4[0]["id"]]);
    $res3 = $req3->fetchall(PDO::FETCH_ASSOC);
    $a=$cd->fetchall();
    $filters_products = [];
    foreach ($res3 as $n) {array_push($filters_products, $n['id']);}
    foreach ($a as $n) {array_push($filters_products, $n['id']);}
    $clean = array_unique($filters_products);
    if ((count($clean)) == 1) {$p = " product";} else {$p = " products";}
?>
<form class="space-y-4 lg:pt-8 mx-auto max-w-4xl place-content-center " method="POST" >
              <div>
                <p class="text-xl font-bold">We have found <b><?php echo count($clean); echo $p;?></b> matching your search</p>
              </div>
              <label for="quantity" class="a-native-dropdown">Adjust your search:</label>
              <select name="search" autocomplete="off" id="search" tabindex="0" data-action="a-dropdown-select" class="a-native-dropdown a-declarative">     
                <option value="1" selected=""> alphabetic order </option>       
                <option value="2"> reverse alphabetical order </option>       
                <option value="3"> Price low to high </option>       
                <option value="4"> Price high to low </option> 
                <option value="5"> Most viewed </option></select>

              <button
                type="submit"
                class="rounded bg-gray-300 px-6 py-3 text-sm font-bold uppercase tracking-wide text-white"
              >                
              </button>          
            </form>
<?php

if (!empty($clean)){
    switch ($_POST["search"])
    {
      case 1:
        $req = $pdo->prepare("SELECT * from products ORDER BY name");
        $req->execute();
        $res = $req->fetchall(PDO::FETCH_ASSOC);
        break;

      case 2:
        $req = $pdo->prepare("SELECT * from products ORDER BY name DESC");
        $req->execute();
        $res = $req->fetchall(PDO::FETCH_ASSOC);
        break;

      case 3:
        $req = $pdo->prepare("SELECT * from products ORDER BY price");
        $req->execute();
        $res = $req->fetchall(PDO::FETCH_ASSOC);
        break;

      case 4:
        $req = $pdo->prepare("SELECT * from products ORDER BY price DESC");
        $req->execute();
        $res = $req->fetchall(PDO::FETCH_ASSOC);
        break;

      case 5:
        $req = $pdo->prepare("SELECT * from products ORDER BY visit");
        $req->execute();
        $res = $req->fetchall(PDO::FETCH_ASSOC);
        break;

      default:
        $req = $pdo->prepare("SELECT * from products ORDER BY name");
        $req->execute();
        $res = $req->fetchall(PDO::FETCH_ASSOC);
    }
  foreach ($res as $n)
  {
    foreach ($clean as $id)
    {
      if ($id == $n["id"])
      {
        ?>
  
        <section>
              <div class="relative mx-auto max-w-7xl place-content-center px-4 py-8">
                <div>
                  <h1 class="text-2xl font-bold lg:text-3xl"><?php echo $n["name"]; ?></h1>
        
                  <p class="mt-1 text-medium text-gray-800"><?php echo $n["artist"]; ?></p>
                </div>
        
                <div class="grid gap-8 lg:grid-cols-6 lg:items-center place-content-center">
                  <div class="lg:col-span-3">
                    <div class="relative mt-4">
                      <img
                        alt="Album cover"
                        src="<?php echo $n["picture"]; ?>"
                        class="h-72 w-auto rounded-xl place-content-center lg:h-[540px]"
                      />
                    </div>
        
                  </div>
        
                  <div class="mx-auto max-w-5xl lg:col-span-3 content-center">
                  <div class="">
                    <div
                      class="w-auto"
                    >
                      <p class="text-justify">
                      <?php echo $n["description"]; ?><br><br>
                      </p>
                        <?php
                            $req2 = $pdo->prepare("SELECT name from categories WHERE id = ? ");
                            $req2->execute([$n["category_id"]]);
                            $res2 = $req2->fetchall(PDO::FETCH_ASSOC);
                        ?>
                        <form method="POST" action="index2.php" >                 
                          <input type="text" value="on" name="<?php echo $n["category_id"];?>" hidden><button type="submit" class="font-bold">
                            <?php echo $res2[0]["name"]; ?></button></form>
                        
                    </div>
                  </div>
                  <form class="space-y-4 lg:pt-8" action="cart.php" >
                    <div>
                      <p class="text-xl font-bold">$<?php echo $res[0]["price"]; ?></p>
                    </div>
                    <label for="quantity" class="a-native-dropdown">Quantity :</label>
                    <select name="<?php echo $res[0]["id"]; ?>" autocomplete="off" id="quantity" tabindex="0" data-action="a-dropdown-select" class="a-native-dropdown a-declarative">     
                      <option value="1" selected="">1 </option>       
                      <option value="2">2 </option>       
                      <option value="3">3 </option>       
                      <option value="4">4 </option> </select>

                    <button
                      type="submit"
                      class="w-full rounded-lg border-2 bg-green-300 px-6 py-3 text-lg font-bold tracking-wide text-gray-800 hover:text-white hover:bg-green-900"
                    >
                      Add to Basket
                    </button>          
                  </form>
        
                    <form class="space-y-4 lg:pt-8" value="Retour" onclick="history.go(-1)">
                    <button
                  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-500 dark:hover:bg-blue-700 dark:focus:ring-blue-800 shadow-xl"
                  type="submit"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 -ml-1 w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                  </svg>
                  Return to shop
                </button>
                    </form>
                  </div>
        
                </div>
              </div>
        
        
              
            </section>
        
        <?php
      }
    }
   }
  }

else { 
    ?>
    <section class="rounded-3xl item-center shadow-2xl max-w-lg">
    <div class="p-8 text-center sm:p-12">
      <p class="text-sm font-semibold uppercase tracking-widest text-pink-500">
      
      </p>
  
      <h2 class="mt-6 text-3xl font-bold">
      Sorry, no result found for : <?= $q ?>...
      </h2>
  
      <button
                  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-500 dark:hover:bg-blue-700 dark:focus:ring-blue-800 shadow-xl"
                  type="submit"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 -ml-1 w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                  </svg>
                  Return to shop
                </button>
    </div>
  </section>
<?php 
}
}
else { 
  ?>
      <section class="rounded-3xl item-center shadow-2xl max-w-lg">
    <div class="p-8 text-center sm:p-12">
      <p class="text-sm font-semibold uppercase tracking-widest text-pink-500">
      
      </p>
  
      <h2 class="mt-6 text-3xl font-bold">
      Sorry, you did not enter any words for your search...
      </h2>
  
      <button
                  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-500 dark:hover:bg-blue-700 dark:focus:ring-blue-800 shadow-xl"
                  type="submit"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 -ml-1 w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                  </svg>
                  Return to shop
                </button>
    </div>
  </section>
<?php 
}


