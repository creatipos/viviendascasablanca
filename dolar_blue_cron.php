<?php



ini_set('display_errors', 1);

 date_default_timezone_set('America/Argentina/Buenos_Aires');

        // $dbhost = "localhost";

        // $dbuser = "dolar";

        // $dbpass = "lu15.gomez";

        // $dbname = "dolar_web";



        // $dbh = mysqli_connect($dbhost,$dbuser, $dbpass);

        // mysql_select_db("$dbname") or die ("Error!");


$con = mysqli_connect("localhost","dolar","lu15.gomez","dolar_web");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



include("simple_html_dom.php");

















// Create DOM from URL or file

$html = file_get_html('http://www.ambito.com/economia/mercados/monedas/dolar/');



$fecha=date('Y-m-d');





//dolar oficial

$oficial= $html->find('div.bonosPrincipal',0);

$oficial_t= $oficial->find('h2',0)->plaintext;

$oficial_va= $oficial->find('div.variacion',0)->plaintext;

$oficial_u= $oficial->find('div.ultimo',0);

$oficial_u= $oficial_u->find('big',0)->plaintext;

$oficial_ant= $oficial->find('div.cierreAnterior',0);

$oficial_ant= $oficial_ant->find('big',0)->plaintext;





$cons2="select * from cotizaciones where fecha='$fecha' and id_moneda='1'";

$resu2=mysqli_query($con,$cons2);



$regi3=mysqli_fetch_array($resu2);



$id=$regi3['id'];



if (empty($regi3['fecha'])) {



$sql = "INSERT INTO `cotizaciones` (compra,venta,variacion,fecha,id_moneda) VALUES ('$oficial_u','$oficial_ant','$oficial_va','$fecha','1')";

mysqli_query($con,$sql);



echo "Nuevo Oficial <br>";



}else{





$sSQL="Update cotizaciones Set compra='$oficial_u',venta='$oficial_ant',fecha='$fecha',variacion='$oficial_va' Where id=$id";

mysqli_query($con,$sSQL);



echo "Actualizado Oficial <br>";



}





/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////







//dolar blue

$blue= $html->find('div.bonosPrincipal',1);

$blue_t= $blue->find('h2',0)->plaintext;

$blue_va= $blue->find('div.variacion',0)->plaintext;

$blue_u= $blue->find('div.ultimo',0);

$blue_u= $blue_u->find('big',0)->plaintext;

$blue_ant= $blue->find('div.cierreAnterior',0);

$blue_ant= $blue_ant->find('big',0)->plaintext;





$cons22="select * from cotizaciones where fecha='$fecha' and id_moneda='2'";

$resu22=mysqli_query($con,$cons22);



$regi32=mysqli_fetch_array($resu22);



$id2=$regi32['id'];



if (empty($regi32['fecha'])) {



$sql = "INSERT INTO `cotizaciones` (compra,venta,variacion,fecha,id_moneda) VALUES ('$blue_u','$blue_ant','$blue_va','$fecha','2')";

mysqli_query($con,$sql);



echo "Nuevo blue <br>";



}else{





$sSQL="Update cotizaciones Set compra='$blue_u',venta='$blue_ant',fecha='$fecha',variacion='$blue_va' Where id=$id2";

mysqli_query($con,$sSQL);



echo "Actualizado blue <br>";



}





/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//dolar soja

$soja= $html->find('div.bonosPrincipal',2);

$soja_t= $soja->find('h2',0)->plaintext;

$soja_va= $soja->find('div.variacion',0)->plaintext;

$soja_ant= $soja->find('div.cierreAnteriorUnico',0);

$soja_ant= "";//$soja_ant->find('big',0)->plaintext;





$cons22="select * from cotizaciones where fecha='$fecha' and id_moneda='3'";

$resu22=mysqli_query($con,$cons22);



$regi32=mysqli_fetch_array($resu22);



$id2=$regi32['id'];



if (empty($regi32['fecha'])) {



$sql = "INSERT INTO `cotizaciones` (compra,venta,variacion,fecha,id_moneda) VALUES ('','$soja_ant','$soja_va','$fecha','3')";

mysqli_query($con,$sql);



echo "Nuevo soja <br>";



}else{





$sSQL="Update cotizaciones Set compra='',venta='$soja_ant',fecha='$fecha',variacion='$soja_va' Where id=$id2";

mysqli_query($con,$sSQL);



echo "Actualizado soja <br>";



}





/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////







//MAYORISTA BANCOS

$mayor= $html->find('div.bonosPrincipal',3);

$mayor_t= $mayor->find('h2',0)->plaintext;

$mayor_va= $mayor->find('div.variacion',0)->plaintext;

$mayor_u= $mayor->find('div.ultimo',0);

$mayor_u= "";//$mayor_u->find('big',0)->plaintext;

$mayor_ant= $mayor->find('div.cierreAnterior',0);

$mayor_ant= "";//$mayor_ant->find('big',0)->plaintext;





$cons22="select * from cotizaciones where fecha='$fecha' and id_moneda='4'";

$resu22=mysqli_query($con,$cons22);



$regi32=mysqli_fetch_array($resu22);



$id2=$regi32['id'];



if (empty($regi32['fecha'])) {



$sql = "INSERT INTO `cotizaciones` (compra,venta,variacion,fecha,id_moneda) VALUES ('$mayor_u','$mayor_ant','$mayor_va','$fecha','4')";

mysqli_query($con,$sql);



echo "Nuevo mayorista <br>";



}else{





$sSQL="Update cotizaciones Set compra='$mayor_u',venta='$mayor_ant',fecha='$fecha',variacion='$mayor_va' Where id=$id2";

mysqli_query($con,$sSQL);



echo "Actualizado mayorista <br>";



}





/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////









//CONTADO CON LIQUIDACIÓN

$contado= $html->find('div.bonosPrincipal',4);

$contado_t= $contado->find('h2',0)->plaintext;

$contado_va= $contado->find('div.variacion',0)->plaintext;

$contado_ant= $contado->find('div.cierreAnteriorUnico',0);

$contado_ant= $contado_ant->find('big',0)->plaintext;





$cons22="select * from cotizaciones where fecha='$fecha' and id_moneda='5'";

$resu22=mysqli_query($con,$cons22);



$regi32=mysqli_fetch_array($resu22);



$id2=$regi32['id'];



if (empty($regi32['fecha'])) {



$sql = "INSERT INTO `cotizaciones` (compra,venta,variacion,fecha,id_moneda) VALUES ('','$contado_ant','$contado_va','$fecha','5')";

mysqli_query($con,$sql);



echo "Nuevo mayorista <br>";



}else{





$sSQL="Update cotizaciones Set compra='',venta='$contado_ant',fecha='$fecha',variacion='$contado_va' Where id=$id2";

mysqli_query($con,$sSQL);



echo "Actualizado mayorista <br>";



}





/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//DÓLAR BOLSA

$bolsa= $html->find('div.bonosPrincipal',5);

$bolsa_t= $bolsa->find('h2',0)->plaintext;

$bolsa_va= $bolsa->find('div.variacion',0)->plaintext;

$bolsa_ant= $bolsa->find('div.cierreAnteriorUnico',0);

$bolsa_ant= $bolsa_ant->find('big',0)->plaintext;





$cons22="select * from cotizaciones where fecha='$fecha' and id_moneda='6'";

$resu22=mysqli_query($con,$cons22);



$regi32=mysqli_fetch_array($resu22);



$id2=$regi32['id'];



if (empty($regi32['fecha'])) {



$sql = "INSERT INTO `cotizaciones` (compra,venta,variacion,fecha,id_moneda) VALUES ('','$bolsa_ant','$bolsa_va','$fecha','6')";

mysqli_query($con,$sql);



echo "Nuevo bolsa <br>";



}else{





$sSQL="Update cotizaciones Set compra='',venta='$bolsa_ant',fecha='$fecha',variacion='$bolsa_va' Where id=$id2";

mysqli_query($con,$sSQL);



echo "Actualizado bolsa <br>";



}





/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





$json = file_get_contents('https://blockchain.info/es/ticker');

$data = json_decode($json, TRUE);







$compra=$data['USD']['buy'];

$venta=$data['USD']['sell'];



$cons22="select * from cotizaciones where fecha='$fecha' and id_moneda='7'";

$resu22=mysqli_query($con,$cons22);



$regi32=mysqli_fetch_array($resu22);



$id2=$regi32['id'];



if (empty($regi32['fecha'])) {



$sql = "INSERT INTO `cotizaciones` (compra,venta,variacion,fecha,id_moneda) VALUES ('$compra','$venta','','$fecha','7')";

mysqli_query($con,$sql);



echo "Nuevo bitcoin <br>";



}else{





$sSQL="Update cotizaciones Set compra='$compra',venta='$venta',fecha='$fecha',variacion='' Where id=$id2";

mysqli_query($con,$sSQL);



echo "Actualizado bitcoin <br>";



}





/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//$html= $html->find('div.bonosPrincipal');











// foreach ($html as $key => $value) {



//  $titulo= $value->find('h2',0)->plaintext;

//  $variacion= $value->find('div.variacion',0)->plaintext;

//  $ultimo= $value->find('div.ultimo',0);

//  $ultimo= $ultimo->find('big',0)->plaintext;

//  $cierreAnterior= $value->find('div.cierreAnterior',0)->plaintext;

//  $cierreAnteriorUnico= $value->find('div.cierreAnteriorUnico',0)->plaintext;



//   echo $titulo."<br>";

//   echo $variacion."<br>";

//   echo $ultimo."<br>";

//   echo $cierreAnterior."<br>";

//   echo $cierreAnteriorUnico."<br>";







// }







$url = 'https://www.google.com.ar/trends/api/stories/latest?hl=es&cat=b&fi=1&fs=1&geo=AR&ri=300&rs=100&tz=180';







$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

curl_setopt($curl, CURLOPT_HEADER, false);

$data = curl_exec($curl);

curl_close($curl);







$data=file_get_contents($url);





//$file=file_get_contents("destac.txt");



$data= str_replace(")]}'"," ",$data);



//$data= str_replace(")]}'"," ",$data);





//file_put_contents('nombredelarchivo.txt', $data);





//echo $data;



$data = json_decode($data, TRUE);





$noticias = array();



//print_r($data['storySummaries']['trendingStories']);





$i=0;

foreach ($data['storySummaries']['trendingStories'] as $key => $value) { 



$url= $value['articles'][0]['url'];

$titulo= utf8_decode($value['articles'][0]['articleTitle']);

$img= $value['image']['imgUrl'];

$fuente= $value['articles'][0]['source'];



$cons22="select * from noticiastend where url='$url'";

$resu22=mysqli_query($con,$cons22);



$regi32=mysqli_fetch_array($resu22);







if (empty($regi32['url'])) {



$sql = "INSERT INTO `noticiastend` (titulo,img,url,fuente) VALUES ('$titulo','$img','$url','$fuente')";

mysqli_query($con,$sql);



echo "Nuevo Nota <br>";



}

    

$noticias[] = array('titulo' => $value['articles'][0]['articleTitle'],'url' => $value['articles'][0]['url'], 'imagen' => $value['image']['imgUrl'], 'fuente' => $value['articles'][0]['source']);





if ($i==8) {

  break;

}







$i++;



}











?>