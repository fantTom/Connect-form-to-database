<?php

include_once '../Model/DatabaseConnection.php';
include_once '../Model/QueryDB.php';


$db = new QueryDB(DatabaseConnection::connect());
if(isset($_GET['doer-town'])){
    $text = $_GET['doer-town'];
};
if(isset($_GET['customer-town'])){
    $text = $_GET['customer-town'];
};
$sqlQuery = "SELECT city.name as city, country.name as country  FROM city INNER JOIN region ON city.region_id=region.id INNER JOIN country ON region.country_id=country.id WHERE city.name LIKE ?";
$cities = $db->search($text, $sqlQuery);
$arr =[];
foreach ($cities as $val){
    $arr[$val['city']] = $val['country'];
}
print_r(json_encode($arr));

