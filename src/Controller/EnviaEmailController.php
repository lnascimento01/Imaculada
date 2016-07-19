<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;
use Cake\Controller\Controller;

class EnviaEmailController extends Controller {

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
        
        $this->autoRender = false;
        $email = new Email();
        $email->configTransport('mail', [
            'host' => 'ssl://smtp.gmail.com',
            'port' => 465,
            'username' => 'zeus.com@gmail.com',
            'password' => '?LFSN48911140?',
            'className' => 'Smtp',]);
        $email
                ->transport('mail')
                ->emailFormat('html')
                ->to('lfsnascimento84@gmail.com')
                ->from('zeus.com@gmail.com')
                ->subject('Movimento do dia')
                ->viewVars([
                    'cervejas' => $listaQuantidades,
                    'movimento' => $queryMovimento,
                    'valores' => $listaValores
        ])
                ->template('default');

        if ($email->send()) {
            $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
            echo $mgm;
        } else {
            $mgm = "ERRO AO ENVIAR E-MAIL!";
            echo $mgm;
        }
        exit();
    }

}
