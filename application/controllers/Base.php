<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	public function Index(){
		// Carregamos a library PHPlot
		$this->load->library('PHPlot');

		//Definindo os dados do gráfico
		$dados = array(
			array('a',3),
			array('b',5),
			array('c',7),
			array('d',8),
			array('e',2),
			array('f',6),
			array('g',7)
		);
		$this->phplot->SetDataValues($dados);

		//Imprimindo o gráfico na tela
		$this->phplot->DrawGraph();
	}

	public function Comtitulos()
	{
		// Carregamos a library PHPlot
		$this->load->library('phplot');

		//Define os títulos
		$this->phplot->SetTitle("Titulo do Grafico");
		$this->phplot->SetXTitle('Eixo X');
		$this->phplot->SetYTitle('Eixo Y');

		//Define os valores para geração do gráfico
		$dados = array(
			array('a',3,4,2),
			array('b',5,9,1),
			array('c',7,2,6),
			array('d',8,1,4),
			array('e',2,8,6),
			array('f',6,4,5),
			array('g',7,2,3)
		);
		$this->phplot->SetDataValues($dados);

		//Imprime o gráfico na tela
		$this->phplot->DrawGraph();
	}

}
