<?php 
namespace newwwsme\Base;
use Illuminate\Database\Eloquent\Model;
class BaseEntity extends Model
{
	public function formatPhone($phone){
        $phone = str_replace('-', '', $phone);
        $phone = str_replace('(', '', $phone);
        $phone = str_replace(')', '', $phone);
        $phone = str_replace(' ', '', $phone);
        return $phone;
    }
}