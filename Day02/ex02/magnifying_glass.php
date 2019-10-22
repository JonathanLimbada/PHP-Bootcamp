#!/usr/bin/php
<?PHP
    if ($argc != 2)
        return;
    $file = file_get_contents($argv[1]);
    $con = explode("\n", $file);
    foreach ($con as $line)
    {
        preg_match('/<a.*?title="(.*?)">/', $line, $str);
        $line = str_replace($str[1], strtoupper($str[1]), $line);
        preg_match('/<a.*?>(.*?)</', $line, $str);
        $line = str_replace($str[1], strtoupper($str[1]), $line);
        echo "$line";
    }
?>