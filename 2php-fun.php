<?php
//5. magic constants

my_debug("some debug message", __LINE__);
my_debug("another debug message",__LINE__);
function my_debug($msg,$line) {
  echo "Line $line: $msg\m";
}

//6. unique ID
echo uniqid();

//7. json_encode() serialization
$myvar = array(
  'hello',
  42,
  array(1, 'two'),
  'apple'
);
$string= json_encode($myvar);
echo $string;

$newvar = json_decode($string);
print_r($newvar);

//8. compress strings

$str = "La fille e un homme. ";
$compressed = gzcompress($str);

echo "Original size: ". strlen($str)."\n";

echo "Compressed size: ".strlen($compressed)."\n";
$original = gzuncompress($compressed);



//9. register_shutdown_function()

$start_time= microtime(true);
register_shutdown_function('my_shutdown');

function my_shutdown() {
  global $start_time;
  echo "execution took: ". (microtime(true) - $start_time)." seconds.";
}

?>
