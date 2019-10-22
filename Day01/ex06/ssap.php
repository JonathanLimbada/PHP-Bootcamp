#!/usr/bin/php
<?PHP
    $int = 1;
    while ($argv[$int])
    {
        $str .= " $argv[$int]";
        $str = trim($str);
        $int++;
    }
    $arg = preg_split("/[\s,]+/", "$str");
    sort($arg);
    $int = 0;
    while($arg[$int])
    {
        echo "$arg[$int]\n";
        $int++;
    }
?>