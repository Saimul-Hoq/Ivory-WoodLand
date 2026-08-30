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
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div class="body-area">
        <div class="card">
            <div class="card-start">
                <img src="./assets/logo-mobile_wb.png" alt="">
            </div>
            <div class="card-end">
                <h1 class="text-center font">Welcome To The <br> Land Of WOODS</h1>
                <fieldset>
                <label class="label text-xl">Email: </label>
                <p id="login-email-error"></p>
                <input id="login-email" type="text" class="input" placeholder="Enter your email" />

                <label class="label  text-xl">Password: </label>
                <p id="login-password-error"></p>
                <input id="login-password"  type="password" class="input" placeholder="Enter your password" />

                <button id="login-btn" class="btn btn-primary text-xl">Login</button>
                <p class="text-center">Don't have an account? <a href="./signup.php">signup</a> </p>
                </fieldset>
            </div>
        </div>
    </div>
    <script type="module" src="./js/login.js"></script>
</body>
</html>