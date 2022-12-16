<?php
session_start();

include_once('/app/config/variables.php');
include_once($rootPath . '/requests/users.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $stylePath; ?>main.css">
    <link rel="stylesheet" href="<?= $stylePath; ?>styles.css">
    <title>Portfolio</title>
</head>

<body>
    <?php include_once($rootTemplates .'header.php'); ?>
    <main>
        <div class="section">
            <div class="form-content">
                <h2>Inscription</h2>
                <form action="index.php" class="form form-register" method="POST">
                    <div class="group">
                        <label for="prenom">Prenom :</label>
                        <input type="text" name="prenom">
                        <label for="nom">Nom :</label>
                        <input type="text" name="nom">
                    </div>
                    <div class="group">
                        <label for="email">Adresse email :</label>
                        <input type="email" name="email">
                    </div>
                    <div class="group">
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password">
                    </div>

                </form>
            </div>
        </div>
    </main>
    <?php include_once($rootTemplates .'footer.php'); ?> 
</body>
</html>