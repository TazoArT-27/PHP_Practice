<?php
  $names = array('shafayat', 'tazoar', 'afi' );
  rsort($names);
  //sort($names);

  echo "<ol>";
  foreach ($names as $key) {
    echo "<li>".$key."</li>";
 }
 echo "</ol>";

 array_shift($names);
 echo '<pre>';
 print_r($names);

 array_unshift($names, "jamesbond");
 echo '<pre>';
 print_r($names);
?>