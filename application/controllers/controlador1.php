<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador1 extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('len_model');

	}
	function index(){
		$this->load->helper('url');
		$this->load->view('Pagina/index');
		$this->load->view('Pagina/footer');
	
	}
	function  consulta(){
		$this->load->view('Pagina/consulta');
		$this->load->view('Pagina/footer');
	}
	function ingreso(){
		$this->load->view('Pagina/ingreso');
		$this->load->view('Pagina/footer');

	}
	function modificar(){
		$this->load->view('Pagina/modificar');
		$this->load->view('Pagina/footer');
	}
	function preguntas(){
		$this->load->view('Pagina/preguntas');
		$this->load->view('Pagina/footer');
	}
    public function formulario(){

		$this->load->view('Pagina/ingreso');
		$this->load->view('Pagina/footer');
	}

    public function validar(){	

		//echo "sadsadsadsadasdasd";

		$this->form_validation->set_rules('nombre','Nombre de Usuario','required|trim');
		$this->form_validation->set_rules('rut','Rut','required|trim');
		
		$this->form_validation->set_message('required','El campo %s Es Obligatorio');
		
		if ($this->form_validation->run() == FALSE){
			
			$this->formulario();
		
		}
		else
		{

			echo "Totos los datos estan ok: ".$this->input->post('nombre');
			//$this->load->view('formsuccess');
		}
	}
    
    
	function login($idioma=null){

		   //   $this->config->set_item('language', 'spanish');      //   Setear dinámicamente el idioma que deseamos que ejecute nuestra aplicación
      if(!isset($_POST['maillogin'])){   //   Si no recibimos ningún valor proveniente del formulario, significa que el usuario recién ingresa.   
         $this->load->view('login');      //   Por lo tanto le presentamos la pantalla del formulario de ingreso.
      }
      else{                        //   Si el usuario ya pasó por la pantalla inicial y presionó el botón "Ingresar"
         $this->form_validation->set_rules('maillogin','nombreProf','required');      //   Configuramos las validaciones ayudandonos con la librería form_validation del Framework Codeigniter
         $this->form_validation->set_rules('passwordlogin','contrasenaProf','required');
         if(($this->form_validation->run()==FALSE)){            //   Verificamos si el usuario superó la validación
            $this->load->view('login');                     //   En caso que no, volvemos a presentar la pantalla de login
         }
         else{                                       //   Si ambos campos fueron correctamente rellanados por el usuario,
            $this->load->model('usuarios_model');
            $ExisteUsuarioyPassoword=$this->usuarios_model->ValidarUsuario($_POST['maillogin'],$_POST['passwordlogin']);   //   comprobamos que el usuario exista en la base de datos y la password ingresada sea correcta
            if($ExisteUsuarioyPassoword){   // La variable $ExisteUsuarioyPassoword recibe valor TRUE si el usuario existe y FALSE en caso que no. Este valor lo determina el modelo.
               echo "Validacion Ok<br><br><a href='login'>Volver</a>";   //   Si el usuario ingresó datos de acceso válido, imprimos un mensaje de validación exitosa en pantalla
            }
            else{   //   Si no logró validar
               $data['error']="E-mail o password incorrecta, por favor vuelva a intentar";
               $this->load->view('login',$data);   //   Lo regresamos a la pantalla de login y pasamos como parámetro el mensaje de error a presentar en pantalla
            }
         }
      }

		$this->load->view('Pagina/footer');
	}

	function llenarfichaLenguaje(){
		
		$data = array(
				'rut' => $this->input->post('rut'),
				'nombre' => $this->input->post('nombre'),
				'fechaNac' => $this->input->post('fechaNac'),
				'edad' => $this->input->post('edad')
				/*'idioma' => $this->input->post('idioma'),
				'direccion' => $this->input->post('direccion'),
				'numfon' => $this->input->post('numfon'),
				'estado_civil' => $this->input->post('estado_civil'),
				'hijos' => $this->input->post('hijos'),
				'conQuienVive' => $this->input->post('conQuienVive'),
				'famAcompanante' => $this->input->post('famAcompanante'),
				'derivadoP' => $this->input->post('derivadoP'),
				'fechaEvaluacion' => $this->input->post('fechaEvaluacion'),
				'escolaridad' => $this->input->post('escolaridad'),
				'desempenoEscolar' => $this->input->post('desempenoEscolar'),
				'mejorDesempeno' => $this->input->post('mejorDesempeno'),
				'peorDesempeno' => $this->input->post('peorDesempeno'),
				'escolaridadPadres' => $this->input->post('escolaridadPadres'),
				'profesionOficio' => $this->input->post('profesionOficio'),
				'perferc' => $this->input->post('perferc'),
				'anosPerfec' => $this->input->post('anosPerfec'),
				'ocupacionPrev' => $this->input->post('ocupacionPrev'),
				'situacionQueja' => $this->input->post('situacionQueja'),
				'situacionAct' => $this->input->post('situacionAct'),
				'habilidadNo' => $this->input->post('habilidadNo'),
				'actividadesPrevi' => $this->input->post('actividadesPrevi'),
				*/
			);
	$this->load->view('Pagina/formulario');
	$this->len_model->crearFicha($data);
	//$this->load->view('Pagina/ingreso');
	
	//$this->load->view('Pagina/footer');
	}


   function crearficha() {
  $this->load->helper('form');
  $this->load->library('form_validation');

  $this->form_validation->set_rules('nombre', 'Nombre', 'required');
  $this->form_validation->set_rules('profesional', 'Profesional', 'required');
  $this->form_validation->set_rules('fecha', 'Fecha', 'required');
  $this->form_validation->set_rules('laboratorio', 'Laboratorio', 'required');
  $this->form_validation->set_rules('comentario', 'Comentario', 'required');

  if ($this->form_validation->run() == FALSE) {
    $this->load->view('Pagina/preguntas');
  } else {
    $nombre = $this->input->post('nombre');
    $profesional = $this->input->post('profesional');
    $fecha = $this->input->post('fecha');
    $laboratorio = $this->input->post('laboratorio');
    $comentario = $this->input->post('comentario');
    $this->load->model('ficha_model');
    $this->ficha_model->crearFicha($nombre,$profesional, $fecha, $laboratorio, $comentario);
   $this->load->view('Pagina/preguntas');
    echo 'Ficha insertada';
    
  }
}

   function crearficha_nino() {
  $this->load->helper('form');
  $this->load->library('form_validation');

  $this->form_validation->set_rules('nombre', 'Nombre', 'required');
  $this->form_validation->set_rules('profesional', 'Profesional', 'required');
  $this->form_validation->set_rules('fecha', 'Fecha', 'required');
  $this->form_validation->set_rules('laboratorio', 'Laboratorio', 'required');
  $this->form_validation->set_rules('comentario', 'Comentario', 'required');

  if ($this->form_validation->run() == FALSE) {
    $this->load->view('Pagina/preguntas');
  } else {
    $nombre = $this->input->post('nombre');
    $profesional = $this->input->post('profesional');
    $fecha = $this->input->post('fecha');
    $laboratorio = $this->input->post('laboratorio');
    $comentario = $this->input->post('comentario');
    $this->load->model('ficha_model_nino');
    $this->ficha_model_nino->crearFichanino($nombre,$profesional, $fecha, $laboratorio, $comentario);
   $this->load->view('Pagina/preguntas');
    echo 'Ficha insertada';
    
  }
}
}
?>