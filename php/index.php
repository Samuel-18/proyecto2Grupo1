<?php

//Revisar este código que tiene varios errores y ajustar hasta que se obtenga un resultado

/* ERROR #1: Falta la etiqueta de apertura
 * ERROR #2: Falta terminar con ; la línea $costoneto = 150000
 * ERROR #3: Falta el caracter $ en la variable costoneto en la línea
             $totalCompra = ($cantidadZapatos *costoneto) ;
 * ERROR #4: No se puede utilizar el valor de la variable $valordescuento sin
             antes haberlo calculado. PHP es interpretado. Por esto, la línea
             $valorPagar = ($cantidadZapatos * $costoneto)-$valordescuento;
             se debe ubicar después de la estructura de selección if / else
 * ERROR #5: Para indicar valores con coma flotante se debe utilizar el
             caracter punto (.) para separar la parte entera de la parte
             decimal, ya que la coma (,) es utilizada para separar atributos,
             parámetros, elementos de arrays o listas, etc
 * ERROR #6: El método log() del objeto console (console.log()) es usado en
             Javascript para mostrar un mensaje en la consola del navegador
             web. Para mostrar mensajes, PHP cuenta con constructores del
             lenguaje como echo y print utilizados para imprimir cadenas de
             texto en general, y con funciones como print_r y var_dump que son
             útiles para mostrar la información de las variables.
 * ERROR #7: En PHP el operador de concatenación es el caracter punto (.) y no
             el signo + como se ve en el siguiente fragmento de la última línea
             "<br> Valor a Pagar es:"+$valorPagar );
 * NOTA: Al final en un comentario de bloque agrego una forma de imprimir los
         resultados usando la secuencia \n. También opino que en el momento de
	     calcular $valorPagar = ($cantidadZapatos * $costoneto) - $valordescuento;
	     podemos reemplazar ($cantidadZapatos * $costoneto) por $totalCompra, la
	     cual fue calculada previamente. */

$cantidadZapatos = 5;
$costoneto = 150000;

$totalCompra = ($cantidadZapatos * $costoneto);

if ($cantidadZapatos == 3) {
    $valordescuento = $totalCompra * 0.10;

} else if ($cantidadZapatos > 3 && $cantidadZapatos <= 5) {
    $valordescuento = $totalCompra * 0.20;

} else if ($cantidadZapatos > 5) {
    $valordescuento = $totalCompra * 0.40;
}

$valorPagar = ($cantidadZapatos * $costoneto) - $valordescuento;


echo("Cantidad Vendida:" . $cantidadZapatos . "<br> Costo Neto:" . $totalCompra .
    "<br>Valor del Descuento:" . $valordescuento . "<br> Valor a Pagar es:" . $valorPagar);

/*echo "\nCantidad Vendida:" . $cantidadZapatos .  "\nCosto Neto:" . $totalCompra .
    "\nValor del Descuento:" . $valordescuento . "\nValor a Pagar es:". $valorPagar;*/

?>