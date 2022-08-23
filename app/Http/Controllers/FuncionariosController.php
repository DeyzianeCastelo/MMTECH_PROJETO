<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class FuncionariosController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::get();

        return view('funcionarios.index', compact('funcionarios'));
    }

    public function create()
    {
        return view('funcionarios.create');
    }

    public function store(Request $request)
    {
        Funcionario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
        ]);

        return redirect('/funcionarios/listar')->with('store', 'Funcionario Cadastrado com Sucesso');
    }

    public function edit($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        return view('funcionarios.edit', ['funcionario' => $funcionario]);

    }

    public function update(Request $request, $id)
    {
        $funcionario = Funcionario::findOrFail($id);

        $funcionario->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
        ]);

        return redirect('/funcionarios/listar')->with('update', 'Funcionario Atualizado com Sucesso');
    }

    public function delete($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        return view('funcionarios.delete', ['funcionario' => $funcionario]);
    }

    public function destroy($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->delete();

        return redirect('/funcionarios/listar')->with('delete', 'Funcionario Excluído com Sucesso');

    }

}
