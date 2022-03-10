<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda_de_Contatos;
use GuzzleHttp\Client;
class AgendaController extends Controller
{
	public function create()
        {
		return view('contatos.create');
	}
	public function store(Request $req)
	{
		Agenda_de_Contatos::create([
		'nome' => $req->nome,
		'email' => $req-> email,
		'telefone' => $req-> telefone,
		/*'endereco' => $req-> endereco,*/
		]);
		return redirect()->to(url()->previous())->with('success', 'Contato salvo com sucesso');
	}
	public function show($id)
	{
		$contato = Agenda_de_Contatos::findOrFail($id);
		return view ('contatos.show', ['contato' => $contato]);
	}
	public function update($id)
	{
  		$contato = Agenda_de_Contatos::findOrFail($id);                                     return view ('contatos.update', ['contato' => $contato]);
	}
	public function edit_update(Request $req, $id)
	{
		$contato = Agenda_de_Contatos::findOrFail($id);
 		$contato->update([
		'nome' => $req->nome,
		'email' => $req-> email,
		'telefone' => $req-> telefone,
		 ]);
		return "Contato Atualizado";
	}

	//delete
	public function getDelete($id)
	{
		$contato = Agenda_de_Contatos::findOrFail($id);                                     return view ('contatos.delete', ['contato' => $contato]);
	}
	public function delete($id)
	{
		$contato = Agenda_de_Contatos::findOrFail($id);                                     $contato->delete();
		return "Contato Atualizado";
	}
}
