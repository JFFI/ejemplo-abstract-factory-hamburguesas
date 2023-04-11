<?php
namespace App;

use App\Interfaces\FabricaAbstracta;
use App\ProductoPan\PanBrioche;
use App\ProductoCarne\CarneDeRes;
use App\ProductoQueso\QuesoCheddar;
use App\ProductoVegetales\LechugaYTomate;
use App\ProductoAderezo\SalsaDeLaCasa;

// - La fábrica maneja una dependencia a los tipos concretos que instanciará.
class FabricaHamburguesaClasica implements FabricaAbstracta
{
    function crearPan()
    {
        return new PanBrioche();
    }

    function crearCarne()
    {
        return new CarneDeRes();
    }

    function crearQueso()
    {
        return new QuesoCheddar();
    }

    function crearVegetales()
    {
        return new LechugaYTomate();
    }

    function crearAderezo()
    {
        return new SalsaDeLaCasa();
    }
}