#!/usr/bin/php
<?PHP
    $array = [];
    $main = $argv[1];
    $i = 2;
    while($i < $argc)
    {
        $s = explode(":", $argv[$i]);
        $array[$s[0]] = $s[1];
        $i++;
    }
    if ($array[$main])
        print("$array[$main]\n");
?>