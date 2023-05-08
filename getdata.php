<html>
    <body>
        <h1>Receiving data PHP</h1>
        <?php
            //Receiving data
            echo "<br>Your name is...".$_POST["nume"];
            echo "<br>Your description is...".$_POST["descriere"];
            echo "<br>The name of the place is...".$_POST["optiuni"];
            echo "<br>Url informacion is...".$_POST["url1"];
            echo "<br>URL Google Maps is...".$_POST["url2"];
        ?>
    </body>
</html>