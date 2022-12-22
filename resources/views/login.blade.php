<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <script src="https://kit.fontawesome.com/0b5cba3b4d.js" crossorigin="anonymous"></script>

        
    </head>

    <body>
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    <form action="/loginuser" method="post">
                        @csrf
                        <h2 class="title">Sign In</h2>
                        <div class="input-field">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                            <input type="text" name="no_telpon" placeholder="No-Telpon">
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <input type="submit" value="Login" class="btn solid">
                    </form>
                </div>
            </div>
            <div class="panels-container">
                <div class="panel left-panel">
                    <img src="img/login.svg" class="image" alt="">
                </div>
            </div>
        </div>
        <script src="js/login.js"></script>
    </body>
</html>
 