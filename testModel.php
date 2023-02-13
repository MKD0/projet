<?php
require_once('db.php');
require_once ('dompdf/vendor/dompdf/dompdf/src/Dompdf.php');
use Dompdf\Dompdf;
ob_start();
$postes=getPostes();
require_once('pages/generer.php');
require_once( 'dompdf/autoload.inc.php');
$html= ob_get_contents();
ob_end_clean();
$dompdf=new Dompdf();
$dompdf->loadHtml($html);
$dompdf-> render();
$dompdf->stream();


?>
