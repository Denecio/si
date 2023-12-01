<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>tapes inc</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/geral.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/stats.css'>
</head>
<body>
    <?php include 'cabecalho.php'; ?>
    <main class ="principal">
        <div class="tabelas">
            <div class="stats">
                <h2 class="stat-header">STATS</h2>
                <?php include 'scripts/stats.php'; ?>
            </div>
            <div class="stats">
                <h2 class="stat-header">STATS BY GENRE</h2>
            </div>
        </div>
    </main>
</body>
</html>