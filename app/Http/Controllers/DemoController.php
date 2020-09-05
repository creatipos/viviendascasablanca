<?php

namespace newwwsme\Http\Controllers;

use Illuminate\Http\Request;
use newwwsme\newwwsme\Noticias\Noticias;


class DemoController extends Controller
{
    

    public function demo(){
          
        $data['demo'] = 'hola mundu cruel';
        $data['noticias']=Noticias::get();
        return view('welcome',$data);

    }


}
