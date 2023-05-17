<?php
$file = fopen("textfile.csv", "r"); 

// New array. One position - One file line
$places = array();

// Read the file until End Of File
while(!feof($file)) {
    // One position of the array - One file
    // We use explode funtion to separate the fields
    $places[] = explode(";",fgets($file));
}

//  DEBUG CODE
/*
echo "<pre>";
print_r($places);
echo "</pre>";
*/


?>

<!DOCTYPE html>
<html>
<head>
	<title>Descubriendo Gran Canaria</title>
    <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body{
                margin: 0;
                padding: 0;
                display: grid;
                justify-content: center;
            }
          ul,li{
            display: inline-block;
            padding: 1rem 5.7rem ;
          }
          a{
            text-decoration: none;
            margin-left: 1rem;
          }
          h1{
            text-align: center;
          }
          table{
            margin-top: 30px;
          }
         

        </style>
</head>
<body>
	<header>
		<h1>Descubriendo Gran Canaria</h1>
	</header>
	<nav>
		<ul>
			<li><a href="./index.html">Nuevo lugar que visitar</a></li>
			<li><a href="./test2.php">Lugares que no me puedo perder</a></li>
		</ul>
	</nav>
    <br>
	<main>
        <div>
            <h1>Lugares que no  me puedo perder</h1>
            <table border="1">
                <thead>
                    <tr style="background-color:rgb(0,230,40);">
                        <th>Visitado</th>
                        <th>Nombre del lugar</th>
                        <th>Descripción</th>
                        <th>Municipio</th>
                        <th>URL con más información</th>
                        <th>URL de Google Maps</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                        // Iterate over the $places array
                        // $place will contain one place on every iteration
                        foreach ($places as $place) {
                            echo "<tr>";   
                            //echo "<td><input type='checkbox' checked='checked'></td>";
                            echo "<td></td>";
                            echo "<td>$place[0]</td>";
                            echo "<td>$place[1]</td>";
                            echo "<td>$place[2]</td>";
                            echo "<td><a href='$place[3]'>$place[3]</a></td>";
                            echo "<td><a href='$place[4]'>$place[4]</a></td>";
                            echo "<td><a href='$place[5]' target='blank'><img src='upload/".$place[5]."' width='200px'></a></td>";
                            echo "</tr>";

                        }
                   
                    ?>
                
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>        