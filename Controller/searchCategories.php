<?php

include_once '../Model/DatabaseConnection.php';
include_once '../Model/QueryDB.php';

$db = new QueryDB(DatabaseConnection::connect());
$text = $_GET['q'];
$sqlQuery = "SELECT a.id as id, a.name as cat1, b.name as cat2, c.name as cat3 FROM categories a LEFT JOIN categories b ON b.id = a.parent_id LEFT JOIN categories c ON c.id = b.parent_id WHERE a.name LIKE ?";
$categories = $db->search($text,$sqlQuery);
$items =[];
foreach ($categories as $val){
    $parent=[];
    $parent['id'] = $val['id'];
    $parent['text'] = $val['cat1'];
    $parent['parent1'] = $val['cat2'];
    $parent['parent2'] = $val['cat3'];
    $items[] =  $parent;
}
print_r(json_encode($items));