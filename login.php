<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\login.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web\css\all.css" />
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=Kaushan+Script&family=Montserrat&family=Roboto:ital@1&display=swap&family=Montserrat:wght@100;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
</head>
<body>

    <div class="container" style="background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)),url('asset/img/bg.jpg');background-size: cover;">
        <span class="logo"><i>Pesonaindo</i></span>

        <div class="content-login">

            <div class="logo-pesona">
                <span><i>Pesonaindo</i></span>
            </div>

            <div class="log-area">
                <span class="arrow">
                    <a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#000000}</style><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg></a></span>
                <div class="log-title">
                    <span>Login</span>
                </div>
                <div class="input-area">
                    <div class="user">
                        <label for="username" class="label-user">Username</label>
                        <input type="text" placeholder="Enter a username" id="username" autocomplete="off">
                    </div>
                    <div class="pass">
                        <label for="password" class="label-pass">Password</label>
                        <input type="password" placeholder="Enter a Password" id="password">
                    </div>
                </div>
                <div class="btn-area">
                    <button class="login" onclick="login()">
                        <span class="log">Login</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="script js\script.js">
        login()
    </script>
</body>
</html>