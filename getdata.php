<html>
    <body>
        <h1>Receiving data PHP</h1>
        <?php
            //Receiving data
           

            //Checking fileds...

          
                //echo "<br>Your name is...".$_POST["nume"];
                //echo "<br>Your description is...".$_POST["descriere"];
                //echo "<br>The name of the place is...".$_POST["optiuni"];
                //echo "<br>Url informacion is...".$_POST["url1"];
                //echo "<br>URL Google Maps is...".$_POST["url2"];
                //echo "<br>Your photo  is...".$_POST["fisier"];
            
                 //$linkaddress = "./newPlace.html";
                 
                  //Making a text file...
                $myfile = fopen("textfile.txt", "a") or die("Unable to open file!");
                $txt = "";
                fwrite($myfile, $txt);
                $txt = "";
               fwrite($myfile, $_POST["nume"]);
               fwrite($myfile, "\r\n");
               fwrite($myfile, $_POST["descriere"]);
               fwrite($myfile, "\r\n");
               fwrite($myfile, $_POST["url1"]);
               fwrite($myfile, "\r\n");
               fwrite($myfile, $_POST["url2"]);
               fwrite($myfile, "\r\n");
               fwrite($myfile, $_POST["fisier"]);
               fwrite($myfile, "\r\n");
               fwrite($myfile, "\n\n");
               fclose($myfile);
               


            if(strlen($_POST["nume"]) > 20){
                echo "So u want to mess huh.LOL.Put your real name I¨m not going to stole it.<br> ";
            }else if($_POST["nume"] == ""){
                echo "User refuse to complete this field !<br>";
                //echo "<a href='".$linkaddress."'>Try Again</a>";
            }else{
                echo "<br>Your name is...".$_POST["nume"];
            }

            if(strlen($_POST["descriere"]) > 100){
                echo "Are u telling me your story?LOL.Tell short what u like for eg I like music.<br> ";
            }else if($_POST["descriere"] == ""){
                echo "User refuse to complete this field !<br>";
            }
            else{
                echo "<br>Your description is...".$_POST["descriere"];  
            }

            if(strlen($_POST["url1"]) > 100){
                echo "You want to hack the form?LOL.Give short url not sausage url.<br>";
            }else if($_POST["url1"] == ""){
                echo "User refuse to complete this field !<br>";
            } 
            else{
                echo "<br>Url informacion is...".$_POST["url1"];
            }

            if(strlen($_POST["url2"]) > 100){
                echo "You want to hack the form?LOL.Give short url not sausage url.<br>";
            }else if($_POST["url2"] == ""){
                echo "User refuse to complete this field !";
            }else{
                echo "<br>URL Google Maps is...".$_POST["url2"];
            }

            if($_POST["fisier"] == null){
                echo "<br>User refuse to complete this field !<br>";
            }else{
                echo "<br>Your photo name is ".$_POST["fisier"];
            }
        ?>

       <br><br><a href="./newPlace.html">Try Again If u failed</a>
    </body>
</html>