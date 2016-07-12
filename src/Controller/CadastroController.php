<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Controller\Controller;

class CadastroController extends Controller {

    public function index() {
        
        $this->render('/cadastro/selecao');
    }

}
