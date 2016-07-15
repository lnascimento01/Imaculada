<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Controller\Controller;

class SalvarMovimentoController extends Controller {

    public function index() {

        print_r('passou');
        $data = json_decode($_POST['data']);
        print_r($data->pgEntrada);
//            foreach ($data[0]['pgEntrada'] as $dt){
//                            echo($dt);
//            }
//        $this->response->body(json_encode($data));
//        return $this->response;
//        exit();

        $dataMovimentos = TableRegistry::get('movimentos');
        $movimentos = $dataMovimentos->newEntity();

        $movimentos->DATA_CRIACAO = date("Y-m-d H:i:s");
        $movimentos->STATUS = FALSE;
        $movimentos->FUNDO_CAIXA = $data->pgEntrada;

        if ($dataMovimentos->save($movimentos)) {
            echo(intval($movimentos->ID));
        }
    }

};
