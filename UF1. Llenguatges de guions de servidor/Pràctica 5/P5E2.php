<html>
    <body>
        <?PHP
        #Aquí es mostren tots els capms rebuts, no necessàriament plens i correctes!!
            print "<pre>";
            print_r($_POST);
            print "</pre>\n";
        #Ara hem de comprovar si son plens i correctes
        #El nom
        if( (isset($_POST["nom"]) ) && (!empty($_POST["nom"])) )  
            echo "Nom : ".$_POST["nom"]."<br/>";
        else
        echo "<p style='color:red';> Has d'indicar el nom</p>";

        #El cognom
        if( (isset($_POST["cognoms"]) ) && (!empty($_POST["cognoms"])) )  
        echo "Cognoms : ".$_POST["cognoms"]."<br/>";
        else
        echo "<p style='color:red';> Has d'indicar els Cognoms</p>";

        #Els estudis
        if( (isset($_POST["estudis"]) ) && (!empty($_POST["estudis"]))) {
            foreach($_POST["estudis"] as $value){
                echo "value : ".$value."<br/>";
            }
        }
        else
        echo "<p style='color:red';> Has d'omplir les dades dels estudis</p>";
        
        #Els sexe
        if( (isset($_POST["sexe"]) ) && (!empty($_POST["sexe"])) )
            echo "Sexe : ".$_POST["sexe"]."<br/>";
        else
        echo "<p style='color:red';> Has d'indicar el sexe</p>";

        #El cicle
        if( (isset($_POST["cicle"]) ) && (!empty($_POST["cicle"])) )
            echo "Cicle : ".$_POST["cicle"]."<br/>";
        else
        echo "<p style='color:red';> Has d'indicar el cicle</p>";

        #El curs
        if( (isset($_POST["curs"]) ) && (!empty($_POST["curs"])) )
            echo "Curs : ".$_POST["curs"]."<br/>";
        else
        echo "<p style='color:red';> Has d'indicar el curs</p>";
        
        #El grup
        if( (isset($_POST["grup"]) ) && (!empty($_POST["grup"])) )
            echo "Grup : ".$_POST["grup"]."<br/>";
        else
        echo "<p style='color:red';> Has d'indicar el grup</p>";
        ?>
        <br><br>
        <p align="center"><a href="P5E2.html"><button type="button">Tornar</button></a>
        </body>
</html>
