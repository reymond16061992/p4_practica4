 <!DOCTYPE html>
 <html>
 <head>

 <h1> PRACTICA 4: PAISES</h1>
 
 <title> PRACTICA 4 PROGRAMACION IV </title>

 </head>
<body>
<?php
$paises=array();

$paises["Brasil"]=array("Brasilia", "Rio de Janeiro", "Sao Paulo", "Porto Alegre", "Copacabana");

$paises["Canad�"]=array("Ottawa", "Victoria", "Gander", "Brandon", "Montereal");

$paises["China"]=array("Shangh�i", "Pek�n", "Cant�n", "Tianjin", "Hong Kong");

$paises["Egipto"]=array("Cairo", "L�xor", "Alejandr�a", "Usu�n", "Sharm el-Sheij");

$paises["Espa�a"]=array("Guadalajara", "Barcelona", "Madrid", "Valencia", "Sevilla");

$paises["Estados Unidos"]=array("Washington", "New York", "Texas", "Los Angeles", "Alaska");

$paises["Jap�n"]=array("Tokio", "Osaka", "Hirosima", "Nagazaki", "Yokohama");

$paises["Inglaterra"]=array("Londres", "Chelsea", "Manchester", "Liverpool", "Oxford");

$paises["Italia"]=array("Roma", "Mil�n", "N�poles", "Turin", "G�nova");

$paises["M�xico"]=array("Guadalajara", "Monterrey", "Durango", "Nayarit", "Monterrey");


echo "<ul id=jaja>";
foreach ($paises as $pais => $ciudades) {
echo "<li id=es>".$pais."<ul>";
foreach ($ciudades as $ciudad) {
echo "<li>".$ciudad."</li>";

}
echo "</ul></li>";
}
?>

</body>
</html>
