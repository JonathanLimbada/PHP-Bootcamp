#!/usr/bin/php
<?PHP
    $i = 0;
    if ($argc != 2)
    {
        echo "Incorrect Parameters\n";
        exit(1);
    }
    while($argv[1][$i])
    {
        if (ctype_alpha($argv[1][$i]))
        {
            echo "Syntax Error\n";
            exit(1);
        }
        $i++;
    }
    $info = preg_match("/\s*(.+)\s*([+,-,\*,\/,%])\s*(.+)\s*/", $argv[1], $s);
    $a = trim($s[1]);
    $x = trim($s[2]);
    $b = trim($s[3]);
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
    else
    {
        echo "Syntax Error\n";
        exit(1);
    }
?>