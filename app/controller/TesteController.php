<?php 

namespace app\controller;

use app\core\Controller;

use PDO;

class TesteController extends Controller
{
     public static function listar(){
          $host = "localhost";
          $user = "root";
          $pass = "";
          $dbname = "db_rgb";
  
          $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  
          $queryCards = $conn->prepare("SELECT * FROM `tbl_cards`"); 
          $queryCards->execute();   
          $cards = $queryCards->fetchAll(PDO::FETCH_ASSOC);
  
          return $cards; // Retorna valores do banco...
      }

    public function index(){
       $this->load('home/main', [
            'cards' => $this->listar()
       ]);
    }

    public function seta(){
        $this->load('home/main', [
             'nome' => 'Raphael'
        ]);
     }
}