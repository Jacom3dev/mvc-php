<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>MVC</title>
</head>
<body>
    <!-- logo -->
    <div class="container-fluid">
        <h3 class="text-center py-3">LOGO</h3>
    </div>

    <!-- nav -->

    <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">
                <?php if(isset($_GET["page"])) :?>

                    <?php if($_GET["page"] == "register") :?>
                        <li class="nav-item">
                            <a href="index.php?page=register" class="nav-link active">Registro</a>
                        </li>
                    <?php else:?>
                        <li class="nav-item">
                            <a href="index.php?page=register" class="nav-link">Registro</a>
                        </li>
                    <?php endif?>

                    <?php if($_GET["page"] == "login") :?>
                        <li class="nav-item">
                            <a href="index.php?page=login" class="nav-link active">Ingreso</a>
                        </li>
                    <?php else:?>
                        <li class="nav-item">
                            <a href="index.php?page=login" class="nav-link">Ingreso</a>
                        </li>
                    <?php endif?>

                    <?php if($_GET["page"] == "home") :?>
                        <li class="nav-item">
                            <a href="index.php?page=home" class="nav-link active">Inicio</a>
                        </li>
                    <?php else:?>
                        <li class="nav-item">
                            <a href="index.php?page=home" class="nav-link">Inicio</a>
                        </li>
                    <?php endif?>
                    
                    <?php if(isset($_SESSION["validate"]) && $_SESSION["validate"] == "ok"):?>
                        <li class="nav-item">
                            <a href="index.php?page=logout" class="nav-link">salir</a>
                        </li>
                    <?php endif?>
                    

                <?php else: ?>
                    <li class="nav-item">
                        <a href="index.php?page=register" class="nav-link">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=login" class="nav-link">Ingreso</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=home" class="nav-link">Inicio</a>
                    </li>
                    <?php if(isset($_SESSION["validate"]) && $_SESSION["validate"] == "ok"):?>
                        <li class="nav-item">
                            <a href="index.php?page=logout" class="nav-link">salir</a>
                        </li>
                    <?php endif?>
                <?php endif?>
            </ul>
        </div>
    </div>


   <div class="container-fluid">
        <div class="container py-5">
            <?php 
                if (isset($_GET["page"])) {
                    if ($_GET["page"]=="register" || $_GET["page"] == "login"|| $_GET["page"] == "home" || $_GET["page"] == "logout") {      
                        include "components/$_GET[page].php";
                    }else {
                        include "components/error404.php";
                    }
                }else {
                    include "components/register.php";
                }
            ?>
        </div>
   </div>

</body>
</html>