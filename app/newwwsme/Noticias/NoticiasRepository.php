<?php

namespace newwwsme\newwwsme\Noticias;

use newwwsme\newwwsme\Base\BaseRepository;
use newwwsme\newwwsme\Noticias\Noticias;
use newwwsme\newwwsme\Noticias\NoticiasRepositoryInterface;

class NoticiasRepository extends BaseRepository implements NoticiasRepositoryInterface
{
    /**
     * @var Noticias
     */
    protected $model;
    /**
     * NewsRepository constructor.
     * @param News $model
     */
    public function __construct(Noticias $model)
    {
        $this->model = $model;
    }

    public function getModel()
    {
        return  $this->model;
    }
    /**
     * @overwrite method create
     * @param  array $data
     * @return Aatalac\News\News $news
    */
    public function create(array $data)
    {
        if(empty($data['body'])){
            $data['body'] = "";
        }
        $data['slug']  = str_slug($data['title']);
        $new = $this->model->create($data);
        if(isset($data['photo'])){
            $this->saveImage($new,'image',$data['photo'], $new->getPath());
        }
        return $new;
    }
    /**
     * @overwrite method update
     * @param  array $data
     * @return Aatalac\News\News $news
    */
    public function update($new, array $data){
        if(empty($data['body'])){
            $data['body'] = "";
        }
        $new->update($data);
        if(isset($data['photo'])){
            $this->saveImage($new,'image',$data['photo'],$new->getPath());
        }
        return $new;
    }
    /**
     * @overwrite method delete
     * @param  Aatalac\News\News $news
     * @return boolean
    */
    public function delete($news)
    {
        if (is_numeric($news)) {
            $news = $this->findOrFail($news);
        }

        if($news->image){
            $this->deleteImage($news->getPath(),$news->image);
        }

        $news->delete();
        return true;
    }

    public function getSortedByDate(){
        $news = $this->getModel()->where('status','active')->orderBy('created_at','desc')->paginate(10);
        return $news;
    }
    
}
