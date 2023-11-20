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
            <h2> LOGIN </h2>
            <form action="./scripts/login.php" method="post">
                <label for="username"> Username
                    <input type="text" name="username" placeholder="Username">
                </label>
                <label for="password"> Password
                    <input type="password" name="password" placeholder="Password">
                </label>
                <button type="submit"> LOGIN </button>
            </form>
            <p> Don't have an account? <a href="register.php"> Register </a> </p>
        </div>
    </main>
</body>