<?php
require_once __DIR__ . '/Models/Arbol.php';
require_once __DIR__ . '/Models/Flor.php';
require_once __DIR__ . '/Models/Arbusto.php';

// 4. Instanciación e invocación de métodos públicos
$miArbol = new Arbol("Pino", 15.0, true, "Frío", "Conífera", "Leñoso", 0.8, "Verde oscuro", "Acorazonadas");
$miFlor = new Flor("Rosa", 0.5, true, "Templado", "Rojo", 12, "Amarillo", "Silvestre", "Primavera");
$miArbusto = new Arbusto("Boj", 1.2, true, "Mediterráneo", 1.0, true, "Enano", "Verde brillante", true);

$miArbol->mensajeArbol();
$miFlor->mensajeFlor();
$miArbusto->mensajeArbusto();

/*
5. EXPLICACIÓN DEL CAMBIO A PRIVATE:

Si se cambia el modificador de acceso de los métodos 'mensajeArbol()', 'mensajeFlor()' y 'mensajeArbusto()'
de 'public' a 'private', PHP generará un error fatal al intentar llamarlos desde este archivo (index.php).

Error generado: "Fatal error: Uncaught Error: Call to private method..."

Motivo: Los métodos privados solo pueden ser ejecutados dentro de la clase en la que fueron definidos.
Al intentar invocarlos fuera de la clase, el motor de PHP bloquea el acceso para proteger el encapsulamiento.

Para que la aplicación vuelva a funcionar correctamente, se debe regresar la visibilidad a 'public'.
*/