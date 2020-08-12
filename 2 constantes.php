<?php 
//NOTA: deberias colocar tus constantes con MAYUSCULAS para diferenciarlas de las variables

// Una constante es como una variable solo que una vez definida no podemos volver a cambiar el valor
define('PI', 3.14);
echo PI;

echo '<br>';

//si cambias el valor sale ERROR
//define('NOMBRE', 'Ana'); //desmarcalo para ver el error
define('NOMBRE', 'Lorena');
echo NOMBRE;

echo '<br>';

// En las variables si podemos cambiar el valor que se le asigno.
$nombre = "Carlos";
echo $nombre; // Mostraria Carlos en pantalla
echo '<br>';
$nombre = "Arturo";
echo $nombre; // Mostraria Arturo en pantalla
echo '<br>';
?>