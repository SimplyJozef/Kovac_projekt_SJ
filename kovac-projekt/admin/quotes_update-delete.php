<?php
include('../functions/Database.php');
$db = new Database();

if (isset($_POST['quote_update'])) {
    try {
        $id = $_POST['quote_update'];
        $quote = $_POST['quote'];

        $query = 'UPDATE page_quotes SET quote = :quote WHERE id = :id';
        $query_run = $db->conn->prepare($query);
        $query_run->bindParam(':quote', $quote);
        $query_run->bindParam(':id', $id);
        $query_run->execute();

        if (isset($_SERVER['HTTP_REFERER'])) {
            header("Location: {$_SERVER['HTTP_REFERER']}");
        } else {
            header("Location: index.php");
        }
    } catch (PDOException $e) {
        print_r($e->getMessage());
    }
} else {
    print_r("Chyba update");
}

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

print_r("Chyba delete");
}
?>
