<?php
    require_once(__DIR__."/../app/config/session.inc.php");
    require_once(__DIR__."/../app/config/database.inc.php");
    require_once(__DIR__."/../app/controllers/getUser_controller.inc.php");



    if(!isset($_SESSION["id"])){
        header("Location: login.php");
        exit();
    }

    $user = getUserFromModel($pdo, $_SESSION["id"]);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ivory-WoodLand|Profile</title>
    <link rel="shortcut icon" href="./assets/logo-round.png" type="image/x-icon">
    
    <!-- font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css" integrity="sha512-ApSLB1Pd3/bZN8fWB/RG9YhN/7bd9Hkf3AGaE2mPfebjrxagjuBtx2GcgdqIlJkUzwylBo61r9Xa9NmgBI0swA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS -->
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/profile.css">
</head>
<body>
    <div class="navbar">
        <div class="navbar-start">
            <a href="./dashboard.php" class="btn-icon"><i class="fa-solid fa-angle-left text-xl   "></i></a>
            <h3>Profile</h3>
        </div>
    </div>
    <div class="body-area">
       
        <fieldset id="profile-block" class="fieldset">
            <!-- <legend><i class="fa-solid fa-circle-user"></i></legend> -->
            
            <div class="profile-left">
                <div class="info-field">
                    <p><span class="text-bold">Name: </span> <?php echo htmlspecialchars($user["name"]??"") ?> </p>
                    <button id="profile-changeName-btn" class="btn-icon"><i class="fa-solid fa-pen-to-square text-md"></i></button>
                    
                </div>

                <div class="info-field">
                    <p><span class="text-bold">Password: </span>*****</p>
                    <button id="profile-changePassword-btn" class="btn-icon"><i class="fa-solid fa-pen-to-square text-md"></i></button>
                </div>

                <div class="info-field">
                    <p><span class="text-bold">Email: </span>  <?php echo htmlspecialchars($user["email"] ?? "") ?> </p>
                    <!-- <button class="btn-icon"><i class="fa-solid fa-angle-right text-xl"></i></button> -->
                </div>
              
            </div>
            
            <div class="profile-right">
                
                <div class="info-field">
                    <p><span class="text-bold">Mobile: </span>  <?php echo htmlspecialchars($user["mobile"] ?? "") ?> </p>
                    <button id="profile-changeMobile-btn" class="btn-icon"><i class="fa-solid fa-pen-to-square text-md   "></i></button>
                </div>

                <div class="info-field">
                    <p><span class="text-bold">Total purchase amount: </span>  <?php echo htmlspecialchars($user["amount"] ?? "") ?> tk</p>
                    <!-- <button class="btn-icon"><i class="fa-solid fa-angle-right text-xl   "></i></button> -->
                </div>
                <div class="info-field">
                    <p><span class="text-bold">Address: </span>  <?php echo htmlspecialchars($user["address"] ?? "") ?> </p>
                    <button id="profile-changeAddress-btn" class="btn-icon"><i class="fa-solid fa-pen-to-square text-md"></i></button>
                </div>
             
            </div>
            
        </fieldset>

        <fieldset id="edit-password" class="fieldset edit-field">
            <label class="label  text-xl">Current Password: </label>
            <p id="profile-currentPassword-error"></p>
            <input id="profile-currentPassword"  type="password" class="input" placeholder="Enter current password" />

            <label class="label  text-xl">New Password: </label>
            <p id="profile-newPassword-error"></p>
            <input id="profile-newPassword"  type="password" class="input" placeholder="Enter new password" />

            <label class="label  text-xl">Confirm Password: </label>
            <p id="profile-confirmPassword-error"></p>
            <input id="profile-confirmPassword"  type="password" class="input" placeholder="Confirm new password" />

            <div class="btn-container">
                <button id="profile-cancelPassword-btn" class="btn btn-neutral">Cancel</button>
                <button id="profile-savePassword-btn" class="btn btn-primary">Save</button>
            </div>

        </fieldset>

        <fieldset id="edit-name" class="fieldset edit-field">
            <label class="label  text-xl">New Name: </label>
            <p id="profile-editName-error"></p>
            <input id="prfoile-editName"  type="text" class="input" placeholder="Enter new Name" />

            <div class="btn-container">
                <button id="profile-cancelName-btn" class="btn btn-neutral">Cancel</button>
                <button id="profile-saveName-btn" class="btn btn-primary">Save</button>
            </div>

        </fieldset>

        <fieldset id="edit-mobile" class="fieldset edit-field">
            <label class="label  text-xl">New Mobile Number: </label>
            <p id="profile-editMobile-error"></p>
            <input id="prfoile-editMobile"  type="text" class="input" placeholder="Enter new Mobile Number" />

            <div class="btn-container">
                <button id="profile-cancelMobile-btn" class="btn btn-neutral">Cancel</button>
                <button id="profile-saveMobile-btn" class="btn btn-primary">Save</button>
            </div>

        </fieldset>

        <fieldset id="edit-address" class="fieldset edit-field">
            <label class="label  text-xl">New Address: </label>
            <p id="profile-editAddress-error"></p>
            <input id="prfoile-editAddress"  type="text" class="input" placeholder="Enter new address" />

            <div class="btn-container">
                <button id="profile-cancelAddress-btn" class="btn btn-neutral">Cancel</button>
                <button id="profile-saveAddress-btn" class="btn btn-primary">Save</button>
            </div>

        </fieldset>
    </div>

    <script type="module" src="./js/profile.js"></script>
</body>
</html>