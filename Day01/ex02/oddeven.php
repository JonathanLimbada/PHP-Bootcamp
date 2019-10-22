#!/usr/bin/php
<?PHP
    while (1)
    {
        echo "Enter a number: ";
        $handle = fopen("php://stdin", "r");
        $prog = fgets($handle, 4096);
        if (feof($handle))
        {
            echo "^D\n";
            exit;
        }
        $prog = trim($prog);
        if (is_numeric($prog))
        {
            if ($prog % 2)
                echo "The number $prog is odd\n";
            else
                echo "The number $prog is even\n";
        }
        else
        {
            echo "'$prog' is not a number\n";
        }
        fclose($handle);
    }
?>