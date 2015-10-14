<?php
class Ficha_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function crearFicha($nombre,$profesional, $fecha, laboratorio, $comentario) {
    $data = array(
      'nombre' => $nombre,
      'profesional' => $profesional,
      'fecha' => $fecha,
      'laboratorio' => $laboratorio,
      'comentario' => $comentario
    );

    $this->db->insert('ficha_tratamiento', $data);
  }
}
?>