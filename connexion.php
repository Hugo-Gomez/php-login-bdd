<?php

include "index.php";
include "action.php";

  if($select->rowCount() > 0){
    echo '<h2>Welcome ' . $username . '</h2>';
    die();
  }
  else {
    echo "Les informations sont éronnées";
    die();
  }

?>
