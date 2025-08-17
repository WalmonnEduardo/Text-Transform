<?php
require_once(__DIR__."/Texto.php");
$lista = ["Fulano Não Sei da Silva","João da Silva","Felipe"];
$listaNova = Texto::alinhar($lista);
foreach($listaNova as $ln)
{
    print $ln.":\n";
}
?>
