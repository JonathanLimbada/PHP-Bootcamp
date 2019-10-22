#!/usr/bin/php
<?PHP
    function yeet($a, $b)
    {
        $in = 0;
        $ree = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";

        while (strlen($a) > $in || strlen($b) > 0)
        {
            $ap = stripos($ree, $a[$in]);
            $bp = stripos($ree, $b[$in]);
            if ($ap > $bp)
                return(1);
            else if ($bp > $ap)
                return (0);
            $in++;
        }
    }
    $int = 1;
    while ($argv[$int])
    {
        $str .= " $argv[$int]";
        $str = trim($str);
        $int++;
    }
    $arg = preg_split("/[\s,]+/", "$str");
    usort($arg, yeet);
    $int = 0;
    while($arg[$int])
    {
        echo "$arg[$int]\n";
        $int++;
    }
?>