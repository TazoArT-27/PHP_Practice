<?php
   echo str_replace("Shafayat", "Afi", "Shafayat Tazoar");
   echo "</br>";
   echo str_ireplace("shafayat", "Afi", "Shafayat Tazoar");
   echo "</br>";
   $name = "Shafayat|Tazoar|Afi";
   echo str_replace("|", " ","$name");
?>