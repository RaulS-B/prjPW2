<?php
if(!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
</head>
<body>
    Bem vindo , <?php echo $_SESSION['nome']; ?>.
</body>
</html>