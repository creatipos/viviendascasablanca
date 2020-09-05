<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Xml extends CI_Controller {

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
        $this->load->database();
       
       $this->load->model('feed_model');
    }


public function index()
    {
       // fijamos el nombre que mostrará el feed en el área del título y la primera página
       $data['feed_name'] = 'RSS codeIgniter';
       // el cotejamiento
       $data['encoding'] = 'utf-8';
       //titulo del feed
       $data['titulo'] = 'Diarios de argentina rss';
       // la url del feed
       $data['feed_url'] = 'http://www.las-ultimasnoticias.com/xml.html';
       // seteamos el idioma
       $data['page_language'] = 'es';
       // descripción de la página
       $data['page_description'] = 'Diarios de argentina';
       // email del autor 
       $data['creator_email'] = 'uno-de-piera@uno-de-piera.com';
       // esto le permitirá al navegador mostrar la salida en formato XML
       //importantísimo el charset en utf-8, si no tendremos problemas con tildes y ñ
       header("Content-Type: application/rss+xml; charset=utf-8");
       //o si preferimos la salida por html directamente cambíamos la anterior 
       //línea por la siguiente
       //header('Content-Type: text/html; charset=utf-8');
       //el array con los posts que hemos pedido al modelo
       $data['feeds'] = $this->feed_model->get_feeds();
       //cargamos la vista con el array data que tiene todo lo que necesitamos
       $this->load->view('xml',$data);
    }
}
