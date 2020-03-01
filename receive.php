<?php
if(!empty($_POST['data'])){
$data = $_POST['data'];
$fname = time() . ".txt";//generate txt file with the current timestamp as the name

$file = fopen($fname, 'w');//creates a new file
fwrite($file, $data);
fclose($file);
}
?>