<?php
namespace App;

use App\Interfaces\FabricaAbstracta;
use App\ProductoPan\PanDePapa;
use App\ProductoCarne\PolloALaParrilla;
use App\ProductoQueso\QuesoGouda;
use App\ProductoVegetales\Pepinillos;
use App\ProductoAderezo\Mostaza;

// - La fábrica maneja una dependencia a los tipos concretos que instanciará.
class FabricaHamburguesaPollo implements FabricaAbstracta
{
    function crearPan()
    {
        return new PanDePapa();
    }

    function crearCarne()
    {
        return new PolloALaParrilla();
    }

    function crearQueso()
    {
        return new QuesoGouda();
    }

    function crearVegetales()
    {
        return new Pepinillos();
    }

    function crearAderezo()
    {
        return new Mostaza();
    }
}