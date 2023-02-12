<?php
function forcertelechargement($nom, $situation, $poids){
    header('Content-Type: application/octet-stream');
    header('Content-Length: '. $poids);
    header('Content-disposition: attachment; filename='. $nom);
    header('Pragma: no-cache');
    header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    header('Expires: 0');
    readfile($situation);
    exit();

}
if(isset($_GET['ft']) && isset($_GET['ch'])){
    $nom = $_GET['ft'];
    $situation = ''.$_GET['ch'].$_GET['ft'];
    $poids = filesize($situation);
  
    forcertelechargement($nom, $situation, $poids);
}
?>