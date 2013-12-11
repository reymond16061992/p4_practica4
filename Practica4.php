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

$paises["Canadá"]=array("Ottawa", "Victoria", "Gander", "Brandon", "Montereal");

$paises["China"]=array("Shanghái", "Pekín", "Cantón", "Tianjin", "Hong Kong");

$paises["Egipto"]=array("Cairo", "Lúxor", "Alejandría", "Usuán", "Sharm el-Sheij");

$paises["España"]=array("Guadalajara", "Barcelona", "Madrid", "Valencia", "Sevilla");

$paises["Estados Unidos"]=array("Washington", "New York", "Texas", "Los Angeles", "Alaska");

$paises["Japón"]=array("Tokio", "Osaka", "Hirosima", "Nagazaki", "Yokohama");

$paises["Inglaterra"]=array("Londres", "Chelsea", "Manchester", "Liverpool", "Oxford");

$paises["Italia"]=array("Roma", "Milán", "Nápoles", "Turin", "Génova");

$paises["México"]=array("Guadalajara", "Monterrey", "Durango", "Nayarit", "Monterrey");


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
