<?php
/**
 * Created by IntelliJ IDEA.
 * User: marcio
 * Date: 07/10/17
 * Time: 13:34
 */

namespace App\Controller\Api\V1;


class AplicacoesController extends AppController
{
    #TRAIT RESPONSÁVEL PELO RESOURCE
    use \Crud\Controller\ControllerTrait;

    ## MODELO PADRÃO DE METODO RESOURCE
//    public function index(){
//        $aplicacoes = $this->Aplicacoes->find()->all();
//        $this->set('aplicacoes',$aplicacoes);
//        $this->set('_serialize', ['aplicacoes']);
//    }

    #CASO QUEIRA ALTERAR O TRAIT
//    public function view($id = null)
//    {
//        $this->Crud->on('beforeFind', function(\Cake\Event\Event $event) {
//            $event->subject()->query->contain(['PropertiesTypes', 'Districts']);
//        });
//        return $this->Crud->execute();
//    }
}
