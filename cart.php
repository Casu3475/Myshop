<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Basket page of Vinyl Paradise Music Shop">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Vinyl Paradise - My Basket</title>
</head>
<body>

<?php
require_once("configs/db_credentials.php");
require_once("functions/connect_to_db.php");
require_once("functions/cart_functions.php");

$pdo = connect_db($host, $username, $userpassword, $port, $db_name);
//On définit ici quelle table cart sera utlisé en fonction du user connecté
if (isset($_COOKIE["id_user"]))
    {
        $id = $_COOKIE["id_user"];

    }
    else
    {
        $id= 0;
    }

    $cart = "carts";

if (isset($_GET))
{
        foreach ($_GET as $k => $n)
        {
            $req = $pdo->prepare("SELECT * from $cart WHERE product_id = ? AND user_id = ?");
            $req->execute([$k, $id]);
            $res = $req->fetchall(PDO::FETCH_ASSOC);
            if (empty($res))
            {
                $req2 = $pdo->prepare("INSERT INTO $cart VALUES ($id, $k, $n)");
                $req2->execute();
            }
            else
            {
                $new = $n + $res[0]["quantity"];
                $req3 = $pdo->prepare("UPDATE $cart SET quantity = ? WHERE product_id = $k AND user_id = ?");
                $req3->execute([$new, $id]);
            }
        }
    }   
?>

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
      
      <a href="index.php">
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="-mx-2 w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
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
        <a href="index.php" class="float-right">
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="-mx-1 w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
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


<section>
  <h1 class="sr-only">Checkout</h1>

  <div class="relative mx-auto max-w-screen-2xl">
    <div class="grid grid-cols-1 md:grid-cols-2">
      <div class="bg-gray-100 py-12 md:py-24 shadow-lg">
        <div class="mx-auto max-w-lg px-4 lg:px-8">
          <div class="flex items-center">
            <!-- <span class="h-10 w-10 rounded-full bg-blue-900"></span> -->
            <a href="user_config_page.php">
          <button class="hidden md:block float-left h-11 w-11 mr-3 rounded-full overflow-hidden border-2 border-gray-500 focus:outline-none focus:border-white">
                <img class = "h-full w-full object-cover" src="dist/images/signup/signup-bg-bruce-springsteen-2.jpeg" alt="User avatar">
          </button>
        </a>
            
            <?php
              echo '<h2 class="ml-2 font-medium">'.$_SESSION['user_name'].'</h2>';
            ?>

          </div>

          <div class="mt-8">
            <p class="text-2xl font-medium tracking-tight">$<?php echo total($pdo, $cart);?></p>
            <p class="mt-1 text-sm text-gray-500">For the purchase of</p>
          </div>

          <div class="mt-12">
            <div class="flow-root">
              <ul class="-my-4 divide-y divide-gray-200">
                <?php
                $req = $pdo->prepare("SELECT * from $cart WHERE user_id = ? ");
                $req->execute([$id]);
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
                            <div>
                            <form action="delete.php" method="POST">
                                <input name="product_id" value="<?php echo $res2[0]["id"];?>" type="hidden">                      
                              <button><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-2 mr-2 -ml-1 w-5 h-5">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                      </svg>
                              </button>
                            
                          </form></div>
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

      <div class="bg-white py-12 md:py-24 object-center">
        <div class="mx-auto max-w-lg px-4 lg:px-8">
          <form class="grid grid-cols-6 gap-4"action="purchase.php" method="POST">
             <input type="hidden" name="table" value="<?php echo $cart;?>" >        
            <div class="col-span-6">
              <button
                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 shadow-xl"
                type="submit"
              >
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 -ml-1 w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
              </svg>
                Buy Now
              </button>
            </div>
          </form>
        </div>
        <div class="mx-auto max-w-lg px-4 lg:px-8 my-5">
          <form class="grid grid-cols-6 gap-4" action="deleteall.php"method="POST">
            <div class="col-span-6">
              <button
                class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 shadow-xl"
                type="submit"
              >
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 -ml-1 w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
              </svg>
              Empty Basket
              </button>
            </div>
          </form>    
        </div>
        <div class="mx-auto max-w-lg px-4 lg:px-8 my-5">
          <a class="grid grid-cols-6 gap-4" href="index.php">
            
            <div class="col-span-6">
              <button
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 shadow-xl"
                type="submit"
              >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 -ml-1 w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                Return to shop
              </button>
            </div>
          </a>  
        </div>

      </div>
    </div>
  </div>
</section>

</body>
</html>