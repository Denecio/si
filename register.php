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
            <h2 class="login-login"> REGISTER </h2>
            <form action="./scripts/register.php" method="post" class="login-form">
                <label for="username" class="login-info"> Username
                    <input type="text" name="username" placeholder="Username" class="login-input">
                </label>
                <label for="password" class="login-info"> Password
                    <input type="password" name="password" placeholder="Password" class="login-input">
                </label>
                <label for="email" class="login-info"> Email
                    <input type="email" name="email" placeholder="Email" class="login-input">
                </label>
                <label for="nif" class="login-info"> NIF
                    <input type="number" name="nif" placeholder="NIF" class="login-input">
                </label>
                <button type="submit" class="button"> REGISTER </button>
                <p class="change-loginregister"> Already have an account? <a href="login.php" class="clickhere"> Click here </a> </p>
            </form>
        </div>
    </main>
</body>