<?php

namespace newwwsme\newwwsme;

use Illuminate\Database\Eloquent\Model;

use newwwsme\Base\BaseEntity;

class Multimedia extends Model
{
     protected $table = 'multimedia';

     public $timestamps = false;

     protected $guarded = ['id'];

}
