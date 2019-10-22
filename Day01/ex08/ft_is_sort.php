<?PHP
    function    ft_is_sort($tab)
    {
        $str = $tab;
        sort($tab);
        if ($str === $tab)
            return (1);
        else
            return (0);
    }
?>