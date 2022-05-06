<?php




function get_header($page_name)
{
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>' . $page_name . '</title>
        <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
        <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"/>
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <link rel="stylesheet" href="CSS/style.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
      </head>
      <body>
      <header>
      <nav class="ss_nav navbar navbar-expand-lg navbar-dark">
      <div class="col-10 container-fluid p-0">
      <a href="#" class="text-decoration-none text-dark fs-1">Electronic Shop</a>
      <div>
      <ul class="list-unstyled d-md-flex d-none align-items-center fs-4">
      <li><a class="text-decoration-none text-dark px-3" href="index.php">Home</a></li>
      <li><a class="text-decoration-none text-dark px-3" href="shop.php">Shop</a></li>
      <li><a class="text-decoration-none text-dark px-3" href="about.php">About</a></li>
      <li><a class="text-decoration-none text-dark px-3" href="contact.php">Contact</a></li>
      <li><a class="text-decoration-none text-dark px-3" href="cart.php">Cart</a></li>
      </ul>
            </div>
            <div class="fs-4 d-md-flex d-none ">
                <a href="#"><i class="fas fa-search text-decoration-none text-dark px-3"></i> </a>
                <a href="#"><i class="far fa-heart text-decoration-none text-dark px-3"></i></i> </a>
                <div class="dropdown">
                    <div class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <a href="login/login.php"><i class="fas fa-user text-decoration-none text-dark px-3 fs-4"></i> </a>
                        </div>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="login/login.php">Log In </a></li>
                    <li><a class="dropdown-item" href="login/logout.php">Log Out</a></li>
                    </ul>
                </div>
            </div>
            
            
            <div class="ss_collapse_bar pe-2 d-md-none text-info d-block" onclick="coll()">
            <i class="fas fa-bars"></i>
            </div>
            </div>
            </nav>
            </header>
            <div>
            <ul class="ss_collapse list-unstyled d-flex flex-column text-dark align-items-center" >
            <a href="#" onclick="coll_end()"><i class="ss_collapse_end fas fa-times text-danger"></i></a>
            <li><a class="text-decoration-none px-3" href="index.php">Home</a></li>
            <li><a class="text-decoration-none px-3" href="shop.php">Shop</a></li>
            <li><a class="text-decoration-none px-3" href="about.php">About</a></li>
            <li><a class="text-decoration-none px-3" href="contact.php">Contact</a></li>
            <li><a class="text-decoration-none px-3" href="cart.php">Cart</a></li>
            </ul>
            </div>';
}

?>
