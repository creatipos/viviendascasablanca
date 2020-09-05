<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscar extends CI_Controller {

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
		
      # URL
           $url = 'https://graph.facebook.com/v2.5/search?pretty=0&q=diarios&type=page&fields=cover,website,name,picture,likes&access_token=1453222984908942|98322ff48a549c642024b7574445dda9';
      
           $json = $this->urlGetContents($url);

            if($json === false || $json == ''){

                $json = $this->urlGetContents($url);
            }

       
            $json = json_decode($json,true);

         $arr['news'] = $json['data'];
   

		$this->load->view('admin/buscar',$arr);

	}




public function urlGetContents($url){
            if(function_exists('curl_init') && function_exists('curl_setopt') && function_exists('curl_exec') && function_exists('curl_exec')){
                # Use cURL
                $curl = curl_init($url);

                curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($curl, CURLOPT_HEADER, 0);
                curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($curl, CURLOPT_TIMEOUT, 5);
                if(stripos($url,'https:') !== false){
                    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
                    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
                }

                $content = @curl_exec($curl);
                curl_close($curl);
            }else{
                # Use FGC, because cURL is not supported
                ini_set('default_socket_timeout',5);
                $content = @file_get_contents($url);
            }
            return $content;
        }



public function q($q="")
  {
        
  
  if (isset($_POST['q'])) {
     $q=$_POST['q'];
  }else{


    redirect('admin/buscar/');
  }

 
           $url = 'https://graph.facebook.com/v2.5/search?pretty=0&q='.$q.'&type=page&fields=cover,name,picture,likes&access_token=1453222984908942|98322ff48a549c642024b7574445dda9';
      
           $json = $this->urlGetContents($url);

            if($json === false || $json == ''){

                $json = $this->urlGetContents($url);
            }

       
            $json = json_decode($json,true);

         $arr['news'] = $json['data'];
   

    $this->load->view('admin/buscar',$arr);
    
  }






}
