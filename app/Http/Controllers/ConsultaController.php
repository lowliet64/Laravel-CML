<?php

namespace App\Http\Controllers;
use App\Consulta;
use Illuminate\Http\Request;
use Redirect;
class ConsultaController extends Controller
{

	public function index(){

		$consultas=Consulta::get();
		return view('consultas.lista',['consultas'=>$consultas]);

	}

	public function criar(){
		return view('consultas.form');

	}
	public function salvar(Request $request){

		$consulta=new Consulta();

		$consulta=$consulta->create($request->all());

		\Session::flash('msg_sucesso','consulta marcada');

		return Redirect::to ('consultas.create');

	}

	public function editar($id){

		$consulta=Consulta::findOrFail($id);

		return view('consultas.form',['consulta'=>$consulta]);


	}

	public function atualizar( $id ,Request $request){

	$consulta=Consulta::findOrFail($id);
	$consulta->update($request->all());
	\Session::flash('msg_sucesso','consulta atualiada');
	return Redirect::to ('consultas/'.$consulta->id.'/editar');

	}

	public  function deletar($id)
	{

		$consulta=Consulta::findOrFail($id);
		$consulta->delete();

		\Session::flash('msg_sucesso','Consulta Deletada ');
		return Redirect::to ('consultas');
	}

}
