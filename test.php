<?php
       echo "<table border='1'<tr><th>Nombre</th></th>Descripcion</th></tr>";
       $myfile = fopen("textfile.csv","r") or die("Unable to opne");
       while(!feof($myfile)){
           $line = fgets(($myfile));

           $array_line = explode(";",$line);
           echo "<tr>>td>".$array_line[0]."</td></tr>";
       }
      fclose($myfile);

       echo "</table>";
?>