#!/usr/bin/php
<?PHP
    date_default_timezone_set("Europe/Paris");
    if ($argc != 2)
        return;
    $days = array (
        "lundi" => "monday",
        "mardi" => "tuesday",
        "mercredi" => "wednsday",
        "jeudi" => "thursday",
        "vendredi" => "Friday",
        "samedi" => "Saturday",
        "dimanche" => "Sunday"
    );
    $months = array
    (
        "janvier" => "January",
        "février" => "February",
        "mars" => "March",
        "avril" => "April",
        "mai" => "May",
        "juin" => "June",
        "juillet" => "July",
        "aout" => "August",
        "septembre" => "September",
        "octobre" => "October",
        "novembre" => "November",
        "décembre" => "December"
    );
    $yee = preg_match("/([A-Z]?[a-z]+) (\d{1,2}) ([A-Z]?[a-z]+) (\d{4}) (\d{2}):(\d{2}):(\d{2})/", $argv[1], $time);
    if ($yee == 1)
    {
        $m = array_key_exists(strtolower($time[3]), $months);
        $d = array_key_exists(strtolower($time[1]), $days);
        if ($d && $m)
            print_r($time);

        $str = "$time[2] ".$months[strtolower($time[3])]." $time[4] $time[5]:$time[6]:$time[7]";
        $epoch = strtotime($str);

        echo "$epoch\n";
    }
?>