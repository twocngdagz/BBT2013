<?php
$server = 'localhost';
$username = 'bbt2013a_website';
$password = '(B+4#r&dk^KE';
$database = 'bbt2013a_site';

if(!mysql_connect($server, $username, $password))
{
	die('Could not connect to Mysql. Error: ' . mysql_error());
}
if(!mysql_select_db($database))
{
	die('Could not connect to the BBT database. Error: ' . mysql_error());
}



//let's go through teh rows 1 at a time
$sql = 'SELECT * FROM `category`';
$result = mysql_query($sql);
?>
<table border="1">
	<tr>
		<th>id</th>
		<th>parent id</th>
		<th>name</th>
		<th>magento id</th>
		<th>magent parent</th>
		<th>needs updating?</th>


	</tr>
<?
while($row = mysql_fetch_array($result))
{
	$needsUpdating = 'yes';
	$sql2 = 'SELECT * FROM `category` WHERE `old_magento_categoty_id` = ' . $row['old_magento_patent_categoty_id'];
	$result2 = mysql_query($sql2);
	$row2 = mysql_fetch_array($result2);
	if(mysql_num_rows($result2) == 0)
	{
		$needsUpdating = 'could not find parent';
	}
	elseif($row['parent_id'] == $row2['id'])
	{
		$needsUpdating = 'Looks OK. Parent catgeory name is: ' . $row2['name_short'];
	}
	else
	{

		$needsUpdating = 'New parent should be: ' . $row2['id'];
		$sql3 = 'UPDATE `category` SET `parent_id` = ' . $row2['id'] . ' WHERE `id` = ' . $row['id'];
		mysql_query($sql3);
	}
	?>
		<tr>	
			<td><?= $row['id'] ?></td>
			<td><?= $row['parent_id'] ?></td>
			<td><?= $row['name_short'] ?></td>
			<td><?= $row['old_magento_categoty_id'] ?></td>
			<td><?= $row['old_magento_patent_categoty_id'] ?></td>	
			<td><?= $needsUpdating ?></td>

		</tr>
	<?
}
?>
</table>
done

