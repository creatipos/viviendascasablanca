<?php
class Provincias extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }

   public function guardar($titulo, $descripcion, $prioridad, $id=null){
      $data = array(
         'titulo' => $titulo,
         'descripcion' => $descripcion,
         'prioridad' => $prioridad
      );
      if($id){
         $this->db->where('id', $id);
         $this->db->update('informes', $data);
      }else{
         $this->db->insert('informes', $data);
      } 
   }


   public function eliminar($id){

      $this->db->where('id', $id);
      $this->db->delete('informes');

   }

   public function obtener_por_id($id){

      $this->db->select('*');
      $this->db->from('informes');
      $this->db->where('id', $id);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
   }

   public function obtener_todos($code=""){

      $this->db->select('*');
      $this->db->from('ciudades');
      $this->db->where('Paises_Codigo', $code);
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;
   }
}