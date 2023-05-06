<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <section class="container mt-5">
        <h1 class="text-center">Cadastrar usuario</h1>

        <form action="{{Route('store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="nameinput">Nome</label>
                    <input class="form-control" type="text" name="nome" id="nameinput" placeholder="Nome">
                </div>
            </div>

            <div class="row">
                <div class="col-7">
                    <label for="profissaoinput">Profissao</label>
                    <input class="form-control" type="text" name="profissao" id="profissaoinput" placeholder="Profissao">
                </div>
                <div class="col-5">
                    <label for="profissaoinput">Idade</label>
                    <input class="form-control" type="text" name="idade" id="profissaoinput" placeholder="Idade">
                </div>
            </div>


            <div class="form-group row d-flex align-items-center justify-content-evenly mt-4">
                <button type="submit" class="btn btn-primary col-2">Submit</button>
                <a class="col-2 btn btn-primary" href="{{route('index')}}">Cancel</a>
            </div>
        </form>

    </section>
</body>

</html>
