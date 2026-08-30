<?php
    require_once(__DIR__."/../app/config/session.inc.php");

    if(!isset($_SESSION["id"])){
        header("Location: login.php");
        exit();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ivory-WoodLand|Dashboard</title>
    <link rel="shortcut icon" href="./assets/logo-round.png" type="image/x-icon">
    
    <!-- font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css" integrity="sha512-ApSLB1Pd3/bZN8fWB/RG9YhN/7bd9Hkf3AGaE2mPfebjrxagjuBtx2GcgdqIlJkUzwylBo61r9Xa9NmgBI0swA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS -->
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/dashboard.css">
</head>
<body>
    <div class="body-area">
        <div class="navbar">
            <div class="navbar-start">
                <button id="sidepanel-btn" class="btn-icon"><i class="fa-solid fa-bars text-2xl"></i></button>
                <img src="./assets/logo-withoutBg.png" alt="">
            </div>

            <div class="navbar-center">
                <a class="text-bold" href="homeFurniture.php">Home</a>
                <a class="text-bold" href="officeFurniture.php">Office</a>
                <a class="text-bold" href="schoolFurniture.php">School</a>
            </div>

            <div class="navbar-end">
                <input class="input " type="text" name="productInput" id="productInput" placeholder="Search Product">
                <div class="dropdown">
                    <button id="profile-btn" class="btn-icon"><i class="fa-solid fa-circle-user text-3xl"></i></button>

                    <div id="dropdown-menu" class="dropdown-menu">
                        <div class="img-name">
                            <i class="fa-solid fa-circle-user"></i>
                            <h6>Saimul Hoque</h6>
                        </div>
                        <hr>
                        <div class="options">
                            <ul>
                                <a href="./profile.php">
                                    <div class="li-content">
                                        <i class="fa-regular fa-circle-user text-gray"></i>
                                        <p class="text-semibold">Profile</p>
                                    </div>
                                    <span>></span>
                                </a>

                                <a href="">
                                    <div class="li-content">
                                        <i class="fa-solid fa-gear text-gray"></i>
                                        <p class="text-semibold">Settings</p>
                                    </div>
                                    <span>></span>
                                </a>

                                <a href="./logout.php">
                                    <div class="li-content">
                                        <i class="fa-solid fa-right-from-bracket text-gray"></i>
                                        <p class="text-semibold">Logout</p>
                                    </div>
                                    <span>></span>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidepanel">
            <h5>Explore Items</h5>
            <hr>
            <ul>
                <a href="">
                    <div>
                        <i class="fa-solid fa-bed"></i>
                        <p class="text-semibold">Single Bed</p>
                    </div>
                    <span><i class="fa-solid fa-angle-right"></i></span>
                </a>
                <a href="">
                    <div>
                        <i class="fa-solid fa-bed"></i>
                        <p class="text-semibold">Double Bed</p>
                    </div>
                   
                    <span><i class="fa-solid fa-angle-right"></i></span>
                </a>
                <a href="">
                    <div>
                        <i class="fa-solid fa-couch"></i>
                        <p class="text-semibold">Single Sofa</p>
                    </div>
                    
                    <span><i class="fa-solid fa-angle-right"></i></span>
                </a>
                <a href="">
                    <div>
                        <i class="fa-solid fa-couch"></i>
                        <p class="text-semibold">Double Sofa</p>
                    </div>
                    
                    <span><i class="fa-solid fa-angle-right"></i></span>
                </a>
                <a href="">
                    <div>
                        <i class="fa-solid fa-chair"></i>
                        <p class="text-semibold">Chair</p>
                    </div>
                    
                    <span><i class="fa-solid fa-angle-right"></i></span>
                </a>
                <a href="">
                    <div>
                        <i class="fa-solid fa-utensils"></i>
                        <p class="text-semibold">Dining Tables</p>
                    </div>
                   
                    <span><i class="fa-solid fa-angle-right"></i></span>
                </a>
                <a href="">
                    <div>
                        <i class="fa-solid fa-mug-hot"></i>
                        <p class="text-semibold"> Coffee Tables</p>
                    </div>
                    
                    <span><i class="fa-solid fa-angle-right"></i></span>
                </a>
                <a href="">
                    <div>
                        <i class="fa-solid fa-book"></i>
                        <p class="text-semibold"> Study Tables</p>
                    </div>
                    
                    <span><i class="fa-solid fa-angle-right"></i></span>
                </a>
                <a href="">
                    <div>
                        <i class="fa-solid fa-lightbulb"></i>
                        <p class="text-semibold">Side Tables</p>
                    </div>
                   
                    <span><i class="fa-solid fa-angle-right"></i></span>
            </ul>
        </div>
        <section class="hero">
            
        </section>
    </div>

    <script src="./js/dashboard.js"></script>
</body>
</html>