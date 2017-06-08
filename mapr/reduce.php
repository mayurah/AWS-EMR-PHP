#!/usr/bin/php
<?php
 while($log = fgets(STDIN)){
    $matches = explode(",", $log,2);
    $res[trim($matches[1])] = $matches[0];
} 
foreach($res as $key=>$value)
    print_r("$value,$key\n");

?>
