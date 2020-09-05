<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galerias extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
           if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/');
        }
    }

	public function index()
	{
		
       

		if($_POST){  



            $titulo=$_POST['titulo'];
            $desc=$_POST['desc'];
            $sql2 = "INSERT INTO novedades (titulo, cuerpo) VALUES ('$titulo', '$desc')";
            $val = $this->db->query($sql2);
            $val= $this->db->insert_id();
            

             foreach ($_POST['fotos'] as $key => $value) 
             {


             $sql2 = "INSERT INTO imagenes_n (nombre, id_nov) VALUES ('$value', '$val')";
            $val = $this->db->query($sql2); 

                                               
             }


             redirect('admin/lista');


		}


//echo listar_archivos('C:\xampp\htdocs\radio-promo\uploads');

		$this->load->view('admin/publicar');
	}


   public function publicar()
	{
		
       

		if($_POST){  



            $titulo=$_POST['titulo'];
            $desc=$_POST['desc'];

            if (isset($_POST['destacar'])) {

            $desct=$_POST['destacar'];
               
            }else{

            $desct=0;

            }


            $sql2 = "INSERT INTO galerias (titulo, descripcion,destacar) VALUES ('$titulo', '$desc','$desct')";
            $val = $this->db->query($sql2);
            $val= $this->db->insert_id();
            

             foreach ($_POST['fotos'] as $key => $value) 
             {


             $sql2 = "INSERT INTO galeria_img (nombre, id_ga) VALUES ('$value', '$val')";
            $val = $this->db->query($sql2); 

                                               
             }


             redirect('admin/galerias/lista');


		}


//echo listar_archivos('C:\xampp\htdocs\radio-promo\uploads');

		$this->load->view('admin/publicar_galeria');
	}



		public function lista()
	{
		
        

       
        $this->db->select('*');
        $this->db->from('galerias');
        $this->db->join('galeria_img','galeria_img.id_ga=galerias.id');
       $this->db->group_by('galerias.id'); 
        $query=$this->db->get();
        $arr['news']=$query->result_array();
		

		$this->load->view('admin/lista_galeria',$arr);
	}


     	public function editar($id="")
	{
		
        $this->db->select('*');
        $this->db->from('galerias');
        
        $this->db->where('id', $id); 
        $query=$this->db->get();
        $arr['cms']=$query->result_array();


        $this->db->select('*');
        $this->db->from('galeria_img');
        
        $this->db->where('id_ga', $id); 
        $this->db->order_by("orden", "asc");
        $query=$this->db->get();
        $arr['img']=$query->result_array();

           if($_POST){  



            $titulo=$_POST['titulo'];
            $desc=$_POST['desc'];
            
             if (isset($_POST['destacar'])) {

            $desct=$_POST['destacar'];
               
            }else{

            $desct=1;

            }
            

            $sql2 = "UPDATE galerias SET titulo='$titulo',descripcion='$desc',destacar='$desct' WHERE id=".$id;
            
            $val = $this->db->query($sql2);
             
 $orden=1;
             foreach ($_POST['fotos'] as $key => $value) 
             {
                
        $this->db->select('*');
        $this->db->from('galeria_img');
        $this->db->where('nombre', $value); 
        $query=$this->db->get();
        $arr['img']=$query->result_array();


               if (empty($arr['img'])) {
                 
                
                $sql2 = "INSERT INTO galeria_img (nombre, id_ga, orden) VALUES ('$value', '$id','$orden')";
             $vala = $this->db->query($sql2); 


               }else{
                
               

            $sql2 = "UPDATE galeria_img SET orden='$orden' WHERE id_galid=".$arr['img'][0]['id_galid'];

            $vala = $this->db->query($sql2); 



               }
           
$orden++;
                                               
             }


         redirect('admin/galerias/editar/'.$id);


        }



		$this->load->view('admin/publicar_galeria',$arr);





	}

    public function eliminar($id)
    {
        
          $news_sql = "DELETE FROM galerias WHERE id='$id'";

          $this->db->query($news_sql);

          $news_sqla = "DELETE FROM `galeria_img` WHERE 1 AND `id_ga`='$id'";
          $this->db->query($news_sqla);
          
             redirect('admin/galerias/lista');
         

        
       
       
    }


     public function eliminar_img($id)
    {
        
       

          $news_sqla = "DELETE FROM `galeria_img` WHERE `id_galid`='$id'";
          $this->db->query($news_sqla);
          
             //redirect('admin/modelos/lista');
         header('Location:'.$_SERVER['HTTP_REFERER']);

        
       
       
    }

}
