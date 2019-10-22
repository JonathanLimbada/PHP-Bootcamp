#!/usr/bin/php
<?PHP
    if ($argc != 2)
        return;
    $int = 0;
    $str = trim($argv[1]);
    $str = preg_split("/[\s,]+/", "$str");
    foreach(array_slice($str, 0) as $prog)
    {
        if ($int == 0)
        {
            echo "$prog";
            $int = 1;
        }
        else
            echo " $prog";
    }
    echo "\n";
?>
