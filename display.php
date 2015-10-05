<?php
/*
Delete data from the database
*/
$link = mysqli_connect("localhost", "root","", "userinfo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$output = '';
$result = mysql_query("SELECT username FROM users ORDER BY username ASC");
while($row = mysql_fetch_array($result)){
	$output .='
	<tr>
      	<td>' .$row['username'] .'</td>
  </tr>';
}
if ($output !=''){
	$output ='
	<table>
		<tr>
      	<th>User ID</th>
    </tr>;
    ' .$output. '
    </table>';
}else{
	$output = '<p>There are no people to display.</p>'
}

return $output;


// close connection
mysqli_close($link);
?>