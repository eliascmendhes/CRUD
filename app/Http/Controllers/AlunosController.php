<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
class AlunosController extends Controller
{
    public function create() {
        return view('alunos.create');
    }

    public function store(Request $request) {
        Aluno::create([
            'nome' =>$request->nome,
            'inscricao' =>$request->inscricao,
            'number_chamada' =>$request->number_chamada,
        ]);

        return redirect('alunos/visualizar');

    }

    public function show() {
        $alunos = Aluno::all();
        return view('alunos.todos',['alunos'=>$alunos]);
    }

    public function destroy($id) {
        $aluno=Aluno::findOrFail($id);
        $aluno->delete();
        return redirect('alunos/visualizar');
    }

    public function edite($id) {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.editar',['aluno' => $aluno]);
    }

    public function update(Request $request, $id) {
        $aluno = Aluno::findOrFail($id);
        $aluno->update([
            'nome' => $request->nome,
            'inscricao' => $request->inscricao,
            'number_chamada'=> $request->number_chamada,
        ]);
        return redirect('alunos/visualizar');
    }

}
