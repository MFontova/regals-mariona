<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="src/ixf.png">
    <title>Experiencia 1</title>
</head>
<body>
    <div class="container pt-5">
        <?php

        if(isset($_GET['solution'])){
            if($_GET['solution'] == 14) {
                ?>
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Error!</h4>
                    <p>Oh, oh! T'has equivocat Ixuf!</p>
                    <p>Estàs segura que 28 dies és la solució?</p>
                    <hr>
                    <a style="cursor:pointer" onclick="history.back()"><b><i class="bi bi-arrow-left-short"></i>Torna enrera per tornar-ho a intentar<b></a>
                </div>
                <?php
        }elseif($_GET['solution'] == 28) {
            ?>
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Error!</h4>
                    <p>Oh, oh! T'has equivocat Ixuf!</p>
                    <p>Estàs segura que 28 dies és la solució?</p>
                    <hr>
                    <a style="cursor:pointer" onclick="history.back()"><b><i class="bi bi-arrow-left-short"></i>Torna enrera per tornar-ho a intentar<b></a>
                </div>
            <?php
        }elseif($_GET['solution'] == 0) {
            ?>
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Genial!</h4>
                    <p>Vaya jefasa la Ixus</p>
                    <p>L'has clavat amor! Ja pots descarregar-te el teu regal: </p>
                    <a class="btn btn-secondary" href="regals/sopar.jpg" download><i class="bi bi-download"></i> Descarregar regal</a>
                    <hr>
                    <a style="cursor:pointer" onclick="history.back()"><b><i class="bi bi-arrow-left-short"></i>Torna enrera per seguir amb l'altra prova<b></a>
                </div>
            <?php
        }
    }
    
    ?>
    </div>
    
</body>
</html>