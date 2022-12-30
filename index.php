<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Regalitos</title>
</head>
<body style="color:#333">
    <div class="px-4 pt-5 mt-5 text-center vh-100">
        <img class="d-block mx-auto mb-4" src="src/regalito.png" alt="" height="150">
        <h1 class="display-5 fw-bold">Els regalitos de la Ixufs</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Ixurrinilla! Espero que els regals materials t'hagin agradat. Aquí descobrirás les experiències que el teu ixurrinillo et vol regalar, però per aconseguir-les, hauràs de superar algunes proves :)</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a type="button" href="#cards" class="btn btn-primary btn-lg px-4 gap-3">Anem a pels regals!</a>
            </div>
        </div>
        <div class="mx-auto pt-5">
            <i class="bi bi-chevron-compact-down" style="font-size: 100px; color: #333"></i>
        </div>
    </div>

    <div class="px-4 py-5 text-center" style="background-color: #333" id="cards">
        <div class="container py-5">
            <div class="row justify-content-md-center mx-auto">
                <div class="col-6">
                    <div class="card mx-auto p-4" style="width: 25rem;">
                        <div class="card-body">
                            <i class="bi bi-fire" style="font-size: 50px; color: #333"></i>
                            <h3 class="card-title">Experiència 1</h3>
                            <p class="card-text">La primera experiència ens farà cometre un pecat capital, però tindrem la panxa contenta.</p>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalExp1">Vull saber més</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mx-auto p-4" style="width: 25rem;">
                        <div class="card-body">
                            <i class="bi bi-ticket-perforated" style="font-size: 50px; color: #333"></i>
                            <h3 class="card-title">Experiència 2</h3>
                            <p class="card-text">La segona experiència ens farà moure molts músculs, però sense aixecar-nos de la butaca.</p>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalExp2">Vull saber més</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalNormes" tabindex="-1" aria-labelledby="modalNormesLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalNormesLabel">Normes</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Hi ha dos experiències pels ixufs, però hauràs de passar una prova per aconseguir cada experiència.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Vali!</button>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalExp1" tabindex="-1" aria-labelledby="modalExp1Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalExp1Label">Experiència 1</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h3>Enigma a resoldre:</h3>
                    <p>M'estic menjant un entrepà d'Heura del Pans i com que m'agrada molt me'l vull fer durar. L'entrepà medeix 28cm i cada dia menjo la meitat del que tinc. Quants dies trigaré a menjar-me el bocata sencer?</p>
                    <form action="experiencia1.php" method="GET" class="form">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="solution" id="flexRadioDefault1" value="14">
                            <label class="form-check-label" for="flexRadioDefault1">
                                14 dies
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="solution" id="flexRadioDefault2" value="28">
                            <label class="form-check-label" for="flexRadioDefault2">
                                28 dies
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="solution" id="flexRadioDefault3" value="0">
                            <label class="form-check-label" for="flexRadioDefault3">
                                No me l'acabaré mai
                            </label>
                        </div>
                        <input type="submit" value="Enviar resposta" class="btn btn-primary mt-3">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalExp2" tabindex="-1" aria-labelledby="modalExp2Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalExp2Label">Experiència 2</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <h3>Enigma a resoldre: </h3>
                    <p>Com segueix la següent cançó?</p>
                    <p><em>Qui és la més millor del món? ...</em></p>
                    <form action="experiencia2.php" method="GET" class="form">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="solution" id="flexRadioDefault12" value="0">
                            <label class="form-check-label" for="flexRadioDefault12">
                                És la ixurrina!
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="solution" id="flexRadioDefault22" value="1">
                            <label class="form-check-label" for="flexRadioDefault22">
                                És la mandarina!
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="solution" id="flexRadioDefault32" value="2">
                            <label class="form-check-label" for="flexRadioDefault32">
                                És la carxofilla!
                            </label>
                        </div>
                        <input type="submit" value="Enviar resposta" class="btn btn-primary mt-3">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>