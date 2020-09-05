<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diarios extends CI_Controller {

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

		$this->load->view('admin/publicar_diarios',$arr);
	}




  public function publicar()
  {
   
     if($_POST){  

     
           $nombre=$_POST['nombre'];
           $website=$_POST['website'];
           $facebook=$_POST['facebook'];
           $twitter=$_POST['twitter'];
           $google=$_POST['google'];
           $pais=$_POST['pais'];
           $ciudad=$_POST['ciudad'];
           $url_amigabless=$this->urls_amigables($_POST['nombre']);
            
          
           //$fotos=$fotos[];

           
            # URL
           $url = 'https://graph.facebook.com/v2.5/'.$facebook.'?fields=name,picture,cover,posts.limit(20).fields(comments.limit(1).summary(true),name,object_id,description,message,type,link,caption,id,created_time,full_picture,source,picture,status_type,story,attachments,likes.limit(1).summary(true))&access_token=1453222984908942|98322ff48a549c642024b7574445dda9';
      
           $json = $this->urlGetContents($url);

            if($json === false || $json == ''){

                $json = $this->urlGetContents($url);
            }

       
            $json = json_decode($json,true);

            $arr['fanpage_post'] = $json['posts']['data'];
             
             $imagen = file_get_contents($json['picture']['data']['url']);
             file_put_contents('uploads/imagenes/perfil_'.$facebook.'.jpg', $imagen);
               
             $imagen = file_get_contents($json['cover']['source']);
             file_put_contents('uploads/imagenes/cover_'.$facebook.'.jpg', $imagen);


             $imagen1=$json['picture']['data']['url'];
             $imagen2=$json['cover']['source'];

           $sql2 = "INSERT INTO topic (nombre,facebook,twitter,google,web_site,imagen1,imagen2,pais_id,ciudad_id,url_amigable) VALUES ('$nombre', '$facebook', '$twitter', '$google','$website','$imagen1','$imagen2','$pais','$ciudad','$url_amigabless')";
           $val = $this->db->query($sql2);
           $id_topic= $this->db->insert_id();


          foreach ($arr['fanpage_post'] as $key => $value) 
             { 
                
           
               $message=mysql_real_escape_string($value['message']);
               $full_picture=$value['full_picture'];
               $likes=$value['likes']['summary']['total_count'];
               $id_data=$value['id'];
               $created_time=$value['created_time'];
               $link=$value['link'];
             

               $jsonlink_link = 'https://graph.facebook.com/v2.3/'.$id_data.'?fields=message,description,picture,name&access_token=1453222984908942|98322ff48a549c642024b7574445dda9';

                $json_links = $this->urlGetContents($jsonlink_link);
                   
                $json_links = json_decode($json_links,true);

                $titulo = $json_links['name'];

                if (!empty($json_links['description'])) {

                  $message=mysql_real_escape_string($json_links['description']);
                
                }
               

             $sql2 = "INSERT INTO topic_p (id_topic, url, descripcion,imagen,id_data,created_time,likes,titulo) VALUES ('$id_topic', '$link','$message','$full_picture','$id_data','$created_time','$likes','$titulo')";
            $val = $this->db->query($sql2); 

                                               
             }
    



            // redirect('admin/diarios/lista');


    } 
        
        $news_sql = "SELECT * FROM paises";

         $arr['paises']= $this->db->query($news_sql)->result_array();

    

    $this->load->view('admin/publicar_diarios',$arr);



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


    public function lista()
  {
    
        $news_sql = "SELECT * FROM topic";

         $arr['news']= $this->db->query($news_sql)->result_array();

    

    

    $this->load->view('admin/lista_promo',$arr);



  }

      public function ciudades($id)
  {
    
        $news_sql = "SELECT * FROM ciudades where Paises_Codigo='".$id."'";

         $arr['ciudades']= $this->db->query($news_sql)->result_array();

    
  foreach ($arr['ciudades'] as $key => $value) {
          
            echo '<option value="'.$value["idCiudades"].'">'.$value["Ciudad"].'</option>';


          }
    





  }


public function urls_amigables($url) {

// Tranformamos todo a minusculas

$url = strtolower($url);

//Rememplazamos caracteres especiales latinos

$find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');

$repl = array('a', 'e', 'i', 'o', 'u', 'n');

$url = str_replace ($find, $repl, $url);

// Añaadimos los guiones

$find = array(' ', '&', '\r\n', '\n', '+'); 
$url = str_replace ($find, '-', $url);

// Eliminamos y Reemplazamos demás caracteres especiales

$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');

$repl = array('', '-', '');

$url = preg_replace ($find, $repl, $url);

return $url;

}



}
