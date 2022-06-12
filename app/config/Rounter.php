<?php 

$this->get('/', function(){
    (new \app\controller\TesteController)->index();
    $a = '1';
});

$this->get('/pagina1', 'TesteController:seta');
$this->get('/pagina2', 'TesteController:seta');
$this->get('/pagina3', 'TesteController:seta');
$this->get('/pagina4', 'TesteController:seta');
$this->get('/pagina5', 'TesteController:seta');
$this->get('/pagina6', 'TesteController:seta');
$this->get('/pagina7', 'TesteController:seta');

//$this->get('/posts', 'app\controller\PostsController:index');
