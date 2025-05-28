<?php 

if($_POST['nome'] == 'admim' && $_POST['password'] == 'senha'){
   session_start();
   $_SESSION['login'] = $_POST['nome'];
}else{
    echo "<script>alert('prioca')</script>";
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSION PHP</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <script src="js/jquery-3.7.1.min.js" defer></script>
    <script src="js/bootstrap.js" defer></script>
</head>
<body>
    
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-6 col-md-6">
            <div class="alet alert-info">
                <h3 class="text-center text-dark">
                    <?php
                    echo "Seja bem vindo ao sistema ". $_SESSION['login'] ."!";
                    ?>
                </h3>
                <button class="btn btn-outline-info btn-block mt-4 mb-4">Acessar</button>

            </div>
        </div>
    </div>
</div>




</body>
</html>