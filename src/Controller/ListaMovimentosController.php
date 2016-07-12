<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Controller\Controller;

class ListaMovimentosController extends Controller {

    public function index() {
        $queryMovimentos = TableRegistry::get('movimentos')->find();

        $this->set('movimentos', $queryMovimentos);
        $this->render('/movimentos/listaMovimentos');
    }

}
