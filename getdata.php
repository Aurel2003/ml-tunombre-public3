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
                 

           
               $nume = $_POST["nume"];
               $descriere = $_POST["descriere"];
               $url1 = $_POST["url1"];
               $url2 = $_POST["url2"];
               $fisierpoza = $_POST["fisier"];
               $optiuni =  $_POST["optiuni"];
              

            $error = false;

            if($nume == "" || $descriere == "" || $url1 == "" || $url2 == "" || $fisierpoza == null){
                echo '<a href="newPlace.html">Try Again</a><br>';
            }

            if($nume == ""){
                echo "User refuse to complete this field (nume)!<br>";
                $error = true;
            }

            if((strlen($nume) > 10)){
                echo "So u want to mess huh.LOL.Put your real name I¨m not going to stole it.<br> ";
                $error = true;
            }
            
            if($descriere == ""){
                echo "User refuse to complete this field (descriere)!<br>";
                $error = true;
            }

            if((strlen($descriere) > 100)){
                echo "Are u telling me your story?LOL.Tell short what u like for eg I like music.<br> ";
                $error = true;
            }
           
            if($url1 == ""){
                echo "User refuse to complete this field (url1)!<br>";
                $error = true;
            }

            if((strlen($url1) > 100)){
                echo "You want to hack the form?LOL.Give short url not sausage url.<br>";
                $error = true;
            }
            
            if($url2 == ""){
                echo "User refuse to complete this field (url2)!<br>";
                $error = true;
            }

            if((strlen($url2) > 100)){
                echo "You want to hack the form?LOL.Give short url not sausage url.<br>";
                $error = true;
            }

            if($fisierpoza == null){
                echo "User refuse to complete this field (file)!<br>";
                $error = true;
            }


            if ($error == false) {
                echo "<br>It's OK!";
                echo "<br>Your name  is $nume";
                echo "<br>The name of the place is $optiuni";
                echo "<br>The description of the place is $descriere";
                echo "<br>The url informacion is $url1";
                echo "<br>The url google maps is $url2";
                echo "<br>The name photo is $fisierpoza";

                //Making a text file...
                $myfile = fopen("textfile.csv", "a") or die("Unable to open file!");
                $txt = "";
                fwrite($myfile, $txt);
                $txt = "";
                fwrite($myfile, $_POST["nume"]);
                fwrite($myfile, ";");
                fwrite($myfile, $_POST["descriere"]);                
                fwrite($myfile, ";");
                fwrite($myfile, $_POST["optiuni"]);
                fwrite($myfile, ";");
                fwrite($myfile, $_POST["url1"]);
                fwrite($myfile, ";");
                fwrite($myfile, $_POST["url2"]);
                fwrite($myfile, ";");
                fwrite($myfile, $_POST["fisier"]);
                fwrite($myfile, "\n");
               
                fclose($myfile);
            }


        



        ?>

   
    </body>
</html>