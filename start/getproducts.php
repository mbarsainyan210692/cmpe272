<?php

$connection = mysqli_connect("localhost","root","","id15404_agentimmobilier");

if(!($connection))
  die("Cannot connect to database");

$query="select * from products";
$answer=mysqli_query($connection,$query);
$result=array();
$i=0;
while($row=mysqli_fetch_assoc($answer))
{

	
  $result[$i]=array($row["id"],$row["title"],$row["page_url"],$row["image_url"],$row["description"],$row["total_rating"],$row["num_rating"],$row["cost"]);
  $i++;
}
echo json_encode($result);

?>