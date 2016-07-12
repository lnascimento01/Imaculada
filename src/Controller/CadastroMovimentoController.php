<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Controller\Controller;

class CadastroMovimentoController extends Controller {

    public function index() {
        $queryMetodos = TableRegistry::get('metodos_pagamento')->find();
        $queryCervejas = TableRegistry::get('itens')->find()
                ->where(['ID_CATEGORIA' => '0']);

        $this->set('metodos', $queryMetodos);
        $this->set('cervejas', $queryCervejas);
        $this->render('/Movimentos/cadastroMovimento');
    }

}
