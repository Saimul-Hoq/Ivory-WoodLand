<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ivory-WoodLand|login</title>
    <link rel="shortcut icon" href="./assets/logo-round.png" type="image/x-icon">
    
    <!-- font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css" integrity="sha512-ApSLB1Pd3/bZN8fWB/RG9YhN/7bd9Hkf3AGaE2mPfebjrxagjuBtx2GcgdqIlJkUzwylBo61r9Xa9NmgBI0swA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS -->
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/signup.css">
</head>
<body>
    <div class="body-area">
        <div class="card">
            <div class="card-start">
                <img src="./assets/logo-mobile_wb.png" alt="">
            </div>
            <div class="card-end">
                <h1 class="text-center font">Register your account — <br>your woodland begins here.</h1>
                <fieldset>
                    <div class="fieldset-container">
                    <div class="left">
                        <label class="label text-xl">Name: </label> <br>
                        <p id="signup-name-error"></p>
                        <input id="signup-name" type="text" class="input" placeholder="Enter your name" />
                        <label class="label text-xl">Email: </label> <br>
                        <p id="signup-email-error"></p>
                        <input id="signup-email" type="text" class="input" placeholder="Enter your email" />
                        <label class="label text-xl">Password: </label> <br>
                        <p id="signup-password-error"></p>
                        <input id="signup-password" type="password" class="input" placeholder="Enter your password" />

                        
                        <a href="./login.php"><button id="signup-back-btn" class="btn btn-neutral text-xl">Back</button></a>
                        
                        <!-- <p class="text-center">Don't have an account? <a href="./signup.php">signup</a> </p> -->
                    </div>

                    <div class="right">
                        <label class="label text-xl">Phone Number: </label> <br>
                        <p id="signup-phone-error"></p>
                        <input id="signup-phone" type="text" class="input" placeholder="01XXXXXXXXX" />
                        <label class="label text-xl">Avatar: </label> <br>
                        <p id="signup-photo-error"></p>
                        <input id="signup-photo" type="text" accept="image/*" class="input" placeholder="Enter your profile photo" />
                        <label class="label text-xl">Address: </label> <br>
                        <p id="signup-address-error"></p>
                        <input id="signup-address" type="text" class="input" placeholder="Enter your address" />

                       

                        <button id="signup-register-btn" class="btn btn-primary text-xl">Register</button>
                        <!-- <p class="text-center">Don't have an account? <a href="./signup.php">signup</a> </p> -->
                    </div>
                    </div>
                    
               
                </fieldset>
            </div>
        </div>
    </div>
</body>
</html>