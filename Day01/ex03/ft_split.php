<?PHP
    function ft_split($str)
    {
        $str = trim($str);
        return ($str = preg_split("/[\s,]+/", "$str"));
    }
?>