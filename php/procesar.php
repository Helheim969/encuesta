<?php
$html="";
$VAR1="<img src='/Encuesta/img/";
$VAR2=".png' alt='' style='width:100px;height:100px;'>";

foreach($_GET as $item=>$item2){

    $html.="{$VAR1}{$item}{$VAR2}";
}

echo '<h1 style="text-align:center;">Usted ha seleccionado:</h1> <br>';
   echo '<div style="text-align:center;">'.$html.'</div>';


?>
