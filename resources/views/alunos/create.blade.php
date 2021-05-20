<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <form  action="{{route('submitAluno')}}" method="post">
    <div class="form-group">

    @csrf
    <div>
    <label for="nome">Nome</label>
    <input class="form-control"  type="text" name="nome">
    </div>


    <div>
    <label for="inscricao">inscricao</label>
    <input class="form-control"  type="text" name="inscricao">
    </div>

    <div>
    <label for="number_chamada">Número da chamada</label>
    <input class="form-control"  type="text" name="number_chamada">
    </div>

    <button class="btn btn-primary" type="submit">salvar</button>
    </div>
    </form>
</body>
</html>