<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("epolicing", $conn);
//search code
error_reporting(0);
if($_REQUEST['submit']){
$name = $_POST['name'];

if(empty($name)){
$make = '<h4>You must type a word to search!</h4>';
}else{
$make = '<h4>No match found!</h4>';
$sele = "SELECT * FROM bk WHERE title LIKE '%$name%' OR aut LIKE '%$name%' OR des LIKE '%$name%'";
$result = mysql_query($sele);
if($mak = mysql_num_rows($result) > 0)
{
while($row = mysql_fetch_assoc($result)){

		//echo '<h4> ID 							: '.$row['id'];
		echo '<h4> Title 						: '.$row['title'];
		echo '<br> Author 						: '.$row['aut'];
		echo '<br> Description 					: '.$row['des'];
		echo '<br> Picture                      : '.$row['it'];
		echo '</h4>';
	}
}else
{
echo'<h2> Search Result</h2>';

print ($make);
}
mysql_free_result($result);
mysql_close($conn);
}
}

?>
