<?php

$fd = fopen('el_quijote.txt','r');

while (($contenido = fgets($fd)) !== false){
  echo "La palabra molino aparece" . substr_count($contenido, "molino") . "veces" . "\n";
}
