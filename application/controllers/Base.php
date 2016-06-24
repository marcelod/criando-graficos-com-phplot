<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	public function Index(){
		// Carregamos a library PHPlot
		$this->load->library('CIPHPlot');

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
		$this->ciphplot->SetDataValues($dados);

		//Imprimindo o gráfico na tela
		$this->ciphplot->DrawGraph();
	}

	public function Comtitulos()
	{
		// Carregamos a library PHPlot
		$this->load->library('CIPHPlot');

		//Define os títulos
		$this->ciphplot->SetTitle("Titulo do Grafico");
		$this->ciphplot->SetXTitle('Eixo X');
		$this->ciphplot->SetYTitle('Eixo Y');

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
		$this->ciphplot->SetDataValues($dados);

		//Imprime o gráfico na tela
		$this->ciphplot->DrawGraph();
	}

	public function Alterando_tamanho_imagem(){
		// Carregamos a library PHPlot
		$this->load->library('CIPHPlot', array(1200, 800));

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
		$this->ciphplot->SetDataValues($dados);

		//Imprimindo o gráfico na tela
		$this->ciphplot->DrawGraph();
	}



}
