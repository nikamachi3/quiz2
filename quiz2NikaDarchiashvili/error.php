<?php
    function error(){
        if(strlen($_POST['dasaxeleba']) < 10 || strlen($_POST['dasaxeleba']) > 150 ){
            echo "Frenis dasaxeleba ar sheidzleba iyos 10 asoze naklebi da 150 asoze meti";
        }
        else{
        }
        echo "<br>";

    }
?>