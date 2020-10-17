<?php

require_once '../helpers/init.php';
function getCustomerID($RstaurantID){
    global $conn;
    $USER_ID=$RstaurantID;
    $stmt = $conn->prepare("SELECT * FROM foodorders WHERE restaurant_id='$USER_ID'");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function getCustomer($CustomerID){
    global $conn;
    $USER_ID=$CustomerID;
    $stmt = $conn->prepare("SELECT * FROM customers WHERE id='$USER_ID' order by id asc");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getOrderdFood($RstaurantID,$CustomerID){
    global $conn;
    $Rstaurant_ID=$RstaurantID;
    $Customer_ID=$CustomerID;
    $query = "SELECT * FROM foodorders WHERE restaurant_id = :restaurant_id AND customer_id =:customer_id ";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':restaurant_id', $Rstaurant_ID);
    $stmt->bindParam(':customer_id', $Customer_ID);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


?>