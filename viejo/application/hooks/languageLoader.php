<?php
class LanguageLoader
{
    
    function initialize() {
    $ci =& get_instance();
    $ci->load->helper('language');  
    $this->CI = & get_instance();

         $url_sin=str_replace ('http://','','http://ar.picker-news.com/');
      
         $array = explode(".", $url_sin);

 
       

    }
}

