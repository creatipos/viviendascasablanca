<?php

namespace newwwsme\Http\Controllers\Admin;

use Illuminate\Http\Request;
use newwwsme\Http\Controllers\Controller;
use newwwsme\newwwsme\Modelos\Modelos;
use newwwsme\newwwsme\Multimedia;
use newwwsme\newwwsme\Modelos\Modelos_img;
use newwwsme\newwwsme\Modelos\ModelosRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use File;
use Intervention\Image\ImageManagerStatic as Image;

class ModelosController extends Controller
{

    private $modelos;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function __construct(ModelosRepositoryInterface $modelos)
    {
        $this->middleware('auth');
        $this->news = $modelos;
    }

    public function index()
    {
        $data['noticias'] = $this->news->all();


        return view('admin/modelos/index',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
           return view('admin/modelos/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

        if ($request->destacar=="on") {
           
           $destacar = 1;

        }else{

            $destacar = 0;
        }

       if ($request->estado=="on") {
           
           $estado = 1;

        }else{

            $estado = 0;
        }

        if ($request->cotizacion=="on") {
           
            $cotizacion = 1;
 
         }else{
 
             $cotizacion = 0;
         }

        // Creación del noticias
        $Modelos = Modelos::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'm2' => $request->m2,
            'ambientes' => $request->ambientes,
            'bano' => $request->banos,
            'destacada' => $destacar,
            'slug' => str_slug($request->titulo)
            
        ]);


        if(isset($request->fotos)){
        
            foreach ($request->fotos as $value)
               {

                // Creación del noticias
                $multimedia = Multimedia::create([
                    'titulo' => $value,
                    'path' => $value,
                    'formato' => 'img'
                    
                ]);

                $Modelos_img = Modelos_img::create([
                    'multimedia_id' => $multimedia->id,
                    'modelos_id' => $Modelos->id,
                    
                ]);

               }
            //$this->saveImage($noticia,'img',$request->foto, $noticia->getPath());

        }

        $request->session()->flash('ok', 'Se creó la noticia correctamente!');

       return redirect()->to('/admin/modelos');
        
    }


        public function saveImage($entity,$attribute,$image,$path){

        if(file_exists($image)){
            
            if($entity[$attribute]!="default.png"){
               // $this->deleteImage($path,$entity[$attribute]);
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
            //$this->deleteImage($path,$entity[$attribute]);
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['new'] = Modelos::where('id',$id)->firstOrFail();

        return view('admin/modelos/create',$data);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
              $modelos = Modelos::findOrFail($request->id_n);

              if ($request->destacar=="on") {
           
                $destacar = 1;
     
             }else{
     
                 $destacar = 0;
             }
     
            if ($request->estado=="on") {
                
                $estado = 1;
     
             }else{
     
                 $estado = 0;
             }
     

              if(isset($request->foto)){

                $this->saveImage($modelos,'img',$request->foto, $modelos->getPath());
    
            }


         $modelos->update([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'm2' => $request->m2,
            'ambientes' => $request->ambientes,
            'bano' => $request->banos,
            'destacada' => $destacar,
            'slug' => str_slug($request->titulo)



          ]);

    return redirect()->to('/admin/modelos/editar/'.$request->id_n);


    }

    public function upload(Request $request)
    {

        $path = $_SERVER["DOCUMENT_ROOT"] . '/images/modelos/';

        if(isset($request->file)){

            return  $this->Modeloupload($request->file, $path);

        }



    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Modelos::where('id', $id)->delete();

        return redirect()->to('/admin/modelos');
    }


    public function Modeloupload($image,$path){

        if(file_exists($image)){


            $ext = $image->guessClientExtension();
            if($ext=="jpeg"){
                $ext = "jpg";
            }
            list($width, $height) = getimagesize($image);
            $rand = str_random(3);
            $file_name =  $rand.date('dmYs').'.'.$ext;
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

            return $file_name;

        }else{

            $imageBase64 = json_decode($image);
            $imageBase64 = $imageBase64->output->image;
            $imageAux = Image::make($imageBase64);
            $ext = "jpg";
            $rand = str_random(3);
            $file_name = $rand.date('dmYs').'.'.$ext;
            $imageAux->save($path.$file_name, 60);

            return $file_name;

        }
    }


}
