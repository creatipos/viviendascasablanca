<?php

namespace newwwsme\Http\Controllers\Admin;

use Illuminate\Http\Request;
use newwwsme\Http\Controllers\Controller;
use newwwsme\newwwsme\Noticias\Noticias;
use newwwsme\newwwsme\Noticias\NoticiasRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use File;
use Intervention\Image\ImageManagerStatic as Image;

class NoticiasController extends Controller
{

    private $noticias;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function __construct(NoticiasRepositoryInterface $noticias)
    {
        $this->middleware('auth');
        $this->news = $noticias;
    }

    public function index()
    {
        $data['noticias'] = $this->news->all();


        return view('admin/noticias/index',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
           return view('admin/noticias/create');

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
        $noticia = Noticias::create([
            'titulo' => $request->titulo,
            'hastag' => $request->hastag,
            'epigrafe' => $request->epigrafe,
            'copete' => $request->copete,
            'curepo' => $request->cuerpo,
            'estado' => $estado,
            'cat' => 0,
            'destacada' => $destacar,
            'cotizacion' => $cotizacion,
            'slug' => str_slug($request->titulo)
            
        ]);


        if(isset($request->foto)){

            $this->saveImage($noticia,'img',$request->foto, $noticia->getPath());

        }

        $request->session()->flash('ok', 'Se creó la noticia correctamente!');

       return redirect()->to('/admin/noticias');
        
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
        $data['new'] = Noticias::where('id',$id)->firstOrFail();

        return view('admin/noticias/create',$data);
        
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
              $noticias = Noticias::findOrFail($request->id_n);

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

              if(isset($request->foto)){

                $this->saveImage($noticias,'img',$request->foto, $noticias->getPath());
    
            }


         $noticias->update([

            'titulo' => $request->titulo,
            'copete' => $request->copete,
            'curepo' => $request->cuerpo,
            'hastag' => $request->hastag,
            'estado' => $estado,
            'cat' => 0,
            'destacada' => 0,
            'cotizacion' => $cotizacion



          ]);

    return redirect()->to('/admin/noticias/editar/'.$request->id_n);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             Noticias::where('id', $id)->delete();

    return redirect()->to('/admin/noticias');
    }
}
