<?php

//fetch.php

include('database_connection.php');
$query = '';
$output = array();
$query .= "SELECT * FROM tbl_employee ";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE em_name LIKE "%'.$_POST["search"]["value"].'%" OR em_designation LIKE "%'.$_POST["search"]["value"].'%" OR em_email LIKE "%'.$_POST["search"]["value"].'%" OR em_phone LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY em_id DESC ';
}
if($_POST["length"] != -1)
{
 $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row["em_name"];
//  $sub_array[] = $row["address"];
//  $sub_array[] = $row["password"];
 $sub_array[] = $row["em_designation"];
//  $sub_array[] = $row["email"];
//  $sub_array[] = $row["phone"];
 $sub_array[] = '<button type="button" name="view" id="'.$row["em_id"].'" class="btn btn-primary btn-xs view">View</button>';
 $data[] = $sub_array;
}

function get_total_all_records($connect)
{
 $statement = $connect->prepare("SELECT * FROM tbl_employee");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  $filtered_rows,
 "recordsFiltered" => get_total_all_records($connect),
 "data"    => $data
);
echo json_encode($output);
?>
