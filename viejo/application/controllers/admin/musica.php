<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musica extends CI_Controller {

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
            redirect('admin/login');
        }
    }


	public function index()
	{
		
        

		

    function listar_archivos($carpeta){
    if(is_dir($carpeta)){
        if($dir = opendir($carpeta)){
            while(($archivo = readdir($dir)) !== false){
                if($archivo != '.' && $archivo != '..' && $archivo != '.htaccess'){
                    echo '<li><a target="_blank" href="'.$carpeta.'/'.$archivo.'">'.$archivo.'</a></li>';
                }
            }
            closedir($dir);
        }
    }
}
 
//echo listar_archivos('C:\xampp\htdocs\radio-promo\uploads');

		$this->load->view('admin/publicar',$arr);
	}




  public function publicar()
  {
   
     if($_POST){  

     
           $titulo=$_POST['titulo'];
           $cuerpo=$_POST['desc'];
          
           //$fotos=$fotos[];

           $sql2 = "INSERT INTO musicas (titulo, cuerpo) VALUES ('$titulo', '$cuerpo')";
           $val = $this->db->query($sql2);
           $val= $this->db->insert_id();


          foreach ($_POST['fotos'] as $key => $value) 
             {


             $sql2 = "INSERT INTO archivos (nombre, id_musica) VALUES ('$value', '$val')";
            $val = $this->db->query($sql2); 

                                               
             }

             redirect('admin/musica/lista');


    } 
        

    

    $this->load->view('admin/publicar_promo');



  }


    public function lista()
  {
    
        $news_sql = "SELECT * FROM musicas";

         $arr['news']= $this->db->query($news_sql)->result_array();

    

    

    $this->load->view('admin/lista_promo',$arr);



  }






}
