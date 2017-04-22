<?php

$q=rawurlencode($_POST["name"]);



if (empty($_POST["ftype"]))
echo "erro";


$ft=$_POST["ftype"];

$ch = "http://www.google.com/search?q=$ft%20$q";

   header('Location: ' . $ch);
 ?>
