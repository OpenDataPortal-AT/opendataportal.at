<?php
/*



*/
?>

<?php

$searchStr = $_GET["q"];
$redirURL = 'http://data.opendataportal.at/dataset?q=' . $searchStr . '&sort=score+desc%2C+name+asc';

header('Location: '. $redirURL);
die();

?>