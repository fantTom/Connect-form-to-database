<?php

include_once '../Model/DatabaseConnection.php';
include_once '../Model/QueryDB.php';
$data=[];
$db = new QueryDB(DatabaseConnection::connect());
if ($_GET['type'] == 'form-doer') {
    $data['group_id'] = '1';
} elseif ($_GET['type'] == 'form-customer') {
    $data['group_id'] = '2';
}
$data['email'] = $_GET['email'];
$data['phone'] = $_GET['phone'];
$selectIdCity = "SELECT city.id as city, country.id as country  FROM city INNER JOIN region ON city.region_id=region.id INNER JOIN country ON region.country_id=country.id WHERE city.name LIKE ?";
$cityId = $db->search($_GET['city'],$selectIdCity);
$data['city_id']=$cityId[0]['city'];
$data['country_id']=$cityId[0]['country'];
$data['rubrics'] = $_GET['rubrics'];
$res = $db->save($data);
print_r(json_encode($res));
