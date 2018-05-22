<?php

// resources search api

include 'dbConn.php';
$dbConn = getDbConn();


//  what need: SELECT * 
//             FROM `r_items` 
//             WHERE 1 
//             AND itemName LIKE '%quote%' 
//             OR itemDescription LIKE '%quote%' 
//             ORDER BY itemName
            
$sql = "SELECT *
        FROM r_items
        WHERE 1 
        ";
        
$nP = array();
        
if(isset($_GET['item'])) {
    $sql = $sql . " AND itemName LIKE :item OR itemDescription LIKE :item ";
    $np[':item'] = "%" . $_GET['item'] . "%";
}

// $sql = $sql . " ORDER BY itemName ";

// echo "SQL: " . $sql . "<br/><br/>";
        
$stmt = $dbConn->prepare($sql);
$stmt->execute($np);

$records = $stmt -> fetchAll(PDO::FETCH_ASSOC); // only gets associative array! leave blank to get both assoc and index

// print_r($records);
// echo json_encode($records); // can be uderstood by AJAX
// echo json_last_error();

function utf8ize($d) {
        if (is_array($d)) {
            foreach ($d as $k => $v) {
                $d[$k] = utf8ize($v);
            }
        } else if (is_string ($d)) {
            return utf8_encode($d);
        }
        return $d;
    }

$items = utf8ize($records);

$sql = "SELECT itemId, categoryName, categoryType
        FROM r_category
        NATURAL JOIN r_item_cat";
        
$stmt = $dbConn->prepare($sql);
$stmt->execute();

$records = $stmt -> fetchAll(PDO::FETCH_ASSOC); // only gets associative array! leave blank to get both assoc and index

$tags = utf8ize($records);

$all[0] = $items;
$all[1] = $tags;

// print_r($all);

echo json_encode($all);

?>