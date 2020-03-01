<?php
if(!empty($_POST['data'])){
$data = $_POST['data'];
$fname = time() . ".txt";
  
$file = fopen($fname, 'w');
fwrite($file, $data);
fclose($file);
}
?>
