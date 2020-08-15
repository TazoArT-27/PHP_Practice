<?php

   $names = array('shafayat', 'tazoar', 'afi' );
   echo '<pre>';
   print_r($names);

   $names[3] = "jamesbond";
   echo '<pre>';
   print_r($names);


   echo $names[2];

   echo "</br>";
   echo "</br>";

   $arrlen = count($names);
   echo $arrlen;

   echo "</br>";
   echo "</br>";

   for($i=0; $i<$arrlen; $i++){
       echo "</br>".$names[$i]."</br>";
   }

   echo "<ol>";
   for($i=0; $i<$arrlen; $i++){
    echo "<li>".$names[$i]."</li>";
}
   echo "</ol>";


?>