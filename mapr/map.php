#!/usr/bin/php
<?php

 while($log = fgets(STDIN)){
    preg_match('/^(\S+) (\S+) (\S+) \[([^:]+):(\d+:\d+:\d+) ([^\]]+)\] \"(\S+) (.*?) (\S+)\" (\S+) (\S+) (\".*?\") (\".*?\")$/',$log, $matches);
    print_r($matches[10] . ',' . $matches[8]  . "\n");
} 

?>
