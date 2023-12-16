<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <title>Teste PHP</title>
</head>

<body>
    <div class="container p-3">
        <ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Validar String de Colchetes</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Crud Contatos por API</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Mais Informações</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h4>Validar Sequência de Colchetes</h4>
                                <span class="text-muted font-14px">Dizemos que uma sequência de colchetes é válida se as seguintes condições forem atendidas:<br>
                                    ● Não contém colchetes sem correspondência.<br>
                                    ● O subconjunto de colchetes dentro dos limites de um par de colchetes correspondente é
                                    também um par de colchetes.<br><br>

                                    Exemplos:<br>
                                    ● (){}[] é válido.<br>
                                    ● []<span class="text-red">{</span>() não é válido.
                                </span>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="colchetes" placeholder="({[]})">
                                <label for="colchetes">Colchetes aqui...</label>
                            </div>
                            <button id="btnSubmit" class="btn btn-primary">VALIDAR</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h4>Validar Sequência de Colchetes</h4>
                                <span class="text-muted font-14px">Dizemos que uma sequência de colchetes é válida se as seguintes condições forem atendidas:<br>
                                    ● Não contém colchetes sem correspondência.<br>
                                    ● O subconjunto de colchetes dentro dos limites de um par de colchetes correspondente é
                                    também um par de colchetes.<br><br>

                                    Exemplos:<br>
                                    ● (){}[] é válido.<br>
                                    ● []<span class="text-red">{</span>() não é válido.
                                </span>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="colchetes" placeholder="({[]})">
                                <label for="colchetes">Colchetes aqui...</label>
                            </div>
                            <button id="btnSubmit" class="btn btn-primary">VALIDAR</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row">

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/public/assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>