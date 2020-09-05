<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Galerias extends CI_Controller {


private  $pais_id ;
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
      
   
      
 


   
    }

    public function index() {

        $arr['page'] ='home';
        
        $arr['titulo'] ='Argentina';

       
        $arr['galerias']=$this->general->galerias();

        $this->load->view('galerias',$arr);

    }




            



 

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */