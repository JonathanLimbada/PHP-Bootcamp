#!/usr/bin/php
<?PHP
    if ($argc != 4)
    {
        echo "Incorrect Parameters\n";
        exit(1);
    }
    $a = trim($argv[1]);
    $x = trim($argv[2]);
    $b = trim($argv[3]);
    if (is_numeric($a) && is_numeric($b))
    {
        if ($x == '+')
            echo ($a + $b);
        if ($x == '-')
            echo ($a - $b);
        if ($x == '/')
            echo ($a / $b);
        if ($x == '*')
            echo ($a * $b);
        if ($x == '%')
            echo ($a % $b);
        echo "\n";
    }
?>