<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace sistema\Controlador;

use sistema\Nucleo\Controlador;

/**
 * Description of SiteControlador
 *
 * @author xcris
 */
class SiteControlador extends Controlador {

    //put your code here

    public function __construct() {
        parent::__construct('templates/site/views');
    }

    public function index(): void {

        echo $this->template->renderizar('index.html', [
            'titulo' => 'teste de titulo',
            'subititulo' => 'teste de subtitulo']);
    }

//    public function sobre(): void {
//        echo $this->template->renderizar('sobre.html', [
//            'caracteristica' => 'dev',
//            'criado' => '2023'
//        ]);
//    }

}
