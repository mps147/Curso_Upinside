<?php

header('Content-Type: text/html; charset=utf-8');

$Bolsa = "Marron";

if (!empty($Bolsa)):
  if($Bolsa == "Vermelha"):
    echo "Comprei a bolsa";
  elseif($Bolsa == "Preta"):
    echo "Comprei a preta pois não tinha a vermelha";
  else:
    echo "Não tem as cores. Posso levar outra?<br/>";
    $Resposta = true;
    if($Resposta):
      echo "Pode sim. Traga qualquer uma!";
    else:
      echo "O sofa te espera!";
    endif;
  endif;
else:
  echo "Não tem mais a bolsa :/";
endif;
