<?php

include('../functions/Database.php');
$db =  new Database();

if(isset($_POST['quote_delete'])){
    try{
        $id = $_POST["quote_delete"];
        $query = 'DELETE FROM page_quotes WHERE id ='.$id;
        $db->conn->exec($query);
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