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

        #El mail
        if( (isset($_POST["email"]) ) && (!empty($_POST["email"])) )  
        echo "Email : ".$_POST["email"]."<br/>";
        else
        if (filter_var(($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
            echo "Email address '($_POST["email"])' is considered valid.\n";
        } else {
            echo "Email address '($_POST["email"])' is considered invalid.\n";
        }
        echo "<p style='color:red';> Has d'indicar un correu vàlid</p>";
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
        #un cop em comprovat que les dades s'han emplenat, ara mirem les combinacions possibles
        #Si s'ha triat el cicle d'SMX i el curs segon el grup no pot ser més que A o B.
        if( $_POST["cicle"]=="SMX" && $_POST["curs"]=="2")
            if($_POST["grup"]=="C" || $_POST["grup"]=="D")
            echo "<p style='color:red';> Grup inexistent en
aquest curs i cicle”";
        #Si s'ha triat el cicle ASIX i el curs primer el grup no pot ser més que A o B.
        if( $_POST["cicle"]=="ASIX" && $_POST["curs"]=="1")
            if($_POST["grup"]=="C" || $_POST["grup"]=="D")
            echo "<p style='color:red';> Grup inexistent en aquest curs i cicle”";
        #Si s'ha triat el cicle ASIX i el curs segon el grup no pot ser més que B.
        if( $_POST["cicle"]=="ASIX" && $_POST["curs"]=="2")
            if($_POST["grup"]=="A" ||$_POST["grup"]=="C" || $_POST["grup"]=="D")
            echo "<p style='color:red';> Grup inexistent en aquest curs i cicle”";
        #Si s'ha triat el cicle DAM i el curs primer el grup no pot ser més que C o D
        if( $_POST["cicle"]=="DAM" && $_POST["curs"]=="1")
            if($_POST["grup"]=="A" ||$_POST["grup"]=="B")
            echo "<p style='color:red';> Grup inexistent en aquest curs i cicle”";
        #Si s'ha triat el cicle DAM i el curs segon el grup no pot ser més que A.
        if( $_POST["cicle"]=="DAM" && $_POST["curs"]=="2")
            if($_POST["grup"]=="B" ||$_POST["grup"]=="C" || $_POST["grup"]=="D")
            echo "<p style='color:red';> Grup inexistent en aquest curs i cicle”";



        ?>
        <br><br>
        
        <p align="center"><a href="P5E3.html"><button type="button">Tornar</button></a>
        </body>
</html>
