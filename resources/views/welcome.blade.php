<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Crud Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <header class="container mb-5 mt-5">
        <div class="row border text-center">
            <h1>Crud laravel</h1>
        </div>
    </header>

    <section class="container mb-2 d-flex flex-row align-items-center justify-content-end">
        <div>
            <a><img src="/images/criar.svg" alt=""> Cadastrar</a>
        </div>
    </section>

    <section class="container border mb-1">
        <div class="row">
            <div class="col-4">
                <h5>Nome Completo</h5>
            </div>
            <div class="col-2">
                <h5>Idade</h5>
            </div>
            <div class="col-3">
                <h5>Profissao</h5>
            </div>
            <div class="col-3">
                <h5>Operações</h5>
            </div>
        </div>
    </section>

    <section class="container border">

        <div class="row">
            <div class="col-4">
                <h6>LUCAS MESSIAS</h6>
            </div>
            <div class="col-2">
                <h6>20</h6>
            </div>
            <div class="col-3">
                <h6>Desenvolvedor</h6>
            </div>
            <div class="col-3 row">
                <div class="col-md-4 text-center">
                    <img src="/images/editar.svg" alt=""> 
                </div>
                <div class="col-2 text-center">
                    <img src="/images/lixoIcon.svg" alt=""> 
                </div>
        
            </div>
        </div>
    </section>

</body>

</html>
