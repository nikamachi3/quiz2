<?php
    function avia(){
        if(strlen($_POST['aviaa']) < 10 || strlen($_POST['aviaa']) > 100 ){
            echo "aviakompaniis saxeli ar unda iyos 10 asoze naklebi da 100 asoze meti";
        }
        else{
        }
        echo "<br>";

    }
?>