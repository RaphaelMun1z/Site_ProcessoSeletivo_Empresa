<?php 

namespace app\core;

class RounterCore{
    private $uri;
    private $method;
    private $getArr = [];

    public function __construct(){
        $this->initialize();
        require_once('../app/config/Rounter.php');
        $this->execute();
    }

    private function initialize(){
        $this->method = $_SERVER['REQUEST_METHOD']; 
        $uri = $_SERVER['REQUEST_URI']; 

        $ex = explode('/', $uri);

        $uri = $this->normalizeURI($ex);

        for($ii = 0; $ii < UNSET_URI_COUNT; $ii++){
            unset($uri[$ii]);
        }
        
        $this->uri = implode('/', $this->normalizeURI($uri));    
        if (DEBUG_URI)
            dd($this->uri);
    }

    private function get($rounter, $call){
        $this->getArr[] = [
            'rounter' => $rounter,
            'call' => $call
        ]; 
    }


    private function execute(){
        switch($this->method){
            case 'GET':
                $this->executeGet();
            break;

            case 'POST':

            break;
        }
    }

    private function executeGet(){
        foreach($this->getArr as $get){
            $r = substr($get['rounter'], 1);

            if(substr($r, -1) == "/"){
                $r = substr($r, 0, -1);
            }

            if($r == $this->uri){
                if(is_callable($get['call'])){
                    $get['call']();
                    break;
                }else{
                    $this->executeController($get['call']);
                }
            }
        }
    }

    private function executeController($get){
        $ex = explode('@', $get);
        if(!isset($ex[0]) || !isset($ex[1])){
            (new \app\controller\MessageController)->message('Dados inválidos', 'Controlador ou método inexistente: ' . $get, 404);
            return;
        }
    
        $cont = 'app\\controller\\' . $ex[0];
        if(!class_exists($cont)){
            (new \app\controller\MessageController)->message('Dado inválido', 'Controlador inexistente: ' . $get, 404);
            return;
        }

        if(!method_exists($cont, $ex[1])){
            (new \app\controller\MessageController)->message('Método inválido', 'Método inexistente: ' . $get, 404);
            return;
        }
    }

    private function normalizeURI($arr){
        return array_values(array_filter($arr));
    }
}