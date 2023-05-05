<?php 
include('../functions/Database.php');
$db =  new Database();

if(isset($_POST['form-submit'])){

        $data = [
            'meno' => $_POST["first-name"],
            'priezvisko' => $_POST["last-name"],
            'email' => $_POST["email"],
            'subject' => $_POST["subject"],
            'message' => $_POST["message"]
        ];

        try{
            $query = "INSERT INTO contact (First_name, Last_name,Email,Subject,Message) VALUES (:meno,:priezvisko,:email,:subject,:message)";
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