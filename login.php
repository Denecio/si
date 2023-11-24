<!DOCTYPE html>
<html lang = "pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tapes inc</title>
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <main class ="principal">
        <h1 class="login-title"> TAPES INC </h1>
        <div class="login">
            <h2 class="login-login"> LOGIN </h2>
            <form action="./scripts/login.php" method="post" class="login-form">
                <label for="username" class="login-info"> Username
                    <input type="text" name="username" placeholder="Username" class="login-input">
                </label>
                <label for="password" class="login-info"> Password
                    <input type="password" name="password" placeholder="Password" class="login-input">
                </label>
                <!-- <label for="admin" class="login-info login-admin"> Admin
                    <div class="checkbox">
                        <input type="checkbox" name="admin" class="login-input">
                        <span class="custom-checkbox"></span>
                    </div>
                </label> -->
                <button type="submit" class="button"> LOGIN </button>
                <p class="change-loginregister"> Don't have an account? <a href="register.php" class="clickhere"> Click here </a> </p>
            </form>
        </div>
    </main>
</body>