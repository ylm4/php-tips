<?php
//1. function get arguements
function foo() 
{
  $args = func_get_args();
  foreach ($args as $k => $v) {
    echo "arg" . ($k+1) . ": $v\n";
	}
}
foo();

foo('hello');

foo('hello','world','again');


//2. using glob() to find files

//to get php files
$files= glob('*.php');

print_r($files);



//to get php files and text files
$files= glob('*.{php,txt}', GLOB_BRACE);
print_r($files);



//get files with path ---will output empty array b/c I have no jpg files
$files= glob('../images/a*.jpg');
print_r($files);


//to get full path to each file using realpath()---will output empty array
$files= glob('../images/a*.jpg');
print_r($files);

//3. memory usage
echo "Initial: ".memory_get_usage()." bytes \n";
for($i = 0; $i <100000; $i++) {
  $array[]=md5($i);
}
for ($i=0; $i <100000; $i++) {
  unset($array[$i]);
}

echo "Final: ".memory_get_usage()." bytes \n";

echo "Peak: ".memory_get_usage()." bytes \n";


//4. CPU Usage Information getrusage()
print_r(getrusage());




?>
