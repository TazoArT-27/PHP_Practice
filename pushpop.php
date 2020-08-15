<?php
  $names = array('shafayat', 'tazoar', 'afi' );
  rsort($names);
  //sort($names);

  echo "<ol>";
  foreach ($names as $key) {
    echo "<li>".$key."</li>";
 }
 echo "</ol>";

 array_pop($names);
 echo '<pre>';
 print_r($names);

 array_push($names, "jamesbond");
 echo '<pre>';
 print_r($names);
?>