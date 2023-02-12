<?php

use Dompdf\Dompdf;
require_once('db.php');
require_once( 'dompdf/vendor/autoload.php');
require_once ('dompdf/vendor/dompdf/dompdf/src/Dompdf.php');

function getPoste(){
    global $connexion;
    $sql="SELECT * FROM poste";
    return $connexion->query($sql)->fetchAll();
}


function generer_pdf(){
 
ob_start();
$mkd=getPoste();
require_once('pages/generer.php');
 
$html= ob_get_contents();
ob_end_clean();
$dompdf=new Dompdf();
$dompdf->loadHtml($html);
$dompdf-> render();
$dompdf->stream();
}


?>