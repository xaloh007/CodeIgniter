<?php
class Ficha_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function crearFicha( $nombre,$profesional,$fecha,$laboratorio,$comentario) {
    $data = array(

      'fich_fecha' => $fecha,
      'fich_obs' => $comentario,
      'ficha_Dr' => $profesional,
      'ficha_paciente' => $nombre,
      'ficha_lab' => $laboratorio
      
    );

    $this->db->insert('ficha_lenguaje', $data);
  }
}
?>