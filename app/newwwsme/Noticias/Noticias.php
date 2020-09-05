<?php

namespace newwwsme\newwwsme\Noticias;

use Illuminate\Database\Eloquent\Model;

use newwwsme\Base\BaseEntity;

class Noticias extends Model
{
     protected $table = 'noticias';

         public function getPath()
    {
        return $_SERVER["DOCUMENT_ROOT"] . '/images/news/';
    }
 

     protected $guarded = ['id'];

}
