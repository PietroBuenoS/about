<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.7.1.min.js" defer></script>
    <script src="js/bootstrap.js" defer></script>
    
</head>
<body>



<div class="container mt-5">
    <div class=" login row   justify-content-center">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header bg-info">
</div>
                    <div class="card-body">
                        <h4> Menu de Login </h4>

                    <form action="response.php" method="POST">
                <label>Digite seu nome: </label><br>
        
                    <input type="text" name="nome" class="form-control" id="nome"></input>
                    <label> Digita sua senha: </label>
                    <input type="password" name="senha" class="form-control" id="senha"></input>

                    <div class="col-12 col-sm-6 col-md-6 col-lg-6"> 
                    <button type="submit" class="btn btn-outline-primary">enter</button>
                    </div>
                    <br>
                        
            </form>
                    </div>
                        <div class="card-footer bg-info">

                        
                    </div>
                
            </div>
           
        </div>         
    </div>
    <div class="row jistify-content-end fixed-bottom">
        <div class="col-12 col-sm-6 col-md-4 ml-2 mr-2">
            <?php 
              if(isset($_GET['return'])){
                echo '
                <div class="alert alert-warning p-3">
                      <h4 class="text-center">
                      '.$_GET['return'].'
                      </h4>
                </div>
                ';
              }
            ?>
        </div>
    </div>
</div>




</body>
</html>