<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "livescore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  echo("Connection failed: " . $conn->connect_error);
}else{
	 ("Connection succesfull: " . $conn->connect_error);
}


function select($table, $id,$name,$condition,$selected=""){
  $sql = "SELECT $id,$name FROM $table where $condition";
  $result = $GLOBALS['conn']->query($sql);
  
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if($selected == $row[$id]){
        echo "<option value='".$row[$id]."' selected>".$row[$name]."</option>";
      }else{
        echo "<option value='".$row[$id]."'>".$row[$name]."</option>";
      }
    }
  }
}

function one_col($table, $col,$condition){
  $sql = "SELECT $col FROM $table where $condition";
  $result = $GLOBALS['conn']->query($sql);
  
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      return $row[$col];
    }
  }
}
?>