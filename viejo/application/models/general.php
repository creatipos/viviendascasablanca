<?php
class General extends CI_Model { 
   public function __construct() {
      parent::__construct();


   }






   public function modelos($pag=""){


         $this->db->select('*');
        $this->db->from('modelos');
        $this->db->join('img_modelos','img_modelos.id_model=modelos.id_modelos');
        $this->db->group_by("modelos.id_modelos");
        $array=$this->db->get();
      

      return $array->result_array();;
   }


     public function galerias($pag=""){


         $this->db->select('*');
        $this->db->from('galerias');
        $this->db->join('galeria_img','galeria_img.id_ga=galerias.id');
        $this->db->group_by("galerias.id");
        $this->db->where('galerias.destacar', 1); 
        
        $array=$this->db->get();
      

      return $array->result_array();;
   }




    public function modelos_potada($pag=""){


         $this->db->select('*');
        $this->db->from('modelos','img_modelos');
        $this->db->join('img_modelos','img_modelos.id_model=modelos.id_modelos');
        $this->db->group_by("modelos.id_modelos");
        $this->db->where('modelos.destactar', 1); 

        $this->db->limit(10);
        $array=$this->db->get();
      

      return $array->result_array();;
   }


      public function imgModelos($iddd=""){


         $this->db->select('*');
        $this->db->from('img_modelos');
        $this->db->where('id_model', $iddd); 
        $this->db->order_by("orden", "asc");

        $array=$this->db->get();
      

      return $array->result_array();
   }



   public function modelo($id=""){


        $this->db->select('*');
        $this->db->from('modelos');
        
        $this->db->where('id_modelos', $id); 
        $query=$this->db->get();
        $arr['cms']=$query->result_array();


        $this->db->select('*');
        $this->db->from('img_modelos');
        
        $this->db->where('id_model', $id); 
         $this->db->order_by("orden", "asc");
        $query=$this->db->get();

        $arr['img']=$query->result_array();
        
       
      

      return $arr;
   }

    public function galeria($id=""){


        


        $this->db->select('*');
        $this->db->from('galeria_img');
        
        $this->db->where('id_ga', $id); 
        $query=$this->db->get();
        $arr['img']=$query->result_array();
        
       
      

      return $query->result_array();
   }











}