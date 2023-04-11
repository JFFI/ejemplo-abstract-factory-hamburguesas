<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Interfaces\FabricaAbstracta;
use App\FabricaHamburguesaClasica;
use App\FabricaHamburguesaPollo;

use App\ProductoPan\Pan;
use App\ProductoCarne\Carne;
use App\ProductoQueso\Queso;
use App\ProductoVegetales\Vegetales;
use App\ProductoAderezo\Aderezo;

const CLASICA = 1;
const POLLO = 2;
const SALIR = 0;

$salir = false;
while(!$salir) {
    echo "******* ******* ******* ******* *******". PHP_EOL;
    indicarAcciones();
    $accion = readline("Ingrese un número:");
    switch ($accion) {
        case CLASICA:
            crearHamburguesa(new FabricaHamburguesaClasica());
            break;
        case POLLO:
            crearHamburguesa(new FabricaHamburguesaPollo());
            break;
        case SALIR:
            $salir = true;
            break;
        default:
            echo "No se reconoce el número.". PHP_EOL;
            break;
    }
    if (!$salir) {
        echo PHP_EOL;
        readline("Presione enter para continuar");
        echo PHP_EOL;
    }
}
echo "Saliendo...". PHP_EOL;

function indicarAcciones()
{
    echo "Ingrese uno de los siguientes números:" . PHP_EOL;
    echo " -> ".CLASICA.": Hamburguesa clásica". PHP_EOL;
    echo " -> ".POLLO.": Hamburguesa de pollo". PHP_EOL;
    echo " -> ".SALIR.": Salir". PHP_EOL;
    echo PHP_EOL;
}

// - Tanto la fábrica como los productos están desacoplados del cliente.
// - El cliente invoca la fábrica de manera dinámica en tiempo de ejecución, 
//   con base en una interfaz común.
// - El cliente ignora los tipos concretos de los productos, solo sus 
//   abstracciones.
function crearHamburguesa(FabricaAbstracta $fabrica)
{
    $pan = obtenerPan($fabrica);
    $carne = obtenerCarne($fabrica);
    $queso = obtenerQueso($fabrica);
    $vegetales = obtenerVegetales($fabrica);
    $aderezo = obtenerAderezo($fabrica);
    echo "Se sirvió una hamburguesa.".  PHP_EOL;
}

function obtenerPan(FabricaAbstracta $fabrica): Pan {
    $producto = $fabrica->crearPan();
    echo "Utilizando pan: " . $producto::class .  PHP_EOL;
    return $producto;
}

function obtenerCarne(FabricaAbstracta $fabrica): Carne {
    $producto = $fabrica->crearCarne();
    echo "Utilizando carne: " . $producto::class .  PHP_EOL;
    return $producto;
}

function obtenerQueso(FabricaAbstracta $fabrica): Queso {
    $producto = $fabrica->crearQueso();
    echo "Utilizando queso: " . $producto::class .  PHP_EOL;
    return $producto;
}

function obtenerVegetales(FabricaAbstracta $fabrica): Vegetales {
    $producto = $fabrica->crearVegetales();
    echo "Utilizando vegetales: " . $producto::class .  PHP_EOL;
    return $producto;
}

function obtenerAderezo(FabricaAbstracta $fabrica): Aderezo {
    $producto = $fabrica->crearAderezo();
    echo "Utilizando aderezo: " . $producto::class .  PHP_EOL;
    return $producto;
}