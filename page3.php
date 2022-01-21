<?php
require_once 'inc/fonction.php';

$host = 'localhost';
$port = 3306;
$database = 'cbs_php_inter_monteiro';
$user = 'root';
$password = '';

// Connection à la base de donnée cbs
require_once 'inc/login_BDD.php';
$pdoCBS = getInstancePDO($dsn, $user, $password);

debug($pdoCBS);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Le Bon Appart</title>
</head>
<body>
    <header>
        <?php
        require_once 'inc/navbar.php';
        ?>
    </header>
    <h1>Test</h1>


    
    <footer>
    <?php
    require_once 'inc/footer.php';
    ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>