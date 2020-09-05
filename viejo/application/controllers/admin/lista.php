<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista extends CI_Controller {

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
		
        

       
  $this->db->select('*');
        $this->db->from('novedades');
        $this->db->join('imagenes_n','imagenes_n.id_nov=novedades.id');
        $query=$this->db->get();
        $arr['news']=$query->result_array();
		

		$this->load->view('admin/lista',$arr);
	}

	public function eliminar($id)
	{
		
          $news_sql = "DELETE FROM novedades WHERE id='$id'";

          $arr['news']= $this->db->query($news_sql);
          
         

		
       
		header('Location: ../../lista');
	}
}
