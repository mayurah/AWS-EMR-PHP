#!/usr/bin/php
<?php

 while($log = fgets(STDIN)){
    preg_match('/^(\S+) (\S+) (\S+) \[([^:]+):(\d+:\d+:\d+) ([^\]]+)\] \"(\S+) (.*?) (\S+)\" (\S+) (\S+) (\".*?\") (\".*?\")$/',$log, $matches);
    print_r(str_ireplace(',','',$matches[10]) . ',' . str_ireplace(',','',substr($matches[8],0,100))  . "\n");
} 

?>
