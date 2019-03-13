<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{

//Função para buscar o endereço de acordo com o CEP
	public function busca_cep($cep){ 

		$pegaCep = preg_replace("/[^0-9]/", "", $cep);
		if(strlen($pegaCep)==8){

			$cep=urlencode($cep);
			$url = "http://viacep.com.br/ws/$cep/xml/";
			$retorno= simplexml_load_file($url);

			return $retorno;

		}else{

			$retorno=false;
			return $retorno;

		}

	}  

//Função para calcular a renda per capta
	public function calculaRendaPerCapta($qtDependentes,$renda){
		
		$renda = str_replace(".", "", $renda);
		$renda = str_replace(",", ".", $renda);
		$resultado=$renda/$qtDependentes;
		$renda = number_format($resultado, 2, '.', '');

		return $renda;
	}

//Função que retorna os dados calculados para a view
	public function ValidaDados(Request $request){
		$nome=$request->input('nome');
		$cep=$request->input('cep');
		$renda_bruta=$request->input('renda');
		$qtDependentes=$request->input('qtDependentes');


		if(!is_numeric($qtDependentes)|| $qtDependentes==0){
			
			return view('home.index')->with('error','Quantidade de dependentes inválido');

		}else{}

		$retorno=homeController::busca_cep($cep);
		
		if($retorno==false){
			
			return view('home.index')->with('error','CEP não válido');

		}else{

			$renda=homeController::calculaRendaPerCapta($qtDependentes,$renda_bruta);

			return view('home.mostraDados')
			->with('nome',$nome)
			->with('retorno',$retorno)
			->with('rendaPerCapta',$renda);

		}
	}
}
