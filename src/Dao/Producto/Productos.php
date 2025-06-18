<?php

namespace Dao\Producto;

use Dao\Table;

class Productos extends Table
{
    public static function obtenerProductos(): array
    {
        return [
            [
                "id" => "001",
                "descripcion" => "Producto 1",
                "precio" => 100.23,
                "estado" => "ATC",
                "stock" => 100
            ],
            [
                "id" => "002",
                "descripcion" => "Producto 2",
                "precio" => 50.00,
                "estado" => "ATC",
                "stock" => 100
            ],
            [
                "id" => "003",
                "descripcion" => "Producto 3",
                "precio" => 96.25,
                "estado" => "ATC",
                "stock" => 100
            ]
        ];
    }
}
