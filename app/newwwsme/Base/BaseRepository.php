<?php
namespace newwwsme\newwwsme\Base;
use File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

abstract class BaseRepository {
    /*const PAGINATE = true;
    public $filters = [];*/

    abstract public function getModel();
    /**
     * Add user admin for the restaurant
     * @param  $id
     * @return  Entity
     */

    public function all()
    {
        return $this->getModel()->orderBy('id', 'desc')->get();
    }

        public function tend()
    {
        return $this->getModel()->where('rss',1)->where('cat',2)->orderBy('id', 'desc')->limit(5)->get();
    }

    public function destacada()
    {
        //return $this->getModel()->where('rss',1)->limit(5)->get();
        return $this->getModel()->where('destacada',1)->orderBy('id', 'desc')->first();
    }

        public function deportes()
    {
        return $this->getModel()->where('rss',1)->where('cat',3)->orderBy('id', 'desc')->limit(3)->get();
        //return $this->getModel()->where('destacada',1)->first();
    }

    public function latest()
    {
        return $this->getModel()->latest()->get();
    }
    public function findOrFail($id)
    {
        return $this->getModel()->findOrFail($id);
    }
    public function find($id)
    {
        return $this->getModel()->find($id);
    }
    public function create(array $data)
    {
        return $this->getModel()->create($data);
    }
    public function update($entity, array $data)
    {
        $entity->fill($data);
        $entity->save();
        return $entity;
    }
    public function delete($entity)
    {
        if (is_numeric($entity))
        {
            $entity = $this->findOrFail($entity);
        }
        $entity->delete();
        return $entity;
    }
    /**
     * Save image
     * @param  $entity
     * @param  $attribute
     * @param  $image
     * @param  $path
    */
    public function saveImage($entity,$attribute,$image,$path){

        if(file_exists($image)){
            if($entity[$attribute]!="default.png"){
                $this->deleteImage($path,$entity[$attribute]);
            }
                //Storage::delete('/restaurants/'.$entity["id"].'/'.$entity[$attribute]);

            $ext = $image->guessClientExtension();
            if($ext=="jpeg"){
                $ext = "jpg";
            }
            list($width, $height) = getimagesize($image);
            $rand = str_random(16);
            $file_name = $entity->id.'_'.$rand.'.'.$ext;
            $entity[$attribute] = $file_name;
            $entity->save();
            if(!File::exists($path)){
                File::makeDirectory($path,0777,true);
            }
            if($width > 1242){
                $imgAux = Image::make($image);
                $imgAux->resize(1242, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $imgAux->save($path.$file_name, 60);
            }else{
                $imgAux = Image::make($image);
                $imgAux->save($path.$file_name, 60);
            }

        }else{
            $this->deleteImage($path,$entity[$attribute]);
            //USO DE SLIM IMAGE CROPPER (envia el recorte en base64)
            $imageBase64 = json_decode($image);
            $imageBase64 = $imageBase64->output->image;
            $imageAux = Image::make($imageBase64);
            $ext = "jpg";
            $rand = str_random(16);
            $file_name =  $entity->id.'_'.$rand.'.'.$ext;
            $imageAux->save($path.$file_name, 60);
            $entity[$attribute] = $file_name;
            $entity->save();

        }
    }
    /**
     * Delete image
     * @param  $path
     * @param  $name
    */
    public function deleteImage($path,$name)
    {
        if(!File::exists($path.$name)){
           return "File does not exist";
        }
        File::delete($path.$name);
    }

    public function updatePositions($positions){
        $positions = json_decode($positions);
        if(count($positions)>0){
            foreach ($positions as $key => $value) {
                $entityAux = $this->findOrFail($key);
                $entityAux->position = $value;
                $entityAux->save();
            }
        }
    }

    public function updatePositionsEntity($entity,$positions){
        $positions = json_decode($positions);
        if(count($positions)>0){
            foreach ($positions as $key => $value) {
                $entityAux = $entity::findOrFail($key);
                $entityAux->position = $value;
                $entityAux->save();
            }
        }

    }


    public function findBySlug($slug){
        $obj = $this->getModel()->where('slug',$slug)->first();
        return $obj;
    }

}