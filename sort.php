<?php
  $names = array('shafayat', 'tazoar', 'afi' );
  rsort($names);
  //sort($names);

  echo "<ol>";
  foreach ($names as $key) {
    echo "<li>".$key."</li>";
 }
 echo "</ol>";

?>