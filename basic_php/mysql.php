<?php 

@ $db=new mysqli('localhost','root','root','dbname');
if(mysqli_connect_errno()){
	echo "couldn't connect to database";
}

$query1="select * from books";
$result=$db->query($query1);
$no_rows=$result->num_rows;
echo "number of books are $no_rows<br>";
echo "<table style='border:1px solid black;'>";
for($i=1;$i<$no_rows+1;$i++){
	$row=$result->fetch_assoc();

	echo "<tr style='border:1px solid black;'><td>$i</td><td> ".$row['title']." </td> <td>".$row['isbn']." </td> <td> ".$row['author']."  </td><td> ".$row['price']." </td></tr> ";
}
echo "</table>";

?>