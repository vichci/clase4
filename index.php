<?php 
echo "1) Crear un variable llamada n, asignarle un valor numérico y validar si es un número
positivo. Si es un número positivo, imprimir un mensaje diciendo: El número ingresado es un
número positivo. En caso contrario, no mostrar nada";
echo "<br>";

//  Crear una variable llamada 'n' y asignarle un valor numérico
$n = 2; // Cambia 10 por el valor que desees

//Validar si 'n' es un número positivo
if ($n > 0) {
    // Paso 3: Si es positivo, imprimir un mensaje
    echo "El número ingresado es un número positivo";
    
}
echo "<br>";
echo "<br>";
echo "2) Crear una variable llamada n, asignarle un valor numérico y validar si es un número
mayor a 1 y menor a 10. Si el número es mayor a 1 y menor a 10, imprimir un mensaje
diciendo El número ingresado es mayor a 1 y menor a 10. En caso contrario, no mostrar
nada." ;
echo "<br>";

// voy a utilzar la misma variable... voy a validar si es mayor q 1 y menor a 10.
    if ($n > 1 && $n < 10) {
        echo "el número ingresado es mayor a 1 y menor que 10.";
    }
    echo "<br>";
    echo "<br>";
    echo "3) Crear una variable llamada n, asignarle un valor numérico y validar si es un número
mayor o igual a 10 o menor a 2. Si el número es mayor o igual a 10 o menor a 2, imprimir un
mensaje diciendo El número ingresado es mayor o igual a 10 o menor a 2. En caso
contrario, mostrar un mensaje diciendo que El número ingresado no pudo ser validado";
echo "<br>";

// voy a utilzar la misma variable... voy a validar si es mayor igual q 10 y menor a 2.
    if ($n >= 10 || $n < 2) {
    echo "el número ingresado es mayor a 1 y menor que 10.";
    }else{ 
    echo "El número ingresado no pudo ser validado.";
    }

echo "<br>";
echo "<br>";
echo "4) Crear dos variables, una con el nombre numero1 y otra con el nombre numero2, y
asignarles dos valores numéricos. Si numero1 es mayor a numero2, imprimir la suma y la
resta. Si numero2 es mayor a numero1, mostrar por pantalla la multiplicación, la división
entera y el resto. Si numero1 y numero2 son iguales, imprimir el mensaje Los números
ingresados son iguales ";
echo "<br>";
$numero1= 5;
$numero2=3;
if($numero1>$numero2){
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
echo "la suma es $suma";
echo "<br>";
echo "la resta es $resta";
} elseif ($numero2 > $numero1) {
    // Si numero2 es mayor, imprimir la multiplicación, la división entera y el resto
    $multiplicacion = $numero1 * $numero2;
    $division_entera = $numero2 > 0 ? (int)($numero1 / $numero2) : "Indefinida";
    $resto = $numero2 > 0 ? $numero1 % $numero2 : "Indefinido";

    echo "La multiplicación es: $multiplicacion<br>";
    echo "La división entera es: $division_entera<br>";
    echo "El resto es: $resto";
} else {
    // Si son iguales, imprimir un mensaje
    echo "Los números ingresados son iguales";
}


?>  