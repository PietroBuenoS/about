<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.7.1.min.js" defer></script>
    <script src="js/bootstrap.js" defer></script>
</head>
<body>



<div class="container mt-5">
    <div class="row   justify-content-center">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
            <form action="" method="POST">
                <label for="">Digite seu nome: </label><br>
        
                    <input type="text" name="nome" class="form-control" id="nome"></input>
        
                    <input type="submit" class="btn btn-outline-primary" method="POST"></input>
                    <br>
                        <div class="alert  alert-success ">
                        <h3>
                        <?php
                        if(isset($_POST['nome'])){
                        echo "Seja bem-vindo ". $_POST['nome'];
                        }else{
                           echo "Digite seu nome...";                     
                        }
                        ?>
                        </h3>
                        </div>
            </form>
        </div>         
    </div>
</div>




</body>
</html>