<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicar extends CI_Controller {

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
}
