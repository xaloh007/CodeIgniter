<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador1 extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->load->helper('url');
		$this->load->view('Pagina/index');
	
	}
	function  consulta(){
		$this->load->view('Pagina/consulta');
	}
	function ingreso(){
		$this->load->view('Pagina/ingreso');

	}
	function modificar(){
		$this->load->view('Pagina/modificar');
	}
	function preguntas(){
		$this->load->view('Pagina/preguntas');
	}
}
?>