#!/usr/bin/php
<?PHP
    $int = 1;
    $arg = preg_split("/[\s,]+/", trim($argv[1]));
    $int = 1;
    while ($arg[$int])
    {
        echo "$arg[$int] ";
        $int++;
    }
    echo "$arg[0]";
    if ($argc >= 2)
        echo "\n";
?>