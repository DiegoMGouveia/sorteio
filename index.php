<?php 
    // carregamento de classes
    require_once "class/classes.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    

    <link rel="stylesheet" href="../../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../../css/animate.css">
    
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../css/magnific-popup.css">

    <link rel="stylesheet" href="../../css/aos.css">

    <link rel="stylesheet" href="../../css/ionicons.min.css">
    
    <link rel="stylesheet" href="../../css/flaticon.css">
    <link rel="stylesheet" href="../../css/icomoon.css">

    <title>Sorteio - Sua Sorte</title>
</head>
<body class="bg-dark container-fluid mx-0 my-0">
    <div class="return-page position-relative container-fluid">
      <a href="https://diegodev.tk"><div class="h4 text-dark rounded-pill mt-1 bg-secondary px-2 bg-gradient position-absolute border border-2">Voltar para diegodev.tk</div></a>
    </div>  
    <div class="text-center text-danger pt-5"><span class="h1"> Sorteio</span>


<form action="index.php?sorteio" method="post" class="text-center center bg-primary rounded col-md-3 offset-md-6 border border-danger rounded">
  <div class="form-group ">
    <label for="val-min" class="text-warning">Nome do sorteio</label>
    <input type="text" class="form-control center" name="name" id="name" placeholder="Sorteio do Diego">
  </div>
  <div class="form-group">
    <label for="roll" class="text-warning">Quantidade de sorteios:</label>
    <input type="number" name="roll" class="input-sorteio form-control center" id="sorteio" aria-describedby="sorteio" placeholder="5">
  </div>
  <div class="form-group">
    <label for="val-min" class="text-warning">Valor minimo a ser sorteado:</label>
    <input type="number" name="nMin" class="input-sorteio form-control center" id="val-min" placeholder="0">
  </div>
  <div class="form-group">
    <label for="val-min" class="text-warning">Valor máximo a ser sorteado:</label>
    <input type="number" name="nMax" class="input-sorteio form-control center" id="val-max" placeholder="100">
  </div>
  <br>
  <button type="submit" class="btn btn-dark" name="sorteio">Sortear</button>
  <br>
  <br>
</form>

<?php 


    // Se o usuário clicar no botão sorteio
    if (isset($_GET["sorteio"])) 
    { 

      
        require "includes/sorteio-run.php";
        require "includes/sorteio.php";

    } 

?>
<p class="text-danger text-center">
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="bi-heart-fill"></i> by Diego M. Gouveia, see code in <a href="https://github.com/DiegoMGouveia/sorteio" target="_blank" rel="diegodev.tk">GitHub</a> 
  </p>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
