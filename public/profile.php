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
                    <p><span class="text-bold">Name: </span>Saimul Hoque</p>
                    <button id="profile-changeName-btn" class="btn-icon"><i class="fa-solid fa-pen-to-square text-md"></i></button>
                    
                </div>

                <div class="info-field">
                    <p><span class="text-bold">Password: </span>*****</p>
                    <button id="profile-changePassword-btn" class="btn-icon"><i class="fa-solid fa-pen-to-square text-md"></i></button>
                </div>

                <div class="info-field">
                    <p><span class="text-bold">Email: </span>saimulhoque2000@gmail.com</p>
                    <!-- <button class="btn-icon"><i class="fa-solid fa-angle-right text-xl"></i></button> -->
                </div>
              
            </div>
            
            <div class="profile-right">
                
                <div class="info-field">
                    <p><span class="text-bold">Mobile: </span>01717171717</p>
                    <button id="profile-changeMobile-btn" class="btn-icon"><i class="fa-solid fa-pen-to-square text-md   "></i></button>
                </div>

                <div class="info-field">
                    <p><span class="text-bold">Total purchase amount: </span>0 tk</p>
                    <!-- <button class="btn-icon"><i class="fa-solid fa-angle-right text-xl   "></i></button> -->
                </div>
                <div class="info-field">
                    <p><span class="text-bold">Address: </span>House-1(Shefaly Garden), Road-4, Kallyanpur, Dhaka</p>
                    <button id="profile-changeAddress-btn" class="btn-icon"><i class="fa-solid fa-pen-to-square text-md"></i></button>
                </div>
             
            </div>
            
        </fieldset>

        <fieldset id="edit-password" class="fieldset edit-field">
            <label class="label  text-xl">New Password: </label>
            <p id="login-password-error"></p>
            <input id="login-password"  type="password" class="input" placeholder="Enter new password" />

            <label class="label  text-xl">Confirm Password: </label>
            <p id="login-password-error"></p>
            <input id="login-password"  type="password" class="input" placeholder="Confirm your password" />

            <div class="btn-container">
                <button id="profile-cancelPass-btn" class="btn btn-neutral">Cancel</button>
                <button id="profile-savePass-btn" class="btn btn-primary">Save</button>
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

    <script src="./js/profile.js"></script>
</body>
</html>