<?php session_start() ?>
<?php
//fetch.php
$dbServername = "localhost";
$dbUsername = "u815710449_playtolearn";
$dbPassword = "Sce2019";
$dbName="u815710449_playtolearn";
$connect= mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)
           or die('could not connect to database');
$columns = array('username', 'email');

$query = "SELECT * FROM MyParents ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE username LIKE "%'.$_POST["search"]["value"].'%" 
 OR email LIKE "%'.$_POST["search"]["value"].'%" 
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY Id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["Id"].'" data-column="username">' . $row["username"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["Id"].'" data-column="email">' . $row["email"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["Id"].'" data-column="email">' . $row["Child1"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["Id"].'" data-column="email">' . $row["Child2"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["Id"].'" data-column="email">' . $row["Child3"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["Id"].'" data-column="email">' . $row["Child4"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["Id"].'" data-column="email">' . $row["Child5"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["Id"].'" data-column="email">' . $row["Country_IP"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["Id"].'" data-column="email">' . $row["last_connection"] . '</div>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["Id"].'">Delete</button>';
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM MyParents";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>
