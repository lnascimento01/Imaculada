<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Controller\Controller;

class SalvarMovimentoController extends Controller {

    public function index() {

        $data = json_decode($_POST['data']);

        $dataMovimentos = TableRegistry::get('movimentos');
        $movimentos = $dataMovimentos->newEntity();
        
        $movimentos->DATA_CRIACAO = date("Y-m-d H:i:s");
        $movimentos->STATUS = TRUE;
        $movimentos->FUNDO_CAIXA = $data->fundoCaixa;    

        if ($dataMovimentos->save($movimentos)) {
            $id = $movimentos->ID;
            $dataValores = TableRegistry::get('valores_movimento');
            $dataItens = TableRegistry::get('itens_movimento');

            foreach ($data->pgEntrada as $entrada) {
                $valores = $dataValores->newEntity();
                $valores->ID_MOVIMENTO = $id;
                $valores->ID_METODO = $entrada->id;
                $valores->VALOR = $entrada->valor;
                $valores->SENTIDO = TRUE;
                $dataValores->save($valores);
            }
            foreach ($data->pgSaida as $saida) {
                $valores = $dataValores->newEntity();
                $valores->ID_MOVIMENTO = $id;
                $valores->ID_METODO = $saida->id;
                $valores->VALOR = $saida->valor;
                $valores->SENTIDO = FALSE;
                $dataValores->save($valores);
            }
            foreach ($data->cvjEntrada as $cvjEntrada) {

                    $itens = $dataItens->newEntity();
                    $itens->ID_MOVIMENTO = $id;
                    $itens->ID_ITEM = $cvjEntrada->id;
                    $itens->QUANTIDADE = $cvjEntrada->valor;
                    $itens->SENTIDO = TRUE;
                    $dataItens->save($itens);

            }
            foreach ($data->cvjSaida as $cvjSaida) {

                    $itens = $dataItens->newEntity();
                    $itens->ID_MOVIMENTO = $id;
                    $itens->ID_ITEM = $cvjSaida->id;
                    $itens->QUANTIDADE = $cvjSaida->valor;
                    $itens->SENTIDO = FALSE;
                    $dataItens->save($itens);

            }
        }

        $this->response->body(json_encode($data));
        return $this->response;
    }

}

;
