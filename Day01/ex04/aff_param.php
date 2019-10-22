#!/usr/bin/php
<?PHP
    $int = 1;
    foreach(array_slice($argv, 1) as $arg)
        echo ("$arg\n");
?>