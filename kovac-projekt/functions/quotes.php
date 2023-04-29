<?php 

class Quotes{
        public $db;
        function __construct(){
            $this->db = new Database();
        }

        function get_quotes(){
            try{
                $query =  $this->db->conn->query("SELECT * FROM page_quotes");
                $quote_text = $query->fetchAll(PDO::FETCH_OBJ);
                return $quote_text;
                var_dump($quote_text);
              }catch(PDOException $e){
                print_r($e->getMessage());
            }   
        }
    }
    $Quotes = new Quotes();


?>