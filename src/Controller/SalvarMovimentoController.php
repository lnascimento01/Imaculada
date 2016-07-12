<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Controller\Controller;

class SalvarMovimentoController extends Controller {

    public function index() {
        $tableMovimentos = TableRegistry::get('movimentos');
        $movimentos = $tableMovimentos->newEntity();

        $tableValoresMovimento = TableRegistry::get('valores_movimento');
        $valores = $tableValoresMovimento->newEntity();

        $movimentos->DATA_CRIACAO = date("Y-m-d H:i:s");
        $movimentos->STATUS = FALSE;
        $movimentos->FUNDO_CAIXA = $_POST['txtFundoCaixa'];

        $movimentoSalvo = $tableMovimentos->save($movimentos);
        if ($movimentoSalvo) {
            // The $article entity contains the id now
            $idMovimento = $movimentoSalvo->id;

//            $tableItensMovimento = TableRegistry::get('itens_movimento');
//            $itens = $tableItensMovimento->newEntity();
//
//            $itens->ID_MOVIMENTO = $idMovimento;
//            $itens->ID_ITEM = $idMovimento;
//            
//            if ($tableItensMovimento->save($itens)) {
//                // The $article entity contains the id now
//                $idItens = $itens->id;
//            }
//            if ($tableValoresMovimento->save($valores)) {
//                // The $article entity contains the id now
//                $idValores = $valores->id;
//            }
        }
    }

//    public function saveMovimentos($param) {
//        if ($tableMovimentos->save($movimentos)) {
//            // The $article entity contains the id now
//            $idMovimento = $movimentos->id;
//        }
//    }
}
