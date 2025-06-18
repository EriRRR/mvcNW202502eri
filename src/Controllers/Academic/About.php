<?php

namespace Controllers\Academic;

use Controllers\PublicController;
use Views\Renderer;
use Dao\Producto\Productos;
use Dao\Carros\Carros as CarrosDAO;

class About extends PublicController
{
    private string $holaMessage;
    public function run(): void
    {
        $productos = Productos::obtenerProductos();
        $this->holaMessage = "Hola, esto es un nuevo controllador";
        $carros = CarrosDAO::obtenerCarros();
        Renderer::render("academic/about", [
            "mensaje" => $this->holaMessage,
            "productos" => $productos,
            "carros" => $carros,
        ]);
    }
}
