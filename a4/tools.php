<?php
  session_start();

// Put your PHP functions and modules here

function preShow($arr, $returnasastring=false){
  $remember = "<pre>".print_r($arr,true)."</pre>";
  if($returnasastring){
      return $remember;
  }
  else{
      echo $remember;
  }
}

?>