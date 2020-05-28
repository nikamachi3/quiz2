<?php
    include "error.php";
    include "shtrixkodi.php";
    include "avia.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <form action="info.php" method="post">
        frenis dasaxeleba <input type="text" name="dasaxeleba">
        <?php
        if(isset($_POST["sbm"])){
            error();
        }
        ?>
        <?php
            $_POST['S'] = rand(1,8);
            echo "<br>";
            echo("frenis dro aris " . $_POST['S'] . " saati");
            echo "<br>";
            if($_POST['S'] == 1){
                echo "frenis fasi aris 400 evro";
            }
            if($_POST['S'] == 2){
                echo "frenis fasi aris 350 evro";
            }
            if($_POST['S'] == 3){
                echo "frenis fasi aris 300 evro";
            }
            if($_POST['S'] == 4){
                echo "frenis fasi aris 250 evro";
            }
            if($_POST['S'] == 5){
                echo "frenis fasi aris 200 evro";
            }
            if($_POST['S'] == 6){
                echo "frenis fasi aris 150 evro";
            }
            if($_POST['S'] == 7){
                echo "frenis fasi aris 100 evro";
            }
            if($_POST['S'] == 8){
                echo "frenis fasi aris 50 evro";
            }
            
        ?>
        <br>
        <?php
            echo "SHTRIXKODI: ";
            shtrixkodi();
        ?> 
        <br>
        aviakompaniis saxeli <input type="text" name="aviaa" required>
        <?php
            if(isset($_POST["sbm"])){
                avia();
            }
        ?>
        <br>
        <input type="submit" name="sbm">
        <br>
        
        
    </form>


    
    
</body>
</html>