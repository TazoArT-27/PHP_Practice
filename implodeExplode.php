<?php
   $names = array('shafayat', 'tazoar', 'afi' );
   $result = implode(" ", $names);
   echo $result;
   echo "</br>";


   $myName = "my name is shafayat tazoar afi";
   $explode = explode(" ", $myName);
   echo "<pre>";
   print_r($explode);
   echo "</br>";
   echo "</br>";
   foreach ($explode as $key) {
       echo $key;
   }
?>