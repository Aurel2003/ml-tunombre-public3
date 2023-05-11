<?php
      echo "<table border='1'><tr><th>Nombre</th><th>Descripción</th></tr>";
       $myfile = fopen("textfile.csv","r") or die("Unable to open file!");
       while(!feof($myfile)){
           $line = fgets(($myfile));

           $array_line = explode(";",$line);
           echo "<tr><td>".$array_line[0]."</td><td>".$array_line[1]."</td></tr>";
       }
      fclose($myfile);

       echo "</table>";
?>