<?php session_start();
include_once('/app/config/variables.php');
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
    <?php include_once('./header.php'); ?>
    <main>
        <div class="container">
            <div class="sub-title">
                <h1><?= 'TP - Nom de tp au hasard' ?></h1>
            </div>
            
        
        </div>

    </main>







    <?php include_once('./footer.php'); ?>
</body>
</html>