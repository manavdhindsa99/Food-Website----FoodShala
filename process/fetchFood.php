<?php
require_once '../helpers/init.php';
function getFoodItem($USERID){
    //check $conn outside function also
    global $conn;
    $USER_ID=$USERID;
    $stmt = $conn->prepare("SELECT * FROM fooditems WHERE user_id='$USER_ID'");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function singleFoodItem($FooodID){
    //check $conn outside function also
    global $conn;
    $FOOD_ID=$FooodID;
    $stmt = $conn->prepare("SELECT * FROM fooditems WHERE id='$FOOD_ID'");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function getAllFood(){
    //check $conn outside function also
    global $conn;
    
    $stmt = $conn->prepare("SELECT * FROM fooditems");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>