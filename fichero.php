<?php

$fd = fopen('https://gist.githubusercontent.com/jsdario/6d6c69398cb0c73111e49f1218960f79/raw/8d4fc4548d437e2a7203a5aeeace5477f598827d/el_quijote.txt','r');

while (($contenido = fgets($fd)) !== false){
  echo "La palabra molino aparece" . substr_count($contenido, "molino") . "veces" . "\n";
}
