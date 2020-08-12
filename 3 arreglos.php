<?php 

#ARREGLOS

# Los arreglos son como variables que nos permiten guardar multiples valores.

// Ejemplo de un arreglo con los dias de la semana (version antigua)
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
//Mismo ejemplo con la version actual
$semana = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];

// Ejemplo en el que mostramos los dias de la semana.
/*
echo $semana[0] . '<br>';
echo $semana[1] . '<br>';
echo $semana[2] . '<br>';
echo $semana[3] . '<br>';
echo $semana[4] . '<br>';
echo $semana[5] . '<br>';
echo $semana[6] . '<br>';
*/
#ARREGLO DENTRO DE OTRO

//En los arreglos podemos guardar cualquier tipo de dato, 
//incluso podemos guardar un arreglo dentro de otro.
$arreglo = array('cadenas de texto', 1, array('asd', 123), true);

#ARREGLOS ASOCIATIVOS

# Los arreglos asosiativos nos permiten acceder a sus valore de una forma mas explicita.
$alex = array('telefono' => '9654654', 'edad' => 25, 'apellido' => 'FalconMasters', 'pais' => 'mexico');

# Al igual que en los arreglos indexados, en los asosiativos tambien podemos modificar sus valores simplemente accediendo a ellos.
$alex['telefono'] = '111111';

echo 'El telefono de Alex es: ' . $alex['telefono'];

#ARREGLOS MULTIDIMENSIONALES

# Los arreglos multidimensionales nos permiten tener arreglos dentro de otros arreglos.

$amigos = array(
	array('Alejandro', 20),
	array('Cesar', 21),
	array('Manuel', 18)
);

# En este ejemplo accedemos primero al arreglo amigos y luego al primer elemento dentro de amigos, despues accedemos al primer valor del arreglo.

# Puedes llegar a tener cuantos niveles quieras.
echo $amigos[0][0] . '<br />';
echo $amigos[1][0] . '<br />';
echo $amigos[2][0] . '<br />';



//CONTAR ARREGLOS:	
echo count($semana);