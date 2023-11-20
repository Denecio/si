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
    <h1> TAPES INC </h1>
    <main class ="principal">
        <div class="login">
            <h2> REGISTER </h2>
            <form action="./scripts/register.php" method="post">
                <label for="username"> Username
                    <input type="text" name="username" placeholder="Username">
                </label>
                <label for="password"> Password
                    <input type="password" name="password" placeholder="Password">
                </label>
                <label for="remember"> Email
                    <input type="email" name="email">
                </label>
                <label for="nif"> NIF
                    <input type="number" name="nif">
                </label>
                <button type="submit"> REGISTER </button>
            </form>
            <p> Already have an account? <a href="register.php"> Click here </a> </p>
        </div>
    </main>
</body>