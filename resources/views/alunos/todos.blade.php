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
    <table class="table">
    <thead>
    <tr>
    <th scope="col">Nome</th>
    <th scope="col">Inscrição</th>
    <th scope="col">Numero da chamada</th>
    <th scope="col">Editar</th>
    <th scope="col">excluir</th>


    </tr>
    </thead>
    <tbody>
    @foreach($alunos as $aluno)

    <tr>
    <td>{{$aluno->nome}}</td>
    <td>{{$aluno->inscricao}}</td>
    <td>{{$aluno->number_chamada}}</td>
    <td><a href="{{route('editar_new',['id'=>$aluno->id] )}}" tittle="editar_new">editar_new</a></td>
    <td><a href="{{route('excluir',['id'=>$aluno->id] )}}" tittle="Excluir">Excluir</a></td>
    </tr>
    </tbody>
    @endforeach

    <a class="btn btn-outline-primary" href="{{route('create')}}">voltar</a>
</body>
</html>