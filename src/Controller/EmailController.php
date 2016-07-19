<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Controller\Controller;

class EmailController extends Controller {

    public function index() {
        $queryMovimento = TableRegistry::get('movimentos')->get(118);
        $queryValores = TableRegistry::get('valores_movimento');
        $queryCervejas = TableRegistry::get('itens_movimento');
        $valoresMovimento = $queryValores->find()->where(['ID_MOVIMENTO' => 118]);
        $qtdCervejas = $queryCervejas->find()->where(['ID_MOVIMENTO' => 118]);

        $listaValores = [];
        foreach ($valoresMovimento as $valores) {
            $metodoNome = TableRegistry::get('metodos_pagamento')->get($valores->ID_METODO);
            $valor = [];
            $valor['Metodo'] = $metodoNome->METODO;
            $valor['Valor'] = $valores->VALOR;
            $valor['Sentido'] = $valores->SENTIDO;
            $listaValores[] = $valor;
        }

        $listaQuantidades = [];
        foreach ($qtdCervejas as $qtd) {
            $cervejaNome = TableRegistry::get('itens')->get($qtd->ID_ITEM);
            $cerveja = [];
            $cerveja['Cerveja'] = $cervejaNome->NOME;
            $cerveja['Quantidade'] = $qtd->QUANTIDADE;
            $cerveja['Sentido'] = $qtd->SENTIDO;
            $listaQuantidades[] = $cerveja;
        }

        $this->set('cervejas', $listaQuantidades);
        $this->set('movimento', $queryMovimento);
        $this->set('valores', $listaValores);
        $this->render('/Email/html/default');
    }

}
