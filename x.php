


<?php
$con=mysqli_connect("localhost","root","","cis") or die (mysql_error ());

$query = "SELECT cName FROM company ORDER BY cName";
$result = mysql_query ($query);
echo "<select name=dropdown value=''>Dropdown</option>";
while($r = mysql_fetch_array($result)){
echo "<option value=$r[cName]>$r[cName]</option>";
}
echo "</select>";
?>


<?php
function query()
{
	$data=mysql_query("select cName from company");
	while($record=mysql_fetch_array($data))
	{
		echo '<option value="'.$record[cName] . '">' . $record[cName] . '</option>';
	}
}


?>