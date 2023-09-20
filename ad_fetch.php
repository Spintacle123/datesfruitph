<?php
//fetch.php
// $connect = mysqli_connect("localhost", "root", "", "stc");
include 'config.php';
$columns = array('cat_name');

$query = "SELECT * FROM categories WHERE deleted_at IS NULL";

if(isset($_POST["search"]["value"]))
{
    $query .= ' AND cat_name LIKE "%'.$_POST["search"]["value"].'%"'; 
}

if(isset($_POST["order"]))
{
    $query .= ' ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'];
}
else
{
    $query .= ' ORDER BY id ASC';
}

$query1 = '';

if($_POST["length"] != -1)
{
    $query1 = ' LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

//total num of rows
$number_filter_row = mysqli_num_rows(mysqli_query($conn, $query));

$result = mysqli_query($conn, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
  $sub_array[] = '<div class="text-center" data-id="'.$row["id"].'" data-column="id">' . $row["id"] . '</div>';
 $sub_array[] = '<div contenteditable class="update text-center" data-id="'.$row["id"].'" data-column="cat_name">' . $row["cat_name"] . '</div>';
 $sub_array[] = '<div class="text-center"><button class="btn btn-success change-image" data-id="'.$row["id"].'"><i class="bx bxs-edit"></i></button></div>';
 $sub_array[] = '<div class="text-center"><button class="btn btn-danger delete" data-id="'.$row["id"].'"><i class="bx bxs-trash"></i></button></div>';
 $data[] = $sub_array;
}

function get_all_data($conn)
{
 $query = "SELECT * FROM categories WHERE deleted_at IS NULL";
 $result = mysqli_query($conn, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($conn),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>