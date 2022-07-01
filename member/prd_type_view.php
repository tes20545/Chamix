<?php

//fetch.php

include('database_connection.php');
$query = '';
$output = array();
$query .= "SELECT * FROM prd_type_trl ";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE t_id LIKE "%'.$_POST["search"]["value"].'"';
}
if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY t_id DESC ';
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
 $sub_array[] = $row["t_id"];
 $sub_array[] = $row["t_name"];
 $sub_array[] = '<button type="button" name="view" id="'.$row["t_id"].'" class="btn btn-primary btn-xs view">View</button>';
 $data[] = $sub_array;
}

function get_total_all_records($connect)
{
 $statement = $connect->prepare("SELECT * FROM prd_type_trl");
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
