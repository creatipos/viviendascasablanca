<?php

namespace newwwsme\Http\Controllers\www;

use Illuminate\Http\Request;
use newwwsme\Http\Controllers\Controller;
use newwwsme\newwwsme\cotizaciones;
use newwwsme\newwwsme\Noticias\Noticias;
use newwwsme\newwwsme\Modelos\Modelos;
use newwwsme\newwwsme\Noticias\NoticiasRepositoryInterface;
use Google\GTrends;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct(NoticiasRepositoryInterface $noticias)
    {
        //$this->middleware('auth');
        $this->news = $noticias;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        setlocale(LC_TIME, 'es_ES');

        $data['noticias_col1']=Noticias::orderBy('id', 'desc')->skip(0)->take(1)->get();

        $data['noticias_col2']=Noticias::orderBy('id', 'desc')->skip(1)->take(2)->get();

        $data['modelos']=Modelos::where('destacada','1')->orderBy('id', 'desc')->get();

        $instaResult = $this->curl_get_contents('https://www.instagram.com/viviendas_casablanca/?__a=1');
       
        $data['insta'] = json_decode($instaResult);



        return view('www/home',$data);

    }

    public function curl_get_contents($url)
{
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}


    public function modelos()
    {

        setlocale(LC_TIME, 'es_ES');

        $data['modelos']=Modelos::orderBy('id', 'desc')->get();
        $data['tipo']= "oficial";



        return view('www/modelos',$data);

    }





        public function noticia($id)
    {

        setlocale(LC_TIME, 'es_ES');

        $data['dolar']=cotizaciones::where('id_moneda',1)->orderBy('id', 'desc')->first();
        $data['dolar_b']=cotizaciones::where('id_moneda',2)->orderBy('id', 'desc')->first();
        $data['euro']=cotizaciones::where('id_moneda',3)->orderBy('id', 'desc')->first();
        $data['real']=cotizaciones::where('id_moneda',4)->orderBy('id', 'desc')->first();
        $data['merval']=cotizaciones::where('id_moneda',5)->orderBy('id', 'desc')->first();
        $data['mervalarg']=cotizaciones::where('id_moneda',6)->orderBy('id', 'desc')->first();
        $data['noticiasg'] = $this->news->tend();

        $data['noticia'] = $this->news->findBySlug($id);

        $data['noticia']->increment('visitas');
        if ($data['noticia']->rss==1) {

            
          
           return view('www/noticia_tend',$data);


        }else{

          

           return view('www/noticia',$data);

        }



        

    }


    public function contacto(Request $request)
    { 

              //  Send mail to admin
             $hola= \Mail::send('mail', array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('cel'),
                // 'subject' => $request->get('subject'),
                // 'user_query' => $request->get('message'),
            ), function($message) use ($request){
                $message->from($request->email);
                $message->to('contacto@viviendascasablanca.com.ar', 'Admin')->subject('Contacto desde la web');
            });
    
            return back()->with('success', 'Su mensaje se envio correctamente, nos pondremos en contacto con usted. '.$hola);


    }

}
