#!/usr/bin/php
<?php
 while($log = fgets(STDIN)){
    $matches = explode(",", $log,2);    
    $res[trim($matches[1])] = $matches[0];
} 
$key=0;
foreach($res as $key=>$value){
 $key++; $unique = rand(0,21474836) + 1;
    if(trim($key) != null)
      print_r("$unique,$value,$key\n");
}

?>
