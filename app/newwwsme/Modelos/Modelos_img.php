<?php

namespace newwwsme\newwwsme\Modelos;

use Illuminate\Database\Eloquent\Model;

use newwwsme\Base\BaseEntity;

class Modelos_img extends Model
{
     protected $table = 'modelos_img';
     public $timestamps = false;

     public function media()
     {
          return $this->hasOne('newwwsme\newwwsme\Multimedia','id','modelos_id');
     }

     protected $guarded = ['id'];

}
