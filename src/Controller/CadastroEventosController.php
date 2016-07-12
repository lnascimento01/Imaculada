<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Controller\Controller;

class CadastroEventosController extends Controller {

    public function display() {
        $queryMetodos = TableRegistry::get('metodos_pagamento')->find();
        $queryCervejas = TableRegistry::get('itens')->find()
                ->where(['ID_CATEGORIA' => '0']);
        
        $this->set('metodos', $queryMetodos);
        $this->set('cervejas', $queryCervejas);
        $this->render('/Movimento/envio');
    }

}
