<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Menu</title>
</head>

<body>
    <div class="container">

        <h1 class="text-primary text-center ">AGENDA PESSOAL</h1>
        <div>
            <h5>Cadastrar Contato</h5>
            <form action="/api/salvarcontato" method="post">
                <input type="text" name="nome" placeholder="Nome">
                <input type="text" name="telefone" placeholder="Telefone">
                <button class="btn btn-success" type="submit">Criar contato
                </button>
            </form>

        </div>
        <div>
            <h5 class="text-center text-success">Meus contatos</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dados as $dado)
                    <tr>
                        <td>{{$dado->id}}</td>
                        <td>{{$dado->nome_contato}}</td>
                        <td>{{$dado->telefone_contato}}</td>
                        <form action="api/apagarregistro/{{$dado->id}}" method="post">
                            @method('DELETE')
                            <td><button class="btn btn-danger" type="submit">Deletar</button></td>
                        </form>
                        <form action="api/updateregistro/{{$dado->id}}" method="post">
                            @method('DELETE')
                            <td><button class="btn btn-warning" type="submit">Alterar</button></td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



</body>

</html>