<html>
    <body>
        <?php 
            $sum1=$_POST["primer"];
            $sum2=$_POST["segon"];
            //echo intval($sum1);
            //echo is_numeric($sum1);
            //if(intval($sum1)==0) {
            if(is_numeric($sum1)!=1){
                echo "<p style='color:red';> el primer valor no és un número"; 
            }
            elseif(is_numeric($sum2)!=1){
                echo "<p style='color:red';> el segón valor no és un número"; 
            }
            else{
            //echo "Ara hem de fer les operacions";
                if($sum1==$sum2){
                    echo "<p style='color:red';> Els número son igual i no he de fer res";
                }
                elseif ($sum1>$sum2){
                    //echo "bucle for";
                    echo "Els números compresos entre ". $sum1 ." i ". $sum2." son: <br>";
                    for($x = $sum1 ; $x >= $sum2 ; $x--){
                        echo "\t". $x ;
                    }
                }
                else{
                    //echo "altre bucle";
                    echo "Els números compresos entre ". $sum1 ." i ". $sum2." son: <br>";
                    for($x = $sum1 ; $x <= $sum2 ; $x++){
                        echo "\t". $x ;
                    }
                }
            }
            //El primer número és: <?php echo $_POST["primer"]; br><br>
            //El segón número és: <?php echo $_POST["segon"];
            ?>
    <br><br>
        <p align="center"><a href="P5E1.html"><button type="button">VOLVER</button></a>
    </body>
</html> 