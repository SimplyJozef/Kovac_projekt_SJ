<?php 
include('../functions/Database.php');
$db =  new Database();

if(isset($_POST['quote_add'])){

        $data = [
            'page_name' => $_POST["page_name"],
            'quote' => $_POST["quote"]
        ];

        try{
            $query = "INSERT INTO page_quotes (page_name, quote) VALUES (:page_name,:quote)";
            $query_run = $db->conn->prepare($query);
            $query_run->execute($data);
            if(isset($_SERVER['HTTP_REFERER'])){
                header("Location: {$_SERVER['HTTP_REFERER']}");
            }else{
                header("Location: index.php");
            }
        }catch(PDOException $e){
            print_r($e->getMessage());
        }   
}else{
    print_r("F");
}

?>