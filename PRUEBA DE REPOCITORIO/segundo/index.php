<html> 
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<style>
body{
    background-color:rgb(39, 39, 39);
}
h1{
    color:white;
    text-transform:capitalize;
    font-size: 50px;
    text-align: center;
}
table{
    border-color: white;
}
td,th{
    text-align: center;
    color:white;
}

</style>
<body> 
<?php 
include 'conexion.php';


//$consulta = "SELECT * FROM alumno";
$consulta = "SELECT alu.nombre, grd.grado, grd.descripcion FROM alumno AS alu INNER JOIN grado AS grd ON grd.id_grado=alu.id_alumno";

echo "<center>";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
echo "<h1>alumnos</h1>";
echo "<table border ='2'>";
echo "<tr>";
echo "<th>n</th>";
echo "<th>Nombres</th>";
echo "<th>grado</th>";
echo "<th></th>";

echo "</tr>";

while ($columna = mysqli_fetch_array( $resultado ))
{
 echo "<tr>";
 echo "<td>" . $columna['1'] . "</td>";
 echo "<td>" . $columna['nombre'] . "</td>";
 echo "<td>" . $columna['grado'] . "</td>";
 echo "<td>" . $columna['descripcion'] . "</td>";

 echo "</tr>";
}
echo "</table>";

echo "</center>";
?> 
<br>
<div class="input-group">
  <input type="text" class="form-control" aria-label="Text input with dropdown button">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div role="separator" class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </div>
</div>
<?php 

$consulta1 = "SELECT ma.id_maestro, ma.nombre_maestro, ma.sueldo_maestro,grd.grado, grd.descripcion FROM maestro AS ma INNER JOIN grado AS grd ON grd.id_grado=ma.id_maestro;";

echo "<center>";
$resultado1 = mysqli_query( $conexion, $consulta1 ) or die ( "Algo ha ido mal en la consulta a la base de datos");
echo "<h1>maestros</h1>";
echo "<table border ='2'>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>nombres</th>";
echo "<th>sueldo</th>";
echo "<th>grado</th>";
echo "<th>descripcion</th>";

echo "</tr>";

while ($columna1 = mysqli_fetch_array( $resultado1 ))
{
 echo "<tr>";
 echo "<td>" . $columna1['id_maestro'] . "</td>";
 echo "<td>" . $columna1['nombre_maestro'] . "</td>";
 echo "<td>" . $columna1['sueldo_maestro'] . "</td>";
 echo "<td>" . $columna1['grado'] . "</td>";
 echo "<td>" . $columna1['descripcion'] . "</td>";


 echo "</tr>";
}

echo "</table>";
echo "</center>";
?> 
<br>
<div class="input-group">
  <input type="text" class="form-control" aria-label="Text input with dropdown button">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div role="separator" class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </div>
</div>
<?php 

$consulta2 = "SELECT * FROM grado";
echo "<center>";

$resultado2 = mysqli_query( $conexion, $consulta2 ) or die ( "Algo ha ido mal en la consulta a la base de datos");
echo "<h1>grados</h1>";
echo "<table border ='2'>";
echo "<tr>";
echo "<th>n</th>";
echo "<th>grado</th>";
echo "<th>descripcion</th>";

echo "</tr>";

while ($columna2 = mysqli_fetch_array( $resultado2 ))
{
 echo "<tr>";
 echo "<td>" . $columna2['id_grado'] . "</td>";
 echo "<td>" . $columna2['grado'] . "</td>";
 echo "<td>" . $columna2['descripcion'] . "</td>";

 echo "</tr>";
}

echo "</table>";
echo "</center>";
?> 
<br>
<div class="input-group">
  <input type="text" class="form-control" aria-label="Text input with dropdown button">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div role="separator" class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </div>
</div>
</body> 
</html> 