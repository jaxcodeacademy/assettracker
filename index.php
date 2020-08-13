<?php
include 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Asset Tracker App</title>
</head>
<body>
<h1>Asset Tracker App</h1>
<form>
Asset Name: <input type="text" name="assetname"><br><br>
Category:
<select name="category">
<?php
$sql = "SELECT * FROM at_categories ORDER BY category";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<option value="'.$row['cat_id'].'">'.$row['category'].'</option>';
  }
} else {
  echo "0 results";
}
?>


</select>

<br><br>Quantity:
<select name="quantity">
<?php
$x = 1;

while($x <= 500) {
echo '<option value="'.$x.'">'.$x.'</option>';
  $x++;
}
?>
</select>

<br><br>

Room:<select name="floor">
<?php
$sql = "SELECT * FROM at_rooms ORDER BY room";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<option value="'.$row['room_id'].'">'.$row['room'].'</option>';
  }
} else {
  echo "0 results";
}
?>
</select>
<br><br>
Serial Number(s): <input type="text" name="sn"> (optional)

<br><br>Condition:
<select name="floor">
<?php
$sql = "SELECT * FROM at_asset_condition ORDER BY condition_of_item";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<option value="'.$row['condition_id'].'">'.$row['condition_of_item'].'</option>';
  }
} else {
  echo "0 results";
}
?>
</select>
<br><br>Assigned To:
<br><br>Description:<br>
<textarea name="description"></textarea>

<br><br><button name="addasset">Add Asset</button>
</form>


</body>
</html>