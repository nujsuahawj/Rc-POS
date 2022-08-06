<?php
// restful api
// get all sanas
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=UTF-8');
    header('Access-Control-Allow-Methods: GET');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
    
    try{
        $conn = new PDO('mysql:host=localhost;dbname=pos_hmong', 'root', 'mysql');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare('SELECT `product_variants`.`selling_price` AS sell, products.title AS name, products.description AS details, products.imageURL AS image FROM `product_variants` JOIN products ON `product_variants`.`product_id` = products.id WHERE products.category_id =3 AND product_variants.enabled=1;');
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }
    catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}}';
    }
?>