<?php
namespace App;

use App\Interfaces\FabricaAbstracta;
use App\ProductoPan\PanBrioche;
use App\ProductoCarne\CarneDeCerdo;
use App\ProductoQueso\QuesoBrie;
use App\ProductoVegetales\CebollasCaramelizadas;
use App\ProductoAderezo\SalsaDeLaCasa;

// - La fábrica maneja una dependencia a los tipos concretos que instanciará.
class FabricaHamburguesaCerdo implements FabricaAbstracta
{
    function crearPan()
    {
        return new PanBrioche();
    }

    function crearCarne()
    {
        return new CarneDeCerdo();
    }

    function crearQueso()
    {
        return new QuesoBrie();
    }

    function crearVegetales()
    {
        return new CebollasCaramelizadas();
    }

    function crearAderezo()
    {
        return new SalsaDeLaCasa();
    }
}