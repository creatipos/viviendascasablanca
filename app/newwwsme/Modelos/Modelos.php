<?php

namespace newwwsme\newwwsme\Modelos;

use Illuminate\Database\Eloquent\Model;

use newwwsme\Base\BaseEntity;

class Modelos extends Model
{
     protected $table = 'modelos';

         public function getPath()
    {
        return $_SERVER["DOCUMENT_ROOT"] . '/images/news/';
    }

    public function imgs()
    {
         return $this->hasMany('newwwsme\newwwsme\Modelos\Modelos_img','modelos_id','id');
    }
    
 

     protected $guarded = ['id'];

}
