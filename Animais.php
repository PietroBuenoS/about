<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.7.1.min.js" defer></script>
    <script src="js/bootstrap.js" defer></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row     justify-content-center">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <form method="post">
                    <div class="form-group">
                        <h1>Escolha o seu preferido</h1>
                        <select name="animal" id="animal" class="custom-select custom-select-lg">
                            <option value="">escolha o animal que mais te agrada</option>
                            <option value="1">Cachorro</option>
                            <option value="2">Gato</option>
                        </select>
                            <div class="form-group">
                            <button type = "submit">Enviar</button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row mt-5 justify-content-center">
        <?php
        if(isset($_POST['animal'])){
            if($_POST['animal'] == '1'){
             echo  '<img src="img/cachorro.jpg" class="img-fluid" alt = "pipopo">';
            }
        }else if{
            if($_POST['animal'] == '2'){
                echo  '<img src="img/gato.jpg" class="img-fluid" alt = "pipopo">';
               }
        }else{
            echo "escolha seu animal favorito...";
        }
        ?>
    </div>
</body>
</html>