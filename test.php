<?php
      echo "<table border='1'><tr><th>Nombre</th><th>Descripción</th><th>Descripción</th><th>URL con más información</th><th>URL de Google Maps</th><th>Imagen</th>";
       $myfile = fopen("textfile.csv","r") or die("Unable to open file!");
       while(!feof($myfile)){
           $line = fgets(($myfile));

           $array_line = explode(";",$line);
           echo "<tr><td>".$array_line[0]."</td><td>"."".$array_line[1]."</td><td>".$array_line[2].""."</td><td>".$array_line[3].""."</td><td>".$array_line[4].""."</td><td>".$array_line[5];
       }
      fclose($myfile);

       echo "</table>";
?>