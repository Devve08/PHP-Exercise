

<?php

$arraymy= array(
   "Musicals" => array("Oklahoma", "The Music Man", "South Pacific"),
    "Dramas" => array("Lawrence of Arabia", "To Kill a Mockingbird", "Casablanca"),
    "Mysteries" => array("The Maltese Falcon", "Rear Window", "North by Northwest")
);
  

$keys = array_keys($arraymy);
for($i = 0; $i < count($arraymy); $i++) {
    echo $keys[$i] . "<br>";
    foreach($arraymy[$keys[$i]] as $key => $value) {
        echo "--->" . $key . " = " . $value . "<br>";
    }
    echo "<br>";
}

