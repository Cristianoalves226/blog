<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace sistema\Nucleo;

use sistema\Suporte\Template;

/**
 * Description of Controlador
 *
 * @author xcris
 */
class Controlador {

    protected Template $template;

    //put your code here
    public function __construct(string $diretorio) {
        $this->template = new Template('templates/site/views');
    }

}
