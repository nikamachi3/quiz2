<?php
    function shtrixkodi(){
        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXVZ";
        srand((double)microtime()*1000000);
        $i = 0;
        $pass = ' ';
        while ($i <= 13){
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $pass = $pass . $tmp;
            $i++;
        }

        echo $pass;
    }
?>